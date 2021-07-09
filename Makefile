# docker stop $(docker ps -qa); docker rm $(docker ps -qa);
# docker rmi -f $(docker images -qa); docker volume rm $(docker volume ls -q);
# docker network rm $(docker network ls -q) 2>/dev/null
SRC = ./srcs/docker-compose.yml
NAME = inception

SET_DOMAIN = $(shell grep -q "ashite.42.fr" /etc/hosts && echo YES)

all : ${NAME}

init:
ifeq ($(SET_DOMAIN),YES)
	@echo "Domain name has already been set to ashite.42.fr"
else
	@echo "127.0.0.1		ashite.42.fr" >> /etc/hosts
	@echo "Domain name has been set to ashite.42.fr"
endif
	@mkdir -p /home/escanor/data/html
	@mkdir -p /home/escanor/data/mysql

${NAME}: init
	docker-compose -f ${SRC} up --build

re : fclean all
clean :
	docker-compose -f ${SRC} down
fclean :
	rm -rf /home/escanor/data
	docker-compose -f ${SRC} down --rmi all
	docker system prune -f
