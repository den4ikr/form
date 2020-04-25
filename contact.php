<?php
if (isset ($_POST['contactFF'])) {
  $to = "danirom0401@gmail.com";
  //$from = "https://den4ikr.github.io/email/";
  $subject = "Заполнена контактная форма на сайте ".$_SERVER['HTTP_REFERER'];
  $message = "Имя пользователя: ".$_POST['nameFF']."\nEmail пользователя ".$_POST['contactFF']."\nТелефон пользователя ".$_POST['telFF']."\nСообщение: ".$_POST['projectFF']."\n\nАдрес сайта: ".$_SERVER['HTTP_REFERER'];
 
  
}
?>
