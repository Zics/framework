<?php
include ("config.php");
include ("functions.php");

if (isset($_GET["tickets"]) && $_GET["tickets"] != null) {
    include("controllers/ticketController.php");
}
else if (isset($_GET["users"]) && $_GET["users"] != null) {
    include("controllers/userController.php");
}
else if (isset($_GET["manage"]) && $_GET["manage"] != null) {
    include("controllers/manageController.php");
}
else {
    include("view/defaultView.php");
}
