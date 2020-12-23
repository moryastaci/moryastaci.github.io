<html>
<head>
 <title>Запись в БД через форму на php</title>

</head>
<body>
<?php
        include "./DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM docker_database.concerts");
        $stmt->execute();
        
    ?>
        <form action="db.php" method="post">
        <label>Id :</label>
        <input type="text" name="con_id" required="required" placeholder="Please Enter Id"/><br /><br />
        <input type="submit" value="Delete" name="delete"/><br /><br />
        <label>City :</label>
        <input type="text" name="con_city"  placeholder="Please Enter City"/><br/><br />
        <label>Date :</label>
        <input type="text" name="con_date"  placeholder="Please Enter Date"/><br/><br />
        <label>Description :</label>
        <input type="text" name="con_description"  placeholder="Please Enter Desciption"/><br/><br/>
        <input type="submit" value="Submit" name="submit"/><br />
        </form>
<p>
  <a href="./concerts.php">Вернуться назад</a>
<?php
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          $city=$row['city'];
          $date=$row['date'];
          $description=$row['description'];
          echo "<div>" . "<h2>" . $city . "</h2>" . "<br>" . "<h3>" . $date . "</h3>" . "<br>" . "<h4>" . $description . "</h4>" . "</div>";
        }
          ?>
          </p>
</body>
</html>