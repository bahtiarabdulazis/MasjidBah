<?php
require 'koneksi.php';
$all_data = query("SELECT * FROM data_donatur");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masjid Wikrama</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/f3a7a5168b.js" crossorigin="anonymous"></script>
</head>
<body>
    <div id="header">
        <div class="container-atas">
            <nav>
              <div class="header-1">
                <img src="img/logo.jpg" class="logo_1">
                <p>SMK WIKRAMA BOGOR</p><br>
                <ul id="sidemenu">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#cara_melakukan">Cara Waqaf</a></li>
                    <li><a href="#data">Data Waqaf</a></li>
                    <li><a href="#galeri">Gallery</a></li>
                    <li><a href="https://smkwikrama.sch.id/" target="_blank">Web Wikrama</a></li>
            </nav>
            </div>
            <section class="banner-1"></section>
            <script type="text/javascript">
              window.addEventListener("scroll", function(){
                var header = document.querySelector("header");
                header.classList.toggle("sticky", window.scrolly > 0);
              })
            </script>
            <div class="header-text-1">
                <br><br><br>
                <p>Masjid Besar SMK Wikrama Bogor </p>
                <h1>Mari <span> Tingkatkan</span><br><span>Keimanan </span>Masyarakat<br>SMK Wikrama Bogor</h1>
                    <div class="foto">
                    </foto><img src="img/mj1.jpg">
                    </div><br><br>
                    <a href="tambah.php"class="button-1">Beri Bantuan Shodaqoh</a>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br>
    </head>
<body>
  <div class="card-2">
    <div class="section-2">
      <div>
      <h3>Total Dana</h3>
            <div class="value-2" id="total-target">
              <h1>900.000,00</h1>
            </div>
        </div>
      <div>
      <h3>Total Dana Terkumpul</h3>
          <div class="value-2" id="total-dana">
                <?php
                    $total_dana = 0;
                    $tota_harus = 1000.000;
                    $query = "SELECT nominal FROM data_donatur";
                    $result = mysqli_query($db, $query);
    
                    while ($row = mysqli_fetch_assoc($result)){
                    $total_dana += $row['nominal'];
                    }
                    $format_nominal = number_format($total_dana, 3, '.', '.');
                    $bar = ($format_nominal / $tota_harus) * 100;
                ?>
                <?php
                    echo '<h1 style="font-size: 35px;  color:black"> Rp: '. $format_nominal .',00</h1>';
                ?>
          </div>
      </div>
      <div>
          <h3>Total Donatur</h3>
            <div class="value-2" id="total-donatur">
              <div class="total-donatur">
                <?php $angka = 0; ?>
                <?php foreach ($all_data as $data) : ?>
                <?php $angka++ ?>
                <?php endforeach; ?>
                <h1><?= $angka; ?></h1>
              </div>
              </div>
        </div>
      </div>
      <hr>
    <div class="display: flex; justify-content: center">
      <div class="progress-bar-2" style="width: 90%; background-color: #999999; height: 40px; border-radius: 5px; overflow: hidden; text-align: center; margin-top:">
      <div class="progress-2" style=" width: <?php echo $bar ?? 0 ?>%;"></div>
      <span class="progress-text-2" style="position: absolute; float:top; margin-top:195px; top: 112%; left: 90%; transform: translate(-50%, -50%); color: white; "><?php echo '<h1 style="color:black">' . $bar . '%<h1>'; ?></span>
    </div>
</div>
</div>
          <div class="scroll">
            <marquee behavior="scroll" direction="left" scrollamount="20" style=" width: 100%; white-space: nowrap;overflow: hidden;">
              <?php foreach ($all_data as $data) { ?>
                <h3 style="display: inline-block; margin: 0; padding-right: 10px; color: black;">
                  <?= $data["nama_donatur"]; ?>
                  <h3 style="display: inline-block; margin: 0; padding-right: 10px; color: black;">-</h3>
                </h3>
                  <h3 style="display: inline-block; margin: 0; padding-right: 50px; color: yellow;">
                  <?= $data["kategori"]; ?>
                  Rp. <?= number_format($data['nominal'], 3, '.', ','); ?>
                    </h3>
                <?php } ?>
          </marquee>
        </div>
    </div>
  </div>
  </div>
    
  <br><br><br>
    <div id="manfaat">
    <div class="header-text-1">
        <div class="text1"><h1><span>Manfaat </span>Wakaf, infaq<br> shodaqoh.</h1><br>
        <p>Berikut adalah beberapa keutamaan wakaq, infaq shodaqoh yang akan anda dapatkan.</p><br><br></div>
        </div>
        </div>
        <div class="card1">
    <img src="img/logo1.jpg" alt="Logo" class="logo1">
    <div class="name-1">Menjadikan hati lebih tenang</div>
    <div class="contact-1">
    Kami memberikan harga yang terbaik dibandingkan dengan Kompetitor kami
    </div>
  </div>
  <div class="card1">
    <img src="img/logo3.jpg" alt="Logo" class="logo1">
    <div class="name-1">Menjauhkan dari bahaya</div>
    <div class="contact-1">
    Rasulullah SAW pernah bersabda: “Bersegeralah untuk bersedekah, karena musibah dan bencana tidak bisa mendahului sedekah."
    </div>
  </div>
