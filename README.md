# push-notification-demo
push notification implementation by laravel.

# build

## SSL setting
```bash
mkcert localhost 127.0.0.1 ::1
mv localhost+2.pem docker/nginx/ssl/cert.pem
mv localhost+2-key.pem docker/nginx/ssl/cert-key.pem
```

## Build Docker container
```bash
docker-compose up -d --build
docker-compose exec node npm i
docker-compose exec node npm run dev
```

## DB migration
```bash
docker-compose exec php artisan migrate
```

## Create id
```bash
php artisan webpush:vapid
```
