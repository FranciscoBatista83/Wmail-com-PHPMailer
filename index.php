<?php
include('vendor/autoload.php');

//Importa as classes do PHPMailer para o espaço de nomes global
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Carrega o autoloader do Composer
require 'vendor/autoload.php';

//Cria uma instância; passando `true` permite o uso de exceções
$mail = new PHPMailer(true);

try {
    //Configurações do servidor SMTP (Hotmail/Outlook)
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                         //Desabilita a depuração (coloque DEBUG_SERVER para testes)
    $mail->isSMTP();                                            //Define que o envio será por SMTP
    $mail->Host       = 'smtp.gmail.com';                   //Servidor SMTP google (gmail)
    $mail->SMTPAuth   = true;                                   //Habilita autenticação SMTP
    $mail->Username   = '';                                   //Seu endereço de e-mail
    $mail->Password   = '';                                        //Sua senha
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Criptografia TLS (mais seguro)
    $mail->Port       = 587;                                    //Porta para TLS (587)

    //Destinatários
    $mail->setFrom('email@email', 'Francisco Batista');  //Seu e-mail como remetente
    $mail->addAddress('email@email', 'Destinatário');     //E-mail do destinatário
    $mail->addReplyTo('email@email', 'Francisco Batista');  //Respostas irão para este e-mail

    //Conteúdo do e-mail
    $mail->isHTML(true);                                        //E-mail no formato HTML
    $mail->Subject = 'Teste de envio de e-mail com PHPMailer';  
    $mail->Body    = 'Este é um teste de envio de e-mail usando <b>gmail</b> com PHP.';
    $mail->AltBody = 'Este é o corpo do e-mail em texto simples.';

    //Envia o e-mail
    $mail->send();
    echo 'E-mail enviado com sucesso!';
} catch (Exception $e) {
    echo "Erro ao enviar e-mail: {$mail->ErrorInfo}";
}
?>
