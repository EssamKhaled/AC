# Installing Analytic Service

1- git clone https://github.com/EssamKhaled/AC.git
2- php composer.phar update.
3- change the config/parameter.yml with the database configuration.
4- php app/console doctrine:database:create
5- php app/console doctrine:schema:update --force
6- visit http://localhost/analytic_service/web/app_dev.php/?endpoint=input&eventName=foo&eventValue=bar
