# PHP-login

Написать систему аутентификации пользователей. Система должна предоставлять форму входа (имя
пользователя и пароль) и страницу пользователя в системе.
Функциональные требования к системе:
1. Форма входа должна содержать два текстовых поля для ввода имени пользователя и пароля.
2. В случае успешного входа должна быть показана страница пользователя.
3. Страница пользователя должна содержать сообщение: «Добрый день, <имя пользователя>» и
кнопку выхода из системы.
4. При нажатии на кнопку выхода должна открываться страница входа.
5. В случае неуспешного входа должна быть показана страница входа с сообщением: «Неверные
данные».
6. После успешного входа страница входа не должна быть доступна, пользователь должен быть
перенаправлен на страницу пользователя.
7. Страница пользователя не должна быть доступна, если вход не выполнен. Пользователь должен
быть перенаправлен на страницу входа.
8. В случае 3-х неуспешных попыток входа подряд система должна быть заблокирована на 5 минут,
при этом при попытке входа должно выводиться сообщение: «Попробуйте еще раз через <N>
секунд».
Требования к реализации:
1. Данные хранить в текстовом файле, базу данных не использовать.
2. При разработке желательно использовать архитектуру MVC.
3. Допускается использование фреймворка на выбор исполнителя.