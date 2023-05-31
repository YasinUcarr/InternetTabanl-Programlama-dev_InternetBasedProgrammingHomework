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
               <!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 98%;

}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #f2b273;
  color: white;
}
</style>
</head>
<body>

<h1>İnsanlar</h1>

<center>
<table id="customers">

  <tr>
   <th>Ad</th>
    <th>Soyad</th>
    <th>Hastalık</th>
    <th>İletişim</th>
    <th>Adres</th>
  </tr>
  <?php

include("baglanti2.php");

$sec="Select * From  hastalar";
$sonuc=$baglan2 ->query($sec);

if($sonuc->num_rows>0)
{
    while($cek=$sonuc->fetch_assoc())
    {
        echo "
    <tr>
        <td>".$cek['ad']."</td>
        <td>".$cek['soyad']."</td>
        <td>".$cek['hastalık']."</td>
        <td>".$cek['iletişim']."</td>
        <td>".$cek['adres']."</td>
    </tr>
        
        ";
    }
}
    else
    {
     echo "Veritabanında kayıtlı hiçbir veri bulunamamıştır";  
    }



?>
  


</table>
</center>

</body>
</html>



                
                
                </main>
                
            
            </section>
            <!--<div>
            <footer>Tüm hakları Saklıdır &copy; | 2020 </footer>
                </div>-->
        </div>
    
    </body>

</html>
