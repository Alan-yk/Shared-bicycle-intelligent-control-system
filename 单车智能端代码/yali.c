#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/ioctl.h>
#include"led.h"
#include"zhengdong.h"
#include"yali.h"
#define IOCTL_RELAY_OFF     1
#define IOCTL_RELAY_ON      0




void get_weight(void)
{
    unsigned int led;
    unsigned char elec_coupler;
    int fd = -1;
        
    fd = open("/dev/yali", 0);  
    if (fd < 0) {
        printf("Can't open /dev/yali\n");
        return -1;
    }
    while(1)
    {
	
	sleep(1);
	long Weight_Shiwu =0 ;
	Weight_Shiwu=read(fd,&elec_coupler,sizeof(elec_coupler));
	printf(" Weight_Shiwu=");
	printf("%ld",Weight_Shiwu/10000 );
	printf("%ld",Weight_Shiwu%10000/1000 );
	printf(".");
	printf("%ld",Weight_Shiwu%1000/100 );
	printf("%ld",Weight_Shiwu%100/10 );
	printf("%ld",Weight_Shiwu%10 );
	printf("kg\n");
	printf(" Weight_Shiwu=%ld g\n",Weight_Shiwu);
	if(Weight_Shiwu>=5000)
		{
			printf("超重 超出5KG 正在警报 \n");
		 
	
			jingbao();
		}
	/*printf("elec_coupler= 0x%X\n",elec_coupler);
	if(!elec_coupler)
		printf("have vol!\n");*/
    }
    
    close(fd);
    return 0;
}


