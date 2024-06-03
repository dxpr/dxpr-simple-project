# Installation (Browser)

```bash
$ composer create-project dxpr/dxpr-marketing-cms-project:^10 PROJECT_DIR_NAME
```
* Open the project in your browser and follow installation instructions

## Installation (Command line)

```bash
$ composer create-project --dev dxpr/dxpr-marketing-cms-project:^10 PROJECT_DIR_NAME
$ cd PROJECT_DIR_NAME
$ ./vendor/drush/drush/drush site-install --db-url=mysql://MYSQL_USER:MYSQL_PASSWORD@localhost:3306/DATABASE_NAME --account-pass=admin -y -v
```
* Open the project URL in your browser click the log in link (top right). 
* Log in with admin:admin
The above command installs DXPR Marketing CMS on Drupal 10. To use Drupal 9 replace ^10 with ^9 in the first command.
