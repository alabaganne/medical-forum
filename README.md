## About the project

The idea of this project is to allow users to share and discuss information about HIV, how to avoid it? and what to do in case you have got it?

It is developped in a 24h Hackathon called "Nuit d'Info" (IT Night) with Laravel, and TailwindCSS.

## How to run

To run this project, first, create a local MySQL databse called "laravel" and make sure the credentials are (username = "root", password = "").

Second, run the follwing commands to install the necessary tables:
’’’
composer install
npm install
’’’

Third, run ’’’ php artisan migrate:fresh ’’’ in order to create the necesarry tables in the databse.

And finally, run each of these commands in a seperate terminal:
’’’
npm run dev
php artisan serve
’’’

TADAAA, you made it!
If you have any question, you can contact me via my email address: alabaganne9@gmail.com

## Project screenshots
![Homepage](/screenshots/homepage.png)
![Homepage for small devices](/screenshots/homepage-small-devices.png)
![Create Topic/Post page](/screenshots/create-post.png)
