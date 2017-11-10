<?php

if ($_GET["manage"] == "new") {
    include ("views/newManageView.php");
}

else if ($_GET["manage"] == "edit") {
    include ("views/editManageView.php");
}

else{
    echo "probleme controleur gestion";
}