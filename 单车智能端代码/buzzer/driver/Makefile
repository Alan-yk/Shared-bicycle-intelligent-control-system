obj-m	:=magic_gpio.o

KERNELDIR ?= /UP-Magic/kernel/linux-2.6.24.4/
PWD := $(shell pwd)
modules:
	$(MAKE) -C $(KERNELDIR) M=$(PWD) modules
.PHYON:modules
