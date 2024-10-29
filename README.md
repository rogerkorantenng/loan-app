### Install the dependencies
```
composer install && npm ci 
```

### Create .env
```
cp .env.example .env
```


### Generate application key
```
php artisan key:generate
```

### Migrate and seed the database
```

### Install Dependencies
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```

### Create .env 
```
cp .env.example .env
```


### Start services
```
sail up -d
```

### Generate application key
```
sail artisan key:generate
```

### Migrate and seed the database
```
sail artisan migrate --seed
```


