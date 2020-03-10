#insmod /root/relay/magic_relay.ko
mknod /dev/relay c 237 0
./magicrelay_test
