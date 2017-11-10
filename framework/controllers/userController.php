<?php

if ($_GET["users"] == "create") {
    include ("views/createUserView.php");
}

else if ($_GET["users"] == "edit") {
    include ("views/editUserView.php");
}


else if ($_GET["users"] == "list") {
    include ("views/listUserView.php");
}

else if ($_GET["users"] == "createAction") {
    include ("do/users/createAction.php");
}

else{
    echo "probleme controleur utilisateurs";
}