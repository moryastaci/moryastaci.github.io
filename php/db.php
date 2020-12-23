<?php
If(isset($_POST['submit'])){
    try{
        include "./DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("INSERT INTO docker_database.concerts (id, city, date, description)
        VALUES (:con_id, :con_city, :con_date, :con_description)");
        $stmt->bindParam(':con_id', $con_id);
        $stmt->bindParam(':con_city', $con_city);
        $stmt->bindParam(':con_date', $con_date);
        $stmt->bindParam(':con_description', $con_description);

        // insert a row from input
        $con_id = $_POST['con_id'];
        $con_city = $_POST['con_city'];
        $con_date = $_POST['con_date'];
        $con_description = $_POST['con_description'];
        $stmt->execute();

        
    }
        catch(PDOException $e)
        {
            echo $sql . "<br>" . $e->getMessage();
        }
        $conn = null;
        
}
If(isset($_POST['delete'])){
    try{
        include "./DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("DELETE FROM docker_database.concerts WHERE id= :con_id");
        $stmt->bindParam(':con_id', $_POST['con_id'], PDO::PARAM_INT);   
        $stmt->execute();
        $con_id = $_POST['con_id'];
        }
            catch(PDOException $e)
            {
                echo $sql . "<br>" . $e->getMessage();
            }
            $conn = null;
        }
header("Location: admin.php");
        exit;
?>