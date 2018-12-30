 <?php
//pegar os dados do formulario
 $name = $_REQUEST['name'];
 $email = $_REQUEST['email'];
 $phone = $_REQUEST['phone'];
 $msg = $_REQUEST['FB'];
 $assunto = $_REQUEST['assunto'];

 $from  = "contato@moveisstyllus.com.br";


$body = "Mensagem de Contato\r\n";
$body .= "\r\n Nome: $name";
$body .= "\r\n Telefone:$phone";
$body .= "\r\n Email:$email";
$body .= "\r\n Mensagem: \r\n  \r\n $msg";

$header .= "Content-Type: text/html; charset= utf-8 \r\n";
$header = "From: $email Reply-to:$email \r\n";


mail($from, $assunto, $body, $header);
// header("location:contact.php?msg=enviado");
header("location:contact.php?msg=enviado");

?>





