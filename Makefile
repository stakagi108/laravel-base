init:
	docker-compose up -d --build
	docker-compose exec php composer install
	docker-compose exec php cp .env.example .env
	docker-compose exec php php artisan key:generate
	docker-compose exec php php artisan storage:link
	docker-compose exec php chmod -R 777 storage bootstrap/cache
	@make migrate
up:
	docker-compose up -d
stop:
	docker-compose stop
down:
	docker-compose down --remove-orphans
restart:
	@make down
	@make up
migrate:
	docker-compose exec php php artisan migrate
fresh:
	docker-compose exec php php artisan migrate:fresh --seed
seed:
	docker-compose exec php php artisan db:seed
cache-clear:
	docker-compose exec php composer clear-cache
	docker-compose exec php php artisan event:clear