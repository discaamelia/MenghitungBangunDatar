<?php
	include "library_function.php";
	error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));// Menghilangkan Undefined index karna belum ada inputan 
?>
<!-- 10114345-Disca Amelia -->
<!-- Implementasi Fungsi tanpa parameter -->
<?php
function input_persegi_panjang()
{
	echo "
		<div class='datagrid'>
		<form method='get' action='4_latihan_pertemuan_4.php'>
		<input type='hidden' name='bangun_datar' value='persegi_panjang'>
		<table border='1'>
			<tr>
				<td colspan='3' align=center>Hitung Persegi Panjang</td>
			</tr>
			<tr>
				<td align='left'><font size=2>Panjang</td>
				<td>:</td>
				<td>
					<input type='text' name='panjang' size='15'>
				</td>
			</tr>
			<tr>
				<td align='left'><font size=2>Lebar</td>
				<td>:</td>
			<td><input type='text' name='lebar' size='15'></td>
			</tr>
			<tr>
				<td colspan='3' align='center'>
					<input type='Submit' value='Hitung'>
			</td>
			</tr>
		</table>
		</form>
		</div>";
}

function input_persegi()
{
	echo "
		<div class='datagrid'>
		<form method='get' action='4_latihan_pertemuan_4.php'>
		<input type='hidden' name='bangun_datar' value='persegi'>
		<table border='1'>
			<tr>
				<td colspan='3' align=center>Hitung Persegi</td>
			</tr>
			<tr>
				<td align='left'><font size=2>Sisi</td>
				<td>:</td>
				<td>
					<input type='text' name='sisi' size='15'>
				</td>
			</tr>
			
				<td colspan='3' align='center'>
					<input type='Submit' value='Hitung'>
			</td>
			</tr>
		</table>
		</form>
		</div>";
}

function input_segitiga()
{
	echo "
		<div class='datagrid'>
		<form method='get' action='4_latihan_pertemuan_4.php'>
		<input type='hidden' name='bangun_datar' value='segitiga'>
		<table border='1'>
			<tr>
				<td colspan='3' align=center>Hitung Segitiga</td>
			</tr>
			<tr>
				<td align='left'><font size=2>Alas</td>
				<td>:</td>
				<td>
					<input type='text' name='alas' size='15'>
				</td>
			</tr>
			<tr>
				<td align='left'><font size=2>Tinggi</td>
				<td>:</td>
				<td>
					<input type='text' name='tinggi' size='15'>
				</td>
			</tr>
			<tr>
				<td align='left'><font size=2>Sisi A</td>
				<td>:</td>
				<td>
					<input type='text' name='sisiA' size='15'>
				</td>
			</tr>
			<tr>
				<td align='left'><font size=2>Sisi B</td>
				<td>:</td>
				<td>
					<input type='text' name='sisiB' size='15'>
				</td>
			</tr>
			<tr>
				<td align='left'><font size=2>Sisi C</td>
				<td>:</td>
				<td>
					<input type='text' name='sisiC' size='15'>
				</td>
			</tr>
				<td colspan='3' align='center'>
					<input type='Submit' value='Hitung'>
			</td>
			</tr>
		</table>
		</form>
		</div>";
}

?>

<!-- Implementasi fungsi berparameter -->
<?php
function hitung_luas_persegi_panjang($p,$l)
{
$luas=$p*$l;
return $luas;
}

function hitung_keliling_persegi_panjang($p,$l)
{
$keliling=2*($p+$l);
return $keliling;
}

function hitung_luas_persegi($s)
{
$luas=$s*$s;
return $luas;
}

function hitung_keliling_persegi($s)
{
$keliling=4*$s;
return $keliling;
}

function hitung_luas_segitiga($a,$t)
{
$luas=($a*$t)/2;
return $luas;
}

function hitung_keliling_segitiga($sA,$sB,$sC)
{
$keliling=$sA+$sB+$sC;
return $keliling;
}

