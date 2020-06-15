<html>
<head>
<title>Форма заявки с сайта</title>
<script>history.go(-1)</script>
</head>
<body>
<?php

if(!isset($_POST['fio']) and !isset($_POST['email'])){
 ?> <form action="send.php" method="post">
<input type="text" name="fio" placeholder="Укажите ФИО" required>
<input type="text" name="email" placeholder="Укажите e-mail" required>
<input type="submit" value="Отправить">
</form> <?php
} else {
        $fio = $_POST['fio'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $fio = htmlspecialchars($fio);
        $email = htmlspecialchars($email);
        $message = htmlspecialchars($message);
        $fio = urldecode($fio);
        $email = urldecode($email);
        $message = urldecode($message);
        $fio = trim($fio);
        $email = trim($email);
        $message  = trim($message);
        if (mail("tanasov49@tanasov49.site", "Заявка с сайта", "ФИО:".$fio.".  
        E-mail: ".$email." Сообщение: ".$message ,"From: tanasov49@tanasov49.site \r\n")){  
            echo "Сообщение отправлено. Спасибо вам!"; 
            } else { 
            echo "При отправке сообщения возникли ошибки";
            }

}

?>
</body>
</html>