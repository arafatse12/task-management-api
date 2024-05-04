# Task
Task Managment Software 
**Manage Task Easily.**

### Installation
* First clone this Repo
* Go to Project directory
* Run Composer `composer install`
* Copy env file `cp .env.example .env`
* Configure database in .env file
* Create Database `task_management_api`
* Configure Your Database Connection  in .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=task_management_api
DB_USERNAME=root
DB_PASSWORD=
```
* Generate laravel key `php artisan key:generate`
* Run migrate `php artisan migrate`
* Run Seeder (optional) `php artisan db:seed`
* Install npm `npm install`
* Run npm `npm run dev`
* Run npm `php artisan serve`
* Configure Your URL .env
```
APP_URL=http://127.0.0.1:8000
PUBLIC_PATH=http://127.0.0.1:8000
```


# Software Login
``` 
	username => superadmin,
	email => superadmin@gmail.com,
  	password => 123456
```

# Server Requirment
`php version >= 8.0.0`

## Technology:

```
Laravel 8
Vue Js
```



## Third Part Requirement

```
"tymon/jwt-auth": "^1.0@dev"
 Kazi Arafat Mia
```


