- cara konek
1. ssh -i "lib-app-aws.pem" ubuntu@ec2-18-142-115-74.ap-southeast-1.compute.amazonaws.com


syaratnya harus di folder file lib-app-aws.pem



- setup server

1. install nginx, install composer 
2. install php 8 berserta lib nya (https://www.tecmint.com/install-php-8-on-ubuntu/)
3.  generate ssh key github (ssh-keygen -t rsa -b 2048 -C "email  ")
4. masuk ke cd /var/www
5. git clone project 
6. lakukan composer install
7. cp .env.example .env
8. php artisan key:generate
