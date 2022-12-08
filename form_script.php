<?php

    $db = mysqli_connect("localhost", "root", "", "student_info");

    if(!$db)
    {
        echo "Database not connceted";
    }
    else
    {
        echo "Database connected" . "<br>";
    }

    $st_id = $_POST['id'];
    $st_name = $_POST['name'];

    $sql = "INSERT INTO student_table(id, student_name) VALUES ($st_id, '$st_name')";

    if(mysqli_query($db, $sql))
    {
        echo "Information inserted";
    }
    else
    {
        echo "error" . mysqli_error($db);
    }

?>