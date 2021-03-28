<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'phpmailer/src/Exception.php';
    require 'phpmailer/src/PHPMailer.php';

    $mail = new PHPMailer(true);
    $mail->CharSet = 'UTF-8';
    $mail->setLanguare('ru', 'phpmailer/language/');
    $mail->IsHTML(true);

    //От кого письмо
    $mail->setFrom('aleksander.kovalev1@gmail.com', 'Фрилансер по жизни');
    //Кому отправить
    $mail->addAddress('dominorog323@gmail.com');
    //Тема письма
    $mail->Subject = 'Заказ наушников';

    //Тело письма
    $body = '<h1>Новое письмо с заказом!</h1>';

    if(trim(!empty($_POST['name']))){
        $body.='<p><strong>Имя:</strong> '.$_POST['name'].'</p>'
    }
    if(trim(!empty($_POST['email']))){
        $body.='<p><strong>E-mail:</strong> '.$_POST['email'].'</p>'
    }
    if(trim(!empty($_POST['phone']))){
        $body.='<p><strong>Телефон:</strong> '.$_POST['phone'].'</p>'
    }
    if(trim(!empty($_POST['message']))){
        $body.='<p><strong>Сообщение:</strong> '.$_POST['message'].'</p>'
    }

    $mail->Body = $body;

    //Отправляем
    if(!mail->send()) {
        $message = 'Ошибка';
    } else {
        $message = 'Данные отправлены!';
    }

    $response = ['message' => $message];

    header('Content-type':application/json');
    echo json_encode($responce);