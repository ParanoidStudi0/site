#coding: utf-8
import socket

s = socket.socket(socket.AF_INET, socket.SOCK_STREAM)

host = '127.0.0.1'

port = 0;

while port < 25:
	try:
		s.bind(host,port)
	    port = port + 1;
	    print('Порт ' + port + 'свободен')
	except:
		print('Порт' + port + "не свободен")
