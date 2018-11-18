#!/bin/sh

docker-compose exec db psql -U postgres --command="create database test_db"

docker-compose exec db psql -U postgres --command="CREATE ROLE webapp WITH LOGIN PASSWORD 'webapp'"

docker-compose exec php php artisan migrate

docker-compose exec php php artisan db:seed
