<?php 
include("baglan.php");
?>
<html>
<body bgcolor = "#00ff00"><center>
<font color ="#0000ff"> <h1>Kayıt Olma</h1></font>

</html>
<form action="" method="POST">
                            <input class="form-control" type="text" name="ad" placeholder="Ad" required>
                          <br> <br> <input class="form-control" type="text" name="soyad" placeholder="Soyad" required> <br>
                          <br>  <br> <input class="form-control" type="email" name="email" placeholder="E-mail Adresi" required><br>
                           <br> <br> <input class="form-control" type="password" name="sifre" placeholder="Sifre" required> <br>
                          <br> <br>  <div class="form-button"> <br>
                           <br> <br>     <button id="submit" type="submit" class="ibtn"><font color ="#0000ff">Kayıt Ol</font></button><br>
                            </div>
                        </form>
						<?php
if($_POST){
    $ad = $_POST['ad'];
    $soyad = $_POST['soyad'];
    $email = $_POST['email'];
    $sifre = $_POST['sifre'];
    $ekle = "INSERT INTO kullanicilar (ad, soyad, email, sifre) VALUES ('$ad', '$soyad', '$email','$sifre')";
    $sorgulama = mysqli_query($baglanti, $ekle);
    if ($ekle != TRUE){
        echo "Kaydınız sağlanamadı";
    }
    else{
        header("Location:log1.php");
    }
}
?>