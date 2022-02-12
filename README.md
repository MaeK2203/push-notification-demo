# push-notification-demo
push notification implementation with laravel.

# build

## SSL setting
```bash
mkcert localhost 127.0.0.1 ::1
mv localhost+2.pem docker/nginx/ssl/cert.pem
mv localhost+2-key.pem docker/nginx/ssl/cert-key.pem
```

## create env file
```bash
cp -p src/.env.example src/.env
```

## Build Docker container
```bash
docker-compose up -d --build
docker-compose exec php composer install
```

## Create env key
```bash
docker-compose exec php php artisan key:generate
```

## DB migration
```bash
docker-compose exec php php artisan migrate
```

## Front build
```bash
docker-compose exec php npm ci
docker-compose exec php npm run dev
```

## Create vapid
```bash
docker-compose exec php php artisan webpush:vapid
```
