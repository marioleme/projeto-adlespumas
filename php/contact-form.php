{"response":"success"}


<?php

    $to = "contao@adlespumas.com.br";
    $from = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $headers = "From: $from";
    $subject = "Uma email do Weboliveira.";

    $fields = array();
    $fields{"name"} = "Nome";
    $fields{"email"} = "Email";
    $fields{"subject"} = "Assunto";
    $fields{"message"} = "Messagem";

    $body = "Aqui está o email ADL Espuma que foi enviado:\n\n"; foreach($fields as $a => $b){   $body .= sprintf("%20s: %s\n",$b,$_REQUEST[$a]); }

    $send = mail($to, $subject, $body, $headers);

?>
