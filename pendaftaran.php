<?php
/*
Template Name: Pendaftaran
*/
get_header();
include('inc/pendaftaran/pendaftaran_crud.php');
?>
<form method="POST" action="#" class="formRegisUmroh" id="formRegisUmroh">
<div class="row">
	<div class="full-tour clearfix">
		<div class="elevencol column">
			<h1 class="section-title">Form Pendaftaran Online Jamaah Umroh Mina Tour & divavel</h1>
			<div >
				<div class="elevencol column">
					<h4 class="section-title">Pilih Layanan</h4>

					<div class="fourcol column">Nama Paket Layanan *</div>
					<div class="field-container">
						<div class="sixcol column last">
							<select onchange="setTextField(this);" id="package" name="package">
								<option ></option>
								<option value="package1"><?= $paket1;?></option>
								<option value="package2"><?= $paket2;?></option>
								<option value="package3"><?= $paket3;?></option>
								<option value="package4"><?= $paket4;?></option>
								<option value="package5"><?= $paket5;?></option>
								<option value="package6"><?= $paket6;?></option>
								<option value="package7"><?= $paket7;?></option>
								<option value="package8"><?= $paket8;?></option>
								<option value="package9"><?= $paket9;?></option>
								<option value="package10"><?= $paket10;?></option>
							</select><br>
						</div>
					</div>
					
					<input id="packageText" type = "hidden" name = "packageText" value = "" />
					<script type="text/javascript">
						function setTextField(ddl) { /*take the Text from select option and insert into input hidden*/
							document.getElementById('packageText').value = ddl.options[ddl.selectedIndex].text;
						}
					</script>
				</div>
				<div id="divResult"></div>
				<div class="elevencol column">
					<h4 class="section-title">Informasi Data Pribadi Anda</h4>

					<div class="fourcol column">Nama Lengkap (Sesuai pasport 3 suku kata) *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<input required value="" id="names" type="text" name="names">
							<span class="errorval" id="errorName"></span>
							
						</div>
						
					</div>
					<div class="fourcol column">Jenis Kelamin *</div>
					<div class="field-container">
						<div class="sixcol column last">
							<input type="radio" name="gender" value="pria" checked>Pria<br>
							<input type="radio" name="gender" value="wanita">Wanita
						</div>
					</div>


					<div class="fourcol column">Tanggal Lahir *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<input class="datePicker" required size=10 id="birthdate" required type="text" name="birthdate" placeholder="Format Date : YYYY-MM-DD"><br><br>
							<span class="errorval" id="errorBirthDate"></span>
							<br>
						</div>
					</div>

					<div class="fourcol column">Tempat Lahir *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<input required id="birthPlace"  type="text" name="birthplace"></div>
							<span class="errorval" id="errorBirthPlace"></span>
							<br>
					</div>

					<div class="fourcol column">Status Menikah *</div>
					<div class="field-container">
						<div class="sixcol column last">
							<input type="radio" name="status" value="single" checked>Single<br>
							<input type="radio" name="status" value="merried">Menikah
						</div>
					</div>

				</div>
				<div class="elevencol column">
					<h4 class="section-title">Informasi Data Lainnya</h4>


					<div class="fourcol column">Alamat Email *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<input required  id="email" type="email" name="email" placeholder="ex : nama@email.com">
							<span class="errorval" id="errorEmail"></span>
						</div>
					</div>
					<div class="fourcol column">No Handphone *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<input required id="phone" type="number" name="phone" placeholder="08123456789">
							<span class="errorval" id="errorPhone"></span>
						</div>
					</div>
					<div class="fourcol column">Alamat Rumah *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<textarea required id="homeadd"  name="homeadd"></textarea>
							<span class="errorval" id="errorHomeAdd"></span>
						</div>
					</div>
					<div class="fourcol column">Kota *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<input required id="city" type="text" name="city">
							<span class="errorval" id="errorCity"></span>
						</div>
					</div>
					<div class="fourcol column">No Tlp Rumah</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="number" name="homephone" placeholder="021321123"></div>
					</div>
					<div class="fourcol column">Alamat Kantor</div>
					<div class="sixcol column last">
						<div class="field-container"><textarea name="officeadd"></textarea></div>
					</div>
					<div class="fourcol column">No Tlp Kantor</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="number" name="officephone" placeholder="021321123"></div>
					</div>
					<div class="fourcol column">Referensi</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="ref"></div>
					</div>


				</div>
				<div class="elevencol column">
					<h4 class="section-title">Informasi Data Pasport Anda</h4>

					<div class="fourcol column">No Pasport *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<input required id="noPassport"  type="number" name="nopassport" placeholder="ex : 3337976547">
							<span class="errorval" id="errorNoPassport"></span>
						</div>
					</div>
					<div class="fourcol column">Tanggal Keluar Pasport *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<input class="datePicker" type="text" id="datePassport" required name="datepassport" placeholder="Format : YYYY-MM-DD">
							<br>
							<span class="errorval" id="errorDatePassport"></span>
							<br>
						</div>
					</div>
					<div class="fourcol column">Tanggal Habis Pasport *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<input class="datePicker" type="text" id="exDatePassport" required name="exdatepassport" placeholder="Format : YYYY-MM-DD">
							<br>
							<span class="errorval" id="errorExDatePassport"></span>
							
							<br>
						</div>
					</div>
					<div class="fourcol column">Kantor Imigrasi Pasport *</div>
					<div class="sixcol column last">
						<div class="field-container">
							<input required  id="officePassport" type="text" name="officepassport">
							<span class="errorval" id="errorOfficePassport"></span>
						</div>
					</div>
				</div>

				<div class="elevencol column">
					<h4 class="section-title">Sosial Media</h4>
					<div class="fourcol column">Facebook</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="fb"></div>
					</div>
					<div class="fourcol column">Twitter</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="twit"></div>
					</div>
					<div class="fourcol column">Instagram</div>
					<div class="sixcol column last">
						<div class="field-container"><input type="text" name="insta"></div>
					</div>
				</div>

				<div class="elevencol column">
					<div class="sixcol column last">
						<div class="field-container"><input type="submit" id="send" name="submit" value="Daftar Sekarang"></div>
					</div>
				</div>

				<div id="formhtml" class="elevencol column">
					<div class="fourcol column">Periode Paket Perjalanan *</div>
					<div class="sixcol column last">
						<select onchange="setTextPpp(this);" name="packageppp" id="packageppp">
							<option></option>
							<option value="ppp1" id="ppp1">17 Desember 2015</option>
							<option value="ppp1" id="ppp2">Bulan Febuari dan April 2016</option>
						</select>
						<input id="pppText" type = "hidden" name = "pppText" value = "" />
						<script type="text/javascript">
							function setTextPpp(ddl) {
								document.getElementById('pppText').value = ddl.options[ddl.selectedIndex].text;
							}
						</script>
					</div>
					<div class="fourcol column">Tujuan Negara *</div>
					<div class="field-container">
						<div class="sixcol column last">
							<input name="desti" id="desti" type="text" value="" readonly>
						</div>
					</div>
					<div class="fourcol column">Durasi Perjalanan *</div>
					<div class="sixcol column last">
						<div class="field-container"><input name="time" id="time" type="text" value="" readonly></div>
					</div>
					<div class="fourcol column">Harga Paket *</div>
					<div class="sixcol column last">
						<div class="field-container"><input name="price" id="packageprice" type="text" value="" readonly></div>
					</div>

					<div class="fourcol column">Maskapai Penerbangan *</div>
					<div class="sixcol column last">
						<div class="field-container"><input name="airline" id="airline" type="text" value="" readonly></div>
					</div>
					<div class="con-hotel fourcol column">Hotel *</div>
					<div class="sixcol column last">
						<div class="field-container"><input name="hotel" id="hotel" type="text" value="" readonly></div>
					</div>
					<div id="roomhotel">
						<div  class="fourcol column">Pilih Kamar Hotel *</div>
						<div class="sixcol column last">
							<select name="roomhotel" >
								<option>Quad</option>
								<option>Triple</option>
								<option>Double</option>
							</select>
						</div>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
</form>
<?php

get_footer();