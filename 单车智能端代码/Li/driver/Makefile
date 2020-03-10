obj-m	:=yali_driver.o

KERNELDIR ?= /UP-Magic/kernel/linux-2.6.24.4/
PWD := $(shell pwd)
modules:
	$(MAKE) -C $(KERNELDIR) M=$(PWD) modules
clean:
	rm -rf *.o *.ko *.mod.* *.symvers
.PHYON:modules

