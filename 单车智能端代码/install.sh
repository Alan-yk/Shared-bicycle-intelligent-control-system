#驱动加载脚本 
insmod /mnt/nfs/test/buzzer/driver/magic_gpio.ko
insmod /mnt/nfs/test/Li/driver/yali_driver.ko
insmod /mnt/nfs/test/leds/mini2410-led.ko
insmod /mnt/nfs/test/zhendong/driver/magic_relay.ko
mknod /dev/relay c 237 0
mknod /dev/yali c 250 0
mknod /dev/led c 231 0
mknod /dev/gpio c 234 0
