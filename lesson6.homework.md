# Домашнее задание (3й день)

## 1. Установить php 

> Желательно установить версию php7.4/php8

> Если вы пользовались другой инструкцией и она вам помогла лучше, 
> просьба поделиться со мной для будущих студентов

### Инструкция для windows

https://www.youtube.com/watch?v=GWwhLfTRAV8

### Инструкция для ubuntu

https://www.digitalocean.com/community/tutorials/how-to-install-linux-apache-mysql-php-lamp-stack-on-ubuntu-20-04

### Инструкция для macos

https://pilsniak.com/php-8-on-macos-installation-guide

## 2. Убедитесь что php устнавлен и работает 

1. Запустите в терминале команду: `php -v`
2. Должен быть приблизительно след. вывод:
```shell
PHP 8.0.11 (cli) (built: Oct 11 2021 08:51:40) ( NTS )
Copyright (c) The PHP Group
Zend Engine v4.0.11, Copyright (c) Zend Technologies
with Zend OPcache v8.0.11, Copyright (c), by Zend Technologies
with Xdebug v3.0.4, Copyright (c) 2002-2021, by Derick Rethans
```

## 3. Подготовьте файлы для web server`a

1. Создайте папку для ваших веб файлов: step-webserver (проводник или терминал)
   1. `mkdir step-webserver`
2. Откройте папку в phpstorm или зайдите в нее через terminal
   1. `cd step-webserver`
3. Создайте файл index.php со след. содержимим:
```php
<?php

phpinfo();
```
## 4. Запустите webserver и посмотрите результат вывода функции phpinfo  

### Через terminal

1. Будучи в папке step-webserver запустите `php -S 127.0.0.1:8080`
2. Откройте в браузере http://127.0.0.1:8080/
3. Сделайте скриншот страници и отправьте его в лог бук в качестве ДЗ

### Через phpstorm

1. Настройте php интерпретатор как показано вот тут: https://www.youtube.com/watch?v=B7spmGePXXc
2. Узнать путь для интерпретатора можно в терминале с помощью команды
   1. `which php`
3. Дальше нужно открыть ссылку в браузере
4. Сделайте скриншот страници и отправьте его в лог бук в качестве ДЗ

### Любым другим способом

1. Делаете сами как считаете нужным.
2. Сделайте скриншот страници и отправьте его в лог бук в качестве ДЗ