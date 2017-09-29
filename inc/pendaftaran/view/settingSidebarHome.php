<?php
$options = get_option("nama-content-fields" );

if ($_POST['save']) {

	/*Juduk Layan*/
	$options['titlePaket'] = $_POST['titlePaket'];

	/*Content*/
	$options['content1'] = $_POST['content1'];
	$options['content2'] = $_POST['content2'];
	$options['content3'] = $_POST['content3'];
	$options['content4'] = $_POST['content4'];
	$options['content5'] = $_POST['content5'];
	$options['content6'] = $_POST['content6'];
	$options['content7'] = $_POST['content7'];

	/*Link*/
	$options['link1'] = $_POST['link1'];
	$options['link2'] = $_POST['link2'];
	$options['link3'] = $_POST['link3'];
	$options['link4'] = $_POST['link4'];
	$options['link5'] = $_POST['link5'];
	$options['link6'] = $_POST['link6'];
	$options['link7'] = $_POST['link7'];

	update_option("nama-content-fields",$options );//update_option berfungsi untuk meynimpan inputan 
	echo '<div class="updated"><p><srong>Option Saved.</p><strong></div>';
}
?>
<div class="rDivForm">
<h1>Setting Sidebar Home</h1>
<form class="rForm" action="#" method="post">
	<table class="rTable">
		<tr>
			<td><label><b>Judul Layanan</b></label></td>
			<td>
				<input class="rInput" type="text" name="titlePaket" value="<?=$options['titlePaket'];?>">
			</td>
		</tr>
		<?php 
		rContent('1','content1',$options['content1'],'ctnform1','ctnshow1','link1',$options['link1']);
		rContent('2','content2',$options['content2'],'ctnform2','ctnshow2','link2',$options['link2']);
		rContent('3','content3',$options['content3'],'ctnform3','ctnshow3','link3',$options['link3']);
		rContent('4','content4',$options['content4'],'ctnform4','ctnshow4','link4',$options['link4']);
		rContent('5','content5',$options['content5'],'ctnform5','ctnshow5','link5',$options['link5']);
		rContent('6','content6',$options['content6'],'ctnform6','ctnshow6','link6',$options['link6']);
		rContent('7','content7',$options['content7'],'ctnform7','ctnshow7','link7',$options['link7']);

		?>
	</table>
	<br>
	<br>
	<input  class="button button-primary" type="submit" name="save" value=" Save Changes ">
</form>
</div>
<?php
function rContent(
	$titleContent,
	$nameContent,
	$valContent,
	$cform,
	$cshow,
	$nameLink,
	$valLink
	){
	?>
	<tr>
			<td><label><b> Content <?=$titleContent;?></label></b></td>
			<td>
				<input class="rInput" type="text" name="<?=$nameContent;?>" value="<?=$valContent;?>">
				<div class="<?=$cform;?> button"><b>&#9660;</b></div>
				<div class="<?=$cshow?>">
					<input class="rInput" value="<?=$valLink;?>" type="text" name="<?=$nameLink;?>" placeholder="Masukan Link">
				</div>
			</td>
		</tr>
	<?php
}
?>