#include"led.h"
#include"zhengdong.h"
#include"yali.h"
#include <stdio.h>
#include <stdlib.h>
#include <unistd.h>
#include <sys/ioctl.h>
int work()
{
    //使用蜂鸣器警报
        int gn;
        printf("please input number set funtion  \n");
        printf("1 代 表 使 用 蜂鸣器警报\n2代 表 使 用 LED 灯\n3代 表 使 用 称 重\n");
        scanf("%d",&gn);
                if(gn==1)
                {
                        while(1)
                        {
                        printf("use gpio funtion\n");
			            zhengdong();
                        int set;
                        printf("please input on or off ,   3  exit \n");
                        scanf("%d",&set);
                        if(set==3)
                            {
                                printf("exit gpio\n");
                                break;
                            }
                      
                        }
                 }
                    if(gn==2)
                    {
                        while(1)
                        {
                        printf("use led funtion \n");
                        int number,set;
                        printf("please input number and  (on or off)\n");
                        scanf("%d",&number);
                            if(number==3)
                            {
                            printf("exit led\n");
                            break;
                            }
                        scanf("%d",&set);
                        led(number,set);
               	 	}
		}
	     	  if(gn==3)
                   	{
                     
                        printf("use yali funtion \n");
                      	get_weight();
                        
                    }
	     
        return 0;
}