<br>
  <div class="card1">
    <img src="img/logo2.jpg" alt="Logo" class="logo1">
    <div class="name-1">Terbukanya pintu rezeki </div>
    <div class="contact-1">
    Allah SWT akan membuka pintu rezeki dari arah yang tidak dikira sebelumnya.
    </div>
  </div>
  <div class="card1">
    <img src="img/logo4.jpg" alt="Logo" class="logo1">
    <div class="name-1">pahala yang tak terputus</div>
    <div class="contact-1">
    Ini akan menolong kita di akhirat nantinya, juga dapat menyelamatkannya dari api neraka.
    </div>
  </div>
  <div class="foto2">
                    </foto><img src="img/slmn.jpg">
                    </div>
<br><br><br>
        <div id="cara_melakukan">
    <div class="header-text-1">
      <br><br><br><br>
    <div class="text1"><h1><span>Cara Melakukan </span> Wakaf, infaq <br> shodaqoh.</h1><br>
        <p>Berikut adalah Cara melakukan wakaq, infaq shodaqoh untuk membantu pembangunan masjid besar SMK Bogor</p><br><br><br></div>
        </div>
        </div>
        <div class="card2">
            <h1>01</h1>
    <div class="name-1">Isi Form data diri</div>
    <div class="contact-1">
    Isikan form pengisian yang disediakan di form data diri, isikan dengan data diri anda dengan teliti.
    </div>
  </div>
  <div class="card2">
    <h1>02</h1>
    <div class="name-1">Isikan nominal shodaqoh</div>
    <div class="contact-1">
    Isikan nominal yang akan anda shodaqohkan, pastikan isi nominal dengan seiklasnya tanpa ada paksaan apapun.
    </div>
  </div>
  <div class="card2">
  <h1>03</h1>
    <div class="name-1">upload bukti pembayaran</div>
    <div class="contact-1">
    Pilih motode pembayaran dan upload bukti pembayaranya.
    </div>
  </div>
  <div class="card2">
  <h1>04</h1>
    <div class="name-1">Verifikasi Pembayaran</div>
    <div class="contact-1">
    Pembayaran anda akan di verifikasi oleh admin dan jika terverifikasi nama anda akan tampil.
    </div>
  </div>

        <div id="data">
    <div class="header-text-1">
    <br><br><br><br>
    <div class="text1"><h1><span>Data donatur </span> Wakaf, infaq <br> shodaqoh.</h1><br>
        <p>Berikut adalah data donatur wakaf, infaq shodaqoh untuk masjid besar SMK Wikrama Bogor</p><br><br><br></div>
        <table class="table">
    <thead>
        <tr>
            <th>Nama Donatur</th>
            <th>Paket</th>
            <th>Kategori</th> 
            <th>Nominal</th>
        </tr>
    </thead> 
    <tbody>
    <?php $i = 1; ?>
        <?php foreach( $all_data as $data ) { ?>
        <tr>
            <td><?= $data["nama_donatur"]?></td>
            <td><?= $data["paket"] ?></td>
            <td><?= $data["kategori"] ?></td>
            <td><?= $data["nominal"] ?></td>
                    </tr>
                    <?php $i++ ?>
                    <?php } ?>
                    </tbody>
        </table>
        </div>
        </div>
        <br>
        <div id="galeri">
        <div class="header-text-1">
        <div class="text1"><br><br><br><br><h1><span>Gallery </span> Masjid Besar SMK <br> Wikrama Bogor.</h1><br>
        <p>Berikut adalah gallery masjid besar sMK Wikrama Bogor.</p><br><br>
        </div>
        </div>  
            <div class="gallery">
             
              <img src="img/mj1.jpg">
              <img src="https://i.pinimg.com/564x/dd/55/a0/dd55a0cb506e1e0c6836a391529327e9.jpg">
              <img src="https://i.pinimg.com/564x/31/4a/48/314a48b1ce9497957cde47bc29047e4c.jpg">
              <img src="https://i.pinimg.com/564x/97/bb/a6/97bba6b0378f685c13bf013199437f67.jpg">
              <img src="https://i.pinimg.com/564x/0e/b1/f1/0eb1f1105a1b29f89f5149e8e850361b.jpg">
              <img src="https://i.pinimg.com/564x/b3/8b/e8/b38be8cf27d197c7bd4ae8f466ca2bab.jpg">
            </div>

            <div class="clearfix"></div>
            <footer class="footer-main">
                <div class="footer-grid">   
                      <section class="footer-1">
                        <h4>Tentang RPL</h4>
                          <p>Sejarah</p>
                          <p>Kompetensi</p>
                          <p>Profesi</p>
                          <p>Kerjasama</p>
                      </section>
                     <section class="footer-2">
                        <h4>Alamat</h4>
                        <p>Jl. Raya Wangun
                            Kelurahan Sindangsari
                            Bogor Timur 16720</p>
                        <h4>Telepon</h4>
                        <p>0251-8242411 / 082221718035(Whatsapp)</p>
                      </section>
                     <section class="footer-3">
                       <h4>Sosial Media</h4>
                         <p>Instagram : @rplwikrama</p>
                         <p>Youtube : RPL Wikrama</p>
                     </section>
                </div>
            </footer>
          


</body>
</html>
