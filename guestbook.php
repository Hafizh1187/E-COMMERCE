<!DOCTYPE html>
<html>
    <head>
        <title>GUESTBOOK|AREMA FANS STORE</title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="guestbook.style.css"/>

        <!--Start Header-->
        <a name="up"></a>
        <img src="Arema.jpg" width="100%">
        <!--End Header-->

        <!--Start Navbar-->
        <center>
            <div class="topnav">
                <a href="home.html">HOME</a>
                <a href="about.html">ABOUT</a>
                <a href="#">PRODUCT</a>
                <a href="guestbook.php">GUESTBOOK</a>
            </div>
            <br>
        </center>
        <!--End Navbar-->

        <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <center>
            <div>
                <label>Name</label>
                <input type="text" name="fname">
            </div>
            <br>

            <div>
                <label>Email</label>
                <input type="email" name="femail">
            </div>
            <br>

            <div>
                <label>Job</label>
                <input type="text" name="fjob">                
            </div>
            <br>

            <div>
                <label>Address</label>
                <input type="text" name="faddress">
            </div>
            <br>

            <div>
                <label>What product do you like from Arema Fans Store?<label>
                <input type="text" name="fproduct">
            </div>
            <br>

            <div>
                <input type="submit" value="Submit">
            </div>
            <center>
        </form>

        <div>
            <?php
                if(isset($_POST['fname'])){
                    $name = $_POST['fname'];
                    echo "Name : $name";
                    echo "<br>";
                }
                if(isset($_POST['femail'])){
                    $email = $_POST['femail'];
                    echo "Email : $email";
                    echo "<br>";
                }
                if(isset($_POST['fjob'])){
                    $job = $_POST['fjob'];
                    echo "Job : $job";
                    echo "<br>";
                }
                if(isset($_POST['faddress'])){
                    $address = $_POST['faddress'];
                    echo "Address : $address";
                    echo "<br>";
                }
                if(isset($_POST['fproduct'])){
                    $product = $_POST['fproduct'];
                    echo "Preffered Product : $product";
                }
            ?>
        </div> 

        <h4 align="center" id="tanggal"></h4>
        <div class="jam_digital" id="jam_digital">
            <div class="kotak">
                <p id="jam"></p>
            </div>
            <div class="kotak">
                <p id="menit"></p>
            </div>
            <div class="kotak">
                <p id="detik"></p>
            </div>
        </div>

        <script type="text/javascript">
            var tgl = new Date();
            document.getElementById("tanggal").innerHTML = "Waktu Akses "+tgl;
            window.setTimeout("waktu()", 1000);
            function waktu(){
                var waktu = new Date();
                setTimeout("waktu()", 1000);
                document.getElementById("jam").innerHTML = waktu.getHours();
                document.getElementById("menit").innerHTML = waktu.getMinutes();
                document.getElementById("detik").innerHTML = waktu.getSeconds();
            }
        </script>

        <!--Start Footer-->
        <p align="center"><font face="Tw Cen MT Condensed Extra Bold"><b>Copyright @2022 Hafizh Sandika Akbars</b></font></p>
        <div class="content2">
            <p align="right"><a href="#up"><font face="MV Boli" color="black">Back To Top</font></a></p>
        </div>
         <!--End Footer-->
    </body>
</html>