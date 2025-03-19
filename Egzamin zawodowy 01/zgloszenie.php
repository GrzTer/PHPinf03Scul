<?php
    if (isset($_POST["lowisko"]) && isset($_POST["data"]) && isset($_POST["sedzia"])) {
        $lowisko = $_POST["lowisko"];
        $data = $_POST["data"];
        $sedzia = $_POST["sedzia"];
        $db_connect = mysqli_connect('localhost', 'root', '', 'wedkarstwo4bt');
        $kwerenda = "INSERT INTO zawody_wedkarskie VALUES (NULL,0,$lowisko,'$data','$sedzia');";
        mysqli_query($db_connect, $kwerenda);
        mysqli_close($db_connect);
    }
    else {
        echo "Błędne wywołanie strony";
    }
?>