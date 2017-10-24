<!DOCTYPE html>
<html>
<head>
</head>
<body bgcolor="skyblue">
        <center><h1>Show</h1></center>
        <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Siswa</title>

    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="dist/css/bootstrap.css" rel="stylesheet">
	<link href="dist/css/bootstrap-theme.css" rel="stylesheet">
	<link href="dist/css/bootstrap-theme.min.css" rel="stylesheet">
</head>
<?php
	include('koneksi.php');
	$id = $_GET['id'];
	$ku = mysqli_query($koneksi,"SELECT siswa.id, siswa.NIS, siswa.Nama , siswa.Jenis_kelamin, siswa.Tempat_lahir, siswa.Tgl_lahir, siswa.Alamat, kelas.kelas as nama_kelas FROM siswa Join kelas on kelas.id = siswa.kelas_id WHERE siswa.id='$id'");
	$data = mysqli_fetch_array($ku);
	?>
	<center><h3> Data Siswa</h3></center>
	<fieldset style="width: 50%; margin: auto;">
	
		<input type="hidden" name="id" value="<?php echo $data['id'];?>">
	<p>
		Nomor Induk Siswa <br/>
		<input type="text"  class="form-control" value="<?php echo $data['NIS'];?>" readonly />
	</p>
	
	<p>
		Nama <br/>
		<input type="text" class="form-control" value="<?php echo $data['Nama'];?>" readonly  />
	</p>
	<p>
		Jenis Kelamin <br/>
		<input type="radio" name="jk"  value="Perempuan" <?php if ($data['Jenis_kelamin'] == 'Perempuan') echo"checked='checked'"; ?> />Perempuan 
		<input type="radio" name="jk"  value="Laki-Laki" <?php if ($data['Jenis_kelamin'] == 'Laki-Laki') echo"checked='checked'"; ?> />Laki-Laki 
			<p>
		Tempat Lahir <br/>
		<input type="text" class="form-control" value="<?php echo $data['Tempat_lahir'];?>" readonly  />
	</p>
	<p>
		Tanggal Lahir<br/>
		<input type="date" class="form-control" value="<?php echo $data['Tgl_lahir'];?>" readonly  />
	</p>
	<p>
		Alamat <br/>
		<textarea name="alamat" class="form-control" cols="50 readonly "><?php echo $data['Alamat'];?></textarea>
	</p>
	<p>
		Kelas id <br />
       <input type="text" class="form-control" value="<?php echo $data['nama_kelas'];?>" readonly  />
    </p>
	</fieldset>
	<br /><center><a href="lihatdata.php" class="btn btn-primary">&Lt; Lihat Data</a></center>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>