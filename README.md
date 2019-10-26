# Hotel Management Application

A hotel management application written in php. To run, you must have `docker`
and `docker-compose` installed.

## Instructions

Run `docker-compose up -d`
Go to `localhost:80`

### Note

On non-linux machines (Mac and windows) you will need to update the IP address
of the mysql docker container in the `www/db.php` file.
To do that check the IP of the container running the mysql server using `docker
inspect | grep 172` and set it appropriately.
