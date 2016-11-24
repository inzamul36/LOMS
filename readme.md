# Laravel Order Management System (LOMS)

## About this application

This application is created by MD INZAMUL HAQUE for INFORTECH Solutions. This is a simple order management system. 
#### Framework: Laravel 5.3
#### Language: PHP 5.7

## Demo
Link: https://www.youtube.com/watch?v=ZCg3JbCvf8Q

## Install
- Type this line:
```
composer update
```

- To change Database go to "config/database.php" and then change database. Default Database is SQLite.

- Migrate Database by typing this:
```
php artisan migrate
```

- Login:
	Username: inzamul36@live.com <br>
	Password: 123456asdfgh

- To Add new user go to "app\Http\Controllers\Auth\RegisterController.php" comment this line 
```
public function showRegistrationForm()
    {
        return redirect('login');
    }

    public function register()
    {

    }
```
in bottom of the page. Then go to /register by web browser. Fill the form. 
- Again uncomment that line to hide registration page.


## Features
- Add order
- Export Order (pdf, excel, csv and etc)
- Edit / Delete Order
- Search Order
- Print Invoice
- Easy interface
- Mobile view

## Uses
* Restaurant Order
* Facebook Commerce
* etc...

### Contact me 
Facebook: facebook.com/inzamul36 <br>
Email: inzamul36@gmail.com, inzamuk36@live.com, inzamul36@yahoo.com   