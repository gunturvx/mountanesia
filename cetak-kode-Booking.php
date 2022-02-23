
<!-- Koneksi -->
<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="keywords" content="Booking​">
  <meta name="description" content="">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title>Booking</title>
  <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="assets/css/Prau.css" media="screen">
  <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">

  <script type="application/ld+json">{
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": ""
}</script>



<style type="text/css">
h3 {
  text-align: center;
}
table {
  font-family: Arial, Helvetica, sans-serif;
  color: #666;
  text-shadow: 1px 1px 0px #fff;
  background: #eaebec;
  border: #ccc 1px solid;
  width: 100%;
  border-collapse: collapse;
  font-size: 1.1rem;
}
 
table th {
  padding: 15px 35px;
  border-left:1px solid #e0e0e0;
  border-bottom: 1px solid #e0e0e0;
  background: #ededed;
}
 
table th:first-child{  
  border-left:none;  
}
 
table tr {
  text-align: center;
  padding-left: 20px;
}
 
table td:first-child {
  text-align: left;
  padding-left: 20px;
  border-left: 0;
}
 
table td {
  padding: 15px 35px;
  border-top: 1px solid #ffffff;
  border-bottom: 1px solid #e0e0e0;
  border-left: 1px solid #e0e0e0;
  background: #fafafa;
  background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
  background: -moz-linear-gradient(top, #fbfbfb, #fafafa);
}
 
table tr:last-child td {
  border-bottom: 0;
}
 
table tr:last-child td:first-child {
  -moz-border-radius-bottomleft: 3px;
  -webkit-border-bottom-left-radius: 3px;
  border-bottom-left-radius: 3px;
}
 
table tr:last-child td:last-child {
  -moz-border-radius-bottomright: 3px;
  -webkit-border-bottom-right-radius: 3px;
  border-bottom-right-radius: 3px;
}
 
table tr:hover td {
  background: #f2f2f2;
  background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
  background: -moz-linear-gradient(top, #f2f2f2, #f0f0f0);
}
.u-section-1 {
  background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("images/andri-hermawan-25INWdc5YGs-unsplash1.jpg");
  background-position: 50% 50%;
}
.u-section-1 .u-sheet-1 {
  min-height: 800px;
}

.u-section-1 .u-text-1 {
  font-weight: 700;
  letter-spacing: 5px;
  margin: 254px auto 0;
}

.u-section-1 .u-text-2 {
  width: 826px;
  margin: 35px auto 0;
}

.u-section-1 .u-btn-1 {
  background-image: none;
  border-style: solid;
  font-size: 1.5rem;
  animation-duration: 1000ms;
  font-weight: 700;
  margin: 35px auto 60px;
  padding: 14px 40px 15px 39px;
}

@media (max-width: 1199px) {
  .u-section-1 .u-sheet-1 {
    min-height: 660px;
  }
}

@media (max-width: 991px) {
  .u-section-1 .u-sheet-1 {
    min-height: 506px;
  }

  .u-section-1 .u-text-2 {
    width: 720px;
  }
}

@media (max-width: 767px) {
  .u-section-1 .u-sheet-1 {
    min-height: 380px;
  }

  .u-section-1 .u-text-2 {
    width: 540px;
  }
}

@media (max-width: 575px) {
  .u-section-1 .u-sheet-1 {
    min-height: 239px;
  }

  .u-section-1 .u-text-2 {
    width: 340px;
  }
} .u-section-2 {
  background-image: none;
  min-height: 626px;
}

.u-section-2 .u-layout-wrap-1 {
  pointer-events: auto;
  margin-top: 0;
  margin-bottom: 8px;
  transition-duration: 1s;
}

.u-section-2 .u-layout-cell-1 {
  min-height: 628px;
  pointer-events: auto;
  background-image: none;
}

.u-section-2 .u-container-layout-1 {
  box-shadow: 5px 5px 20px 0 rgba(0,0,0,0.4);
  padding: 30px 0;
}

.u-section-2 .u-text-1 {
  font-weight: 700;
  font-style: italic;
  animation-duration: 2000ms;
  margin: 23px 217px 0 79px;
}

.u-section-2 .u-text-2 {
  animation-duration: 2000ms;
  margin: 114px 42px 0 79px;
}

.u-section-2 .u-image-1 {
  min-height: 628px;
  pointer-events: auto;
  animation-duration: 2000ms;
  background-image: url("images/ahmad-syarifudin-4DXXSuQLTwQ-unsplash.jpg");
  background-position: 50% 0.37%;
}

.u-section-2 .u-container-layout-2 {
  padding: 30px 60px;
}

@media (max-width: 1199px) {
   .u-section-2 {
    min-height: 446px;
  }

  .u-section-2 .u-layout-cell-1 {
    min-height: 518px;
  }

  .u-section-2 .u-text-1 {
    margin-left: 29px;
    margin-right: 167px;
  }

  .u-section-2 .u-text-2 {
    margin-left: 29px;
    margin-right: 0;
    line-height: 25.6px;
  }

  .u-section-2 .u-image-1 {
    min-height: 518px;
  }
}

@media (max-width: 991px) {
   .u-section-2 {
    min-height: 339px;
  }

  .u-section-2 .u-layout-cell-1 {
    min-height: 100px;
  }

  .u-section-2 .u-text-1 {
    margin-left: 0;
    margin-right: 86px;
  }

  .u-section-2 .u-text-2 {
    margin-left: 0;
  }

  .u-section-2 .u-image-1 {
    min-height: 397px;
  }

  .u-section-2 .u-container-layout-2 {
    padding-left: 30px;
    padding-right: 30px;
  }
}

@media (max-width: 767px) {
   .u-section-2 {
    min-height: 614px;
  }

  .u-section-2 .u-image-1 {
    min-height: 596px;
  }

  .u-section-2 .u-container-layout-2 {
    padding-left: 10px;
    padding-right: 10px;
  }
}

@media (max-width: 575px) {
   .u-section-2 {
    min-height: 420px;
  }

  .u-section-2 .u-text-1 {
    margin-right: 0;
  }

  .u-section-2 .u-image-1 {
    min-height: 375px;
  }
}

.u-section-2 .u-layout-wrap-1 {
  transition-property: fill, color, background-image, background-color, stroke-width, border-style, border-width, box-shadow, text-shadow, opacity, border-radius, stroke, border-color, font-size, font-style, font-weight, text-decoration, letter-spacing, transform !important;
} .u-section-3 {
  min-height: 522px;
}

.u-section-3 .u-image-1 {
  width: calc(((100% - 1140px) / 2) + 581px);
  left: 0;
  right: auto;
  animation-duration: 1000ms;
}

.u-section-3 .u-text-1 {
  font-weight: 700;
  font-style: italic;
  animation-duration: 2000ms;
  margin: 25px calc(((100% - 1140px) / 2) + 157px) 0 calc(((100% - 1140px) / 2) + 623px);
}

.u-section-3 .u-text-2 {
  animation-duration: 2000ms;
  margin: 94px calc(((100% - 1140px) / 2) + 19px) 60px calc(((100% - 1140px) / 2) + 623px);
}

@media (max-width: 1199px) {
  .u-section-3 .u-image-1 {
    width: 570px;
    left: -30px;
  }

  .u-section-3 .u-text-1 {
    margin-right: calc(((100% - 940px) / 2) + 57px);
    margin-left: calc(((100% - 940px) / 2) + 523px);
  }

  .u-section-3 .u-text-2 {
    margin-right: calc(((100% - 940px) / 2));
    margin-left: calc(((100% - 940px) / 2) + 442px);
  }
}

@media (max-width: 991px) {
  .u-section-3 .u-text-1 {
    margin-right: calc(((100% - 720px) / 2));
    margin-left: calc(((100% - 720px) / 2) + 360px);
  }

  .u-section-3 .u-text-2 {
    margin-right: calc(((100% - 720px) / 2));
    margin-left: calc(((100% - 720px) / 2) + 222px);
  }
}

@media (max-width: 767px) {
  .u-section-3 .u-text-1 {
    margin-right: calc(((100% - 540px) / 2));
    margin-left: calc(((100% - 540px) / 2) + 180px);
  }

  .u-section-3 .u-text-2 {
    margin-right: calc(((100% - 540px) / 2));
    margin-left: calc(((100% - 540px) / 2) + 42px);
  }
}

@media (max-width: 575px) {
  .u-section-3 .u-image-1 {
    width: 340px;
  }

  .u-section-3 .u-text-1 {
    margin-right: calc(((100% - 340px) / 2));
    margin-left: calc(((100% - 340px) / 2));
  }

  .u-section-3 .u-text-2 {
    margin-right: calc(((100% - 340px) / 2));
    margin-left: calc(((100% - 340px) / 2));
  }
}.u-section-4 .u-sheet-1 {
  min-height: 1553px;
}

.u-section-4 .u-text-1 {
  font-size: 2.25rem;
  font-weight: 700;
  letter-spacing: 5px;
  animation-duration: 1000ms;
  margin: 60px auto 0;
}

.u-section-4 .u-text-2 {
  width: 681px;
  animation-duration: 1000ms;
  margin: 20px auto 0;
}

.u-section-4 .u-layout-wrap-1 {
  margin-top: 45px;
  margin-bottom: 60px;
}

.u-section-4 .u-layout-cell-1 {
  min-height: 687px;
}

.u-section-4 .u-container-layout-1 {
  padding: 30px;
}

.u-section-4 .u-text-3 {
  animation-duration: 1000ms;
  margin: 0 auto 0 0;
}

.u-section-4 .u-text-4 {
  animation-duration: 1000ms;
  margin: 20px 0 0;
}

.u-section-4 .u-layout-cell-2 {
  min-height: 687px;
}

.u-section-4 .u-container-layout-2 {
  padding: 30px;
}

.u-section-4 .u-text-5 {
  animation-duration: 1000ms;
  margin: 0 auto 0 0;
}

.u-section-4 .u-text-6 {
  animation-duration: 1000ms;
  margin: 20px 0 0;
}

.u-section-4 .u-image-1 {
  min-height: 1374px;
  background-image: url("images/kurnia-ramadhan-0JWIdIpHEJA-unsplash.jpg");
  background-position: 53.81% 50%;
}

.u-section-4 .u-container-layout-3 {
  padding: 30px;
}

.u-section-4 .u-layout-cell-4 {
  min-height: 687px;
}

.u-section-4 .u-container-layout-4 {
  padding: 30px;
}

.u-section-4 .u-text-7 {
  animation-duration: 1000ms;
  margin: 0 auto 0 0;
}

.u-section-4 .u-text-8 {
  animation-duration: 1000ms;
  margin: 20px 0 0;
}

.u-section-4 .u-layout-cell-5 {
  min-height: 687px;
}

.u-section-4 .u-container-layout-5 {
  padding: 30px;
}

.u-section-4 .u-text-9 {
  animation-duration: 1000ms;
  margin: 0 auto 0 0;
}

.u-section-4 .u-text-10 {
  animation-duration: 1000ms;
  margin: 20px 0 0;
}

@media (max-width: 1199px) {
  .u-section-4 .u-sheet-1 {
    min-height: 736px;
  }

  .u-section-4 .u-layout-cell-1 {
    min-height: 566px;
  }

  .u-section-4 .u-layout-cell-2 {
    min-height: 566px;
  }

  .u-section-4 .u-image-1 {
    min-height: 1133px;
  }

  .u-section-4 .u-layout-cell-4 {
    min-height: 566px;
  }

  .u-section-4 .u-layout-cell-5 {
    min-height: 566px;
  }
}

@media (max-width: 991px) {
  .u-section-4 .u-sheet-1 {
    min-height: 1110px;
  }

  .u-section-4 .u-layout-cell-1 {
    min-height: 100px;
  }

  .u-section-4 .u-layout-cell-2 {
    min-height: 100px;
  }

  .u-section-4 .u-image-1 {
    min-height: 1302px;
  }

  .u-section-4 .u-layout-cell-4 {
    min-height: 100px;
  }

  .u-section-4 .u-layout-cell-5 {
    min-height: 100px;
  }
}

@media (max-width: 767px) {
  .u-section-4 .u-sheet-1 {
    min-height: 2177px;
  }

  .u-section-4 .u-text-1 {
    margin-left: 0;
  }

  .u-section-4 .u-text-2 {
    margin-left: 0;
    margin-right: 0;
    width: 540px;
  }

  .u-section-4 .u-container-layout-1 {
    padding-right: 10px;
    padding-left: 0;
  }

  .u-section-4 .u-container-layout-2 {
    padding-right: 10px;
    padding-left: 0;
  }

  .u-section-4 .u-image-1 {
    min-height: 1953px;
  }

  .u-section-4 .u-container-layout-3 {
    padding-left: 10px;
    padding-right: 10px;
  }

  .u-section-4 .u-container-layout-4 {
    padding-right: 10px;
    padding-left: 0;
  }

  .u-section-4 .u-container-layout-5 {
    padding-right: 10px;
    padding-left: 0;
  }
}

@media (max-width: 575px) {
  .u-section-4 .u-sheet-1 {
    min-height: 1956px;
  }

  .u-section-4 .u-text-1 {
    font-size: 1.875rem;
  }

  .u-section-4 .u-text-2 {
    width: 340px;
  }

  .u-section-4 .u-image-1 {
    min-height: 1230px;
  }
} .u-section-5 {
  background-image: linear-gradient(0deg, rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url("images/WhatsAppImage2021-12-07at17.05.12.jpeg");
  background-position: 50% 50%;
}

.u-section-5 .u-sheet-1 {
  min-height: 854px;
}

.u-section-5 .u-text-1 {
  font-weight: 700;
  font-size: 2.25rem;
  animation-duration: 1000ms;
  margin: 57px auto 0;
}

.u-section-5 .u-shape-1 {
  width: 601px;
  height: 601px;
  box-shadow: 2px 2px 10px 0 rgba(128,128,128,1);
  text-shadow: 2px 0 10px rgba(0,0,0,0);
  animation-duration: 1000ms;
  margin: 57px auto 0;
}

.u-section-5 .u-text-2 {
  font-size: 1.875rem;
  text-decoration: underline !important;
  animation-duration: 1000ms;
  margin: -572px 570px 0 303px;
}

.u-section-5 .u-form-1 {
  height: 271px;
  width: 570px;
  margin: 51px auto 60px;
}

.u-section-5 .u-form-group-2 {
  margin-left: 0;
}

.u-section-5 .u-form-group-3 {
  margin-left: 0;
}

.u-section-5 .u-form-group-4 {
  margin-left: 0;
}

.u-section-5 .u-form-group-5 {
  margin-left: 0;
}

.u-section-5 .u-btn-1 {
  font-weight: 700;
  background-image: none;
  border-style: none;
}

@media (max-width: 1199px) {
  .u-section-5 .u-sheet-1 {
    min-height: 704px;
  }

  .u-section-5 .u-shape-1 {
    height: 602px;
  }

  .u-section-5 .u-text-2 {
    margin-top: -573px;
    margin-right: 470px;
    margin-left: 203px;
  }
}

@media (max-width: 991px) {
  .u-section-5 .u-sheet-1 {
    min-height: 539px;
  }

  .u-section-5 .u-text-2 {
    margin-right: 360px;
    margin-left: 93px;
  }
}

@media (max-width: 767px) {
  .u-section-5 .u-sheet-1 {
    min-height: 778px;
  }

  .u-section-5 .u-shape-1 {
    height: 584px;
    margin-right: initial;
    margin-left: initial;
    width: auto;
  }

  .u-section-5 .u-text-2 {
    margin-top: -555px;
    margin-right: 270px;
    margin-left: 3px;
  }

  .u-section-5 .u-form-1 {
    width: 540px;
  }
}

@media (max-width: 575px) {
  .u-section-5 .u-sheet-1 {
    min-height: 779px;
  }

  .u-section-5 .u-text-2 {
    margin-right: 73px;
    margin-left: 0;
  }

  .u-section-5 .u-form-1 {
    width: 340px;
  }
}
  </style>











  <meta name="theme-color" content="#478ac9">
  <meta property="og:title" content="Prau">
  <meta property="og:type" content="website">
</head>

<body class="u-body u-overlap u-overlap-transparent">
  

  <!-- Header Dipanggil dari folder app/includes/header.php ( agar header sama dengan page yg lain) -->
  <?php include(ROOT_PATH . "/includes/header.php"); ?>

    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" data-image-width="1600"
    data-image-height="900" id="sec-5a1e">
    <div class="u-clearfix u-sheet u-sheet-1">
      <h1 class="u-text u-text-default u-title u-text-1">Cetak Booking Pendakian<span style="font-weight: 700;"></span>
      </h1>
      <p class="u-large-text u-text u-text-variant u-text-2"> Cetak Booking pendakian</p>
      <a href="cetal-kode-booking.php#sec-d70d" data-page-id="301163607"
        class="u-border-1 u-border-white u-btn u-btn-round u-button-style u-custom-font u-heading-font u-hover-palette-4-light-2 u-none u-radius-50 u-btn-1">Cetak</a>
    </div>
  </section>


    <section class="u-clearfix u-image u-section-1" id="sec-d70d" data-image-width="1600" data-image-height="1063">

  </section>
          
                         <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
        <table>
                      <thead>
                        <h3>Cetak Kode Booking</h3>
                            <th>No</th>
                            <th>Ketua Kelompok</th>
                             <th>No Telepon</th>
                              <th>Nama Gunung</th>
                               <th>Jalur Pendakian</th>
                                <th>Tanggal Pendakian</th>
                                 <th>Kelompok Pendakian</th>
                            <th colspan="2">Action</th>
                        </thead>
                        <tbody>
                            <?php 
                            require'app/database/connect.php';
                            $no =1;    
                            $query=mysqli_query($conn, "SELECT * FROM booking")or die(mysqli_error());
                            while($data=mysqli_fetch_array($query)): 
                           ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?= $data['nama_ketua']?></td>
                                    <td><?= $data['no_telp']?></td>
                                    <td><?= $data['pilih_gunung']?></td>
                                    <td><?= $data['pilih_jalur']?></td>
                                    <td><?= $data['tgl_pendakian']?></td>
                                    <td><?= $data['kelompok_pendakian']?></td>
                                    <td><a href="cetak.php?id=<?php echo $data['id']; ?>" class="edit">Cetak</a></td>
                                </tr>
                    <?php $no++; endwhile; ?>
                        </tbody>
                      </table>
                             </div>
      <p class="u-align-center u-small-text u-text u-text-grey-30 u-text-variant u-text-10">Bawa kertas ini ke basecamp
        tempat anda ingin mendaki</p>
    </div>
  </section>




  <?php include(ROOT_PATH . "/includes/footer.php"); ?>

</body>

</html>
