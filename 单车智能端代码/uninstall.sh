#驱动卸载脚本 
rmmod magic_relay 
rmmod yali_driver
rmmod mini2410_led
rmmod magic_gpio
rm /dev/relay
rm /dev/yali 
rm /dev/led 
rm /dev/gpio
