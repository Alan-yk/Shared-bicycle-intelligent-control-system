obj-m	:=mini2410-led.o

KERNELDIR := /UP-Magic/kernel/linux-2.6.24.4/
PWD := $(shell pwd)

all:
	$(MAKE) -C $(KERNELDIR) M=$(PWD) modules

clean:
	rm -rf *.o *.ko *.mod.* *.symvers
.PHONY: all clean
