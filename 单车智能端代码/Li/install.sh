rmmod yali_driver
insmod /mnt/nfs/test/Li/driver/yali_driver.ko
mknod /dev/yali c 250 0
#./yali
