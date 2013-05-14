# Welcome to Startex

Startex is a complete website bootstrap package, based on Silex and configured to encourage best practices.
By default, it is set to work with a MySQL database. Some default services are included:

- UrlGenerator Service
- TwigGenerator Service

Structure of files reflect Symfony2's one. Your code should live inside the `src/` folder, although this is not mandatory.

It also uses Compass and Twitter bootstrap for its HTML / CSS base.

Installation is pretty straightforward:

1. Clone this repo
2. Download composer: `curl -s http://getcomposer.org/installer | php`
3. Run `$ php composer.phar install` and `php composer.phar update`
4. Run `cp app/parameters.yml.sample app/parameters.yml` and edit connection parameters according to your configuration
5. Done

The code base is really simple, and well commented, so you should really find your way easily. The files and folders have been structured following Symfony2 conventions. If you have any question just drop a message.

Have fun using Startex !

