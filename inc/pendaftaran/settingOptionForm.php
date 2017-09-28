<?php
$options = get_option("nama-paket-fields");


if ($_POST['save']) {
	
	/*PAKET*/
	$options['npl1']  = $_POST['npl1'];
	$options['npl2']  = $_POST['npl2'];
	$options['npl3']  = $_POST['npl3'];
	$options['npl4']  = $_POST['npl4'];
	$options['npl5']  = $_POST['npl5'];
	$options['npl6']  = $_POST['npl6'];
	$options['npl7']  = $_POST['npl7'];
	$options['npl8']  = $_POST['npl8'];
	$options['npl9']  = $_POST['npl9'];
	$options['npl10'] = $_POST['npl10'];

	/*paket 1*/
	$options['p1ppp1']     = $_POST['p1ppp1'];
	$options['p1ppp2']     = $_POST['p1ppp2'];
	$options['p1desti']    = $_POST['p1desti'];
	$options['p1duration'] = $_POST['p1duration'];
	$options['p1price']    = $_POST['p1price'];
	$options['p1airlines'] = $_POST['p1airlines'];
	$options['p1hotel']    = $_POST['p1hotel'];

	/*paket2*/
	$options['p2ppp1']     = $_POST['p2ppp1'];
	$options['p2ppp2']     = $_POST['p2ppp2'];
	$options['p2desti']    = $_POST['p2desti'];
	$options['p2duration'] = $_POST['p2duration'];
	$options['p2price']    = $_POST['p2price'];
	$options['p2airlines'] = $_POST['p2airlines'];
	$options['p2hotel']    = $_POST['p2hotel'];

	/*paket 3*/
	$options['p3ppp1']     = $_POST['p3ppp1'];
	$options['p3ppp2']     = $_POST['p3ppp2'];
	$options['p3desti']    = $_POST['p3desti'];
	$options['p3duration'] = $_POST['p3duration'];
	$options['p3price']    = $_POST['p3price'];
	$options['p3airlines'] = $_POST['p3airlines'];
	$options['p3hotel']    = $_POST['p3hotel'];

	/*paket 4*/
	$options['p4ppp1']     = $_POST['p4ppp1'];
	$options['p4ppp2']     = $_POST['p4ppp2'];
	$options['p4desti']    = $_POST['p4desti'];
	$options['p4duration'] = $_POST['p4duration'];
	$options['p4price']    = $_POST['p4price'];
	$options['p4airlines'] = $_POST['p4airlines'];
	$options['p4hotel']    = $_POST['p4hotel'];

	/*paket 5*/
	$options['p5ppp1']     = $_POST['p5ppp1'];
	$options['p5ppp2']     = $_POST['p5ppp2'];
	$options['p5desti']    = $_POST['p5desti'];
	$options['p5duration'] = $_POST['p5duration'];
	$options['p5price']    = $_POST['p5price'];
	$options['p5airlines'] = $_POST['p5airlines'];
	$options['p5hotel']    = $_POST['p5hotel'];

	/*paket 6*/
	$options['p6ppp1']     = $_POST['p6ppp1'];
	$options['p6ppp2']     = $_POST['p6ppp2'];
	$options['p6desti']    = $_POST['p6desti'];
	$options['p6duration'] = $_POST['p6duration'];
	$options['p6price']    = $_POST['p6price'];
	$options['p6airlines'] = $_POST['p6airlines'];
	$options['p6hotel']    = $_POST['p6hotel'];

	/*paket 7*/
	$options['p7ppp1']     = $_POST['p7ppp1'];
	$options['p7ppp2']     = $_POST['p7ppp2'];
	$options['p7desti']    = $_POST['p7desti'];
	$options['p7duration'] = $_POST['p7duration'];
	$options['p7price']    = $_POST['p7price'];
	$options['p7airlines'] = $_POST['p7airlines'];
	$options['p7hotel']    = $_POST['p7hotel'];

	/*paket 8*/
	$options['p8ppp1']     = $_POST['p8ppp1'];
	$options['p8ppp2']     = $_POST['p8ppp2'];
	$options['p8desti']    = $_POST['p8desti'];
	$options['p8duration'] = $_POST['p8duration'];
	$options['p8price']    = $_POST['p8price'];
	$options['p8airlines'] = $_POST['p8airlines'];
	$options['p8hotel']    = $_POST['p8hotel'];

	/*paket 9*/
	$options['p9ppp1']     = $_POST['p9ppp1'];
	$options['p9ppp2']     = $_POST['p9ppp2'];
	$options['p9desti']    = $_POST['p9desti'];
	$options['p9duration'] = $_POST['p9duration'];
	$options['p9price']    = $_POST['p9price'];
	$options['p9airlines'] = $_POST['p9airlines'];
	$options['p9hotel']    = $_POST['p9hotel'];

	/*paket10*/
	$options['p10ppp1']     = $_POST['p10ppp1'];
	$options['p10ppp2']     = $_POST['p10ppp2'];
	$options['p10desti']    = $_POST['p10desti'];
	$options['p10duration'] = $_POST['p10duration'];
	$options['p10price']    = $_POST['p10price'];
	$options['p10airlines'] = $_POST['p10airlines'];
	$options['p10hotel']    = $_POST['p10hotel'];




	update_option("nama-paket-fields",$options);//update_option berfungsi untuk menimpan inputan 
	echo '<div class="updated"><p><srong>Option Saved.</p><strong></div>';
}

