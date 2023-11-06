SHELL=/bin/bash

down:
	docker-compose down
build:
	docker-compose up -d --build
upd:
	docker-compose up -d
ps:
	docker-compose ps
