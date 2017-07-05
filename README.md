# Starter app

## Structure
- public: the web root of the project
- source: source code (and some config);
    - settings: associative array of settings available from the container eg. $c->get('settings')
    - routes: that can be classes or just functions
    - services to be register in the container eg. $c[Foo::class] = function() { return new Foo::class; };
    - Controller: controller directory
    
## setup
```bash
git clone https://github.com/jclyons52/slim-starter.git
cd starter
composer install
php -S localhost:8000 -t public
```
    