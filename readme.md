## Example Laravel API

 This is a sample project to show how you could write an API using Laravel 5. You can follow the tutorial online at https://www.toptal.com/laravel/restful-laravel-api-tutorial

 There will be some minor differences, specially regarding downloaded packages, as I used the
 excellent [Laravel Ide Helper](https://github.com/barryvdh/laravel-ide-helper) to setup
 PhpStorm bindings and other features.

## Running the API

It's very simple to get the API up and running. First, create the database (and database
user if necessary) and add them to the `.env` file.

```
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user
DB_PASSWORD=your_password
```

Then install, migrate, seed, all that jazz:

1. `composer install`
2. `php artisan migrate`
3. `php artisan db:seed`
4. `php artisan serve`

The API will be running on `localhost:8000`.
____
## Дополнения
1. `app/Http/Modules/studentInfo/getInfoAboutStudent()`    
 строка 24 -  __"data-term_id=x"__ где x - номер семестра в системе КузГТУ.    
  - [ ] Можно сделать необязательным параметром для выгрузки данных за любой семестр.

2. Роуты:    
`Route::get('news/{number}', 'NewsController@index');` -  номер страницы с новостями на сайте, для отображения списка новостей
`Route::get('detalNews', 'DetalNewsController@index');` - host/api/detalNews?url=urlNews для отображения детальной информации 
