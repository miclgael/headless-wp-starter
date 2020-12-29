# 📝 content.michaelgale.dev

Wordpress in a docker container, with an example front end.

## Install Docker (macOS)

## Fire up the containers (WP @ localhost:8000)

`docker-compose up -d`

## Tear containers down

`docker-compose down`

## Use WP CLI in the running WP container

eg, to delete a default theme:

`docker-compose run --rm wp-cli theme delete twentynineteen`

This would be the equivalent of running `wp theme delete twentynineteen` 

NB: This is not super efficient, as a container is built and then deleted after command gets executed... but how often does `wp-cli` get used after initial set-up... really... 👀 
