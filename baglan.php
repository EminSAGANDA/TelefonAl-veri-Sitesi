<?php
$baglanti = @mysqli_connect('localhost', 'root', '1905Gs_!','site')or die("Bağlantı Kurulamadı");
if(!$baglanti){
    die("Baglantı başarısız : " . mysqli_connect_error());
}

?>