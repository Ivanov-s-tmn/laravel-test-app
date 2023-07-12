# Installation

 - php artisan storage:link
 - php artisan migrate

# Deploy

 - npm run dev
 - php artisan db:seed
 - php artisan serve

###### GET http://127.0.0.1:8000/offers получение объектов поборки с данными из БД

###### POST http://127.0.0.1:8000/api/v1/offers/items добавление нового элемента подборки
###### DELETE http://127.0.0.1:8000/api/v1//items/{item} удаление элемента подборки

###### GET http://127.0.0.1:8000/api/v1/offers просмотр страницы подборки (для более легкой проверки авторизации)
###### POST http://127.0.0.1:8000/api/v1/offers добавление новой подборки
###### PUT http://127.0.0.1:8000/api/v1/offers/{offer} изменение подборки

###### http://localhost:8000/telescope/requests Для просмотра логов запросов через телескоп
