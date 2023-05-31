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
                <h1>Hasta Kayıt</h1>
                <br>
                <center>
                    

                <h2>Kayıt Formu</h2>

                
 
                <form action="kayit.php" method="post">
                
                <tr>
                <td>
                   <label for="fname">Ad</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                </td>
                <td>
                    <input type="text" id="fname" name="firstname" placeholder="Adınız"><br></td>
                </tr>

  
                <tr>
                <td><label for="lname">Soyad</label></td>&nbsp;&nbsp;
                <td><input type="text" id="lname" name="soyad" placeholder="Soyadınız"><br></td>
                </tr>

               <tr>
                <td>
                &nbsp;&nbsp;&nbsp;&nbsp;  <label for="hastalik">Hastalık</label>&nbsp;&nbsp;&nbsp;
                </td>
                <td>
                

  
                <select id="hastalik" name="hastalık" >
    
                <option value="İskemik kalp hastalığı">İskemik kalp hastalığı</option>
    
                <option value="Serebro-vasküler hastalık">Serebro-vasküler hastalık</option>
    
                <option value="Hipertansif hastalıklar">Hipertansif hastalıklar</option>
    
                <option value="Diğer kalp hastalıkları">Diğer kalp hastalıkları</option>
    
                <option value="Gırtlak ve soluk borusu/bronş/akciğerin kötü huylu tümörü">Gırtlak ve soluk borusu/bronş/akciğerin kötü huylu tümörü</option>
    
                <option value="Lenfoid ve hematopoetik kötü huylu tümör">Lenfoid ve hematopoetik kötü huylu tümörü</option>
    
                <option value="Midenin kötü huylu tümörü">Midenin kötü huylu tümörü</option>
    
                <option value="Kolonun kötü huylu tümörü">Kolonun kötü huylu tümörü</option>
    
                <option value="Pankreasın kötü huylu tümörü">Pankreasın kötü huylu tümörü</option>
    
                <option value="Alzheimer">Alzheimer</option>
    
                <option value="Diyabet">Diyabet</option>
    
                <option value="Tüberküloz(Verem)">Tüberküloz(Verem)</option>

                
            </select>
            <br>
            
            </td>
</tr>
                
            <tr>

             <td><label for="telefon">İletişim</label></td>
            <td><input type="text" id="tel" name="telefon" placeholder="Telefon numaranız"><br></td>
                </tr>
                <tr>
            <td><label for="adres">Adres</label></td>&nbsp;&nbsp;&nbsp;
            <td><input type="text" id="lname" name="adres" placeholder="Adresinizi giriniz"><br></td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </tr>
            <tr>
            <td><input type="submit" value="Kaydol" name="button"></td>
            </tr>
            
        </form>
        
                    <!--
                <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>--></center>
<!--
<center><h2> E-mail:</h2>
<br>
            <textarea name="mesaj" rows="1" cols="60">
            </textarea>
            </fieldset>
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

include("baglanti2.php");
if(isset($_POST["firstname"], $_POST["soyad"], $_POST["hastalık"], $_POST["telefon"], $_POST["adres"]))
{

    $ad=$_POST["firstname"];
    $soyad=$_POST["soyad"];
    $hastalık=$_POST["hastalık"];
    $iletişim=$_POST["telefon"];
    $adres=$_POST["adres"];
}


if(isset ($_POST["button"])){
$ekle="INSERT INTO hastalar(ad, soyad, hastalık, iletişim, adres) VALUES ('".$ad."','".$soyad."','".$hastalık."','".$iletişim."','".$adres."')";

if($baglan2->query($ekle)===TRUE)
{
    
    echo "<script>alert('Kaydınız alınmıştır')</script>";
    
}
}

?>
