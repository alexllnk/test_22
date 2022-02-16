<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

Тестовое задание PHP 
=============

###Задание 1
- см. route: "/table-test-task"

###Задание 2 SQL
~~~sql
SELECT a.*
FROM users a
JOIN (SELECT login, COUNT(*)
FROM users 
GROUP BY login
HAVING count(*) > 1 ) b
ON a.login = b.login
ORDER BY a.login;
~~~~

###Задание 3 PHP
- см. route: "/test-file-read"

###Задание 4 PHP
- см. route: "/presidents-test-task"
