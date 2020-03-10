#rmmod 
insmod /mnt/nfs/test/buzzer/driver/magic_gpio.ko
mknod /dev/gpio c 234 0
./gpio_test
