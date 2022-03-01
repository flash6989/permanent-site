

<?php
//Сбор данных из полей формы. 
$name = $_POST['name'];// Берём данные из input c атрибутом name="name"
$phone = $_POST['phone']; // Берём данные из input c атрибутом name="phone"
$quest = $_POST['quest']; // Берём данные из input c атрибутом name="mail"

$token = "1911389159:AAEaw4lzTqfWvN3QIPSRIlIQeON7qGgMdzM"; // Тут пишем токен
$chat_id = "-565824661"; // Тут пишем ID группы, куда будут отправляться сообщения
$sitename = "anncosmetics.ru"; //Указываем название сайта

$arr = array(

  'Заказ с сайта: ' => $sitename,
  'Имя: ' => $name,
  'Телефон: ' => $phone,
  'Сообщение:' => $quest
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");

?>