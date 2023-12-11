<?php
// https://api.telegram.org/bot940511072:AAGWyqDM2rYPtNIiylrhzc_KFgLeErV3Joo/getUpdates

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$txtarea = $_POST['textarea'];
$token = "940511072:AAGWyqDM2rYPtNIiylrhzc_KFgLeErV3Joo";
$chat_id = "-236703562";
$arr = array(
    'Имя' => $name,
    'Телефон' => $phone,
    'Email' => $email,
    'Сообщения' => $txtarea
);

foreach($arr as $key => $value){
    $txt .= "<b>".$key."</b>".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}", "r");
if ($sendToTelegram){
    echo '<h1 class="success"> Сообщение передано, мы свяжемся свами в ближайщее время</h1>';
}else{
    echo '<h1 class="denger">Вы указали не правильные данные. Пожалуйста, заполните форму заново.</h1>';
}
?>