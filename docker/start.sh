#!/bin/sh

cd ../application

composer install

cd ../docker

docker-compose up -d

docker-compose exec php npm install

cp ../application/.env.example ../application/.env

docker-compose exec php npm run watch-poll
