-- MySQL dump 10.15  Distrib 10.0.32-MariaDB, for Linux (x86_64)
--
-- Host: localhost    Database: jende731_monitoring_bemfikti
-- ------------------------------------------------------
-- Server version	10.0.32-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `list_proker`
--

DROP TABLE IF EXISTS `list_proker`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `list_proker` (
  `id_proker` int(11) NOT NULL AUTO_INCREMENT,
  `nama_proker` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `pj` varchar(255) NOT NULL,
  `npm_pj` varchar(255) NOT NULL,
  `waktu` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `divisi` varchar(255) NOT NULL,
  `p_penilaian` int(11) NOT NULL,
  `tahun` int(25) NOT NULL,
  `gambar` varchar(20) NOT NULL,
  PRIMARY KEY (`id_proker`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `list_proker`
--

LOCK TABLES `list_proker` WRITE;
/*!40000 ALTER TABLE `list_proker` DISABLE KEYS */;
INSERT INTO `list_proker` (`id_proker`, `nama_proker`, `deskripsi`, `tujuan`, `pj`, `npm_pj`, `waktu`, `tempat`, `bidang`, `divisi`, `p_penilaian`, `tahun`, `gambar`) VALUES (12,'FIKTI Open Sport Competition 2017','Nama kegiatan ini adalah â€œFIKTI Open Sport Competition 2017â€. Dengan mengusung tema â€œShow your skill with proud and fair playâ€. Kegiatan ini berupa kompetisi olahraga yang diadakan oleh BEM FIKTI Universitas Gunadarma. Cabang olahraga yang diperlombakan yaitu Atletik 400m, Basket 3on3, Bulutangkis(tunggal putra, ganda putra, ganda campuran), Catur dan Futsal.\r\n','1.Meningkatkan keakraban dan menjalin tali silaturahmi seluruh mahasiswa Universitas Gunadarma khususnya Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Gunadarma.\r\n2. Menjadikan salah satu wadah bagi seluruh mahasiswa Universitas Gunadarma unt','Cendy Putra Budiaman','11115447','16 Januari 2017 - 21 Januari 2017','Kampus H Universitas Gunadarma','Bidang 3','olahraga',0,2017,'1500782840802.jpg'),(13,'FENOM ( FIKTI Electronic Number One Magazine )','FENOM (FIKTI Electronic Number One Magazine) merupakan media informasi berupa Majalah Elektronik yang diterbitkan oleh BEM Fakultas Ilmu Komputer dan Teknologi Informasi, Universitas Gunadarma. Berdiri sejak tahun 2014, Majalah FENOM ini memberikan informasi terkini baik dari internal kampus maupun global serta menginformasikan kegiatan â€“ kegiatan yang diselenggarakan oleh BEM FIKTI UG \r\n\r\nVISI\r\nMenjadi majalah elektonik yang berkualitas dan terdepan dalam menyebarluaskan informasi di Universitas Gunadarma khususnya FIKTI (Fakultas Ilmu Komputer dan Teknologi Informasi) serta berperan sebagai sarana civitas akademika FIKTI untuk mengeluarkan aspirasinya\r\n\r\nMISI\r\n-	Bertaqwa Kepada Tuhan Yang Maha Esa\r\n-	Menyediakan konten media yang edukatif, kreatif, komunikatif, dan bermanfaat\r\n-	Menyebarluaskan Informasi yang Komprehensif, Relevan, Tepat Waktu, Akurat, dan Konsisten\r\n-	Meningkatkan minat membaca dan menulis Mahasiswa/i Universitas Gunadarma\r\n-	Sebagai media mahasiswa/i dalam pengembangan kreatifitas jurnalistik\r\n-	Menjadikan FENOM sebagai sumber inspirasi mahasiswa/i dalam berkarya\r\n-	Menyatukan seluruh redaksi untuk berkontribusi dalam memajukan FENOM','1.	Mengembangkan bakat serta kemampuan menulis dalam wadah yang edukatif dan kreatif\r\n2.	Menghadirkan sarana yang mempuni bagi seluruh mahasiswa/i Universitas Gundarama untuk aktif, dinamis, dan kritis dalam kemajuan teknologi kepenulisan serta kepekaan d','Dias Arga Pratama','11115864','Sepanjang Tahun','Online','Bidang 4','media',0,2016,'FENOM-1.png'),(14,'Gathering With FIKTI','Kegiatan ini terlaksana berhubungan dengan mahasiswa â€“ mahasiswa baru angkatan 2016 yang diberikan pengarahan tentang jurusan SI/SK, prospek kerja di jurusan SI/SK juga tips dan trik menjadi mahasiswa yg aktif dikampus.\r\n Selain itu, diundang juga beberapa mahasiswa FIKTI berprestasi yang membagikan pengalamannya selama berkompetisi serta informasi seputar beasiswa internal maupun eksternal oleh  staff BEM FIKTI, serta mereka memberikan juga beberapa perbedaan mengenai perkuliahan Sarmag dan Reguler di Universitas Gunadarma.\r\n','Adapun maksud dan tujuan diadakan kegiatan ini adalah:\r\n1.	Menumbuhkan rasa kebersamaan, kekeluargaan, dan menjalin tali silahturahmi antar Mahasiswa FIKTI terutama angkatan 2016.\r\n2.	Mengenalkan lebih spesifik mengenai jurusan yang ada di Fakultas Ilmu K','Achmad Rivai','10115068','25 November 2016','Kampus J1 Universitas Gunadarma','Bidang 2','kesma',0,2016,'DSCF0310_opt.jpg');
/*!40000 ALTER TABLE `list_proker` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `objektif`
--

DROP TABLE IF EXISTS `objektif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `objektif` (
  `id_objektif` int(11) NOT NULL AUTO_INCREMENT,
  `id_proker` int(11) NOT NULL,
  `pertanyaan` varchar(255) NOT NULL,
  `nilai` int(11) NOT NULL,
  `periode` varchar(255) NOT NULL,
  `stat` int(11) NOT NULL,
  PRIMARY KEY (`id_objektif`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `objektif`
--

LOCK TABLES `objektif` WRITE;
/*!40000 ALTER TABLE `objektif` DISABLE KEYS */;
INSERT INTO `objektif` (`id_objektif`, `id_proker`, `pertanyaan`, `nilai`, `periode`, `stat`) VALUES (20,14,'Membuat proposal kegiatan',50,'1',1),(21,14,'Membuat surat peminjaman ruangan untuk kegiatan',60,'2',1),(22,12,'Membuat proposal kegiatan',80,'1',1),(23,12,'Membuat surat peminjaman',80,'1',1),(24,12,'Penentuan konsep acara',80,'2',1),(25,13,'Publikasi Majalah FENOM',60,'1',1),(26,13,'Publikasi Majalah FENOM',70,'2',1),(27,13,'Publikasi Majalah FENOM',60,'3',1),(28,13,'Publikasi Majalah FENOM',70,'4',1);
/*!40000 ALTER TABLE `objektif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `subjektif`
--

DROP TABLE IF EXISTS `subjektif`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `subjektif` (
  `id_subjektif` int(11) NOT NULL AUTO_INCREMENT,
  `id_proker` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  PRIMARY KEY (`id_subjektif`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `subjektif`
--

LOCK TABLES `subjektif` WRITE;
/*!40000 ALTER TABLE `subjektif` DISABLE KEYS */;
/*!40000 ALTER TABLE `subjektif` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `nama` varchar(255) NOT NULL,
  `npm` varchar(15) NOT NULL,
  `bidang` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `level` int(2) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` (`nama`, `npm`, `bidang`, `username`, `hash`, `level`, `status`) VALUES ('bb','12345432','0','123','$2y$10$dZZVKkfmXzVTSJGRyHCXWuC1eIKaglLH/1uUHcDwYKICG1hNvCCqG',3,1),('Abitama Satria Panji Persada','10115042','0','A14bang','$2y$10$FEYassP2htpVCvYW.2rxIOkdI4.fB9nUIjDVY0GzQPoMLwzTU/UR6',3,1),('admin','10114203','1','admin','$2y$10$DV/g1aBPj8OtelV2msDD7eHcaCWoPkx./NLdk88a1dsERhzDoJlr.',0,1),('Ahmad Syarif Hidayat','20114613','media','ahmad','$2y$10$KLry44P3zfJSNRVrCqLExONkJa9OmfmZFfTwxBrejpkZgkzUA4mTC',2,1),('apa','123456666','0','aku','$2y$10$egq88vUm1fMfrjNg/3ZYTeOqcTsXgh2W4Ikl1hhFP.P7LOPuxOM6K',3,1),('moch sean alrenzha','14115428','0','alrenzha','$2y$10$oYfIRu.6W30LIXZG6DYdNeBMu5bnU39hIhlrbb1EGh5n/4ztVzpA2',3,1),('Achmad Rivai','10115068','Kesejahteraan Mahasiswa','A_rivai','$2y$10$HKhCC/ffWRk8TN9Owi5ngemySGsYkLqY7Tn6WB7w5xsufD2G0h1Ne',3,1),('bayu syaits','11113679','0','bayusyaits','$2y$10$ZCP0BRcOWoVKG7iiIiCAdeJNi5ACNxmMdiij53W1Y87wIsztG9h9G',3,1),('Cendy Putra Budiaman','11115447','0','cendypb','$2y$10$H5n0Bwv5juXp72EkqZ4dneNVt5E/wmubgphY3zN2tNo6IAqa4sWOO',3,1),('Dias Arga Pratama','11115864','0','diasarga','$2y$10$ef3Yy9thM5cPyPIYZjdKFOf0/LkqEEk/0GzVR3oiXkP53D9lMXe5y',3,1),('Edgardo Hamdola','13114389','0','edgard','$2y$10$OnizLSYcDQ5uqbp8thJrXOtOYFryAhaV2nCt3kJyeq1/jziwHUqti',3,1),('emilia febia manda','13114553','0','emiliafebia','$2y$10$.mTh5r9GXhiV0W0/9ucaf.Fo9WWX8dvAbnjXUl6qHSm0vgLCFUXiu',3,1),('Gatry Amalia Sari','14114470','Pengabdian Masyarakat','gatry','$2y$10$vo..KXqNowZ4nLj4RSiYLOCEFonjnuFcNZaYTHrpCqsqC2dTKW9q6',2,1),('Gemala Santri Rosa','14114480','-','gemalasr','$2y$10$2RIpnoX6sXjmjJ9pzQ0vCONogwG8BYlZzLv1wpWaF9uSpb0MwU2xK',1,1),('Indri Wulandari','15114326','0','indriwulan','$2y$10$YV02xiTpLeh9GnZOJ9vK.ubCq.mPF5CWu3S72fWoGqz9KXBszXGaO',3,1),('Jibril Hartri Putra','13115561','0','jibrilhp','$2y$10$qdvpiJ9yt/KIHhg5VkfxbO5M.4zlRXIOP2xgOqTt7HexTGWCeOKHC',3,1),('M. Ammar Ramadhan','27114077','olahraga','mare','$2y$10$A/Vg9OUcipL.TEj15t7UleijVQuli/5YBuyMjKJRSCOzkWJDYsOAW',2,1),('Dany Mochtar','12114537','0','mistermochtar','$2y$10$BdS3U0tozFYOI14QHo.9geRxtcLH7ZuJSSXdigris.Yf.gHfipcY.',3,1),('Nur Iramadhan','28114170','PTI','nuri','$2y$10$F/tWmJXoMzbmNG8iWNVZduKb3nJtIc8477Jsi/meE5WSi8Bj9SO8e',2,1),('nuriramadhn','28114170','0','nuriramadhan','$2y$10$PvkcPtndUuRDopzdqPU5eu1l2u9SunhawDLK2dz3Vu79Owyhaf3tm',3,1),('Rahayu Susanti','18114766','Akademik','rahayu','$2y$10$OouUsDJMMdyLgaxPrl90O.mlfameHfZQ1P9Ieshacf5TVaHlvbfI.',2,1),('Rahma Anisa','18114770','PSDM','rahma','$2y$10$XxdC4KmRJpn6PKaYB9lySePwrdxyPcbjhKCf629WIjFGJT6KAe4by',2,1),('Ridha','17113618','0','ridhahhusna','$2y$10$tXLuLCXWsp75jHrERteiV.r3cuYA8DURrJ.hlv0Xx3XHxgjoIdYOO',3,1),('Eriyanti Depari','12113935','Seni Budaya','riri','$2y$10$TjAJXS6MXOEB8G5eC3TBCO5sOO6/eEdgaMAldySwFfh7Jpz69NrOC',2,1),('Muchammad Susanto','16114858','Hubungan Masyarakat','santo','$2y$10$QosWYXSYmFUACTqjoFkF9OjRZhSPyWhKyweaPcIVMdB3ZiqBnTd0q',2,1),('Winda Haryani','1C114260','Kewirausahaan','winda','$2y$10$QhR9QXtCJMAO6gmyFiEXsOHTfGvAKyB2WO4WWUA48iPyP89UDj/wy',2,1),('Wisnu Ardy Saputra','1C114299','kesma','wisnu','$2y$10$0cwCnLGuODXCfQ2CD83MjumhWLBjaz3VsSHngD1eSblukWVFXw9ue',2,1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'jende731_monitoring_bemfikti'
--

--
-- Dumping routines for database 'jende731_monitoring_bemfikti'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-09-11 17:29:50
