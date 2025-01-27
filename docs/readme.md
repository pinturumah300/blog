# PENTING

## Error 2058 di MySQL Client
- Login ke console MySQL: docker exec -it mysqldb bash
- Login sebagai root: mysql -u root -p
- Ketik perintah: 
CODE:

SELECT user, host, plugin FROM mysql.user;
ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'Gr0t!';
ALTER USER 'biky'@'%' IDENTIFIED WITH mysql_native_password BY 'begucool';

FLUSH PRIVILEGES;


