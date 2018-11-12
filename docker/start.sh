#!/bin/sh

cd ../application

composer install
npm install

cd ../docker

docker-compose up -d

docker-compose exec php npm run watch-poll
