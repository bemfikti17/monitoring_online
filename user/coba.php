<?php 
include "../pages/conf/conn.php";

?>
<div class="row">
  <div class="col-md-12">
    
    <div class="col-md-4">
      <div class="panel panel-primary" style="height: 300px;">
        <div class="panel-heading">AKADEMIK</div>
        
        <?php
         $q = "SELECT * FROM list_proker WHERE divisi='akademik'";
            $que = $conn->prepare($q);
            $que->execute();
            $var_hasil=$que->get_result();
            while($res=$var_hasil->fetch_array()){
        ?>
            <div class="panel-body">
            <a href="?menu=detail&act=akademik&id=<?=$res['id_proker'];?>"><?=$res['nama_proker'];?></a>
            </div>
            <?php }
            ?>
      </div>

      <div class="panel panel-primary" style="height: 300px;">
        <div class="panel-heading">KEWIRAUSAHAAN</div>

        <?php
         $q = "SELECT * FROM list_proker WHERE divisi='kewirausahaan'";
            $que = $conn->prepare($q);
            $que->execute();
            $var_hasil=$que->get_result();
            while($res=$var_hasil->fetch_array()){
        ?>
            <div class="panel-body">
            <a href="?menu=detail&act=kewirausahaan&id=<?=$res['id_proker'];?>"><?=$res['nama_proker'];?></a>
            </div>
            <?php }
            ?>
      </div>

      <div class="panel panel-primary" style="height: 300px;">
        <div class="panel-heading">PSDM</div>

        <?php
         $q = "SELECT * FROM list_proker WHERE divisi='psdm'";
            $que = $conn->prepare($q);
            $que->execute();
            $var_hasil=$que->get_result();
            while($res=$var_hasil->fetch_array()){
        ?>
            <div class="panel-body">
            <a href="?menu=detail&act=psdm&id=<?=$res['id_proker'];?>"><?=$res['nama_proker'];?></a>
            </div>
            <?php }
            ?>
      </div>
    </div>


    <div class="col-md-4">
      <div class="panel panel-primary" style="height: 300px;">
        <div class="panel-heading">KESMA</div>
        <?php
         $q = "SELECT * FROM list_proker WHERE divisi='kesma'";
            $que = $conn->prepare($q);
            $que->execute();
            $var_hasil=$que->get_result();
            while($res=$var_hasil->fetch_array()){
?>
            <div class="panel-body">
            <a href="?menu=detail&act=kesma&id=<?=$res['id_proker'];?>"><?=$res['nama_proker'];?></a>
            </div>
            <?php }
            ?>
      </div>

      <div class="panel panel-primary" style="height: 300px;">
        <div class="panel-heading">HUMAS</div>
        <?php
         $q = "SELECT * FROM list_proker WHERE divisi='humas'";
            $que = $conn->prepare($q);
            $que->execute();
            $var_hasil=$que->get_result();
            while($res=$var_hasil->fetch_array()){
        ?>
            <div class="panel-body">
            <a href="?menu=detail&act=humas&id=<?=$res['id_proker'];?>"><?=$res['nama_proker'];?></a>
            </div>
            <?php }
            ?>
      </div>

      <div class="panel panel-primary" style="height: 300px;">
        <div class="panel-heading">MEDIA</div>
        <?php
         $q = "SELECT * FROM list_proker WHERE divisi='media'";
            $que = $conn->prepare($q);
            $que->execute();
            $var_hasil=$que->get_result();
            while($res=$var_hasil->fetch_array()){
        ?>
            <div class="panel-body">
            <a href="?menu=detail&act=media&id=<?=$res['id_proker'];?>"><?=$res['nama_proker'];?></a>
            </div>
            <?php }
            ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="panel panel-primary" style="height: 300px;">
        <div class="panel-heading">PTI</div>
        <?php
         $q = "SELECT * FROM list_proker WHERE divisi='pti'";
            $que = $conn->prepare($q);
            $que->execute();
            $var_hasil=$que->get_result();
            while($res=$var_hasil->fetch_array()){
        ?>
            <div class="panel-body">
            <a href="?menu=detail&act=pti&id=<?=$res['id_proker'];?>"><?=$res['nama_proker'];?></a>
            </div>
            <?php }
            ?>
      </div>

      <div class="panel panel-primary" style="height: 300px;">
        <div class="panel-heading">PENGMAS</div>
        <?php
         $q = "SELECT * FROM list_proker WHERE divisi='pengmas'";
            $que = $conn->prepare($q);
            $que->execute();
            $var_hasil=$que->get_result();
            while($res=$var_hasil->fetch_array()){
        ?>
            <div class="panel-body">
            <a href="?menu=detail&act=pengmas&id=<?=$res['id_proker'];?>"><?=$res['nama_proker'];?></a>
            </div>
            <?php }
            ?>
      </div>

      <div class="panel panel-primary" style="height: 300px;">
        <div class="panel-heading">OLAHRAGA</div>
        <?php
         $q = "SELECT * FROM list_proker WHERE divisi='olahraga'";
            $que = $conn->prepare($q);
            $que->execute();
            $var_hasil=$que->get_result();
            while($res=$var_hasil->fetch_array()){
        ?>
            <div class="panel-body">
            <a href="?menu=detail&act=olahraga&id=<?=$res['id_proker'];?>"><?=$res['nama_proker'];?></a>
            </div>
            <?php }
            ?>
      </div>
    </div>

    <div class="col-md-4">
      <div class="panel panel-primary" style="height: 300px;">
        <div class="panel-heading">SENI BUDAYA</div>
        <?php
         $q = "SELECT * FROM list_proker WHERE divisi='senbud'";
            $que = $conn->prepare($q);
            $que->execute();
            $var_hasil=$que->get_result();
            while($res=$var_hasil->fetch_array()){
        ?>
            <div class="panel-body">
            <a href="?menu=detail&act=senbud&id=<?=$res['id_proker'];?>"><?=$res['nama_proker'];?></a>
            </div>
            <?php }
            ?>
      </div>
</div>
    
  </div>
</div>
