<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
?>
<form enctype="multipart/form-data" action="/test/upload.php" method="POST">
    <!-- Поле MAX_FILE_SIZE должно быть указано до поля загрузки файла -->
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    <!-- Название элемента input определяет имя в массиве $_FILES -->
    Отправить этот файл: <input name="userfile" type="file" />
    <input type="submit" value="Send File" />
</form>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>
//пункт 1 -файл index.php 
/*
Небольшие тестовые задания по системе 1С-Битрикс. 

1. Имеется Highload-блок с полями:
- UF_NAME - наименование (тип: строка)
- UF_FILE - файл (тип: файл)
- UF_DATEINSERT - время добавления (тип: дата и время)
Написать код для добавления записи в highload-блок, наименование любое, файл - любой файл из папки upload сайта, время добавления - текущее время.

2. Записывать в лог событие смены статуса заказа.
Записывать с стандартный лог битрикса ID заказа, время его изменения и дату изменения.

По этим двум задачкам нужен только код, который будет выполнять необходимые по ним действия.*/
