        <?php 
            $id = isset($_GET['id']) ? $_GET['id'] : '';
            $sql = $conn->prepare("SELECT * FROM subjektif WHERE id_proker='$id'");
            $sql->execute();
            $resultsubjek=$sql->get_result();
            $row=$resultsubjek->fetch_array();
            
            if (isset($row)){
                $pertanyaan = (isset($row['pertanyaan']));
                // $nilsubjek = $row['nilai'];
                // $periode = $row['periode'];
            ?>
		
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, '1')" id="defaultOpen">#1</button>
		  <button class="tablinks" onclick="openCity(event, '2')">#2</button>
		  <button class="tablinks" onclick="openCity(event, '3')">#3</button>
		</div>

		<div id="1" class="tabcontent">
		  <h3><?php var_dump($pertanyaan);?></h3>
		  <p>isi</p>
		</div>

		<div id="2" class="tabcontent">
		  <h3>null2</h3>
		  <p>isi2</p> 
		</div>

		<div id="3" class="tabcontent">
		  <h3>null3</h3>
		  <p>isi3</p>
		</div>

		<?php } ?>