test :
	docker build -t ubuntu_image .
	docker run -it --rm --name my_service_container ubuntu_image

clean :
	docker rmi ubuntu_image
