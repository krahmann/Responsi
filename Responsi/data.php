<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mann's BarberShop</title>
    <link rel="stylesheet" href="styles.css">
    <?php
	echo "<head><title>Daftar Antrian</title></head>";
	$fp = fopen("order.txt","a+");
	$nam= $_POST['nam'];           
	$antrian = $_POST['antrian'];	   
	$jadwal = $_POST['jadwal'];
	$pesan = $_POST['pesan'];
	fputs($fp,"$nam|$antrian|$jadwal|$pesan\n"); 
	fclose($fp);
    ?>
</head>

<body>
    <header class="header">
        <div class="container container-nav">
            <div class="site-title">
                <h1>Mann's Barbershop</h1>
                <p class="subtitle">Getting your hair ready</p>
            </div>
            <nav>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li><a href="order.html">Order</a></li>
                    <li><a href="gallery.html" class="current-page">Gallery</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="contact.html">Contact</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <main>
        <div class="gallery-header">
            <h1>Orderan Anda Telah Kami Terima</h1>
            <p>Terimakasih Telah Berkunjung</p>
        </div>
    </main>
    <footer class="footer">
        <h3><span id="demo">&copy;</span><a href="#">Mannsbarbershop.com</a></h3>
    </footer>

    <script src="js/index.js"></script>
</body>

</html>
