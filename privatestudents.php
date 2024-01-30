<?php
//db Connection file
include('includes/config.php');
//code for privatestudents
if(isset($_POST['privatestuds']))
{
$email=$_POST['email'];
$nama=$_POST['nama'];
$telefon=$_POST['telefon'];
$dob=$_POST['dob'];
$ICNumber=$_POST['ICNumber'];
$passport=$_POST['passport'];
$rakyat=$_POST['rakyat'];
$bangsa=$_POST['bangsa'];
$agama=$_POST['agama'];
$kahwin=$_POST['kahwin']. ' ' . $_POST['kahwins'];
$tahappengajian=$_POST['tahappengajian']. ' ' . $_POST['tahappengajians'];
$course=$_POST['course'];
$tempat=$_POST['tempat'];
$country=$_POST['country'];
$duration=$_POST['duration'];
$mula=$_POST['mula'];
$akhir=$_POST['akhir'];
$membiayai=$_POST['membiayai'];


    $con->next_result();
    $query=mysqli_query($con,"call sp_privatestudents('$email','$nama','$telefon','$dob', '$ICNumber','$passport','$rakyat','$bangsa','$agama','$kahwin', '$tahappengajian', '$course', '$tempat', '$country', '$duration', '$mula', '$akhir', '$membiayai')");
    if ($query) {
  
    echo "<script>alert('You have successfully registered');</script>";
    echo "<script>window.location.href='privatestudents.php'</script>";
  }
  else
    {
      
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
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

    <title>Private Students</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="images/145.png" type="image/x-icon">
    
<script type="text/javascript">

function CheckTahapPengajian(val){
 var element=document.getElementById('tahappengajians');
 if(val=='select...'||val==' ')
   element.style.display='block';
 else  
   element.style.display='none';
}

function CheckKahwins(val){
 var element=document.getElementById('kahwins');
 if(val=='select...'||val==' ')
   element.style.display='block';
 else  
   element.style.display='none';
}

</script>

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">

                <!-- Nested Row within Card Body -->
                <div class="row">
                    <!--<div class="col-lg-5 d-none d-lg-block" bg="img/password-reset.jpg" ></div>-->
                    <div class="col-lg-12">
                        <div class="p-5">

                            <div class="text-center">
                                <h1 class="h1 text-gray-900 mb-4">Borang Pendaftaran Sebagai Pelajar Persendirian</h1>
                            </div>
                            <form class="user" name="privatestuds" method="post">

                                <br>

                                <div class="form-group">
                                       <input type="email" class="form-control " id="email" placeholder="Email Address" name="email" required="true">
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control " id="nama" placeholder="Nama Pemohon" name="nama" required="true">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control " id="telefon" placeholder="Nombor Telefon (Brunei)" name="telefon" required="true">        
                                </div>

                                <div class="form-group">
                                    <p>Tarikh Lahir
                                        <input type="date" class="form-control " id="dob" name="dob" required="true"></p>
                                </div>

                            <!--    <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <input type="text" class="form-control " id="ICNumber" name="ICNumber" placeholder="IC Number" required="true">  
                                    Select image to upload:
                                  <input type="file" name="fileToUpload" id="fileToUpload">
                                  <input type="submit" value="Upload" name="submit">      
                                    </div>     
                                </form> -->

                            <!--    <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <input type="text" class="form-control " id="passport" name="passport" placeholder="Passport Number" required="true">  
                                    Select image to upload:
                                  <input type="file" name="fileToUpload" id="fileToUpload">
                                  <input type="submit" value="Upload" name="submit">      
                                    </div>     
                                </form> -->

                                <div class="form-group">
                                    <input type="text" class="form-control " id="rakyat" placeholder="Kerakyatan (Citizenship)" name="rakyat" required="true">        
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="bangsa" name="bangsa" placeholder="Bangsa (Race)" required="true">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="agama" name="agama" placeholder="Agama (Religion)" required="true">
                                    </div>
                                </div>

                                <div class="form-group">
                                <h5 for="negara">Status Perkahwinan (Marital Status):</h5>
                                          <select id="kahwin" name="kahwin" class="form-control" onchange='CheckKahwins(this.value);'>
                                            <option>select...</option>
                                            <option value="Bujang">Bujang</option>
                                            <option value="Kahwin">Kahwin</option>
                                            <option value="Cerai">Cerai</option>
                                            <option value=" ">other:</option>
                                          </select>

                                          <input type="text" name="kahwins" class="form-control" id="kahwins" placeholder="specify.." style='display:none;'/>
                                </div>

                                <div class="form-group">
                                <h5 for="negara">Tahap pengajian kursus yang akan diikuti di luar negara:</h5>
                                          <select id="tahappengajian" name="tahappengajian" class="form-control" onchange='CheckTahapPengajian(this.value);'>
                                            <option>select...</option>
                                            <option value="Foundation Year">Foundation Year</option>
                                            <option value="Ijazah Pertama (Degree)">Ijazah Pertama (Degree)</option>
                                            <option value="Ijazah Sarjana (Master)">Ijazah Sarjana (Master)</option>
                                            <option value="Ijazah Ikhtisas (Professional)">Ijazah Ikhtisas (Professional)</option>
                                            <option value="Ijazah Kedoktoran (PhD)">Ijazah Kedoktoran (PhD)</option>
                                            <option value=" ">other:</option>
                                          </select>

                                          <input type="text" name="tahappengajians" class="form-control" id="tahappengajians" placeholder="specify.." style='display:none;'/>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="course" name="course" placeholder="Tajuk Kursus (Course title)" required="true">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="tempat" name="tempat" placeholder="Tempat Pengajian (Name of Institution)" required="true">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control" id="country" name="country" placeholder="Negara Tempat Pengajian (Country of Study)" required="true">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control" id="duration" name="duration" placeholder="Tempoh Pengajian (Course duration)" required="true">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <h5>Tarikh kursus bermula</h5>
                                        <input type="date" class="form-control" id="mula" name="mula" required="true">
                                    </div>
                                    <div class="col-sm-6">
                                        <h5>Tarikh kursus dijangka berakhir</h5>
                                        <input type="date" class="form-control" id="akhir" name="akhir" required="true">
                                    </div>
                                </div>

                            <!--    <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group"> 
                                   <h5> Surat Tawaran daripada Universiti (University's offer letter)</h5>
                                  <input type="file" name="fileToUpload" id="fileToUpload">
                                  <input type="submit" value="Upload" name="submit">      
                                    </div>     
                                </form> -->

                                <div class="form-group">
                                    <h5>Nama orang yang membiayai pengajian di luar negara (Name of person who sponsor your study overseas)</h5>
                                    <input type="text" class="form-control " id="membiayai" name="membiayai" required="true">        
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <h5>Nama Penuh Ayah Pemohon</h5>
                                        <input type="text" class="form-control" id="ayah" name="ayah" required="true">
                                    </div>

                                <!--    <div class="col-sm-6">
                                        <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group"> 
                                   <h5> Salinan Kad Pengenalan Ayah Pemohon</h5>
                                  <input type="file" name="fileToUpload" id="fileToUpload">
                                  <input type="submit" value="Upload" name="submit">      
                                    </div>     
                                </form>
                                    </div> -->

                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <h5>Nama Penuh Ibu Pemohon</h5>
                                        <input type="text" class="form-control" id="ibu" name="ibu" required="true">
                                    </div>

                                </div>

                            <!--    <div class="form-group row">
                                    

                                    <div class="col-sm-6">
                                        <form action="upload.php" method="post" enctype="multipart/form-data">
                                    <div class="form-group"> 
                                   <h5> Salinan Kad Pengenalan Ibu Pemohon</h5>
                                  <input type="file" name="fileToUpload" id="fileToUpload">
                                  <input type="submit" value="Upload" name="submit">      
                                    </div>     
                                </form>
                                    </div> 

                                </div> -->

                                <br>
                                
                                <!-- Peringatan -->

                                <hr>

                                <div class="text-center">
                                    <!--<h5 class="h4 text-gray-900 mb-4">Keterangan orang yang rapat/senang di hubungi di Brunei Darussalam</h5>-->
                                    <h3 style="color:red">Peringatan</h3>
                                </div>

                                <hr>

                                <div class="form-group text-center">
                                      <p> <input type="checkbox" id="peringatan" name="peringatan" required="true">&nbsp;&nbsp;Saya dengan ini mengesahkan bahawa maklumat yang diberikan di atas adalah <span style="color: red"> BETUL </span> dan bahawasanya saya <span style="color: red"> BERTANGGUNGJAWAB </span> ke atas kebajikan serta perbelanjaan sepenuhnya semasa mengikuti pengajian di institusi seperti saya nyatakan diatas.</p>
                                </div>
                                <br>

                                <button type="submit" name="privatestuds" class="btn btn-primary btn-user btn-block">
                                    Submit Form
                                </button>
                           
                            </form>
                            <hr>
                            <!--<div class="text-center">
                                <a class="small" href="password-recovery.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>