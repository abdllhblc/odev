	<?php 

			$direnc = $_GET['direnc'];
			$akim = $_GET['akim'];
			$potansiyel = $_GET['potansiyel'];

			if(is_numeric($direnc) and is_numeric($akim) and is_numeric($potansiyel)){

				echo "<script>location.replace('#hesap')</script>";

				if($potansiyel == $akim * $direnc){
					 $ekran = $ekran."<div style ='color:green;'>Girilen değerler DOĞRUDUR!</div>";
				}else{
					$ekran = $ekran."<div style ='color:red;'>Girilen değerler YANLIŞTIR!</div>";
				}
			}elseif (is_numeric($akim) and is_numeric($direnc)) {

				$potansiyel  =$akim * $direnc;
					$ekran = "<br>R = ".$direnc."Ω<br><br>";
					$ekran = $ekran."I = ".$akim."A<br><br>";
					$ekran = $ekran."<div style ='color:red;'>V = ".$potansiyel."Volt(v)</div>";
				
			}else
	$ekran="<div style='color:red;'>Hesaplama Yapılabilmesi İçin Sayısal Değerleri Girmelisiniz! <br>Bazı Hesaplamalarda Akım veya Direnç değerini 0 alınmayacağına dikkat ediniz!</div>";

?>


	?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<style type="text/css">

				body{
			font-family:arial;
			margin: 0;

		}
		.header {
  				padding: 30px;
  				text-align: center;
  				background: #034f84;
  				color: #deeaee;
  				font-size: 20px;
				}

		.content {
				padding:20px;
				font-size: 20px;
				}


		table {
  				font-family: arial, sans-serif;
  				border-collapse: collapse;
  				width: 100%;
						}

		td, th {
  				border: 0px solid #dddddd;
  				text-align: left;
  				padding: 8px;
						}

		tr:nth-child(even) {
  				background-color: #dddddd;
						}


	</style>
</head>
<body>
	<div class="header">
		<h1>ARASINAV-OHM-KANUNU</h1>
	</div>


<div class="content">

	<table>

		<tr><th><h1>BİLGİLERİM</h1></th></tr>

		 <tr>
    <td>Adı</td>
    <td>:</td>
    <td>AD</td>
  </tr>
  <tr>
    <td>Soyadı</td>
    <td>:</td>
    <td>SOYAD</td>
  </tr>
   <tr>
    <td>Öğrenci No</td>
    <td>:</td>
    <td>NO</td>
  </tr>
  <tr>
    <td>Üniversite</td>
    <td>:</td>
    <td>HUMYO-HU HASO-1OSBMYO</td>
  </tr>
   <tr>
    <td>Program</td>
    <td>:</td>
    <td>ELK</td>
  </tr>
  <tr>
    <td>Tarih</td>
    <td>:</td>
    <td>
	<?php echo date("l jS \of F Y h:i:s A");  ?>
	</td>
  </tr>
	</table>
</div>

  <div id="hesap" class="subheader">
  <h1>Ohm Kanunu Genel Hesaplama</h1>
</div> 

<form method="get ">
	<fieldset>
	<legend>Ohm Kanunu Genel Hesaplama</legend>
  <label for="direnc">Direnç:</label><br>
  <input type="text" id="direnc" name="direnc"><br>
  <br> 
  <label for="akim">Akım:</label><br>
  <input type="text" id="akim" name="akim"><br> <br>

   <label for="potansiyel">Potansiyel Fark:</label><br>
  <input type="text" id="potansiyel" name="potansiyel"><br> <br>  
  <input type="submit" value="HESAPLA">
  </fieldset>
</form>

<fieldset>
	<legend>SONUÇ</legend>

			<?php 
			  echo $ekran;
			?>
</fieldset>
<a href="index2.php"><img src="home.png" width=100px alt="Ana Sayfa"></a>
<br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> 

</body>
</html>