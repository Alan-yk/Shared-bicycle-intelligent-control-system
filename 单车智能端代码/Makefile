##############################
# Main Makefile
##############################
INSTALLROOT=$(PWD)
CC=arm-linux-gcc
INSTALL=install
BIN=/usr/local/bin
SERVFLAGS= -O2 -DLINUX $(WARNINGS) -I /usr/src/linux-2.6.24.4
SERVLIBS= -lpthread
#WARNINGS = -Wall \
#           -Wundef -Wpointer-arith -Wbad-function-cast \
#           -Wcast-align -Wwrite-strings -Wstrict-prototypes \
#           -Wmissing-prototypes -Wmissing-declarations \
#           -Wnested-externs -Winline -Wcast-qual -W \
#           -Wno-unused
#           -Wunused

OBJSERVER= zhengdong.o led.o main.o server.o function.o yali.o gpio_test.o client.o

		
all:ok 

ok: $(OBJSERVER)
	$(CC) -o ok $(OBJSERVER) $(SERVLIBS) -lm		
	
main.o:		main.c
	$(CC) $(SERVFLAGS) -c -o $@ $<
client.o:client.c 
	$(CC) $(SERVFLAGS) -c -o $@ $<
function.o:		function.c
	$(CC) $(SERVFLAGS) -c -o $@ $<			
server.o:	server.c
	$(CC) $(SERVFLAGS) -c -o $@ $<	
led.o:		led.c led.h
	$(CC) $(SERVFLAGS) -c -o $@ $<
zhengdong.o:	zhengdong.c zhengdong.h client.h
	$(CC) $(SERVFLAGS) -c -o $@ $<
yali.o:		yali.c yali.h
	$(CC) $(SERVFLAGS) -c -o $@ $<
gpio_test.o:		gpio_test.c gpio_test.h
	$(CC) $(SERVFLAGS) -c -o $@ $<
clean:
	@echo "Cleaning up directory."
	rm -f *.a *.o ok  core *~ log errlog client
		
 
