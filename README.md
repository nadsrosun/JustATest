MOWER - SIMPLE PHP OOP DEMO
========

# Features

- Autoloading & namespacing with composer
- Docker support for dev environment

# Installation

- Clone the project

- Start docker containers

  ```
    docker-compose up -d --force-recreate
  ```
  
- Install vendors

  ```
    docker exec -it bash
    composer install
  ```