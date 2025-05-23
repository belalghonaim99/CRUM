<?php
include("connect.php");
if(isset($_POST["create"])){
    // Add New Books
    // Using mysqli_real_escape_string to Escape Special Chars
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    
    // using sql function to insert date into the datebase
    $sql = "INSERT INTO books (title, author, type, description) VALUES ('$title', '$author',
    '$type', '$description')";
    // it's return false or true So We have to check if it returns true or false
    if(mysqli_query($conn, $sql))
    {
        // Redirect User After Adding Book To index.php Using Session Global Var
        session_start();
        $_SESSION["create"] = "Book Added Successfully";
        header("Location:index.php");
    }else{
        die("Something Went Wrong");
    }
}

if(isset($_POST["edit"])){
    // Using mysqli_real_escape_string to Escape Special Chars
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $description = mysqli_real_escape_string($conn, $_POST["description"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);
    
    //Edit And update Books
    // using sql function to Update date into the datebase
    $sql = "UPDATE books SET title = '$title', author = '$author', type = '$type', description='$description' WHERE id=$id";
    // it's return false or true So We have to check if it returns true or false
    if(mysqli_query($conn, $sql))
    {
        // Redirect User After Updating Book To index.php Using Session Global Var
        session_start();
        $_SESSION["update"] = "Book Updated Successfully";
        header("Location:index.php");
    }else{
        die("Something Went Wrong");
    }
}
?>