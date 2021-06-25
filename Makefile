up:
	docker-compose up -d
Down:
	docker-compose down -d
ps:
	docker-compose ps
app-laravel:
	docker-compose exec app bash
db-laravel:
	docker-compose exec mysql bash
web-laravel:
	docker-compose exec web bash
migrate:
	docker-compose exec app php app/artisan migrate
