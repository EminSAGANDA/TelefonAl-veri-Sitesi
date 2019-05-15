<?php include("baglan.php"); ?>
<html>
<body>
<form action="" method="POST">
                            <input type="text" name="email" placeholder="Enter your email address...">
                            <input type="password" name="sifre" placeholder="Password">
                            <div class="form-button">
                                <button id="submit" type="submit" >Login</button>
                            </div>

                            </body>
                            </html>
                            <?php include("baglan.php"); ?>

<?php
session_start();

ob_start();
if($_POST){
    $sql = "select * from kullanicilar where email='$_POST[email]' and sifre='$_POST[sifre]'";
    $sorgu = mysqli_query($baglanti, $sql);
    if (mysqli_num_rows($sorgu) >= 1) {
        $_SESSION["login"] = "true";

        $_SESSION["email"] = $email;

        $_SESSION["sifre"] = $sifre;
        header("Location:/site/index1.html");
    }
    else{
        echo "kullanıcı bilgileri eşleşmedi";
    }
}

?>