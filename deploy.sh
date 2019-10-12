#!/usr/bin/env bash
php site/artisan down --message="Estamos em manutenção. Pedimos desculpa pelo incómodo. Por favor volte mais tarde"
git pull
cd site
rm -rf ./storage/framework/views/*.php
rm -rf ./storage/framework/cache/
npm i
npm run prod
composer install --optimize-autoloader --no-dev
php artisan config:cache
chown www-data:www-data -R *
php artisan up