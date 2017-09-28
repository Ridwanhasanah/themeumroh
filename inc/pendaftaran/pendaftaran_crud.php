<?php

//include('../../pendaftaran.php');
global $wpdb;

$options = get_option("nama-paket-fields");
$namaPaket1  = $options['npl1'];
$namaPaket2  = $options['npl2'];
$namaPaket3  = $options['npl3'];
$namaPaket4  = $options['npl4'];
$namaPaket5  = $options['npl5'];
$namaPaket6  = $options['npl6'];
$namaPaket7  = $options['npl7'];
$namaPaket8  = $options['npl8'];
$namaPaket9  = $options['npl9'];
$namaPaket10 = $options['npl10'];

$tes = $options['test'];


$paket1  = $namaPaket1;//"Paket Umroh Plus Istanbul Bursa Cappadocia";
$paket2  = $namaPaket2;//"Paket Umroh Plus Kario Mesir";
$paket3  = $namaPaket3;//"Paket Umroh Plus Dubai";
$paket4  = $namaPaket4;//"Paket Umroh Plus Istanbul Dan Bursa";
$paket5  = $namaPaket5;//"Paket Umroh Murah Rahmah 12 hari";
$paket6  = $namaPaket6;//"Paket Umroh Murah Rahmah";
$paket7  = $namaPaket7;//"Paket Umroh Promo Febuari 2016";
$paket8  = $namaPaket8;//"Paket Umroh Plus Turki Istanbul Bursa";
$paket9  = $namaPaket9;//"Paket Umroh Plus Turki Istanbul Bursa 2016";
$paket10 = $namaPaket10;//"Paket Umroh Hemat Maret 2016";

/*===== Fungsi menampilkan nili di form untuk di ambil menggunakan id di js
 dan di tampilkan pada select Paket perjalanan*/
 /*===== Start =====*/
 function npl( //npl adalah Nama Paket Layanan
	$ppp1,
	$ppp1val, //paket layanan 1-2 dst
	$ppp2,
	$ppp2val, //nama untuk di ambil nilainya $_POST['name']
	$desti,
	$destival,
	$duration,
	$durationval,
	$price,
	$priceval,
	$airlines,
	$airlinesval,
	$hotel,
	$hotelval 
	)
{

	?>
	<div class="rhide">
		<p id="<?=$ppp1;?>"><?=$ppp1val;?></p>
		<p id="<?=$ppp2;?>"><?=$ppp2val;?></p>
		<p id="<?=$desti;?>"><?=$destival;?></p>
		<p id="<?=$duration;?>"><?=$durationval;?></p>
		<p id="<?=$price;?>"><?=$priceval;?></p>
		<p id="<?=$airlines?>"><?=$airlinesval;?></p>
		<p id="<?=$hotel?>"><?=$hotelval?></p>
	</div>
	<?php
}
/*===== end =====*/


/*===== Fungsi untuk menampilkan Java scrip Start*/
function showJs($value){
	
	echo "<script type='text/javascript'>".$value."</script>";
	
}
/*===== Fungsi untuk menampilkan Java scrip End*/

if (isset($_POST['submit'])) {
	
	if(strlen($_POST['names']) == 0 || strlen($_POST['names']) <=3){
		showJs("alert('Maaf Nama Lengkap harus di isi')");
	}elseif(strlen($_POST['birthdate']) == 0){
		showJs("alert('Maaf Tanggal Lahir harus di isi')");
	}elseif(strlen($_POST['birthplace']) == 0 ){
		showJs("alert('Maaf Tempat Lahir harus di isi')");
	}elseif(strlen($_POST['email']) == 0){
		showJs("alert('Maaf Email harus di isi')");
	}elseif(strlen($_POST['phone']) == 0 || strlen($_POST['phone']) <=10 ){
		showJs("alert('Maaf Nomor Handphone harus di isi')");
	}elseif(strlen($_POST['homeadd']) == 0){
		showJs("alert('Maaf Alamat Rumah harus di isi')");
	}elseif(strlen($_POST['city']) == 0){
		showJs("alert('Maaf Kota tempat tinggal harus di isi')");
	}elseif(strlen($_POST['nopassport']) == 0){
		showJs("alert('Maaf Nomor Passport harus di isi')");
	}elseif(strlen($_POST['datepassport']) == 0){
		showJs("alert('Maaf Tanggal Keluar Passport harus di isi')");
	}elseif(strlen($_POST['exdatepassport']) == 0){
		showJs("alert('Maaf Tanggal Habis Passport harus di isi')");
	}elseif(strlen($_POST['officepassport']) == 0){
		showJs("alert('Maaf Kantor Imigrasi 
			Passport harus di isi')");
	}else{

		$price = $_POST['price'];
		$prices = preg_replace('/[^0-9\  ]/', '', $price);

		$package = $_POST['package'];
		$packageppp = $_POST['packageppp'];

		$pack = $_POST['packageText']; 
		$ppp = $_POST['pppText']; /*utk mengambil text di select option yang sudah di tampung 
	di dalam input yang di isi menggunakan javascript*/
	
	/*Insert Database Start*/
	$data = array(
		'id'			 =>'', 
		'name_service'	 => $pack, //Ini berasal dari select option
		'ppp'			 => $ppp,//$_POST['packageppp'], 
		'destination'	 => $_POST['desti'], 
		'duration'		 => $_POST['time'], 
		'price'		 	 => $prices, 
		'airlines'		 => $_POST['airline'], 
		'hotel'			 => $_POST['hotel'], 
		'hotelroom'		 => $_POST['roomhotel'], 
		'full_name'		 => $_POST['names'], 
		'gender'		 => $_POST['gender'], 
		'date_birth'	 => $_POST['birthdate'], 
		'born'			 => $_POST['birthplace'], 
		'status'		 => $_POST['status'], 
		'email'			 => $_POST['email'], 
		'hp'			 => $_POST['phone'], 
		'home_add' 		 => $_POST['homeadd'], 
		'city'			 => $_POST['city'], 
		'home_hp'		 => $_POST['homephone'], 
		'office_add'	 => $_POST['officeadd'], 
		'office_hp' 	 => $_POST['officephone'], 
		'ref'			 => $_POST['ref'], 
		'no_passport'    => $_POST['nopassport'], 
		'date_passport'  => $_POST['datepassport'], 
		'ex_passport'    => $_POST['exdatepassport'], 
		'office_passport'=> $_POST['officepassport'], 
		'fb'			 => $_POST['fb'], 
		'twit'   		 => $_POST['twit'], 
		'insta'			 => $_POST['insta']
	);
	$wpdb->insert('wp_regformhaji',$data);

	/*Insert Database End*/

	/*Redrect link Start*/
	?>
	<script type="text/javascript">
		alert('Terima Kasih data Sudah Tersimpan ');
	window.location.replace("<?= get_home_url();?>");
	</script>
	<?php
	/*Redrect link End*/

}


}


?>