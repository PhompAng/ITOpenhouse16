#!/bin/sh

ssh root@openhouse.it.kmitl.ac.th <<-'ENDCMD'
    cd /home/openhouse/domains/openhouse.it.kmitl.ac.th/2016_lv
    git pull
    composer install
    composer update
    php artisan migrate --seed --force
ENDCMD