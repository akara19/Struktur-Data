<?php 
	session_start();
  /* untuk mengambil skrip header dan menu*/
    include 'template/header.php';
    include 'template/menu.php';
    /* ====================== */
 
	$data = array("Motto"=>"CAKAP ARIF DAN BER-AKHLAQ MULIA",
				  "Kampus"=>"STT POMOSDA");
	echo "Isi data array <br> <b>";
	print_r($data);
	echo "</b>";
	$kampus = end($data);
	$motto = prev($data);
	
	echo "<br><b>".$kampus;
	echo "<br>".$motto."</b>";
    /* untuk mengabil skrip footer */
    include 'template/footer.php';
    /* ===================== */
?>
