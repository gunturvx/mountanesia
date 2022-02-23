<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/controllers/users.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@400;600;700;800&display=swap" rel="stylesheet" />
        <!-- Custom Styling -->
        <link rel="stylesheet" href="../../assets/css/admin/style.css">

        <!-- Admin Styling -->
        <link rel="stylesheet" href="../../assets/css/admin/admin.css">

        <title>Admin Section - Manage Booking</title>
    </head>

    <body>
        
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>

        <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

        <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>


            <!-- Admin Content -->
            <div class="admin-content">
                <div class="content">
                    <h2 class="page-title">Manage Booking</h2>

                    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
                     <table>
                        <thead>
                            <th>No</th>
                            <th>Nama Ketua</th>
                            <th>No Telp</th>
                            <th>Gunung</th>
                            <th>Jalur</th>
                            <th>Tanggal Pendakian</th>
                            <th>Kelompok Pendakian</th>
                        </thead>
                        <tbody>
                            <?php 
                            require'../../app/database/connect.php';
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
                </div>
            </div>
            <!-- // Admin Content -->

        </div>
        <!-- // Page Wrapper -->



        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->
        <script src="../../assets/js/scripts.js"></script>

    </body>

</html>