#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/ioctl.h>

#define IOCTL_RELAY_OFF     1
#define IOCTL_RELAY_ON      0




int main(void)
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
	read(fd,&elec_coupler,sizeof(elec_coupler));
	/*printf("elec_coupler= 0x%X\n",elec_coupler);
	if(!elec_coupler)
		printf("have vol!\n");*/
    }
    
    close(fd);
    return 0;
}


