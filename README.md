# Documentation (How to Run the Project)

Here’s how to run the project using Docker and Docker Compose:

### 1. Ensure you have Docker installed:
[Install Docker](https://docs.docker.com/engine/install/) and [Docker Compose](https://docs.docker.com/compose/install/) on your machine.

### 2. Create a .env file (if not present):
Ensure you have a .env file in the root of your project with the necessary environment variables. For example:

#### DB_CONNECTION=mysql
#### DB_HOST=localhost
#### DB_PORT=3306
#### DB_DATABASE=laravel_db
#### DB_USERNAME=your_username
#### DB_PASSWORD=your_password


### 3. Build and Run the Containers:

Run the following command in the root directory of your Laravel project to build and start the application:

### `docker-compose up --build`

### 4. Generate Application Key:

Once the containers are up, you can generate laravel application key:

### `docker-compose exec app php artisan key:generate`


### 5. Run Migrations:

Once the containers are up, you can run the Laravel migrations to set up the database schema:

### `docker-compose exec app php artisan migrate`


### 6. Access the Application:
After the containers are up, the Laravel app will be accessible at [http://localhost:8000](http://localhost:8000).
