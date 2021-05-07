Название: GO HELP! 


Идея: это приложение поможет быстро опубликовать призыв о помощи. Помощь может быть профессиональная, коллективная или индивидуальная. Ключевая особенность идеологии заключается в стирании понятия в обществе платных и  бескорыстных услуг. 


Конкурс: 

модули: 
чат --- bitfumes/private-chat-app-with-laravel-vuejs-pusher


фреймворки/язык:
Laravel - back-end
Bootstrap - front-end
Github Desktop - git
OpenServer - виртуальный сервер
2Gis - api карты с геолокацией
Movavi Video Editor Plus - приложение для монтажа видео


Работа:
 1. разработка(back-end,front-end)
 2. мотивация
 3. поддержка
 4. монтаж демо-видео

таблицы:
Users,
Messege,
Jobs

установка:

- `cd gohelp && composer i && cp .env.example .env `
- Edit `.env` and set your database connection details
- Edit `.env` and set your pusher connection key `https://dashboard.pusher.com/apps/yourId/keys`)
- (When installed via git clone or download and make .env, run `php artisan key:generate` 
- `php artisan migrate:fresh --seed `
- `php artisan serve` open `http://127.0.0.1:8000`