function paketlayanan(
	$cform, //class form utk js
	$cshow, //class untuk hide css
	$ppp1, //name paket1 untuk di ambil nilainya $_POST['name']
	$ppp1val, //nilai paket1 untuk di tampilkan nilainya
	$ppp2, //name paket2
	$ppp2val, //nilai paket2 untuk di tampilkan nilainya
	$desti, //name untuk di ambil nilainya $_POST['name']
	$destival, //nilai untuk di tampilkan nilainya
	$duration, //name untuk di ambil nilainya $_POST['name']
	$durationval, //nilai  untuk di tampilkan nilainya
	$price, //name untuk di ambil nilainya $_POST['name']
	$priceval, //nilai untuk di tampilkan nilainya
	$airlines, //name untuk di ambil nilainya $_POST['name']
	$airlinesval, //nilai untuk di tampilkan nilainya
	$hotel, //name untuk di ambil nilainya $_POST['name']
	$hotelval  //nilai untuk di tampilkan nilainya
	)
{
	?>

	<div class="<?=$cform;?> button"><b>&#9660;</b></div>
	<div class="<?=$cshow;?>">
		<table>
			<tr>
				<td>Periode Paket Perjalanan 1</td>
				<td><input type="text" name="<?=$ppp1;?>" value="<?=$ppp1val?>"></td>
			</tr>
			<tr>
				<td>Periode Paket Perjalanan 2</td>
				<td><input type="text" name="<?=$ppp2;?>" value="<?=$ppp2val?>"></td>
			</tr>
			<tr>
				<td>Tujuan Negara</td>
				<td><input type="text" name="<?=$desti;?>" value="<?=$destival?>"></td>
			</tr>
			<tr>
				<td>Durasi Perjalanan</td>
				<td><input type="text" name="<?=$duration;?>" value="<?=$durationval;?>"></td>
			</tr>
			<tr>
				<td>Harga Paket</td>
				<td><input type="number" name="<?=$price;?>" value="<?=$priceval;?>"></td>
			</tr>			
			<tr>
				<td>Maskapai Penerbangan</td>
				<td><input type="text" name="<?=$airlines;?>" value="<?=$airlinesval;?>"></td>
			</tr>
			<tr>
				<td>Hotel</td>
				<td><input type="text" name="<?=$hotel;?>" value="<?=$hotelval;?>"></td>
			</tr>
		</table>
	</div>
	<?php
}


?>