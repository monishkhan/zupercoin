<?php

 $conn = mysqli_connect("localhost", "root", "", "zupercoin");
    if ($conn == FALSE) {
        die("Error:Could not connect" . mysqli_connect_error());
    }
?>