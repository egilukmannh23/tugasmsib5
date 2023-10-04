<?php
include_once 'top.php';
include_once 'menu.php';
?>

<div>
    <div class="container-fluid px-4">
        <!-- <h1>Selamat Datang</h1> -->

        <?php
        error_reporting(0);

        //membuat logik sederhana untuk mengarahkan url ke file
        //yang mempunyai extension.php
        $url = $_GET['url'];
        if ($url == 'dashboard'){
            include_once 'dashboard.php';
        } else if (!empty($url)){
            include_once "" .$url. ".php";
        } else if ($url == 'contact'){
            include_once 'contact.php';
        }else if ($url == 'data'){
            include_once 'data.php'; 
        }else if ($url == 'tentang'){
            include_once 'tentang.php'; 
        }else if ($url == 'login'){
            include_once 'login.php'; 
        }   else {
           include_once 'dashboard.php';
        }
        ?>
    </div>
</div>

<?php
include_once 'botom.php';
?>