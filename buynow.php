<!DOCTYPE html>
<html>
    <head>
        <title>GUESTBOOK|AremaFansStore</title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="guestbook.style.css"/>

        <!--Start Header-->
        <a name="up"></a>
        <img src="image/Arema.jpg" width="100%">
        <!--End Header-->

        <!--Start Navbar-->
        <center>
            <div class="topnav">
                <a href="index.html">HOME</a>
                <a href="product.html">PRODUCT</a>
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
                <label>Address</label>
                <input type="text" name="faddress">
            </div>
            <br>

            <div>
                <label>Type of Ordered Product</label>
                <input type="text" name="forderedproduct">
            </div>
            <br>

            <div>
                <label>Ordered Product Color</label>
                <input type="text" name="fcolorproduct">
            </div>
            <br>

            <div>
                <label>Delivery Service</label>
                <input type="text" name="fdelivery">
            </div>
            <br>

            <div>
                <label>Payment Method</label>
                <input type="text" name="fpayment">
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
                if(isset($_POST['faddress'])){
                    $address = $_POST['faddress'];
                    echo "Address : $address";
                    echo "<br>";
                }
                if(isset($_POST['forderedproduct'])){
                    $orderedproduct = $_POST['forderedproduct'];
                    echo "Type of Ordered Product : $orderedproduct";
                    echo "<br>";
                }
                if(isset($_POST['fcolorproduct'])){
                    $colorproduct = $_POST['fcolorproduct'];
                    echo "Ordered Product Color : $product";
                }
                if(isset($_POST['fdelivery'])){
                    $delivery = $_POST['fdelivery'];
                    echo "Delivery : $delivery";
                }
                if(isset($_POST['fpayment'])){
                    $payment = $_POST['fpayment'];
                    echo "Payment : $payment";
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
        <p align="center"><font face="Tw Cen MT Condensed Extra Bold"><b>Copyright @2022 Hafizh Sandika Akbar</b></font></p>
        <div class="content2">
            <p align="right"><a href="#up"><font face="MV Boli" color="black">Back To Top</font></a></p>
        </div>
         <!--End Footer-->
    </body>
</html>