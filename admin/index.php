<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Beranda-Sistem Pakar Kepribadian</title>

    <!-- link -->
    <?php include('components/link.php'); ?>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- sidebar -->
        <?php include('components/sidebar.php'); ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- topbar -->
                <?php include('components/topbar.php'); ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <?php
                    if (isset($_GET['page'])) {
                        if ($_GET['page'] == 'beranda') {
                            include('page/beranda.php');
                        } else  if ($_GET['page'] == 'ciri-list') {
                            include('page/ciri-list.php');
                        } else  if ($_GET['page'] == 'kepribadian-list') {
                            include('page/kepribadian-list.php');
                        } else  if ($_GET['page'] == 'rule-list') {
                            include('page/rule-list.php');
                        } else  if ($_GET['page'] == 'user-list') {
                            include('page/ciri-list.php');
                        }
                        else  if ($_GET['page'] == 'ciri-add') {
                            include('page/ciri-add.php');
                        }
                        else  if ($_GET['page'] == 'kepribadian-add') {
                            include('page/kepribadian-add.php');
                        }
                        else  if ($_GET['page'] == 'rule-add') {
                            include('page/rule-add.php');
                        }
                        else  if ($_GET['page'] == 'user-add') {
                            include('page/user-add.php');
                        }            
                        // TODO
                        // Sejauh ini sudah benar
                        // Tolong Tambahkan lagi else if untuk menuju halaman add !!!!
                        else {
                            include('page/beranda.php');
                        }
                    }
                    ?>





                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->


            <!-- footer -->
            <?php include('components/footer.php'); ?>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- logout modal -->
    <?php include('logout-modal/footer.php'); ?>

    <!-- script -->
    <?php include('logout-modal/footer.php'); ?>


</body>

</html>