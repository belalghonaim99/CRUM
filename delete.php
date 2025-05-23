<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    include("connect.php");
    $sql = "DELETE FROM books WHERE id=$id";
    if(mysqli_query($conn, $sql))
    {
        // Redirect User After Deleting Book To index.php Using Session Global Var
        session_start();
        $_SESSION["delete"] = "Book Deleted Successfully";
        header("Location:index.php");
    }
}
?>