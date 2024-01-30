<?php
//db Connection file
include('includes/config.php');

//code for melaporcuti
if(isset($_POST['melaporcuti']))
{
$fname=$_POST['fname'];
$ICNumber=$_POST['ICNumber'];
$email=$_POST['emailid'];
$bnphone=$_POST['bnphone'];
$outphone=$_POST['outphone'];
$alamat=$_POST['alamat'];
$rname=$_POST['rname'];
$rphone=$_POST['rphone'];
$rstatus=$_POST['rstatus'];
$negara=$_POST['negara'];
$dtout=$_POST['dtout'];
$dtin=$_POST['dtin'];
$tambang=$_POST['tambang'];
$skim=$_POST['skim'];
$tahun=$_POST['tahun'];
$keberadaan=$_POST['keberadaan']. ' ' . $_POST['keberadaans'];
$terkini=$_POST['terkini'] . ' ' . $_POST['terkinis'];
$jangka=$_POST['jangka'];
$sebab=$_POST['sebab'];

$isactive=1;

    $con->next_result();
    $query=mysqli_query($con,"call sp_melaporcuti('$fname','$ICNumber','$email','$bnphone', '$outphone', '$alamat', '$rname','$rphone','$rstatus','$negara','$dtout','$dtin', '$tambang', '$skim', '$tahun', '$keberadaan', '$terkini', '$jangka', '$sebab','$isactive')");
 if ($query) {
  
    echo "<script>alert('You have successfully registered');</script>";
    echo "<script>window.location.href='index.php'</script>";
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

    <title>Melapor Diri</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="icon" href="images/145.png" type="image/x-icon">
<script type="text/javascript">

function CheckTerikini(val){
 var element=document.getElementById('terkinis');
 if(val=='select...'||val==' ')
   element.style.display='block';
 else  
   element.style.display='none';
}

function CheckKeberadaan(val){
 var element=document.getElementById('keberadaans');
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
                                <h1 class="h1 text-gray-900 mb-4">Borang Melapor Diri</h1>
                                <h5 style="color:blue">Cuti</h5>
                            </div>
                            <form class="user" name="melaporcuti" method="post">

                                <br>
                                
                                <!-- Maklumat Terkini Pelajar -->

                                <hr>

                                <div class="text-center">
                                    <!--<h5 class="h4 text-gray-900 mb-4">Keterangan orang yang rapat/senang di hubungi di Brunei Darussalam</h5>-->
                                    <h3 style="color:grey;">Maklumat Terikini Pelajar</h3>
                                </div>

                                <hr>
                                <br>

                                <div class="form-group">
                                        <input type="text" class="form-control " id="fname" placeholder="Nama (seperti dalam IC)" name="fname" required="true">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="email" class="form-control " id="emailid" placeholder="Email Address" name="emailid" required="true">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " id="ICNumber" name="ICNumber" placeholder="IC Number" required="true">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="bnphone" class="form-control " id="bnphone" placeholder="Nombor Telefon (Brunei)" name="bnphone" required="true">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " id="outphone" name="outphone" placeholder="Nombor telefon di tempat pengajian" required="true">
                                    </div>
                                </div>

                                <div class="form-group">
                                        <input type="text" class="form-control " id="alamat" placeholder="Alamat di tempat pengajian" name="alamat" required="true">
                                </div>
                                <br>

                                <!-- keterangan orang rapat -->

                                <hr>

                                <div class="text-center">
                                    <!--<h5 class="h4 text-gray-900 mb-4">Keterangan orang yang rapat/senang di hubungi di Brunei Darussalam</h5>-->
                                    <h3 style="color:gray">Keterangan orang yang rapat/senang di hubungi di Brunei Darussalam</h3>
                                </div>

                                <hr>

                                <br>

                                <div class="form-group">
                                        <input type="text" class="form-control " id="rname" placeholder="Nama" name="rname" required="true">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control " id="rstatus" placeholder="Hubungan dengan Pelajar" name="rstatus" required="true">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " id="rphone" name="rphone" placeholder="Nombor Telefon" required="true">
                                    </div>
                                </div>
                                <br>

                                <!-- Jenis Skim Pengajian -->

                                <hr>

                                <div class="text-center">
                                    <!--<h5 class="h4 text-gray-900 mb-4">Keterangan orang yang rapat/senang di hubungi di Brunei Darussalam</h5>-->
                                    <h3 style="color:gray">Jenis Skim Pengajian</h3>
                                </div>

                                <hr>
                                <br>

                                <div class="form-group">
                                <h5 for="negara">Negara Tempat Pengajian:</h5>
                                          <select id="negara" name="negara" class="form-control" >
                                            <option>select...</option>
                                            <option value="Brunei Darussalam">Brunei Darussalam</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Republic of Ireland">Republic of Ireland</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Canada">Canada</option>
                                            <option value="New Zealand">New Zealand</option>
                                          </select>
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                          <h5>Tarikh tiba di Negara Brunei Darussalam</h5>
                                        <input type="date" class="form-control" id="dtout" name="dtout" required="true">
                                    </div>
                                    <div class="col-sm-6">
                                        <h5>Tarikh belayar ke Negara Pengajian</h5>
                                        <input type="date" class="form-control" id="dtin" name="dtin" required="true">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <h5>Tambang:</h5>

                                    &nbsp;&nbsp;&nbsp; <input type="radio" name="tambang"
                                    <?php if (isset($tambang) && $tambang=="Kerajaan/SBPP") echo "checked";?>
                                    value="Kerajaan/SBPP">  Kerajaan/SBPP
                                    <br>
                                    &nbsp;&nbsp;&nbsp; <input type="radio" name="tambang"
                                    <?php if (isset($tambang) && $tambang=="Sendiri") echo "checked";?>
                                    value="Sendiri">    Sendiri
                                </div>

                                <div class="form-group">
                                <h5 for="negara">Skim:</h5>
                                          <select id="skim" name="skim" class="form-control" >
                                            <option>select...</option>
                                            <option value="Biasiswa Kerajaan KDYMM ke luar negeri">Biasiswa Kerajaan KDYMM ke luar negeri</option>
                                            <option value="Skim Biasiswa Khas Aircraft Maintenance Engineer (AME)">Skim Biasiswa Khas Aircraft Maintenance Engineer (AME)</option>
                                            <option value="Skim Biasiswa Belia Brunei - Singapura">Skim Biasiswa Belia Brunei - Singapura</option>
                                            <option value="Skim Bantuan Pinjaman Pendidikan (SBPP)">Skim Bantuan Pinjaman Pendidikan (SBPP)</option>
                                            <option value="Skim Biasiswa Pendidikan Teknikal dan Vokasional">Skim Biasiswa Pendidikan Teknikal dan Vokasional</option>
                                            <option value="Skim Pendidikan dan Latihan Teknikal dan Vokasional (TVET)">Skim Pendidikan dan Latihan Teknikal dan Vokasional (TVET)</option>
                                          </select>
                                </div>
                                <br>
                                
                                <!-- Maklumat pengajian -->

                                <hr>

                                <div class="text-center">
                                    <!--<h5 class="h4 text-gray-900 mb-4">Keterangan orang yang rapat/senang di hubungi di Brunei Darussalam</h5>-->
                                    <h3 style="color:gray">Maklumat Pengajian</h3>
                                </div>

                                <hr>
                                <br>

                                <div class="form-group">
                                       <h5>Tahun pengajian terkini</h5>
                                       <input type="text" class="form-control " id="tahun" placeholder="e.g tahun 2" name="tahun" required="true">
                                </div>

                                <div class="form-group">
                                <h5 for="keberadaan">Maklumat keberadaan</h5>
                                          <select id="keberadaan" name="keberadaan" class="form-control" onchange='CheckKeberadaan(this.value);'>
                                            <option>select...</option>
                                            <option value="Bercuti sahaja">Bercuti sahaja</option>
                                            <option value="Balik untuk menjalani penempatan industri">Balik untuk menjalani penempatan industri</option>
                                            <option value="Balik untuk menjalani latihan elektif">Balik untuk menjalani latihan elektif</option>
                                            <option value="Balik untuk membuat kajian (mengumpul data)">Balik untuk membuat kajian (mengumpul data)</option>
                                            <option value="Balik atas masalah kesihatan">Balik atas masalah kesihatan</option>
                                            <option value=" ">others:</option>
                                          </select>

                                          <input type="text" name="keberadaans" class="form-control" id="keberadaans" placeholder="specify.." style='display:none;'/>
                                </div>

                                <div class="form-group">
                                <h5 for="terikini">Keputusan Terkini:</h5>
                                <select name="terkini" id="terkini" class="form-control" onchange='CheckTerkini(this.value);'> 
                                    <option>select...</option>
                                            <option value="Lulus ke tahun pengajian seterusnya">Lulus ke tahun pengajian seterusnya</option>
                                            <option value="Gagal">Gagal</option>
                                            <option value="Mengulang">Mengulang</option>
                                            <option value="Menarik diri">Menarik diri</option>
                                            <option value="Menunggu keputusan">Menunggu keputusan</option>
                                            <option value=" ">others: </option>
                                  </select>
                                  
                                <input type="text" name="terkinis" class="form-control" id="terkinis" placeholder="specify.." style='display:none;'/>

                                </div>

                                <div class="form-group">
                                        <h5>Tarikh dijangka mendapat keputusan/tamat pengajian</h5>
                                        <input type="date" class="form-control" id="jangka" name="jangka" required="true">
                                </div>

                                <div class="form-group">
                                       <h5>Sebab atau maklumat lanjut</h5>
                                       <input type="text" class="form-control " id="sebab" placeholder="(e.g resit, thesis resubmission, mengulang tahun 3 etc)" name="sebab">
                                </div>

                                <br>
                                
                                <!-- Peringatan -->

                                <hr>

                                <div class="text-center">
                                    <!--<h5 class="h4 text-gray-900 mb-4">Keterangan orang yang rapat/senang di hubungi di Brunei Darussalam</h5>-->
                                    <h3 style="color:red">Peringatan</h3>
                                </div>

                                <hr>

                                <div class="form-group text-center">
                                      <p> <input type="checkbox" id="peringatan" name="peringatan" required="true">&nbsp;&nbsp;Segala maklumat yang saya isikan dalam borang ini adalah diakui <span style="color: red"> BENAR</span> dan <span style="color: red">BETUL</p>
                                </div>
                                <br>

                                <button type="submit" name="melaporcuti" class="btn btn-primary btn-user btn-block">
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