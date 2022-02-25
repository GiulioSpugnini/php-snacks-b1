<?php
$name = $_GET ? $_GET['name'] : '';
$mail = $_GET ? $_GET['mail'] : '';
$age = $_GET ? $_GET['age'] : '';
echo "$name $mail $age"; 
if(strlen($name)>3 && str_contains($mail,'.') && str_contains($mail,'@') && !is_nan($age)){
    echo 'Accesso riuscito';    
}
else echo 'Accesso negato';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snak1</title>
</head>

<body>

</body>

</html>