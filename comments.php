<?php

    // connect to the database
    $db = mysqli_connect('localhost', 'root', '', 'comments');

    // create new comment
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

    //delete comments
    if(isset($_POST['delete_comment'])){
        $id = $_POST['id'];

        $sql_delete = "DELETE FROM comments WHERE id='$id'"; 
        if(!mysqli_query($db, $sql_delete)){
            echo "Error occured: ".mysqli_error($db);
        }
    }

    //edit comments
    if(isset($_POST['update_comment'])){
        $id = $_POST['id'];
        $comment = $_POST['updated_comment'];

        $sql_update = "UPDATE comments
        SET comment = '$comment'
        WHERE id = '$id'"; 
        
        
        if(!mysqli_query($db, $sql_update)){
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



?>