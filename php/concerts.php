<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Stray Kids</title>
    <style>
       h2 {
    text-align:center;
    padding-top:2%;
    }
    h3 {
      text-align:center;
      padding-top:1%;
      
    }
    hr { width: 30%; 
    height: 5px;
    background-color: brown;
    margin: 0 auto;
    margin-top:1%;
    margin-bottom:2%;
    }
    </style>
  </head>

  <header class="showcase">
    <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger">
      <div></div>
    </div>
    <div class="menu">
      <div>
        <div>
          <ul>
            <li><a href="../index.html">ГЛАВНАЯ</a></li>
            <li><a href="../html/bio.html">БИОГРАФИЯ</a></li>
            <li><a href="../html/disco.html">ДИСКОГРАФИЯ</a></li>
            <li><a href="../html/mv.html">КЛИПЫ</a></li>
            <li><a href="./concerts.php">КОНЦЕРТЫ</a></li>
            <li><a href="../html/label.html">ЛЕЙБЛ</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container showcase-inner">
    <h2>КОНЦЕРТЫ</h2>
    <p class="bio" style="width:70%;">Stray Kids успели побывать в двух мировых турах, а также одном американском. 
      Эта страница предназначена для короткой информации о предстоящих концертах.<br><br>
      В связи с ситуацией в мире некоторые концерты могут отмениться либо перенестись, 
      информация ожидается в январе 2021 года.</p>
    <p><a href="../js/pass.html"><img src="../img/twi.png" alt="logo" width="8%" height="8%"></a></p>
</div>
</header>
  <body style="font-size:14px;"> 
  <h2 style="text-align:center; font-size:28px;">ДАТЫ</h2>
  <?php
        include "./DbConnect.php";
        $db = new DBConnect();
        $conn = $db->connect();
        $stmt = $conn->prepare("SELECT * FROM docker_database.concerts");
        $stmt->execute();
        
    ?>
  <?php
          while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
          $city=$row['city'];
          $date=$row['date'];
          $description=$row['description'];
          echo "<div>" . "<h2>" . $city . "</h2>" . "<br>" . "<h3>" . $date . "</h3>" . "<h3>" . $description . "</h3>" . "<hr>" . "</div>";
        }
          ?>
    <!--<h1>
      <?php
      echo phpversion();
      ?> -->
  </body>
  <footer>
    <div class="social"><a href="https://www.instagram.com/realstraykids/"><img  src="../img/inst.png" alt="logo" width="8%" height="8%"></a>
    <a href="https://www.youtube.com/channel/UC9rMiEjNaCSsebs31MRDCRA"><img src="../img/yt.png" alt="logo" width="8%" height="8%"></a>
    <a href="https://twitter.com/stray_kids"><img src="../img/twi.png" alt="logo" width="8%" height="8%"></a>
    <a href="https://www.vlive.tv/channel/D7A4F1"><img src="../img/vl.png" alt="logo" width="8%" height="8%"></div></a>
    <p>&copy;  06.12.2020 Moria Anastasiia</p>
  </footer>
</html>