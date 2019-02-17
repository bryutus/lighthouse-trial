# lighthouse-trial

## Description
This repository is a sample application of GraphQL using [Lighthouse]( https://lighthouse-php.netlify.com/ ).

## Development environment
We will build a development environment using Docker.

- PHP
- Nginx
- MySQL

## Get started
1. build and start containers for a service via `docker-compose up -d`
1. to get an interactive prompt `docker-compose exec php bash`
1. running all outstanding migrations `php artisan migrate`
1. access Laravel GraphQL Playground on http://localhost/graphql-playground
