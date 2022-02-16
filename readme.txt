To start:
RUN composer update --no-scripts
RUN composer require barryvdh/laravel-debugbar:* --dev
1. chmod -R 0777 storage
2. copy .env.example to .env
