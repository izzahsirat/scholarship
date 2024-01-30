<?php
session_start();
//error_reporting(0);
include('../includes/config.php');
if (strlen($_SESSION['adid']==0)) {
  header('location:logout.php');
  } else{

if(isset($_POST['update']))
{
$fname=$_POST['fname'];
$ICNumber=$_POST['ICNumber'];
$EmailId=$_POST['EmailId'];
$bnphone=$_POST['bnphone'];
$rname=$_POST['rname'];
$rphone=$_POST['rphone'];
$rstatus=$_POST['rstatus']; 
$negara=$_POST['negara'];
$dtout=$_POST['dtout'];
$dtin=$_POST['dtin'];  
$tambang=$_POST['tambang']; 
$uid=$_GET['uid'];

$updatetTime = date( 'd-m-Y h:i:s A', time () );
$query=mysqli_query($con,"call sp_userupdateprofile('$fname','$ICNumber','$EmailId','$bnphone','$rname','$rphone','$rstatus','$negara','$dtout','$dtin','$tambang','$updatetTime','$uid')"); 
echo "<script>alert('Your profile udated successfully');</script>";  
echo "<script>window.location.href='registered-users.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Edit Student Profile</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
       <?php include_once('includes/sidebar.php');?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->

                    <!-- Topbar Navbar -->
  <?php include_once('includes/topbar.php');?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
<?php 
$uid=$_GET['uid'];
$query=mysqli_query($con,"call sp_userprofile($uid)");
while ($result=mysqli_fetch_array($query)) {

?>
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800"><?php echo $result['FirstName'];?>'s Profile | Update Profile</h1>
                    </div>

                    <div class="row">

                        <div class="col-lg-12">




                            <!-- Default Card Example -->
                            <div class="card mb-4">
                                <div class="card-header">
                                 Registration Date: <?php echo $result['RegDate'];?>
                                 Last Updation Date: <?php echo $result['LastUpdationDate'];?>
                                </div>
                                <div class="card-body">
<form method="post">
            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                                 
                 
                                        
                                        <tr>
                                            <th>Name</th>
                                            <td><input type="text" class="form-control form-control-user" id="fname" value="<?php echo $result['FirstName'];?>" name="fname" required="true"></td>
                                        </tr>
                                        <tr>
                                            <th>IC Number</th>
                                            <td><input type="text" class="form-control form-control-user" id="ICNumber" name="ICNumber" value="<?php echo $result['ICNumber'];?>" required="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Email Id</th>
                                            <td><input type="email" class="form-control form-control-user" id="EmailId" value="<?php echo $result['EmailId'];?>" name="EmailId" readonly="true">
                                            <a href="change-emailid.php?uid=<?php echo $result['id'];?>">Change Email</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Phone Number</th>
                                            <td><input type="text" class="form-control form-control-user" id="bnphone" name="bnphone" value="<?php echo $result['bnphone'];?>" required="true">
                                            </td>
                                        </tr>

            </table>

            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">

                <h3>Keterangan Orang yang rapat/senang dihubungi di Negara Brunei Darussalam</h3>
                                                 
                                        <tr>
                                            <th>Name</th>
                                            <td><input type="text" class="form-control form-control-user" id="rname" value="<?php echo $result['rname'];?>" name="rname" required="true"></td>
                                        </tr>
                                        <tr>
                                            <th>Phone Number</th>
                                            <td><input type="text" class="form-control form-control-user" id="rphone" name="rphone" value="<?php echo $result['rphone'];?>" required="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Hubungan dengan pelajar</th>
                                            <td><input type="text" class="form-control form-control-user" id="rstatus" name="rstatus" value="<?php echo $result['rstatus'];?>" required="true">
                                            </td>
                                        </tr>

            </table>

            <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">

                <h3>Jenis Skim Pengajian</h3>
                                                 
                                        <tr>
                                            <th>Negara tempat pengajian</th>
                                            <td><input type="text" class="form-control form-control-user" id="negara" value="<?php echo $result['negara'];?>" name="negara" required="true"></td>
                                        </tr>
                                        <tr>
                                            <th>Tarikh meninggalkan negara pengajian</th>
                                            <td><input type="date" class="form-control form-control-user" id="dtout" name="dtout" value="<?php echo $result['dtout'];?>" required="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tarikh tiba di negara Brunei Darussalam</th>
                                            <td><input type="text" class="form-control form-control-user" id="dtin" name="dtin" value="<?php echo $result['dtin'];?>" required="true">
                                            </td>
                                        </tr>
                                        <tr>
                                            <th>Tambang</th>
                                            <td>
                                                <input type="radio" name="tambang" value="Kerajaan/SBPP" <?php if($result['tambang']=="Kerajaan/SBPP"){ echo "checked";}?>/>    Kerajaan/SBPP
                                                <input type="radio" name="tambang" value="Sendiri" <?php if($result['tambang']=="Sendiri"){ echo "checked";}?>/>  Sendiri
                                            </td>
                                        </tr>

            </table>
                                    
                                    <button type="submit" name="update" class="btn btn-primary btn-user btn-block">
                                            Update
                                        </button>
                            </form>
                                </div>
                            </div>
<?php } ?>

                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
     <?php include_once('includes/footer.php');?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
     <?php include_once('includes/logout-modal.php');?>
    <!-- Bootstrap core JavaScript-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../js/sb-admin-2.min.js"></script>
</body>
</html>
<?php } ?>