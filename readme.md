## Описание содержания файлов
___

| Название файла | Что находиться | Описание |
|---------------:|:--------------:|:---------|
|### AddView.php | Счетчик просмотров страницы | Счетчик прибаляет +1 к просмотрам в ячейке в вашей базе данных, не задваивает просмотры при повторном открытии одной и той же страницы, умеет запоминать просмотренные пользователем страницы, если они содержут id (id статьи, либо товара).Основан на сессиях, подходит для Yii2, сам принцип можно использовать на других фреймворках либо на чистом php. |