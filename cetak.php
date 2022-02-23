<!-- Koneksi -->
<?php include("path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php");
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
<style>
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
</style>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Mountanesia</title>
    <link rel="stylesheet" href="assets/css/nicepage.css" media="screen">
<link rel="stylesheet" href="assets/css/Cetak-kode-Booking.css" media="screen">
<link rel="stylesheet" href="cetak-kode-booking-print.css" media="screen">
  <link rel="stylesheet" href="assets/css/Prau.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.29.1, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
  
  </head>
  <body class="u-body u-overlap u-overlap-transparent">
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
                                </tr>
                    <?php $no++; endwhile; ?>
                        </tbody>
                      </table>



<script>
        window.print();
    </script>

                             </div>
      <p class="u-align-center u-small-text u-text u-text-grey-30 u-text-variant u-text-10" align="center">Bawa kertas ini ke basecamp
        tempat anda ingin mendaki</p>

                          




</body>


</html>




