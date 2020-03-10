#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/ioctl.h>
#include "client.h"
#define IOCTL_RELAY_OFF     1
#define IOCTL_RELAY_ON      0

int zhengdong(void)
{
    unsigned int led;
    unsigned char elec_coupler;
    int fd = -1;
        
    fd = open("/dev/relay", 0);  
    if (fd < 0) {
        printf("Can't open /dev/relay\n");
        return -1;
    }
    while(1)
    {
	sleep(1);
	read(fd,&elec_coupler,sizeof(elec_coupler));
	printf("zhi= 0x%X\n",elec_coupler);
	if(elec_coupler)
	{
		//ioctl(fd,IOCTL_RELAY_OFF);
		
		printf("----------正 常 工 作---------!\n");
	}
	else if(!elec_coupler)
	{	
		//ioctl(fd,IOCTL_RELAY_ON);
        printf("----------发  出  警  报----------\n");
		client();
		jingbao();
		sleep(1);
	}
    }
    
    close(fd);
    return 0;
}
int zhengdong1(void)
{

    int fd = -1;
    fd = open("/dev/relay", 0);  
    if (fd < 0) {
        printf("Can't open /dev/relay\n");
        return -1;
    }
  
	
	ioctl(fd,IOCTL_RELAY_ON);
	printf("overweight!\n");
	sleep(3);
	ioctl(fd,IOCTL_RELAY_OFF);
  
    
    close(fd);
    return 0;
}
