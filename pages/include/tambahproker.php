<?php
function kanan($st, $p) {
  return(substr($st, -$p));
}

  if(isset($_POST['save'])){
    //deklarasi variabel
    $proker = $_POST['nama-proker'];
    $bidang = $_POST['bidang'];
    $divisi = $_POST['divisi'];
    $deskripsi = $_POST['deskripsi'];
    $tujuan = $_POST['tujuan'];
    $waktu = $_POST['waktu'];
    $tempat = $_POST['tempat'];
    $tahun = $_POST['tahun'];
    $p_penilaian = 0;

    // Ambil Data Gambar yang Dikirim dari Form
    //$nama_file = $_FILES['gambar']['name'];
    $bytes = openssl_random_pseudo_bytes(20, $cstrong);
    $hasil_hex   = bin2hex($bytes);
    
    $ukuran_file = $_FILES['gambar']['size'];
    $tipe_file = $_FILES['gambar']['type'];
    $nama_file = $hasil_hex . "." .kanan($_FILES['gambar']['name'],3) ;
    $tmp_file = $_FILES['gambar']['tmp_name'];
    // Set path folder tempat menyimpan gambarnya
    $path = $_SERVER['DOCUMENT_ROOT']."/user/assets/img/logo/".$nama_file;
    if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
      // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
      $cekidot = getimagesize($_FILES["gambar"]["tmp_name"]);
    if($cekidot === false) {
        goto yah;
    }
      if($ukuran_file <= 5000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 5MB
        // Jika ukuran file kurang dari sama dengan 5MB, lakukan :
        // Proses upload
        if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
          // Jika gambar berhasil diupload, Lakukan :  
          // Proses simpan ke Database
          //insert data ke tabel list-proker
          $SQL = $conn->prepare('INSERT INTO list_proker(nama_proker,deskripsi,tujuan,pj,npm_pj,waktu,tempat,bidang,divisi,p_penilaian,tahun,gambar) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)');
          $SQL->bind_param('sssssssssiis',$proker,$deskripsi,$tujuan,$nama,$npm,$waktu,$tempat,$bidang,$divisi,$p_penilaian,$tahun,$nama_file);
          $SQL->execute();

          if($SQL){ // Cek jika proses simpan ke database sukses atau tidak
            // Jika Sukses, Lakukan :
            echo '
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alert!</h4>
                Data berhasil disimpan.
              </div>';
            echo "<meta http-equiv=\"refresh\" content=\"1;url=index.php\"/>";
          }else{
            yah:
            // Jika Gagal, Lakukan :
            echo "$conn->error";
            echo '
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Alert!</h4>
                Data gagal disimpan.
              </div>';
            echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
            echo "<br><a href='index.php'>Kembali Ke Form</a>";
          }
        }else{
          // Jika gambar gagal diupload, Lakukan :
          echo "Maaf, Gambar gagal untuk diupload.";
          echo "<br><a href='index.php'>Kembali Ke Form</a>";
        }
      }else{
        // Jika ukuran file lebih dari 1MB, lakukan :
        echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
        echo "<br><a href='index.php'>Kembali Ke Form</a>";
      }
    }else{
      // Jika tipe file yang diupload bukan JPG / JPEG / PNG, lakukan :
      echo "Maaf, Tipe gambar yang diupload harus JPG / JPEG / PNG.";
      echo "<br><a href='index.php'>Kembali Ke Form</a>";
    }
  }
 ?>
 <!-- Form Pengisian data proker -->
            <form class="form-horizontal" enctype="multipart/form-data" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label class="col-sm-2 control-label">Penanggung Jawab</label>
                  <div class="col-sm-10">
                    <input name="nama" type="text" class="form-control" value="<?php echo "$nama"; ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">NPM</label>
                  <div class="col-sm-10">
                    <input name="npm" type="text" class="form-control" value="<?php echo "$npm"; ?>" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Nama Proker</label>
                  <div class="col-sm-10">
                    <input name="nama-proker" type="text" class="form-control" placeholder="Nama Proker" required>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Lingkup</label>
                  <div class="col-sm-10">
                    <select name="bidang" class="form-control select2" style="width: 100%;" required>
                      <option value="" selected disabled>Bagian/Biro/Departemen</option>
                      <option value="Bagian">Bagian</option>
                      <option value="Biro">Biro</option>
                      <option value="Departemen">Departemen</option>
                      
                    </select>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Departemen/Biro/Bagian</label>
                  <div class="col-sm-10">
                    <select name="divisi" class="form-control select2" style="width: 100%;" required>
                      <option value="" selected disabled>Dep/Biro/Bag</option>
                      <option value="akademik">Departemen Akademik</option>
                      <option value="kesma">Departemen Kesejahteraan Mahasiswa</option>
                      <option value="pengmas">Departemen Pengabdian Masyarakat</option>
                      <option value="olahraga">Departemen Olahraga</option>
                      <option value="senbud">Departemen Seni Budaya</option>
                      <option value="media">Biro Media</option>
                      <option value="humas">Biro Hubungan Masyarakat</option>
                      <option value="pti">Biro Pengembangan Teknologi Informasi</option>
                      <option value="psdm">Biro Sumber Daya Manusia</option>
                      <option value="litbang">Biro Penelitian dan Pengembangan</option>
                      <option value="bismit">Biro Bisnis dan Kemitraan (treasurer)</option>
                      <option value="keuangan">Bagian Keuangan</option>
                      <option value="kestari">Bagian Kesekretariatan</option>
                    </select>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Deskripsi Proker</label>
                  <div class="col-sm-10">
                    <textarea name="deskripsi" class="form-control" rows="8" placeholder="Deskipsi" required></textarea>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tujuan</label>
                  <div class="col-sm-10">
                    <textarea name="tujuan" class="form-control" rows="3" placeholder="Tujuan" required></textarea>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Waktu Pelaksanaan <b style="color: red;">*</b></label>
                  <div class="col-sm-10">
                    <input name="waktu" type="text" class="form-control" placeholder="Waktu Pelaksanaan" required>
                    <p class="help-block">Contoh : April 2017</p>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tempat Pelaksanaan <b style="color: red;">*</b> </label>
                  <div class="col-sm-10">
                    <input name="tempat" type="text" class="form-control" placeholder="Tempat Pelaksanaan" required>
                    <p class="help-block">Contoh : Kampus J1 Universitas Gunadarma</p>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Tahun </label>
                  <div class="col-sm-10">
                    <input name="tahun" type="text" class="form-control" placeholder="Tahun" required>
                  </div>  
                </div>
                <div class="form-group">
                  <label class="col-sm-2 control-label">Upload Gambar </label>
                  <div class="col-sm-10">
                     <input type="file" name="gambar"><br>
                  </div>  
                </div><br>
                <div class="form-group">
                  <div class="pull-left">
                    <label class="col-md-12 control-label"><b style="color: red;">*</b> Isikan dengan strip "-" tanpa tanda kutip jika ingin anda kosongkan.</label>
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <input name="save" type="submit" class="btn btn-info pull-left" value="Simpan">
              </div>
              <!-- /.box-footer -->
            </form>
