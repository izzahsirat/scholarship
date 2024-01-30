<?php
//db Connection file
include('includes/config.php');
//code for melapor
if(isset($_POST['melapor']))
{
$fname=$_POST['fname'];
//$lname=$_POST['lname'];
$ICNumber=$_POST['ICNumber'];
$email=$_POST['emailid'];
$bnphone=$_POST['bnphone'];
$rname=$_POST['rname'];
$rphone=$_POST['rphone'];
$rstatus=$_POST['rstatus'];
$negara=$_POST['negara'];
$dtout=$_POST['dtout'];
$dtin=$_POST['dtin'];
$tambang=$_POST['tambang'];
$skim=$_POST['skim'];
$ikatjanji=$_POST['ikatjanji'];
$tahap=$_POST['tahap'] . ' ' . $_POST['tahaps'];
$keputusan=$_POST['keputusan']. ' ' . $_POST['keputusans'];
$tajuk=$_POST['tajuk'];
$pangkat=$_POST['pangkat'] . ' ' . $_POST['pangkats'];
$meninggi=$_POST['meninggi'] . ' ' . $_POST['meninggis'];
//$password=md5($_POST['inputpass']);
$isactive=1;
//checking email if already exists
   $ret=mysqli_query($con, "call sp_checkemailavailabilty('$email')");
    $result=mysqli_num_rows($ret);
    if($result>0){

echo "<script>alert('This email id already associated with another account');</script>";
    }else{
         $ret->close();
         $con->next_result();
    $query=mysqli_query($con,"call sp_signup('$fname','$ICNumber','$email','$bnphone', '$rname','$rphone','$rstatus','$negara','$dtout','$dtin', '$tambang', '$skim', '$ikatjanji', '$tahap', '$keputusan', '$tajuk', '$pangkat', '$meninggi','$isactive')");
    if ($query) {
  
    echo "<script>alert('You have successfully registered');</script>";
    echo "<script>window.location.href='melapor.php'</script>";
  }
  else
    {
      
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
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
<script type="text/javascript">

function CheckColors(val){
 var element=document.getElementById('pangkats');
 if(val=='select...'||val==' ')
   element.style.display='block';
 else  
   element.style.display='none';
}

function CheckTahap(val){
 var element=document.getElementById('tahaps');
 if(val=='select...'||val==' ')
   element.style.display='block';
 else  
   element.style.display='none';
}

function CheckKeputusan(val){
 var element=document.getElementById('keputusans');
 if(val=='select...'||val==' ')
   element.style.display='block';
 else  
   element.style.display='none';
}

function CheckMeninggi(val){
 var element=document.getElementById('meninggis');
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
                                <h5 style="color:blue">Tamat Pengajian</h5>
                            </div>
                            <form class="user" name="melapor" method="post" onsubmit="return checkpass();">

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
                                <div class="form-group">
                                        <input type="email" class="form-control " id="emailid" placeholder="Email Address" name="emailid" required="true">
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="bnphone" class="form-control " id="bnphone" placeholder="Nombor Telefon (Brunei)" name="bnphone" required="true">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control " id="ICNumber" name="ICNumber" placeholder="IC Number" required="true">
                                    </div>
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
                                          <h5>Tarikh meninggalkan Negara Pengajian</h5>
                                        <input type="date" class="form-control" id="dtout" name="dtout" required="true">
                                    </div>
                                    <div class="col-sm-6">
                                        <h5>Tarikh tiba di Negara Brunei Darussalam</h5>
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

                                <div class="form-group">
                                    <h5>Ikatjanji:</h5>
                                
                                    &nbsp;&nbsp;&nbsp; <input type="radio" name="ikatjanji"
                                    <?php if (isset($ikatjanji) && $ikatjanji=="Berkhidmat dengan Kerajaan") echo "checked";?>
                                    value="Berkhidmat dengan Kerajaan">  Berkhidmat dengan Kerajaan
                                    <br>
                                    &nbsp;&nbsp;&nbsp; <input type="radio" name="ikatjanji"
                                    <?php if (isset($ikatjanji) && $ikatjanji=="Berkhidmat dengan Kerajaan sebagai Pegawai Perubatan/Pergigian") echo "checked";?>
                                    value="Berkhidmat dengan Kerajaan sebagai Pegawai Perubatan/Pergigian">    Berkhidmat dengan Kerajaan sebagai Pegawai Perubatan/Pergigian
                                    <br>
                                    &nbsp;&nbsp;&nbsp; <input type="radio" name="ikatjanji"
                                    <?php if (isset($ikatjanji) && $ikatjanji=="Berkhidmat dengan Kerajaan sebagai Pendidik") echo "checked";?>
                                    value="Berkhidmat dengan Kerajaan sebagai Pendidik">    Berkhidmat dengan Kerajaan sebagai Pendidik
                                    <br>
                                    &nbsp;&nbsp;&nbsp; <input type="radio" name="ikatjanji"
                                    <?php if (isset($ikatjanji) && $ikatjanji=="Berkhidmat dengan Kerajaan sebagai Jurutera Penyelenggaraan Pesawat") echo "checked";?>
                                    value="Berkhidmat dengan Kerajaan sebagai Jurutera Penyelenggaraan Pesawat">    Berkhidmat dengan Kerajaan sebagai Jurutera Penyelenggaraan Pesawat
                                    
                                </div>
                                <br>
                                
                                <!-- Keputusan Akhir -->

                                <hr>

                                <div class="text-center">
                                    <!--<h5 class="h4 text-gray-900 mb-4">Keterangan orang yang rapat/senang di hubungi di Brunei Darussalam</h5>-->
                                    <h3 style="color:gray">Keputusan akhir</h3>
                                </div>

                                <hr>
                                <br>

                                <div class="form-group">
                                <h5 for="negara">Tahap kursus:</h5>
                                          <select id="tahap" name="tahap" class="form-control" onchange='CheckTahap(this.value);'>
                                            <option>select...</option>
                                            <option value="Sijil/Diploma">Sijil/Diploma</option>
                                            <option value="Ijazah Pertama">Ijazah Pertama</option>
                                            <option value="Ijazah Sarjana">Ijazah Sarjana</option>
                                            <option value="Ijazah Kedoktoran">Ijazah Kedoktoran</option>
                                            <option value="Profesional">Profesional</option>
                                            <option value=" ">others:</option>
                                          </select>

                                          <input type="text" name="tahaps" class="form-control" id="tahaps" placeholder="specify.." style='display:none;'/>
                                </div>

                                <div class="form-group">
                                <h5 for="negara">Keputusan diperolehi:</h5>
                                          <select id="keputusan" name="keputusan" class="form-control" onchange='CheckKeputusan(this.value);'>
                                            <option>select...</option>
                                            <option value="Lulus">Lulus</option>
                                            <option value="Mengulang (Repeat)">Mengulang (Repeat)</option>
                                            <option value="Menarik Diri">Menarik Diri</option>
                                            <option value="Gagal (Resit)">Gagal (Resit)</option>
                                            <option value="Gagal (Ditamatkan)">Gagal (Ditamatkan)</option>
                                            <option value="Belum ada keputusan">Belum ada keputusan</option>
                                          <option value=" ">others:</option>
                                          </select>

                                          <input type="text" name="keputusans" class="form-control" id="keputusans" placeholder="specify.." style='display:none;'/>
                                </div>

                                <div class="form-group">
                                       <h5>Tajuk kelulusan diperolehi</h5>
                                       <input type="text" class="form-control " id="tajuk" placeholder="e.g BSc in Accounting (Honours)" name="tajuk" required="true">
                                </div>

                                <div class="form-group">
                                <h5 for="negara">Pangkat diperolehi:</h5>
                                <select name="pangkat" id="pangkat" class="form-control" onchange='CheckColors(this.value);'> 
                                    <option>select...</option>
                                            <option value="Pass">Pass</option>
                                            <option value="1st">1st</option>
                                            <option value="2:1">2:1</option>
                                            <option value="2:2">2:2</option>
                                            <option value="2:3">2:3</option>
                                            <option value="High Distinction">High Distinction</option>
                                            <option value="Merit">Merit</option>
                                            <option value="Very Competent">Very Competent</option>
                                            <option value="Completent">Completent</option>
                                            <option value=" ">others: </option>
                                  </select>
                                  
                                <input type="text" name="pangkats" class="form-control" id="pangkats" placeholder="specify.." style='display:none;'/>

                                </div>

                                <div class="form-group">
                                <h5 for="negara">Meninggi tahap pengajian:</h5>
                                <p>(Jika ya, sila nyatakan maklumkan kursus yang akan diikuti)</p>
                                <select name="meninggi" id="meninggi" class="form-control" onchange='CheckMeninggi(this.value);'> 
                                    <option>select...</option>
                                            <option value="Tidak">Tidak</option>
                                            <option value=" ">Ya: </option>
                                  </select>
                                  
                                <input type="text" name="meninggis" class="form-control" id="meninggis" placeholder="specify.." style='display:none;'/>

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

                                <button type="submit" name="melapor" class="btn btn-primary btn-user btn-block">
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