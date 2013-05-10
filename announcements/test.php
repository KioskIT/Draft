<link href="../webpage/css/contact.css" rel="stylesheet" type="text/css">
<style type="text/css">

.divider
{
	background:#1B4971;
	color:white;
	padding:0.3%;
	font-weight:bold;
	border-top-right-radius:10px;
	border-top-left-radius:10px;
	font-size:0.9em;
	margin-top:4%;
}

.button
{
	display:inline-block;
	border:2px solid #1E3243;
	background:#9CBAD4;
	color:#1B4971;
	padding:0.3%;
	padding-right:1%;
	padding-left:1%;
	margin:0.5%;
	margin-right:2%;
	margin-left:2%;
	cursor:pointer;
	border-radius:5px;
	font-weight:bold;
	width:13px;

}

.contacts
{
	
	padding:1%;
	
}

.contactCard

{
	

	padding:2%;
	font-size:0.9em;
	box-shadow: 0 0 5px #1B4971;
	
}

.contactCard img
{
	height:10%;
	vertical-align:top;
	margin-right:3%;
	border-radius:5px;
}

.contactDetails
{
	display:inline-block;
}

.jobDesc
{
	display:inline-block;
	width:45%;
}

.jobDesc ul
{
	color:black;
}

.jobDesc li
{
}



.contactCard h3
{
color:#1B4971;
margin:0;
font-size:0.8em;
margin-bottom:1%;
}
</style>
<?php
	function echoContact($id,$title,$name,$ext,$tel,$eMail,$jobDesc,$pic)
	{	
		if($ext != '')
		{
			$extLbl = "<b>Tel Pejabat:</b>$ext";
		}
		
		if($tel != '')
		{
			$telLbl = "<b>Tel Pejabat:</b>$tel";
		}
		
		if($eMail != '')
		{
			$eMailLbl = "<b>E-Mail:</b>$eMail";
		}
		
		echo "	<a name = '$id'>
				<div class = 'contactCard' >
				<h2 style = 'font-size:1em;margin:0;font-size:1.1em'><span style = 'text-transform:capitalize'>$title</span></h2>
				<h3><span style = 'text-transform:capitalize'>$name</span></h3>
				<img src = '../webpage/contact/$pic' />
					<div class = 'contactDetails'>
						$extLbl

						<br/>
						$eMailLbl
						<br/>
												$telLbl
					</div>
					
					<div class = 'jobDesc'>
						<ul>
						$jobDesc
						</ul>
					</div>
				</div>
				</a>
		
			";
	}
?>
<script>
 function showContacts(contactName,button){
	var contactList = document.getElementById(contactName).style.display;
	if(contactList == 'block')
	{
		document.getElementById(contactName).style.display = 'none';
		document.getElementById(button).innerHTML = '+';
	}else{
		document.getElementById(contactName).style.display = 'block';
		document.getElementById(button).innerHTML = '-';
	}
 }
</script>
<div class = 'divider'>
	<div class = 'button' id = 'officersButton' onClick = 'showContacts("officerContacts","officersButton")' > + </div> 
	 Pegawai-Pegawai Unit Penuntut-Penuntut
</div>
<div class = 'contacts' id = 'officerContacts' style = 'display:none'>
	<?php echocontact(1,'pengarah pengajian','cikgu ali hamdani hj muhamad diah','0207 402 0045 ext 221','','ds@upp.org.uk','<li>mengetuai unit penuntut-penuntut pada keseluruhannya</li>','ds.png'); ?>
	<?php echocontact(2,'penolong pengarah pengajian','cikgu hjh azizan D.P hj othman','0207 402 0045 ext 276','','ads@upp.org.uk','<li>membantu pengarah pengajian melaksanakan pentadibran dan penurusan unit</li><li>hal ehwal pelajar perubatan</li>','ads.png'); ?>	
	<?php echocontact(3,'pegawai penyelaras akademik','cikgu khalid hj sulaiman','0207 402 0045 ext 256','','ac@upp.org.uk','<li>hal ehwal akademik</li><li>asf 1/2/3</li><li>pemohonon meninggi tahap/pgce</li><li>permohonan tambang penyelidikan</li><li>resit/mengulang</li>','ac.png'); ?>
	<?php echocontact(4,'pegawai kebajikan','cikgu kamaliah abdul rahman','0207 402 0045 ext 231','','wo@upp.org.uk','<li>hal ehwal kesejahteraan pelajar</li><li>tuntuntan-tuntutan pembayaran balik</li><li>tempehan penerbangan balik cuti binnial dan akhir tahun</li><li>tempahan shipment</li><li>visa</li>','welfare.png'); ?>
	<?php echocontact(5,'pegawai ugama','ustaz hj sammali bin hj adam','0207 402 0045 ext 260','','ro@upp.org.uk','<li>hal ehwal keagamaan</li><li>tempat rujukan hukum agama</li><li>fasilitator aktiviti keagamaan</li><li>penempatan kerja musim panas</li>','ro.png'); ?>
	<?php echocontact(6,'warden brunei hall','cikgu pg md wahab pg hj abdullah','0207 402 0045 ext 230','','wn@upp.org.uk','<li>mentadbir dan mengurus brunei hall pada keseluruhannya</li><li>hal ehwal pelajar lelaki di brunei hall</li>','warden.png'); ?>
	<?php echocontact(7,'penolong warden brunei hall','cikgu azizah hj md tuah','0207 402 0045 ext 227','','awn@upp.org.uk','<li>membantu warden melaksanakan pentadbiran dan pengurusan brunei hall</li>','awarden.png'); ?>
	<?php echocontact(8,'ataci kewangan','al-aseer hj md yussof','0207 402 0045 ext 225','','ak@upp.org.uk','<li>menguruskan hal ehwal kewangan/yuran pengajian</li>','fa.png'); ?>

