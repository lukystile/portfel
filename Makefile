up:
	cd ./laradock && docker-compose up -d nginx mysql phpmyadmin workspace

bash:
	cd ./laradock && docker-compose exec --user laradock workspace bash

perm:
	cd ../ && sudo chmod 777 -R $(shell pwd)

