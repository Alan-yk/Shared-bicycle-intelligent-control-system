#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/ioctl.h>

void led(int a, int b)
{
	int on=b;
	int led_number=a;
	int fd;

	fd = open("/dev/led", 0);
	if (fd < 0) {
		perror("open device /dev/led");
		exit(1);
	}
	ioctl(fd, on, led_number);
	close(fd);
	
}

