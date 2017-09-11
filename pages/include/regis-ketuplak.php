<?php
	include_once ('conf/conn.php');
	if(isset($_POST['save'])){
		$nama = $_POST['nama'];
    $npm = $_POST['npm'];
		$bidang = $_POST['bidang'];
		$username = $_POST['username'];
		$pass = $_POST['password'];
    $lvl = 3;
    $status = 0;
        
		//hash password
		$options = ['cost ==> 10'];
		$hash = password_hash($pass, PASSWORD_BCRYPT, $options);

		//insert data ke tabel user
		$SQL = $conn->prepare('INSERT INTO user(nama,npm,bidang,username,hash,level,status) VALUES(?,?,?,?,?,?,?)');
	    $SQL->bind_param('ssissii',$nama,$npm,$bidang,$username,$hash,$lvl,$status);
	    $SQL->execute();

	  	//cek error
	    if(!$SQL){
    	  echo "$conn->error";
            echo '
                <div class="callout callout-danger">
                <h4>Registrasi gagal!</h4>
                <p>Maaf registrasi anda gagal :( , silakan ulangi.</p>
              </div>
            ';
           
	  	}else{
	  		 echo '
                <div class="callout callout-success">
                <h4>Registrasi berhasil!</h4>
                <p>selamat registrasi anda berhasil, silakan tunggu sampai ketua departemen anda menkonfirmasi akun ini.</p>
              </div>
        ';
        }
	}
 ?>
<form action="" method="POST">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Nomor Pokok Mahasiswa" name="npm" required>
        <span class="glyphicon glyphicon-check form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <select class="form-control select2" style="width: 100%;" id="jurusan" name="bidang" required>
          <option value="" selected disabled>Departemen</option>
          <option value="Akademik"> Departemen Akademik</option>
          <option value="PSDM">Departemen PSDM</option>
          <option value="Kewirausahaan">Departemen Kewirausahaan</option>
          <option value="Kesejahteraan Mahasiswa">Departemen Kesejahteraan Mahasiswa</option>
          <option value="Pengabdian Masyarakat">Departemen Pengabdian Masyarakat</option>
          <option value="Olahraga">Departemen Olahraga</option>
          <option value="Seni Budaya">Departemen Seni Budaya</option>
          <option value="Hubungan Masyarakat">Biro Hubungan Masyarakat</option>
          <option value="Media">Biro Media</option>
          <option value="PTI">Biro PTI</option>
        </select>
      </div>
      <div class="form-group has-feedback">
        <input type="text" class="form-control" placeholder="Username" name="username" required>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <input type="submit" class="btn btn-primary btn-block btn-flat" name="save" value="Register">
        </div>
        <!-- /.col -->
      </div>
    </form>