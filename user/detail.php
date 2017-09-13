
<html>
<head>
  


<style>

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #9c27b0;
    background-color: #9c27b0;
    color:white;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #fff;
    color: #9c27b0;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #fff;
    color: #9c27b0;   
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #9c27b0;
    border-top: none;
}

/* Style the close button */
.topright {
    float: right;
    cursor: pointer;
    font-size: 20px;
}
.garis_tepi1 {
     border: 3px solid #9c27b0;
   }
.topright:hover {color: red;}
</style>
</head>
<body>


            <?php 
            $act = $_GET['act'];
            $id = $_GET['id'];

            $sql = $conn->prepare("SELECT * FROM list_proker WHERE id_proker=? and divisi=?");
            $sql->bind_param("ss",$id,$act);
            $sql->execute();
            $result=$sql->get_result();

            //hitung
            $jml_o = 0;
            $q = "SELECT * FROM objektif WHERE id_proker=?";
            $que = $conn->prepare($q);
            $que->bind_param("s",$id);
            $que->execute();
            $var_hasil=$que->get_result();
            $i = 0;
            while($res=$var_hasil->fetch_array()){
            	$score = $res['nilai'];
            	$jml_o=$jml_o+$score;
            	$i++;
            }
            if($i != 0) {
                $jml_o /= $i;
            }

            $tot = 0;
            $q2 = "SELECT * FROM subjektif WHERE id_proker='$id'";
            $que2 = $conn->prepare($q2);
            $que2->execute();
            $var_hasil2=$que2->get_result();
            while($res2=$var_hasil2->fetch_array()){
            	$score = $res2['nilai'];
            	$tot=$tot+$score;

            }

            $total=($jml_o+$tot)/2;//total nilai keseluruhan



            while($row=$result->fetch_array()){
                
                $namaproker = $row['nama_proker'];
                $deskripsi = $row['deskripsi'];
                $tujuan = $row['tujuan'];
                $pj = $row['pj'];
                $tempat = $row['tempat'];
                $waktu = $row['waktu'];
                $gambar = $row['gambar'];


            ?>     


<br />

<h2><?php echo $namaproker;?></h2> 
<br />
        
    
                <div class="col-md-7">
                    <div class="">
                     <div class="table-responsive">
                        <table class="table">
                            <tr>
                                <td align="left">Nama Proker</td>
                                <td align="left"><?php echo $namaproker;?></td>
                             </tr>
                             <tr>
                                <td align="left">Tujuan</td>
                                <td align="left"><?php echo $tujuan;?></td>
                            </tr>
                            <tr>
                                <td align="left">Penanggung Jawab</td>
                                <td align="left"><?php echo $pj;?></td>
                             </tr>
                            <tr>
                                <td align="left">Tempat</td>
                                <td align="left"><?php echo $tempat;?></td>
                            </tr>
                            <tr>
                                <td align="left">Waktu Pelaksanaan</td>
                                <td align="left"><?php echo $waktu;?></td>
                            </tr>
                            <tr>
                                <td align="left">Nilai</td>
                                <td align="left"><?php echo $total;?></td>
                            </tr>
                        </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="padding-left: 140px;">
                    <div class="profile">
                        <div class="avatar">
                            <img src="<?php echo '/MonitoringOnline-Master/user/assets/img/logo/'.$gambar ;?>" alt="Circle Image" class="img-circle img-responsive img-raised">
                        </div>
                        </div>
                </div>

                           

                <div class="col-md-12">
                 <br />
                    <h2>Deskripsi</h2> 
                    <div class="about-me-text margin-top-50">
                        <p><?php echo $deskripsi;?></p>
                    </div>
                </div>


<?php
            
            $var_periode = "";
            $var_Query = "SELECT * FROM objektif WHERE id_proker='$id' GROUP by periode";
            $Query = $conn->prepare($var_Query);
            $Query->execute();
            $var_Result=$Query->get_result();
        
?>
<!-- Tabs with icons on Card -->

                        <div class="card card-nav-tabs">
                        <h2>Perencanaan</h2>
                        <br />
                            <div class="header header-success">
                        
                                <div class="nav-tabs-navigation">
                                    <div class="nav-tabs-wrapper">
                                        <ul class="nav nav-tabs" data-tabs="tabs">
                                    <?php
                                            while($var_Row = $var_Result->fetch_array())
                                                {

                                                    $var_periode = $var_Row['periode'];
                                        ?>

                                                <li class="">
                                                        <a href="#periode<?=$var_periode?>" data-toggle="tab">
                                                            <i class="material-icons">face</i>
                                                         Periode <?=$var_periode;?>
                                                      </a>
                                                </li>
                                    <?php
                                                }        
                                        ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                      
<?php

            $var_Query2 = "SELECT * FROM objektif WHERE id_proker='$id' group by periode order by periode asc";
            $Query2 = $conn->prepare($var_Query2);
            $Query2->execute();
            $var_Result2=$Query2->get_result();
?>

            <div class="content">
            <div class="tab-content text-center">
<?php
            while($var_Row2 = $var_Result2->fetch_array())
            {
                    $var_Temp = $var_Row2['periode'];
                    $var_Query = "SELECT * FROM objektif WHERE id_proker='$id' and periode ='$var_Temp'";
                    $Query = $conn->prepare($var_Query);
                    $Query->execute();
                    $var_Result=$Query->get_result();
                    echo '<div class="tab-pane col-md-11" id="periode'.$var_Temp.'">';
                    while($var_Row = $var_Result->fetch_array())
                    {

?>

                        <div class="experience">
                        <h1><?=$var_Row['periode'];?></h1>
                        <div class="experience-item">
                            <div class="experience-circle">
                               <i class="icon-graduation"></i> 
                               <p><?=$var_Row['nilai'];?></p>
                            </div>
                            <div class="experience-content experience-color-blue">
                                <p><?=$var_Row['pertanyaan'];?></p>
                            </div>
                         </div>
                        </div>
                                           
                  <?php
}
echo '</div>';
        }
?>

                    </div>              
                </div>  
</div>
                     
    <!-- Experience End -->

<table border="0" width="90%" align="center" style="display: none;">
	<tr valign="top">
		<td width="40%" align="left">
			<div class="garis_tepi1" style="padding-left: 5px; padding-right: 5px; margin-right: 10px;">
            
            <br />
            <font style="font-weight: bold; font-size: 30px;margin-left: 20px;">Deskripsi</font><br>
            <p align="justify" style="margin-left: 20px; margin-right: 20px;"><?php echo $deskripsi;?></p><br>

            <font style="font-weight: bold; font-size: 30px;margin-left: 20px;">Tujuan</font><br>
            <p align="justify" style="margin-left: 20px; margin-right: 20px;"><?php echo $tujuan;?></p><br>
			<div>

            <font style="font-weight: bold; font-size: 30px;margin-left: 20px;">Penanggung Jawab</font><br>
            <p align="justify" style="margin-left: 20px; margin-right: 20px;"><?php echo $pj;?></p><br>
            <div>

            <font style="font-styleweight: bold; font-size: 30px;margin-left: 20px;">Tempat Pelaksanaan</font><br>
            <p align="justify" style="margin-left: 20px; margin-right: 20px;"><?php echo $tempat;?></p><br>
            <div>

            <font style="font-weight: bold; font-size: 30px;margin-left: 20px;">Waktu Pelaksanaan</font><br>
            <p align="justify" style="margin-left: 20px; margin-right: 20px;"><?php echo $waktu;?></p><br>
            <div>
		</td>
		<td>
<?php } ?>



<?php 
include "../user/test.php";

?>
        
        </td>
        
    </tr>
</table>


<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>       
<script src="../plugins/jQueryUI/jquery-ui.min.js"></script>		
<script>

$(function(){

});

function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
     
</body>
</html> 
