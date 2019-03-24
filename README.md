## Istall preparation

Install

[Wordpress](https://wordpress.org/)
[PHP](http://php.net/manual/en/install.php)
[Composer](https://getcomposer.org/download/)
[Node.js](http://nodejs.org/)
[Yarn](https://yarnpkg.com/en/docs/install)


## Theme installation

clone theme in WP themes folder

run

```shell
$ composer install
```

in sage_test folder to install all composer dependencies

run

```shell
$ yarn
```
in sage_test folder to install all yarn dependencies

## Theme develop ans build

run

```shell
$ yarn start 
```

to launch webpack-dev-middleware for for development needs

or

```shell
$ yarn buid 
```
for build new theme version
