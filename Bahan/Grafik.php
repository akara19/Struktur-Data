<?php
session_start();
/* untuk mengambil skrip header dan menu*/
include 'template/header.php';
include 'template/menu.php';
/* ====================== */
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<table>
		<tr>
			<td>Jumlah Laki-Laki</td>
			<td><input type="type" name="L"></td>
		</tr>
		<tr>
			<td>Jumlah Perempuan</td>
			<td><input type="type" name="P"></td>
		</tr>
		<tr>
			<td><input type="submit" value="Tambah"></td>
			<td>
				<a href="?clear=1"> <input type="button" value="Bersihkan Data"></a></td>
		</tr>
	</table>

</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// Variable post
	$L = $_POST['L'];
	$P = $_POST['P'];

	$total = $L+$P;

	$persenL = (($L/$total) * 100);
	$persenP = (($P/$total) * 100);

	$grafikL = (($persenL * 30) /100);
	$grafikP = (($persenP * 30) /100);
?>
<h2>Statistik Mahasiswa Berdasarkan Jenis Kelamin</h2>
<p>
	<b>Laki-laki</b> (Jumlah: <?php echo $L; ?> | <?php echo $persenL; ?>%)
	<div style="height: 10px; width: <?php echo $grafikL; ?>%;
		background-color: red;" title="Laki-laki (Jumlah: <?php echo $L; ?> | <?php echo $persenL; ?>%)">
	</div>
</p>

<p>
	<b>Perempuan</b> (Jumlah: <?php echo $P; ?> | <?php echo $persenP; ?>%)
	<div style="height: 10px; width: <?php echo $grafikP; ?>%;
		background-color: red;" title="Perempuan (Jumlah: <?php echo $P; ?> | <?php echo $persenP; ?>%)">
	</div>
</p>
<?php
}
?>
<?php
/* untuk mengabil skrip footer */
include 'template/footer.php';
/* ===================== */
?>
