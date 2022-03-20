<?php 
	session_start();
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
			<td><a href="?clear=1"> <input type="button" value="Bersihkan Data"></a></td>
		</tr>
	</table>
	 
	</form>

   <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Variable post
       	$data = isset($_SESSION['data']) ? $_SESSION['data'] : []; 
        $Kode_barang = $_POST['Kode_barang'];
        $Nama_barang = $_POST['Nama_barang'];
        $Harga_barang = $_POST['Harga_barang'];
        

        array_push($data,array('Kode_barang'=>$Kode_barang,
    						   'Nama_barang'=>$Nama_barang,
    						   'Harga_barang'=>$Harga_barang));
   		$_SESSION['data'] = $data;
   		$x=1;
   		echo "<table border='1'>".
   				"<th>No.</th>".
       			"<th>Kode Barang</th>".
       			"<th>Nama Barang</th>".
       			"<th>Harga Barang</th>";
        foreach ($data as $value){
       	echo "<tr>".
       				"<td>".$x."</td>".
       				"<td>".$value['Kode_barang']."</td>".
       				"<td>".$value['Nama_barang']."</td>".
       				"<td>".number_format($value['Harga_barang'])."</td>".
       			"</tr>";
            $x++;
        }
        echo "</table>";

    }else if ($_GET['clear']==1) {
    	session_destroy();
    }
	?>

<?php
    /* untuk mengabil skrip footer */
    include 'template/footer.php';
    /* ===================== */
?>
