# Изменения в сборочных файлах

## [15-12-2020]

### Добавлено
- Возможность включать в заголовок Content-Security-Policy значение unsafe-eval для script-src

## [01-09-2020]

### Добавлено
- В php-fpm - session.cookie_secure = 1
- В nginx заголовки Content-Security-Policy, Pragma, Strict-Transport-Security 

## [18-05-2020]

### Добавлено
- Поддержка зеркала в подпапку
- Добавление в README описания примеров файла .help/values.yaml

## [27-02-2020]

### Добавлено
- Поддержка редиректа на зеркало

## [27-01-2020]

### Добавлено
- Поддержка в обработке редиректов разных комбинаций папки/подпапки - параметры/без параметров

## [27-12-2019]

### Добавлено
- Поддержка сжатия brotli
- При запросе jpg/jpeg/png файла, если рядом лежит webp с тем же именем, и если клиент поддерживает webp, то отдается webp. В проектах теперь достаточно оставлять только одну ссылку на картинки jpeg/jpg/png, а при компиляции все jpeg/jpg/png в webp копировать
- Добавлена параметр query в файле .helm/values.yaml при редиректе. Теперь можно сделать редирект на сайт с подстановкой переменных. Теперь можно сделать, например,  редирект с https://SynergyStartupForum.ru на https://SynergyStartupForum.com/?lang=ru

### Изменено
- В контейнере и в настройках php временная зона по умолчанию - Europe/Moscow
- В переменной REQUEST_URI теперь реальный путь и использовать кастомную переменную HTTP_X_ORIGINAL_REQUEST_URL не нужно
- Изменены настройки заголовков кеширования nginx
- Изменены заголовки X-UA-Compatible Referrer-Policy X-Content-Type-Options X-Frame-Options X-XSS-Protection Access-Control-Allow-Origin в nginx
