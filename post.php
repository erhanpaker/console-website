<?php
/**
 * Created by PhpStorm.
 * User: erdiertas
 * Date: 21.01.2018
 * Time: 16:51
 */

function post($name)
{
    if (isset($_POST[$name])) {
        return $_POST[$name];
    } else {
        return null;
    }
}

if (isset($_POST)) {
    $name = post('name');
    $email = post('email');
    $phone = post('tel');
    $message = post('message');
    $from = 'Contact Form';
    $to = 'iletisim@enverertas.com,erdiertas@gmail.com';
    $subject = 'Message from Contact Demo ';

    $body = "From: $name\n E-Mail: $email\n Phone: $phone\n Message:\n $message";

    if ($name && $email && $phone && $message) {
        if (mail($to, $subject, $body, $from)) {
            $result = '202';
        } else {
            $result = '500';
        }
        echo $result;
    } else {
        echo '400';
    }
}