#!/bin/sh

ssh root@dev.iton.in.th <<-'ENDCMD'
    cd /var/www/openhouse16.dev.iton.in.th
    git pull
    composer install
    php artisan migrate --seed --force
ENDCMD