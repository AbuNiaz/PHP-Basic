<?php
// include connection
include 'db_connection.php';

// check if url contain id, if not redirect to index page
if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
    // get id from url
    $id = trim($_GET["id"]);

    $sql = "DELETE FROM students WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        
        echo "<script>window.location.href='http://localhost/Phpbasic/';</script>";
        exit();
    }
    // close connection
    mysqli_close($conn);
} else {
    
    echo "<script>window.location.href='http://localhost/Phpbasic/';</script>";
}
