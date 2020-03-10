#include <linux/module.h>
#include <linux/version.h>
#include <linux/init.h>
#include <linux/fs.h>
#include <linux/delay.h>
#include <linux/poll.h>
#include <asm/uaccess.h>
#include <linux/string.h>
#include <linux/kernel.h>
#include <linux/sched.h>
#include <linux/types.h>
#include <linux/fcntl.h>
#include <linux/interrupt.h>
#include <linux/ptrace.h>
#include <linux/ioport.h>
#include <linux/in.h>
#include <linux/slab.h>
#include <linux/vmalloc.h>
#include <linux/string.h>
#include <asm/bitops.h>
#include <asm/io.h>
#include <linux/errno.h>
#include <linux/wait.h>
#include <asm/irq.h>
#include <asm/arch/hardware.h>
#include <asm/arch/regs-gpio.h>
#define DEVICE_NAME     "yali" 
#define YALI_MAJOR       250   

#define IOCTL_RELAY_OFF     0
#define IOCTL_RELAY_ON      1
#define HX711_DOUT S3C2410_GPB0
#define HX711_SCK S3C2410_GPE14

unsigned long HX711_Buffer = 0;  //用来存放HX711读取出来的数据
unsigned long Weight_Maopi = 0; //用来存放毛皮数据
long Weight_Shiwu = 0;          //用来存放实物重量
int GapValue= 104;	   //传感器曲率
static unsigned long relay_table [] = {
    S3C2410_GPB0,
   S3C2410_GPB1,
};

static unsigned int relay_cfg_table [] = {
    S3C2410_GPB0_INP,
   S3C2410_GPB1_OUTP,

};
//****************************************************
//获取毛皮重量
//****************************************************
void _nop_(void) 
{
   int i;
   for(i=0;i<2000;i++); 
}
void yanchi(int s)
{
 while(s--){
int i;
for(i = 0;i<18900;i++);
}
}



static void Delay__hx711_us(void)
{
	_nop_();
	_nop_();

}
unsigned long HX711_Read(void)//增益128
{	
	unsigned long count;
	unsigned char i;
	unsigned long vol;
	Delay__hx711_us();
	s3c2410_gpio_setpin(relay_table[1],0);
	count=0;
	while(s3c2410_gpio_getpin(relay_table[0]));
  	for(i=0;i<24;i++)
	{ 
	s3c2410_gpio_setpin(relay_table[1],1);
	 count=count<<1; 
	s3c2410_gpio_setpin(relay_table[1],0);
	vol=__raw_readl(S3C2410_GPBDAT);
	vol=(char)(vol&0x01);
	 if(s3c2410_gpio_getpin(relay_table[0]))
	{
	count++; 
	}
	} 
	s3c2410_gpio_setpin(relay_table[1],1);
    	count=count^0x800000;//第25个脉冲下降沿来时，转换数据
	Delay__hx711_us();
	s3c2410_gpio_setpin(relay_table[1],0);
	return (count);
}
void Get_Maopi(void)
{

	Weight_Maopi = HX711_Read();
	

}
void Get_Weight(void)
{
	Weight_Shiwu = HX711_Read();
	Weight_Shiwu = Weight_Shiwu - Weight_Maopi;		//获取净重
	if(Weight_Shiwu >= 0)			
	{	
	
		Weight_Shiwu = Weight_Shiwu/GapValue;
		//Weight_Shiwu = (unsigned long)((float)Weight_Shiwu/GapValue); 	//计算实物的实际重量
	}
	else
	{
		Weight_Shiwu = 0;
	}
	
}
static int s3c24xx_yali_open(struct inode *inode, struct file *file)
{
    int i;
    for (i = 0; i < 1; i++) {
        s3c2410_gpio_cfgpin(relay_table[i], relay_cfg_table[i]);
    }
	
    return 0;
}


static long s3c24xx_elec_coupler_read(struct file *filp, char __user *buff, 
                                         size_t count, loff_t *offp)
{	
	
	
	Get_Weight();
	/*printk(" Weight_Shiwu=");
	printk("%ld",Weight_Shiwu/10000 );
	printk("%ld",Weight_Shiwu%10000/1000 );
	printk(".");
	printk("%ld",Weight_Shiwu%1000/100 );
	printk("%ld",Weight_Shiwu%100/10 );
	printk("%ld",Weight_Shiwu%10 );
	printk("kg\n");*/
	//printk(" ?????=%ld\n",s3c2410_gpio_getpin(relay_table[0]));
	/*printk("ok");
	Get_Maopi();
	Get_Maopi();
	Get_Weight();

	unsigned long vol;
	char value;
	vol=__raw_readl(S3C2410_GPHDAT);
	printk("vol=0x%X\n",vol);
	value=(char)(vol&0x01);
		yanchi(2);
		printk(DEVICE_NAME " Weight_Shiwu=%d\n",HX711_Read());*/
/*
	char value;
	value=(char)(Weight_Shiwu);
	printk(" 11111111111 =%ld g\n",Weight_Shiwu);
	copy_to_user(buff,(const void *)&value,sizeof(value));*/

	return Weight_Shiwu;
}

static int s3c24xx_yali_ioctl(
    struct inode *inode, 
    struct file *file, 
    unsigned int cmd, 
    unsigned long arg)
{   
    if(arg>3){
	return -EINVAL;
    }
    switch(cmd) {
    case IOCTL_RELAY_ON:
        Get_Weight();
        return 0;

    case IOCTL_RELAY_OFF:
        s3c2410_gpio_setpin(relay_table[1], 0);
        return 0;

    default:
        return -EINVAL;
    }
}

static struct file_operations s3c24xx_yali_fops = {
    .owner  =   THIS_MODULE,    
    .open   =   s3c24xx_yali_open,     
    .ioctl  =   s3c24xx_yali_ioctl,
    .read   =   s3c24xx_elec_coupler_read,
};

static int __init s3c24xx_yali_init(void)
{
    int ret;
    ret = register_chrdev(YALI_MAJOR, DEVICE_NAME, &s3c24xx_yali_fops);
    if (ret < 0) {
      printk(DEVICE_NAME " can't register yali major number\n");
      return ret;
    }
    
    	printk(DEVICE_NAME " initialized\n");
	yanchi(1);

   	// printk("%d\n",s3c2410_gpio_getpin(relay_table[0]));
	
	Get_Maopi();
	Get_Maopi();
	yanchi(2);
	//printk(" ??????=%ld\n",Weight_Maopi);
	Get_Maopi();
	Get_Maopi();
	printk("ok\n");
	//printk(" \x0c");
    return 0;
}

static void __exit s3c24xx_yali_exit(void)
{
    unregister_chrdev(YALI_MAJOR, DEVICE_NAME);
}

module_init(s3c24xx_yali_init);
module_exit(s3c24xx_yali_exit);

MODULE_AUTHOR("xw_uptech@126.com");          
MODULE_DESCRIPTION("UP-MAGIC  yali Driver");
MODULE_LICENSE("GPL");                          
