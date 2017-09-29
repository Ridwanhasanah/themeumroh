jQuery(document).ready(function(){

/*===== Date Picker Start =====*/
jQuery('.datePicker').datepicker({dateFormat:"yy-mm-dd"});
/*===== Date Picker End =====*/
/*====== Validate Select Option Start========*/



jQuery('#send').click(function(){
	
	var package = jQuery('#package').val();
	var errorPackage = jQuery('#errorPackage');
 	
 	var packageppp = jQuery('#packageppp').val();
 	var errorPackageppp = jQuery('#errorPackageppp');

		if (package == 0) {
			alert('Anda Harus memlih Paket Terlebih dahulu');
			//errorPackage.html('Anda Harus memlih Paket Terlebih dahulu').show();
			package.focusout(function(){
				if (package != 0) {
					errorPackage.html('Anda Harus memlih Paket Terlebih dahulu').hide();
				}
			})
		}else if( packageppp == 0){
			alert('Anda Harus memlih Periode Paket Perjalanan Terlebih dahulu');

			//errorPackageppp.html('Anda Harus pilih Paket perjalan');
		}else{
			errorPackage.hide();
			errorPackageppp.hide();
		}	
	})

/*====== Validate Select Option End========*/


	/*===== jQuery validation Start ========*/

	/*$.validator.addMethod("valueNotEquals", function(value, element, arg){
		return arg !== value;
	}, "Value must not equal arg.");*/


	jQuery('#formRegisUmroh').validate({
		rules: {
    // simple rule, converted to {required:true}
    name: "required",
    // compound rule
    email: {
    	required: true,
    	email: true
    },SelectName: { valueNotEquals:"default"}
 	},

 	message:{
 		SelectName: {valueNotEquals:"Tolong Pilih Paket"}
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
		var test = jQuery('#nilainya').text();

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
			ppp( jQuery('#p1ppp1').text(),
				jQuery('#p1ppp2').text(),
				jQuery('#p1desti').text(),
				jQuery('#p1duration').text(),
				'$ '+jQuery('#p1price').text(),
				jQuery('#p1airlines').text(),
				jQuery('#p1hotel').text());
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package2") {
			ppp( jQuery('#p2ppp1').text(),
				jQuery('#p2ppp2').text(),
				jQuery('#p2desti').text(),
				jQuery('#p2duration').text(),
				'$ '+jQuery('#p2price').text(),
				jQuery('#p2airlines').text(),
				jQuery('#p2hotel').text());
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package3") {
			ppp( jQuery('#p3ppp1').text(),
				jQuery('#p3ppp2').text(),
				jQuery('#p3desti').text(),
				jQuery('#p3duration').text(),
				'$ '+jQuery('#p3price').text(),
				jQuery('#p3airlines').text(),
				jQuery('#p3hotel').text());
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package4") {
			ppp( jQuery('#p4ppp1').text(),
				jQuery('#p4ppp2').text(),
				jQuery('#p4desti').text(),
				jQuery('#p4duration').text(),
				'$ '+jQuery('#p4price').text(),
				jQuery('#p4airlines').text(),
				jQuery('#p4hotel').text());
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package5") {
			ppp( jQuery('#p5ppp1').text(),
				jQuery('#p5ppp2').text(),
				jQuery('#p5desti').text(),
				jQuery('#p5duration').text(),
				'$ '+jQuery('#p5price').text(),
				jQuery('#p5airlines').text(),
				jQuery('#p5hotel').text());
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package6") {
			ppp( jQuery('#p6ppp1').text(),
				jQuery('#p6ppp2').text(),
				jQuery('#p6desti').text(),
				jQuery('#p6duration').text(),
				'$ '+jQuery('#p6price').text(),
				jQuery('#p6airlines').text(),
				jQuery('#p6hotel').text());
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package7") {
			ppp( jQuery('#p7ppp1').text(),
				jQuery('#p7ppp2').text(),
				jQuery('#p7desti').text(),
				jQuery('#p7duration').text(),
				'$ '+jQuery('#p7price').text(),
				jQuery('#p7airlines').text(),
				jQuery('#p7hotel').text());
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package8") {
			ppp( jQuery('#p8ppp1').text(),
				jQuery('#p8ppp2').text(),
				jQuery('#p8desti').text(),
				jQuery('#p8duration').text(),
				'$ '+jQuery('#p8price').text(),
				jQuery('#p8airlines').text(),
				jQuery('#p8hotel').text());
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package9") {
			ppp( jQuery('#p9ppp1').text(),
				jQuery('#p9ppp2').text(),
				jQuery('#p9desti').text(),
				jQuery('#p9duration').text(),
				'$ '+jQuery('#p9price').text(),
				jQuery('#p9airlines').text(),
				jQuery('#p9hotel').text());
			conhotel.show();
			roomhotel.show();
		}else if (selectedOption.val() == "package10") {
			ppp( jQuery('#p10ppp1').text(),
				jQuery('#p10ppp2').text(),
				jQuery('#p10desti').text(),
				jQuery('#p10duration').text(),
				'$ '+jQuery('#p10price').text(),
				jQuery('#p10airlines').text(),
				jQuery('#p10hotel').text());
			conhotel.show();
			roomhotel.show();
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