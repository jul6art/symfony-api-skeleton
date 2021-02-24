<p align="center">
    <a href="https://devinthehood.com"><img src="https://github.com/jul6art/symfony-skeleton/blob/master/assets/img/devinthehood.png?raw=true" alt="logo dev in the hood"></a>
</p>

<p align="center">
    <a href="https://github.com/devinthehood/jul6art/symfony-api-skeleton" target="_blank"><img src="https://img.shields.io/static/v1?label=stable&message=v1+coming+soon&color=orange" alt="Version"></a>
</p>

SYMFONY-API-SKELETON
====================
Symfony Application
-------------------

> :warning: Work in progress so keep calm. The good news: this is maintained!

Requirements
------------

* **php7.4**
* **symfony^5.0** 

Installation
------------

```console
git clone https://github.com/jul6art/symfony-api-skeleton.git
```

Download the [https://github.com/dunglas/mercure/releases/tag/v0.3.3](mercure hub) depending on your operating system and install it in the root of your project. 
For each release, the assets section list operating systems implementations. The folder must contain the mercure bin. Rename this folder **mercure**.

Generate the JWT Token
----------------------

```console
mkdir -p config/jwt
openssl genpkey -out config/jwt/private.pem -aes256 -algorithm rsa -pkeyopt rsa_keygen_bits:4096
openssl pkey -in config/jwt/private.pem -out config/jwt/public.pem -pubout
```

Start mercure server
--------------------

The default token is signed with the secret key: !ChangeMe!

CORS_ALLOW_ORIGIN is the client URL and port. It can be * or a list of domains
ADDR is the server ur and 3000 is the port for mercure server

```console
JWT_KEY='symfony_app_secret_mercure_key' ADDR='localhost:3000' ALLOW_ANONYMOUS=1 CORS_ALLOWED_ORIGINS="http://admin.autobuyer.localhost" ./mercure/mercure
```

Start server
------------

```console
cd symfony-api-skeleton
symfony server:start
```

DEV user accounts
-----------------

jane_admin : kitten
tom_admin : kitten
john_user : kitten

License
-------

The Symfony API Skeleton is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

&copy; 2021 [dev in the hood](https://devinthehood.com)

