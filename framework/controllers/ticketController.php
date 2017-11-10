<?php

if ($_GET["tickets"] == "add") {
    include ("views/addTicketView.php");
}

else if ($_GET["tickets"] == "edit") {
    include ("views/editTicketView.php");
}

else{
    echo "probleme controleur tickets";
}