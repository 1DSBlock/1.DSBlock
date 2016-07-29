###  Requirements
- Xampp 5.6
- PHP 5.6

###  Configurations
a. Config virtualhost
+ open httpd-vhosts.conf in D:/xampp/apache/conf/extra
+ At the very bottom of the file paste the following
   ```
   
		NameVirtualHost *:80
      
		<VirtualHost *:80>
		    ServerName localhost
		    DocumentRoot "D:/xampp/htdocs"
		    <Directory "D:/xampp/htdocs">
		        Options Indexes FollowSymLinks Includes execCGI
		        AllowOverride All
		        Require all granted
		        Order Allow,Deny
		        Allow from all
		    </Directory>
		</VirtualHost>
		
		
		<VirtualHost *:80>
		    ServerName dsblock.local
		    DocumentRoot "<path>/1.DSBlock"
		    <Directory "<path>/1.DSBlock">
		        Options Indexes FollowSymLinks Includes ExecCGI
		        AllowOverride All
		        Require all granted
		        Order Allow,Deny
		        Allow from all
		    </Directory>
		    ErrorLog "<path>/1.DSBlock/logs/mysite.local-error_log"
		</VirtualHost>
   ```
   Notes: **<path>** The obsolute path of your source code

b. open /etc/hosts. Add 127.0.0.1 dsblock.local

c. open php.ini. Find ;extension=php\_intl.dll. change to extension=php\_intl.dll

d. download php\_intl.dll from https://www.dll-files.com/php_intl.dll.html. Move this file to xampp/php/ext/

e. Create database
- Open http://localhost/phpmyadmin
- create new database : dsblock
- import database from /config/schema/dsblock.sql
- open /config/app.php. in line 230, change your password if exists

f. Test web
- open http://dsblock.local