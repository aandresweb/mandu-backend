## Instalation

-   Run "composer install"

-   Create a copy of your .env file, maybe you can use "cp .env.example .env"

-   Run "php artisan key:generate"

-   Setup database information in .env file

-   Run migrations using "php artisan migrate"

-   Run seeders using "php artisan db:seed"


## Endpoints

- GET       | api/divisiones       
                
- POST      | api/divisiones     
                    
- GET|HEAD  | api/divisiones/{divisione}    
           
- PUT|PATCH | api/divisiones/{divisione}    
        
- DELETE    | api/divisiones/{divisione}