</div>

<div class = 'divider'  >
	<div class = 'button' id = 'adminsButton' onClick = 'showContacts("adminContacts","adminsButton")' >+</div> 
	 Kakitangan > Administration
</div>
<div class = 'contacts' id = 'adminContacts' style = 'display:none'>
	<?php echocontact(9,'','Hamidah bte Zainal','0207 402 0045 ext 228','','hamidah@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(10,'','Argo Widjono','0207 402 0045 ext 224','','argo@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(11,'','Putu Ayu Sekarsari Amir Sjarifuddin','0207 402 0045 ext 226','','ayu@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(12,'','Asmani Hassan','0207 402 0045 ext 239','','asmani@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(13,'','Dk Mahani Pg Tajudin','0207 402 0045 ext 228','','mahani@upp.org.uk','','unknown.jpg'); ?> 
	<?php echocontact(14,'','Aslina Kasiman','0207 402 0045 ext 228','','aslina@upp.org.uk','','unknown.jpg'); ?>
</div>

<div class = 'divider'  >
	<div class = 'button' id = 'financeButton' onClick = 'showContacts("financeContacts","financeButton")'>+</div> 
	 Kakitangan > Finance
</div>
<div class = 'contacts' id = 'financeContacts' style = 'display:none'>
	<?php echocontact(15,'','Vivienne SY Foon','0207 402 0045 ext 242','','viviene@upp.org.uk/finance@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(16,'','Suzanna Idah binti Rasani','0207 402 0045 ext 222','','suzanna@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(17,'','Meryem Touzani','0207 402 0045 ext 241','',',meryem@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(18,'','Muhammad Idrus Fazillah Haji Ibrahim','0207 402 0045 ext 240','','idrus@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(19,'','Mourah Bachiri @Sami','0207 402 0045 ext 229','','sami@upp.org.uk','','unknown.jpg'); ?>
</div>

<div class = 'divider'>
	<div class = 'button' id = 'bhButton' onClick = 'showContacts("bhContacts","bhButton")'>+</div> 
	Kakitangan > Brunei Hall
</div>
<div class = 'contacts' style = 'display:none' id = 'bhContacts'>
	<?php echocontact(20,'','Hj Mohd Hassanal Dowd Abdullah(Joe)','0207 402 0045 ext 234','','dowrichard@hotmail.co.uk','','unknown.jpg'); ?>
	<?php echocontact(21,'','Carol Jno Baptiste','0207 402 0045 ext 235','','carol@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(22,'','Hajramah @ Azra binti Mohammad','0207 402 0045 ext 243','','azra@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(23,'','Shirley Navita Bye Ramjee','0207 402 0045 ext 236','','shirley@upp.org.uk','','unknown.jpg'); ?>
	<?php echocontact(25,'','Rohani Arifin','0207 402 0045 ext 238','','','','unknown.jpg'); ?>
	<?php echocontact(26,'','Muzaffar Shah Abdullah','0207 402 0045 ext 238','','','','unknown.jpg'); ?>
	<?php echocontact(27,'','Henny Abdullah','0207 402 0045 ext 238','','','','unknown.jpg'); ?>
	<?php echocontact(28,'','Yusof bin Ismail','0207 402 0045 ext 238','','','','unknown.jpg'); ?>
	<?php echocontact(29,'','Thi Nu Tran','0207 402 0045 ext 277','','','','unknown.jpg'); ?>
	<?php echocontact(30,'','Roshmawati binti Abu Hassan','0207 402 0045 ext 233/273','','','','unknown.jpg'); ?>
	<?php echocontact(31,'','Noordin bin Ilias','0207 402 0045 ext 233/273','','','','unknown.jpg'); ?>
	<?php echocontact(32,'','Renato Darisan','0207 402 0045 ext 233/273','','','','unknown.jpg'); ?>
	<?php echocontact(33,'','Ardiani Koesnindyasari','0207 402 0045 ext 233/273','','','','unknown.jpg'); ?>
	<?php echocontact(34,'','Asmah binti SHaari','0207 402 0045 ext 277','','','','unknown.jpg'); ?>
	<?php echocontact(35,'','Sri Nastiti','0207 402 0045 ext 277','','','','unknown.jpg'); ?>
	<?php echocontact(36,'','Rukiah Arshad','0207 402 0045 ext 277','','','','unknown.jpg'); ?>
	<?php echocontact(37,'','Hakan Bayraktar','0207 402 0045 ext 233','','','','unknown.jpg'); ?>
	<?php echocontact(38,'','Dastageer Kadiri','0207 402 0045 ext 233','','','','unknown.jpg'); ?>
	<?php echocontact(39,'','Mumum Saleh','0207 402 0045 ext 233','','','','unknown.jpg'); ?>
</div>