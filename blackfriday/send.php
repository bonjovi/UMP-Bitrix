<?php
if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
	
header('Content-Type: text/html; charset=UTF-8');

mb_internal_encoding('UTF-8'); 
mb_http_output('UTF-8'); 
mb_http_input('UTF-8'); 
mb_regex_encoding('UTF-8'); 

sleep(2);

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {

  if(trim($_POST['name']) == '') {
  $hasError = true;
  } else {
  $name = trim($_POST['name']);
  }

  
  
  if(trim($_POST['email']) == '')  {
  $hasError = true;
  } else if (!preg_match("/^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$/i", trim($_POST['email']))) {
  $hasError = true;
	echo "Ошибка, адрес электронной почты введен не правильно";
  } else {
  $email = trim($_POST['email']);
  }

  if(trim($_POST['message']) == '') {
  $hasError = true;
  } else {
  if(function_exists('stripslashes')) {
  $message = stripslashes(trim($_POST['message']));
  } else {
  $message = trim($_POST['message']);
  }
  }

  if(!isset($hasError)) {
    /*
    $to = "bleeding_ater@mail.ru";
    $subject= "Message from site.ru";
    $header="From: site.ru";
    $header.="\nContent-type: text/plain; charset=\"utf-8\"";
	
    $message = "BHTML \r\nEmail: $email \nИмя: $name \n\nТекс сообщения:\n$message";
	
    mail($to, $subject, $message, $header);

    $emailSent = true;
    echo "* Сообщение отправлено";
    */




    $link = mysqli_connect('localhost', 'allsites', 'ytktpmd,fpeUFL11!!')
    or die('Не удалось соединиться: ' . mysqli_error($link));

    mysqli_select_db($link,'umpgroupru') or die('Не удалось выбрать базу данных');

    mysqli_query($link,"SET NAMES 'utf8'");
    mysqli_query($link,"SET CHARACTER SET 'utf8'");

    $name = addslashes(htmlspecialchars($_POST['name']));
    $email = addslashes(htmlspecialchars($_POST['email']));
    $textarea = addslashes(htmlspecialchars($_POST['message']));
    $producttype = addslashes(htmlspecialchars($_POST['producttype']));
    $city = addslashes(htmlspecialchars($_POST['city']));
    $phone = addslashes(htmlspecialchars($_POST['phone']));
    $date = date('Y-m-d H:i:s');

    mysqli_query($link,"insert into blackfriday2020 set name='$name', email='$email', message='$message', date='$date', producttype='$producttype', city='$city', phone='$phone'");


    // Читаем настройки config
    require_once('config.php');

    // Подключаем класс FreakMailer
    require_once('lib/MailClass.inc');

    // инициализируем класс
    $mailer = new FreakMailer();

    // Устанавливаем тему письма
    $mailer->Subject = 'Сообщение с лендинга по акции BLACK FRIDAY 2020 (клиенты)';



    // Задаем тело письма
    $mailer->Body = '
    Имя: '.$name.'<br>
    E-mail: '.$email.'<br>
    Город: '.$city.'<br>
    Интересующий товар: '.$producttype.'<br>
    Сообщение: '.$message.'<br>
    Дата отправки: '.date('d.m.Y H:i:s');

    // Добавляем адрес в список получателей
    $mailer->AddAddress('nonerased@mail.ru');
    $mailer->AddAddress('promo@umpgroup.ru');
    //$mailer->AddAddress('samoylov@umpgroup.ru');
    
    $mailer->isHTML(true);
    $mailer->CharSet = 'utf-8';

    if(!$mailer->Send())
    {
      echo 'Не могу отослать письмо!';
    }
    else
    {
      echo 'Спасибо! Ваше сообщение было отправлено, мы ответим Вам в течение 4-х часов.';
    }
    $mailer->ClearAddresses();
    $mailer->ClearAttachments();


























  }
}else {
    echo "* Ошибка, письмо не отправлено";
}

}
?>
