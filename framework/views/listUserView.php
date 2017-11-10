

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>List users page</title>
</head>
<body>
Ceci est la liste des utilisateurs.

<?php messageFlash();?>

<?php
    include ("models/users.php");
    foreach (getAllUsers($bdd) as $key => $value){
        echo $key.' '.$value;
    }

?>

</body>
</html>