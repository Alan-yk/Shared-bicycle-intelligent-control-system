#include<stdio.h>
#include "function.h"
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/ioctl.h>
#include "function.h"
#include "zhengdong.h"
#include "led.h"
#include "yali.h"
int main(int argc, char **argv)
{
    while(1)
    {   

		  printf("wait input work\n");
      //server();//服务器
 	int gn;
        printf("please input number set funtion  \n");
        printf("1代 表 使 用 蜂鸣器警报\n2代 表 使 用 称 重\n");
        scanf("%d",&gn);
	if(gn==1)
	zhengdong();
	if(gn==2)
	get_weight();
        else
	printf("无此功能/n");        
      }
              
              
 return 0;
}
