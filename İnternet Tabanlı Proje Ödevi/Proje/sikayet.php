<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Anasayfa</title>
    <link rel="stylesheet"href="style.css"> 
    
    
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    
    <link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="mdrsheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">

    
    </head>
    <body>
        
    <div class="wrapper">
        <!--Top menu -->
        <div class="sidebar">
            <ul>
                <li>
                    <a href="%C4%B0ndex.php">
                        <span class="icon"><i class="fas fa-home"></i></span>
                        <span class="item">Ana Sayfa</span>
                    </a>
                </li>
                <li>
                    <a href="hakkimizda.php">
                        <span class="icon"><i class="fas fa-desktop"></i></span>
                        <span class="item">Hakkımızda</span>
                    </a>
                </li>
                <li>
                    <a href="%C4%B0nsanlar.php">
                        <span class="icon"><i class="fas fa-user-friends"></i></span>
                        <span class="item">Insanlar</span>
                    </a>
                </li>
                <li>
                    <a href="iletisim.php">
                        <span class="icon"><i class="fas fa-tachometer-alt"></i></span>
                        <span class="item">İletişim</span>
                    </a>
                </li>
                <li>
                    <a href="sikayet.php">
                        <span class="icon"><i class="fas fa-database"></i></span>
                        <span class="item">Şikayet</span>
                    </a>
                </li>
                                <li>
                    <a href="kayit.php">
                        <span class="icon"><i class="fas fa-user-shield"></i></span>
                        <span class="item">Hasta Kayıt</span>
                    </a>
                </li>
                <li>
                    
                </li>
                <li>
                   
                </li>
            </ul>
          
        </div>

    </div>
  <script>

  </script>
    
        <div id="social">
            <font>YARDIM ELİ  |    <span> Bir Elde Sen Uzat..</span></font>
        
      
        </div>
        <div id="container">
        
            <header>
                <img id="headerResim" src="img/1.jpg"alt="">
                <div id="centered">DESTEK OL</div>
                </header>
            
            <section>
             
            
            <nav>
                <ul>
                 
                </ul>
                
                
                
                </nav>
            <main>
                <h1>Şikayet</h1>
                <br>
                <center>

                <h2>Şikayet Formu</h2>


                <form action="sikayet.php" method="post">
                    <br>
  
                    <label for="fname">E-mail:</label><br>

                    <input type="text" id="fname" name="fname" value="123456789@example.com"><br><br>
  
                    <label for="lname">Şikayetiniz:</label><br>
  
                    <input type="text" id="textboxid" name="lname" value=""><br><br><br>
  
                    <input type="submit" value="Submit" name="button">

                </form> 
                    <!--
                <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>--></center>
<!--
<center><h2> E-mail:</h2>
<br>
            <textarea name="mesaj" rows="1" cols="60">
            </textarea>
             <!--</fieldset>
</form>
        <br>
<br>


<h2> Şikayetiniz:</h2><br>
            <textarea name="mesaj" rows="15" cols="60">
            </textarea>
            </fieldset>
        </form>
        <br></center>
               -->
                </main>
                
            
            </section>
            <!--<div>
            <footer>Tüm hakları Saklıdır &copy; | 2020 </footer>
                </div>-->
        </div>
    
    </body>

</html>


<?php

include("baglanti.php");
if(isset($_POST["fname"], $_POST["lname"]))
{

    $email=$_POST["fname"];
    $sikayet=$_POST["lname"];
}


if(isset ($_POST["button"])){
$ekle="INSERT INTO sikayet(email, sikayet) VALUES ('".$email."','".$sikayet."')";

if($baglan->query($ekle)===TRUE)
{
    
    echo "<script>alert('Şikayetiniz alınmıştır')</script>";
    
}
}

?>
