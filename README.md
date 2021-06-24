# laravel-base

## Introduction

- Docker for Mac / Windowsインストール済み

## Installation & Setup

Install
```bash
make init
```

Initializing data
```bash
make seed
```  
  
FRONT  
http://localhost:8080/login  
user@example.com / password

ADMIN
http://localhost:8080/admin/login  
admin@example.com / password

phpMyAdmin  
http://localhost:8000/

## Command

up
```bash
make up
```

stop
```bash
make stop
```

restart
```bash
make restart
```

migrate
```bash
make migrate
```

clean
```bash
make clean
```

cache clear
```bash
make cache-clear
```

create model
```bash
php artisan make:Model Account --migration
```