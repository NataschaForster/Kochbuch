<?php

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'comments');

    if(isset($_POST['submit_comment'])){
        $comment = $_POST['comment'];
        $name = $_POST['username'];
        $recipe = $_POST['recipe'];

        // make new db entry
        $sql_insert = "INSERT INTO comments (username, comment, recipe) VALUE ('$name', '$comment', '$recipe')";
        if(!mysqli_query($db, $sql_insert)){
            echo "Error occured: ".mysqli_error($db);
        }
    }
   
    //read whole datatable
    $sql_1 = "SELECT * FROM comments WHERE recipe='1'";
    $result_1 = mysqli_query($db, $sql_1);

    $sql_2 = "SELECT * FROM comments WHERE recipe='2'";
    $result_2 = mysqli_query($db, $sql_2);

    $sql_3 = "SELECT * FROM comments WHRE recipe='3'";
    $result_3 = mysqli_query($db, $sql_3);

    $sql_4 = "SELECT * FROM comments WHERE recipe='4'";
    $result_4 = mysqli_query($db, $sql_4);

    //delete comments

    //edit comments
?>