?>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "style.css">
</head>
<body>
	<div id = "container">
		<div id = "header">
			<!-- Panggil fungsi header -->
			<?php
			echo header_web();
			?>
		</div>

		<div id = "menu">
			<ul>
				<li>
					<a href = "4_latihan_pertemuan_4.php" class = "menu">Home </a>
				</li>
				<li>
					<a href = "?menu=persegi_panjang" class = "menu">Persegi Panjang </a>
				</li>
				<li>
					<a href = "?menu=persegi" class = "menu">Persegi</a>
				</li>
				<li>
					<a href = "?menu=segitiga" class = "menu">Segitiga</a>
				</li>
			</ul>
		</div>

		<div id = "content">
			<div id = "kirikolom">
			<?php
			if ($_GET['menu']=='persegi_panjang')
			{
				input_persegi_panjang();
			}
			
			if ($_GET['menu']=='persegi')
			{
				input_persegi();
			}
			
			if ($_GET['menu']=='segitiga')
			{
				input_segitiga();
			}
			?>
			</div>

			<div id = "kanankolom">
				<div id = "isi_content">
				<?php
				if($_GET['bangun_datar']=='persegi_panjang')
				{
				?>
                <br><br>
                <div class="datagrid">
                <center><table width="200" border="1">
                <thead>
                <tr><th colspan="2" align="center" scope="row">Data Persegi Panjang</th></tr>
                </thead>
                <tbody>
                <tr><td width="24%">Panjang</td>
                	<td width="76%"><?php echo"$_GET[panjang]"; ?></td></tr>
                <tr><td>Lebar</td>
                	<td><?php echo "$_GET[lebar]"; ?></td></tr>
                </tbody>
                </table><hr width="40%" size="3" color="#000000">
                		<center><table width="200" border="1">
                <thead>
                	<tr><th colspan="2" align="center" scope="row">Output Persegi Panjang</td></tr>
                </thead>
                <tbody>
                	<tr><td width="24%">Luas</td>
                	<td width="76%">
					<?php echo hitung_luas_persegi_panjang($_GET['panjang'],$_GET['lebar']); ?></td></tr>
                	<tr><td>Keliling</td>
                	<td><?php echo hitung_keliling_persegi_panjang($_GET['panjang'],$_GET['lebar']); ?></td>
                </tbody>
                </table>
				</div>
                <?php
				}
				?>
                
                <?php
				if($_GET['bangun_datar']=='persegi')
				{
				?>
                <br><br>
                <div class="datagrid">
                <center><table width="200" border="1">
                <thead>
                	<tr><th colspan="2" align="center" scope="row">Data Persegi</th></tr>
                </thead>
                <tbody>
                	<tr><td width="24%">Sisi</td>
                	<td width="76%"><?php echo"$_GET[sisi]"; ?></td></tr>
                	<tr><td>Sisi</td>
                	<td><?php echo "$_GET[sisi]"; ?></td></tr>
                </tbody>
                </table><hr width="40%" size="3" color="#000000">
                		<center><table width="200" border="1">
                <thead>
                	<tr><th colspan="2" align="center" scope="row">Output Persegi</td></tr>
                </thead>
                <tbody>
	                <tr><td width="24%">Luas</td>
                	<td width="76%"><?php echo hitung_luas_persegi($_GET['sisi'],$_GET['sisi']); ?></td></tr>
                	<tr><td>Keliling</td>
                	<td><?php echo hitung_keliling_persegi($_GET['sisi'],$_GET['sisi']); ?></td>
                </tbody>
                </table>
				</div>
                <?php
				}
				?>
                
                 <?php
				if($_GET['bangun_datar']=='segitiga')
				{
				?>
                <br><br>
                <div class="datagrid">
                <center><table width="200" border="1">
                <thead>
                	<tr><th colspan="2" align="center" scope="row">Data Segitiga</th></tr>
                </thead>
                <tbody>
                	<tr><td width="24%">Alas</td>
                	<td width="76%">
					<?php echo"$_GET[alas]"; ?></td></tr>
                	<tr><td>Tinggi</td>
                	<td><?php echo "$_GET[tinggi]"; ?></td></tr>
                </tbody>
                </table><hr width="40%" size="3" color="#000000">
                		<center><table width="200" border="1">
                <thead>
                	<tr><th colspan="2" align="center" scope="row">Output Segitiga</td></tr>
                </thead>
                <tbody>
                	<tr><td width="24%">Luas</td>
                	<td width="76%">
					<?php echo hitung_luas_segitiga($_GET['alas'],$_GET['tinggi']); ?></td></tr>
                	<tr><td>Keliling</td>
                	<td><?php echo hitung_keliling_segitiga($_GET['sisiA'],$_GET['sisiB'],$_GET['sisiC']); ?></td>
                </tbody>
                </table>
				</div>
                <?php
				}
				/* 			10114345- Disca Amelia - ATOL_10 
			    */
				?>
			</div>
		</div>
        </div>
        
			<div id = "footer">
				<!-- Panggil fungsi footer -->
					<?php
					echo footer_web();
					?>
			</div>
		</div>
	</div>
</body>
</html>