#!/bin/bash

echo ""
read -p "Have you set up a database named 'laraveldrivers' yet?' (y/n) " -n 1 -r
echo ""
echo ""
if [[ ! $REPLY =~ ^[Yy]$ ]]
then
    [[ "$0" = "$BASH_SOURCE" ]] && exit 1 || return 1 # handle exits from shell or function but don't exit interactive shell
fi

composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
npm install
npm run dev
