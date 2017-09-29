jQuery(document).ready(function(){

/*========== Setting Option Form Start ==========*/

/*Fungsi ini untuk menampilkan tabel jika di klik
di buat fleksibel dengan mengunakan parameter agar lebih
hemat kode*/
function tableshow(form,hide){
	jQuery(form).click(function(){

		jQuery(hide).toggle("high");
	});

}

tableshow('.form1', '.show1');
tableshow('.form2', '.show2');
tableshow('.form3', '.show3');
tableshow('.form4', '.show4');
tableshow('.form5', '.show5');
tableshow('.form6', '.show6');
tableshow('.form7', '.show7');
tableshow('.form8', '.show8');
tableshow('.form9', '.show9');
tableshow('.form10', '.show10');

/*========== Setting Option Form ENd ==========*/

/*========== Setting Option Sidebar Home Start ==========*/
tableshow('.ctnform1', '.ctnshow1');
tableshow('.ctnform2', '.ctnshow2');
tableshow('.ctnform3', '.ctnshow3');
tableshow('.ctnform4', '.ctnshow4');
tableshow('.ctnform5', '.ctnshow5');
tableshow('.ctnform6', '.ctnshow6');
tableshow('.ctnform7', '.ctnshow7');
/*========== Setting Option Sidebar Home ENd ==========*/


});