#include <linux/module.h>
#include <linux/kernel.h>
#include <linux/fs.h>
#include <linux/init.h>
#include <linux/delay.h>
#include <asm/irq.h>
#include <asm/arch/regs-gpio.h>
#include <asm/hardware.h>
#include <asm/io.h>
#include <asm/uaccess.h>

#define DEVICE_NAME     "relay" 
#define RELAY_MAJOR       237     

#define IOCTL_RELAY_OFF     1
#define IOCTL_RELAY_ON      0

static unsigned long relay_table [] = {
    S3C2410_GPH0,
    S3C2410_GPH1,
};

static unsigned int relay_cfg_table [] = {
    S3C2410_GPH0_INP,
    S3C2410_GPH1_OUTP,
};

static int s3c24xx_relay_open(struct inode *inode, struct file *file)
{
    int i;
    
    for (i = 0; i < 2; i++) {
        s3c2410_gpio_cfgpin(relay_table[i], relay_cfg_table[i]);
    }
    return 0;
}

static int s3c24xx_elec_coupler_read(struct file *filp, char __user *buff, 
                                         size_t count, loff_t *offp)
{
	unsigned long vol;
	char value;
	vol=__raw_readl(S3C2410_GPHDAT);
	//printk("vol=0x%X\n",vol);
	value=(char)(vol&0x01);
	copy_to_user(buff,(const void *)&value,sizeof(value));
	return 0;
}

static int s3c24xx_relay_ioctl(
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
        s3c2410_gpio_setpin(relay_table[1], 0);
        return 0;

    case IOCTL_RELAY_OFF:
        s3c2410_gpio_setpin(relay_table[1], 1);
        return 0;

    default:
        return -EINVAL;
    }
}

static struct file_operations s3c24xx_relay_fops = {
    .owner  =   THIS_MODULE,    
    .open   =   s3c24xx_relay_open,     
    .ioctl  =   s3c24xx_relay_ioctl,
    .read   =   s3c24xx_elec_coupler_read,
};

static int __init s3c24xx_relay_init(void)
{
    int ret;
    ret = register_chrdev(RELAY_MAJOR, DEVICE_NAME, &s3c24xx_relay_fops);
    if (ret < 0) {
      printk(DEVICE_NAME " can't register relay major number\n");
      return ret;
    }
    s3c2410_gpio_setpin(relay_table[1], 1);
    printk(DEVICE_NAME " initialized\n");
    return 0;
}

static void __exit s3c24xx_relay_exit(void)
{
    unregister_chrdev(RELAY_MAJOR, DEVICE_NAME);
}

module_init(s3c24xx_relay_init);
module_exit(s3c24xx_relay_exit);

MODULE_AUTHOR("xw_uptech@126.com");          
MODULE_DESCRIPTION("UP-MAGIC relay Driver");
MODULE_LICENSE("GPL");                          
