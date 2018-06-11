<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
CModule::IncludeModule("highloadblock");
?>
<?php
// В PHP 4.1.0 и более ранних версиях следует использовать $HTTP_POST_FILES
// вместо $_FILES.

$uploaddir = 'c:/openserver/userdata/temp/';
$uploadfile = $uploaddir . basename($_FILES['userfile']['name']);

echo '<pre>';
if (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    echo "Файл корректен и был успешно загружен.\n";
} else {
    echo "Возможная атака с помощью файловой загрузки!\n";
}
$hlblock_id = 1;
$hlblock = Bitrix\Highloadblock\HighloadBlockTable::getById($hlblock_id)->fetch();
$entity = Bitrix\Highloadblock\HighloadBlockTable::compileEntity($hlblock);
$entity_data_class = $entity->getDataClass();

$arAdd = array(
        'UF_NAME' => $_FILES['userfile']['name'],
        'UF_FILE' => $uploadfile,
        'UF_DATEINSERT' => date('d.m.Y h:i:s'),
    );
$result = $entity_data_class::add($arAdd);
 
if ($result->isSuccess()){
    echo 'Запись добавлена успешно! ID записи: '. $result->getId();
} else {
    echo 'Не удалось добавить запись...';
}

?>
<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");
?>

//пункт 1 -файл upload.php 
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
