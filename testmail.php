<?
if (mail("nonerased@mail.ru","test subject", "test body","From: from@mail.ru"))
echo "Сообщение передано функции mail, проверьте почту в ящике.";
else
echo "Функция mail не работает, свяжитесь с администрацией хостинга.";
?>