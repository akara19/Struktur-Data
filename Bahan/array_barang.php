<?php 
  /* untuk mengambil skrip header dan menu*/
    include 'template/header.php';
    include 'template/menu.php';
    /* ====================== */
 ?>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<table>
			<tr>
				<td>Kode Barang</td> 
				<td><input type="type" name="Kode_barang"></td>
			</tr>
			<tr>
				<td>Nama Barang</td> 
				<td><input type="type" name="Nama_barang"></td>
			</tr>
			<tr>
				<td>Harga Barang</td> 
				<td><input type="type" name="Harga_barang"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Simpan"></td>
			</tr>
		</table>
	</form>

   <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Variable post
        $Kode_barang = $_POST['Kode_barang'];
        $Nama_barang = $_POST['Nama_barang'];
        $Harga_barang = $_POST['Harga_barang'];
        
        $dataBarang = array('Kode_barang'=>$Kode_barang,
    					'Nama_barang'=>$Nama_barang,
    			 		'Harga_barang'=>$Harga_barang);	
        echo "<table border='1'>".
        	 "<th>Kode Barang</th>".
        	 "<th>Nama Barang</th>".
        	 "<th>Harga Barang</th>".
        	 "<tr>".
        	 	"<td>".$dataBarang['Kode_barang']."</td>".
        	 	"<td>".$dataBarang['Nama_barang']."</td>".
        	 	"<td>".number_format($dataBarang['Harga_barang'])."</td>".
        	 "</tr>".
        	 "</table>";
    }
	?>

<?php
    /* untuk mengabil skrip footer */
    include 'template/footer.php';
    /* ===================== */
?>
