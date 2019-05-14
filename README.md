# Quantum Manager
## Файловый менеджер для Joomla!
### Описание
Бесплатный файловый менеджер для Joomla! с помощью которого вы сможете загружать, редактировать и вставлять в редактор(а так же и поля) файлы.
Есть возможность переопределить вызовы стандартного файлового менеджера.

### Возможности
- Загружать файлы
- Менять формат изображениям (jpg, png, webp)
- Автоматический ресайз картинок
- Обрезка изображений
- Добавление водяного знака
- Ограничение прав на действия в менеджере для разных групп пользователей

### Планируемые возможности
- Добавление интеграции с облаками (Я.Диск, Google Drive)
- Редактирование текстовых файлов с помощью Codemirror с деревом файлов, с помощью которого можно переключаться на другие файлы

### Архитектура
Менеджер является составным. Каждая часть является автомной, которая не требует других частей. (На данный момент пока еще не доведена автомность, в ближайших релизах будет исправлено).
Все части связаным между собой событиями на javascript, к которым вы можете так же подключаться в своих скриптах, для кастомизации поведения менедежра. (События будут описаны позже)

Части менеджера:
- Загрузка
- Область просмотра файлов и каталогов
- Тулбар
- CropperJS
- Codemirror (пока не реализовано)
- Дерево каталогов
- Поиск (пока не реализовано)

Каждая часть это на стороне Joomla! - поле JForm. На фронте части именуются модулями.

Тем самым Вы можете составлять и комбинировать части менджера как вам удобно в своих формах, которые используют констрктор JForm.

### Документация
Будет создана позже.

### Лицензия
GPLv3

### Требования
- Joomla >=3.9
- PHP >=7
- Библиотека jinterventionimage (https://github.com/Delo-Design/jinterventionimage)

### Разработчик
Компания "Деловой дизайн" https://delo-design.ru

### Поддержка
- quantum@hika.su (email)
- @tsymbalmitia (telegram)
