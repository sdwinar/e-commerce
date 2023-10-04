#Mohammed Alamin #mohammed.alamin.010101@gmail.com

My New E-commerce Project
useing vue.js with php laravel

composer require laravel/ui
php artisan ui vue --auth
npm install

php artisan make:migration create_baskets_table
php artisan migrate
php artisan make:model Product
php artisan make:seeder UserSeeder
php artisan db:seed