# SNACKSLIBRARY API + GUI

well this is my CRUD Web Page which has Create, Update and DELETE feature which sounds basic but useful especially for new ones who are using Laravel for a first time

Requirements:
* Laravel 10.3.*
* XAMPP/Laragon/WampServer/Lampp
* NodeJS
* Composer
* PHP 8.*

to use this repo on yours
1. ```git clone https://github.com/RMPlaysMCYT/SnacksLibraryAPI```
2. ```cd SnacksLibraryAPI``` or rename the Folder that you clone to a desired folder name like ```johnDoeAPI``` or etc before you do ```cd DESIRED FOLDER```.
3. for windows:
    * on file explorer go to the folder that you cloned or renamed and right click > terminal
    * on file explorer go to the folder that you cloned and go to top tab and type ```cmd```

4. when you're in command prompt or terminal wether powershell, then type ``` code .```
5. then type ```composer install``` on the terminal inside visual studio code
6. **OPTIONAL**: install front-end dependencies if you have wether react or vite
7. copy ```.env.example``` and paste on same folder and rename it as ```.env``` 
8. you must modify it the following first
    8.1. on ```.env``` you must need to change the DB_DATABASE
    8.2. you must change it on ```/database/migrations/2025_12_26_121102_create_products_table.php``` or type ```php artisan make:migration create_products_table``` or in terms of name of your likes ```php artisan make:migration <project_migration_file_name>```
    8.3 inside the migration file that you create do anything such as ```product_code, product_name, details, details, etc.``` and the table_name like ```products```
    8.4 adjust the configs like controllers, model, requests and more
9. type ```php artisan key:generate```
10. run by ```php artisan migrate``` and ```php artisan serve```, IF FOR PUBLIC AND INTEGRATED WITH FLUTTER OR OTHER Framework do ```php artisan serve --host=[IP ADDRESS FROM COMPUTER] --port=8000```


In terms of problems, let me know