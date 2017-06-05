<?php

    session_start();

    include "config.php";

    if (isset($_SESSION['user_id'])) {
        echo "zalogowałeś się jako <b>".$user_name."</b><br />";
        echo "E-mail: ".$user_email."<br>
                Data dołączenia: ".$user_date."<br>";
        echo "<a href=\"logout.php\">[LOGOUT]</a>";
    }
    else {

				if(isset($_GET['wykonano'])) {
				echo "Konto zostało utworzone! Możesz teraz sie zalogować.";
				}
        echo "<form method=\"POST\" action=\"login.php\">
                <input type=\"text\" name=\"login\"><br>
                <input type=\"password\" name=\"pass\"><br>
                <input type=\"submit\" name=\"log\" value=\"Login\">
              </form>";
				echo "<a href=\"register.php\">Rejestracja</a>";

    }

?>
