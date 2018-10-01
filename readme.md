# Laravel Blog

A simple blog for demonstration purpose. Based on Laravel 5.7

## Project features

- Journalist login and register with validation 
- Added blog by specific Journalist after login
- Update your profile after login  
- As a Journalist you can create,read,update,delete your blog
- Every journalist added category

<!-- ## Demo

You can try the live demo : [http://gentle-everglades-40337.herokuapp.com/](http://gentle-everglades-40337.herokuapp.com/)
 -->
 
<!-- ## Demo login info

user: contact@milon.im | password: password

 -->
## Installation

```
git clone https://github.com/aminulsiam/Laravel-Blog.git 
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
```

<!-- If you want dummy data, then run this-

```
php artisan db:seed --class=DummyDataSeeder
 -->```
<!-- 
## API Endpoints

This projects exposes some API endpoints. You could request those endpoints with the `api_token` passed as query parameters, like this- `/api/tags?api_token=YOUR_API_KEY`. The API key could be obtained from `/api/auth/token` endpoint. Available endpoints are-

```
/api/auth/token
/api/auth/reset-password
/api/auth/change-password

/api/tags
/api/categories
/api/users     // only accessible by admin
/api/posts
``` -->

## Author

- [Aminul Haq Mallik](https://aminulsiam.github.io/)

Feel free to email me (aminulhossain90@gmail.com), if you have any question.

## Screenshot

![Landing Page](/screenshot/ss1.png)
![Sign In Page](/screenshot/ss2.png)
![Registration Page](/screenshot/ss3.png)
![ToDo List Page](/screenshot/ss4.png)
![Create New ToDo Page](/screenshot/ss5.png)
![User Profile Page](/screenshot/ss6.png)
![User Profile Page](/screenshot/ss7.png)
![User Profile Page](/screenshot/ss8.png)