
## How to use this project

- Make sure your xampp or wampp already on latest version because this project use Laravel 8.0 and require PHP 7.3.0
- Open project folder and run git bash terminal
- Run this following command in bash terminal

      $ composer install
	  $ npm install && npm run dev
      $ copy .env.example .env
      $ php artisan key:generate
      
- setup .env file then run migrate command

      $ php artisan migrate:fresh --seed
	  $ php artisan vendor:publish --tag=jetstream-views
	  $ php artisan storage:link
      
- Don't forget to generate helper (if u have Laravel Idea Plugin installed on your computer)
- Open in browser 
  

