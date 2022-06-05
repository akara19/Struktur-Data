<?php 
  /* untuk mengambil skrip header dan menu*/
    include 'template/header.php';
    include 'template/menu.php';
    /* ====================== */
 ?>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<table>
			<tr>
				<td><input type="submit" value="Buat File"></td>
			</tr>
		</table>
	</form>
<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$file = "data.txt"; 
	$data = "NGANJUK";
	file_put_contents($file, $data,FILE_APPEND); 
	echo "File Sudah Terbuat";
	}
?> 
