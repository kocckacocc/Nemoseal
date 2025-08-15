php artisan migrate:refresh --seed

php artisan make:migration create_orders_table

php artisan migrate:refresh --path=/database/migrations/2019_11_22_101856_create_machines_table.php

ALTER TABLE `categories` ADD `sort_order` INT NOT NULL DEFAULT '0'
ALTER TABLE `manufacturers` ADD `sort_order` INT NOT NULL DEFAULT '0'
ALTER TABLE `users` ADD `image` VARCHAR(191) NOT NULL DEFAULT ''
