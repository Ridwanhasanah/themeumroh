jQuery(document).ready(function(){

/*===== Date Picker Start =====*/
jQuery('.datePicker').datepicker({dateFormat:"yy-mm-dd"});
/*===== Date Picker End =====*/


	/*===== jQuery validation Start ========*/
	jQuery('#formRegisUmroh').validate({
		rules: {
    // simple rule, converted to {required:true}
    name: "required",
    // compound rule
    email: {
    	required: true,
    	email: true
    }
}
});
	/*===== jQuery validation End ===e=====*/
	/*========== Menampilkan Nama Paket ketika di Select Strat =========*/
	jQuery('#package').change(function(){ 

		var selectedOption = jQuery('#package option:selected');
		var selectPpp 	   = jQuery('#packageppp option:selected');

		var formhtml  = jQuery("#formhtml").show();/*meanmpilkan form*/
		var ppp1      = jQuery('#ppp1'); //initial id to variabel
		var ppp2      = jQuery('#ppp2');
		var desti     = jQuery('#desti');
		var time      = jQuery('#time');
		var price     = jQuery('#packageprice');
		var airline   = jQuery('#airline');
		var hotel     = jQuery('#hotel');
		var roomhotel = jQuery('#roomhotel');
		var conhotel  = jQuery('#con-hotel');

		function ppp( fppp1, fppp2, fdesti, ftime, fprice, fairline, fhotel){

			
			ppp1.text(fppp1);  //include text to var ppp1
			ppp2.text(fppp2);
			desti.val(fdesti);
			time.val(ftime);
			price.val(fprice);
			airline.val(fairline);
			hotel.val(fhotel);

			return jQuery('#divResult').html(formhtml); //return result to id divResult and show in id formhtml
		}



		if (selectedOption.val() == "package1") {
			ppp('Bearngkat Tanggal 11 26 Des 2015',
				'Keberangkatan Berikutnya bulan Febuari & April 2016',
				'Mekah, Madinah & Turkey',
				'13 Hari',
				'$ 2,700',
				'TURKISH AIR',
				'');
			conhotel.hide();
			roomhotel.hide();
		}else if (selectedOption.val() == "package2") {
			ppp('17 Desember 2015',
				'Bulan Febuari dan April 2016',
				'Mekah, Madinah & Turkey',
				'11 Hari',
				'$ 2,050',
				'Saudia/Emirates/Ettihad/Egypt Air',
				'Hotel Setaraf Bintang 4,Hotel Madinah');
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package3") {
			ppp('Desember 2015',
				'',
				'Dubai, Mekkah, Madinah',
				'11 Hari',
				'$ 2,050',
				'Emirates/ Garuda/ Ettihad/Saudia Air',
				'Hotel Setaraf Bintang 3 Mekkah,Hotel Mekkah');
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package4") {
			ppp('Bearngkat Tanggal 11, 26 Desember 2015',
				'',
				'Mekah, Madinah & Turkey',
				'12 Hari',
				'$ 2,500',
				'SAUDI ARABIA , TURKIS AIRLANES',
				'');
			conhotel.hide();
			roomhotel.hide();
		}else if (selectedOption.val() == "package5") {
			ppp('Bearngkat Tanggal 11 26 Des 2015',
				'Keberangkatan Berikutnya bulan Febuari & April 2016',
				'Mekah, Madinah & Turkey',
				'13 Hari',
				'$ 2,700',
				'TURKISH AIR',
				'');
			conhotel.hide();
			roomhotel.hide();
		}else if (selectedOption.val() == "package6") {
			ppp('17 Desember 2015',
				'Bulan Febuari dan April 2016',
				'Mekah, Madinah & Turkey',
				'11 Hari',
				'$ 2,050',
				'Saudia/Emirates/Ettihad/Egypt Air',
				'Hotel Setaraf Bintang 4,Hotel Madinah');
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package7") {
			ppp('Desember 2015',
				'',
				'Dubai, Mekkah, Madinah',
				'11 Hari',
				'$ 2,050',
				'Emirates/ Garuda/ Ettihad/Saudia Air',
				'Hotel Setaraf Bintang 3 Mekkah,Hotel Mekkah');
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package8") {
			ppp('Bearngkat Tanggal 11, 26 Desember 2015',
				'',
				'Mekah, Madinah & Turkey',
				'12 Hari',
				'$ 2,500',
				'SAUDI ARABIA , TURKIS AIRLANES',
				'');
			conhotel.hide();
			roomhotel.hide();
		}else if (selectedOption.val() == "package9") {
			ppp('Desember 2015',
				'',
				'Dubai, Mekkah, Madinah',
				'11 Hari',
				'$ 2,050',
				'Emirates/ Garuda/ Ettihad/Saudia Air',
				'Hotel Setaraf Bintang 3 Mekkah,Hotel Mekkah');
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package10") {
			ppp('Bearngkat Tanggal 11, 26 Desember 2015',
				'',
				'Mekah, Madinah & Turkey',
				'12 Hari',
				'$ 2,500',
				'SAUDI ARABIA , TURKIS AIRLANES',
				'');
			conhotel.hide();
			roomhotel.hide();
		}


		

//html('Value = ' + selectedOption.val() +", Text = "+selectedOption.text());

});
	/*========== Menampilkan Nama Paket ketika di Select End =========*/

	/*===== Validasi Start =====*/

	jQuery(function(){
		var errorName = jQuery('#errorName'); //initial variable
		var name = jQuery('#names');
		
		var errorBirthDate = jQuery('#errorBirthDate');
		var birthDate = jQuery('#birthdate');

		var birthPlace = jQuery('#birthPlace');
		var errorBirthPlace = jQuery('#errorBirthPlace');

		var email = jQuery('#email');
		var errorEmail = jQuery('#errorEmail');

		var phone = jQuery('#phone');
		var errorPhone = jQuery('#errorPhone');

		var homeAdd = jQuery('#homeadd');
		var errorHomeAdd = jQuery('#errorHomeAdd');

		var city = jQuery('#city');
		var errorCity = jQuery('#errorCity');

		var noPassport = jQuery('#noPassport');
		var errorNoPassport = jQuery('#errorNoPassport');

		var datePassport = jQuery('#datePassport');
		var errorDatePassport = jQuery('#errorDatePassport');

		var exDatePassport = jQuery('#exDatePassport');
		var errorExDatePassport = jQuery('#errorExDatePassport');

		var officePassport = jQuery('#officePassport');
		var errorOfficePassport = jQuery('#errorOfficePassport');

		function checkVal( //fungsi untuk mengecek inputan
			name, //panjang string untuk mengisi kondisi
			value, //menigisi nilai string yang akan di tampilkan
			error //id dari <span> yg ada di html untuk di show();
			){ 

			if (name == 0) { //kondisi
				error.html(value).show(); //menampilkan text string yang ada
			error.show(); //menampilkan span
			}else{
			error.hide(); // jika false maka hide
			}

		}


		name.focusout(function(){
			checkVal(name.val().length,'Nama Harus di Isi',errorName)
			//check_name();
		});

		birthDate.focusout(function(){
			checkVal(birthDate.val().length,'Harap Isi Tanggal Lahir anda dengan benar sesuai format',errorBirthDate);
		});

		birthPlace.focusout(function(){
			checkVal(birthPlace.val().length,'Tempat Lahir Anda masih kosong harap di isi',errorBirthPlace);
		});

		email.focusout(function(){
			checkVal(email.val().length,'Email Anda masih kosong harap di isi',errorEmail);
		});

		phone.focusout(function(){
			checkVal(phone.val().length,'Nomor Handphone Anda masih kosong harap di isi',errorPhone);
		});

		homeAdd.focusout(function(){
			checkVal(homeAdd.val().length,'Alamat Rumah Anda masih kosong harap di isi',errorHomeAdd);
		});

		city.focusout(function(){
			checkVal(city.val().length,'Kolom Kota masih kosong harap di isi',errorCity);
		});

		noPassport.focusout(function(){
			checkVal(noPassport.val().length,'Nomor Passport Anda masih kosong harap di isi',errorNoPassport);
		});

		datePassport.focusout(function(){
			checkVal(datePassport.val().length,'Tanggal Keluar Passport masih kosong harap di isi sesuai format',errorDatePassport);
		});

		exDatePassport.focusout(function(){
			checkVal(exDatePassport.val().length,'Tanggal Habis Passport masih kosong harap di isi sesuai format',errorExDatePassport);
		});

		officePassport.focusout(function(){
			checkVal(officePassport.val().length,'Kantor Imigrasi Passport masih kosong harap di isi',errorOfficePassport);
		});





});



/*try{
}catch(e){
	document.write("Message = "+e.message + "<br/>");
	document.write("Description = "+e.description + "<br/>");
	document.write("Stack Trace = "+e.stack + "<br/>");


}
*/
try{
	jQuery("#send").click(function(){
		//alert('tes aja ');
	//var validation = jQuery('#errorbirthplace');

	var name = jQuery('#names').val().length;
	/*var birthdate = jQuery('#birthdate').val().length;
	var birthplace = jQuery('#birthplace').val().length;
	var email = jQuery('#email').val().length;
	var phone = jQuery('#phone').val().length;
	var homeadd = jQuery('#homeadd').val().length;*/

	function validation(){
		jQuery("#tes").hide();
		var err = jQuery("#errorName");

		if (name == 0) {
			err.show();
			//alert('Nama Harus di isi !!!');

		}
	}






});
}catch(e){
	document.write("Message = "+e.message + "<br/>");
	document.write("Description = "+e.description + "<br/>");
	document.write("Stack Trace = "+e.stack + "<br/>");


}
/*===== Validasi End =====*/
});