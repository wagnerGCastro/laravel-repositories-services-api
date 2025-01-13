# Referencies

  # Hosts Docker Workspace
  - 8040 # backend     # http://localhost:8040
  - 8041 # frontend    # http://localhost:8041

  # Hosts Apache
  - 8045 # backend     # http://backend.local:8045
  - 8045 # frontend    # http://frontend.local:8045

  # Hosts NGINX
  - 8050 # backend     # http://backend.local:8050
  - 8050 # frontend    # http://frontend.local:8050

# Comands Utilities
  # 1 - Download repository

    $ git clone https://github.com/wagnerGCastro/laravel-nuxtjs-typescript-jest-cypress-storybook

  # 2 - Init project
    $ cd laravel-nuxtjs-typescript-jest-cypress-storybook
    $ yarn

    $ docker-compose -f docker-compose.dev.yml --env-file .env.dev build mysql
    $ docker-compose -f docker-compose.dev.yml --env-file .env.dev build apache2
    $ docker-compose -f docker-compose.dev.yml --env-file .env.dev build workspace

    $ docker-compose -f docker-compose.dev.yml --env-file .env.dev up -d mysql
    $ docker-compose -f docker-compose.dev.yml --env-file .env.dev up -d apache2
    $ docker-compose -f docker-compose.dev.yml --env-file .env.dev up -d workspace 


  # 3 - Entry in workspace to backend
    - Run server
      $ docker-compose -f docker-compose.dev.yml --env-file .env.dev exec workspace bash 
      $ cd packages/backend
      $ yarn install
      $ composer install
      $ php artisan migrate --env=dev 
      $ php artisan db:seed --env=dev 
      $ php artisan serve --env=dev  --host=0.0.0.0  --port=8040

  # 4 - Entry in workspace to frontend
   - Run server
      $ docker-compose -f docker-compose.dev.yml --env-file .env.dev exec workspace bash 
      $ cd packages/frontend
      $ yarn install
      $ composer install

  # PHP Artisan
    - php artisan migrate
    - php artisan migrate:rollback --step=3
    - php artisan migrate:rollback --path=/database/migrations/the_specific_migration_file.php
    - php artisan make:model Permissions -m
    - php artisan make:controller Api/name_of_controller --api --model=name_of_model
    - php artisan make:migration create_resources_table
    - php artisan make:migration alter_table_foreign_keys --create=permissions
    - php artisan make:seeder UsersTableSeeder
    - php artisan make:request PostStoreUpdateRequest
    -	php artisan db:seed --class=DatabaseSeeder  
    - php artisan make:policy PostPolicy --model=Post

# Entry in workspace or mysql
  $ docker-compose -f docker-compose.dev.yml --env-file .env.dev exec workspace bash 
  $ docker-compose -f docker-compose.dev.yml --env-file=.env.dev exec -it mysql mysql -uroot -p
