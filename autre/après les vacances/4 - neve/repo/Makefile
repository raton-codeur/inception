test :
	docker compose up -d

clean :
	docker compose down --timeout 0; docker image prune -f -a; rm -rf volumes/*

ps :
	docker top inception-my_service-1

bash :
	docker compose exec nginx bash
