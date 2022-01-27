# push-notification-demo
laravelでpush通知実装

# 環境構築手順

mkcert localhost 127.0.0.1 ::1
mv localhost+2.pem docker/nginx/ssl/cert.pem
mv localhost+2-key.pem docker/nginx/ssl/cert-key.pem

docker-compose up -d --build

docker-compose exec php composer install

docker-compose exec php artisan migrate

docker-compose exec node npm run install

docker-compose exec node npm run dev

php artisan webpush:vapid

