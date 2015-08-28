# Installing Analytic Service

* git clone https://github.com/EssamKhaled/AC.git
* php composer.phar update.
* change the config/parameter.yml with the database configuration.
* php app/console doctrine:database:create
* php app/console doctrine:schema:update --force
* visit http://localhost/analytic_service/web/app_dev.php/?endpoint=input&eventName=foo&eventValue=bar
