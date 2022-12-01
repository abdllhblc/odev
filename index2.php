<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
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

		.subheader {
  				padding: 20px;
  				text-align: center;
  				background: #b1cbbb;
  				color: white;
  				font-size: 15px;
					}

		.subheader1 {
  				padding: 10px;
  				text-align: center;
  				background: #92a8d1;
  				color: white;
  				font-size: 20px;
					}
		.center {
  				display: block;
				margin-left: auto;
				 margin-right: auto;
  				width: 50%;
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

	<div class="subheader">
		<h1>OHM KANUNU NEDİR?</h1>
	</div>

	<div class="content">
		<p><b>Ohm Kanunu</b> bir elektrik devresinde gerilim, akım ve direnç arasındaki ilişkiyi hesaplamak için kullanılan bir formüldür.
		<h2>E = I x R</h2>
		</p>

		<img src="ohm.webp" alt="Ohm-Kanunu-Formül" class="center">

	
		<table>
				<tr>
					<th>Nicelik</th>
					<th>Ohm Kanunu simgesi</th>
					<th>Ölçü birimi (kısaltma)</th>
					<th>Devrelerdeki rolü</th>
					<th>Merak ettiyseniz:</th>
				</tr>
				<tr>
					<th>Gerilim</th>
					<td>E</td>
					<td>Volt (V)</td>
					<td>Elektron akışını tetikleyen basınç</td>
					<td>E = elektromotor kuvvet (eski terim)</td>
				</tr>
				<tr>
					<th>Akım</th>
					<td>I</td>
					<td>Amper, amp (A)</td>
					<td>Elektron akış hızı</td>
					<td>I = yoğunluk</td>
				</tr>
				<tr>
					<th>Direnç</th>
					<td>R</td>
					<td>Ohm (Ω)</td>
					<td>Akış inhibitörü</td>
					<td>Ω = Yunan alfabesindeki omega harfi</td>
				</tr>
		</table>
	</div>
	<div class="subheader1">
  <h1>OHM KANUNU HESAPLAMALAR</h1>
</div> 

		<ol class="list-group list-group-numbered">
  <li class="list-group-item"><a href="pfh2.php">Potansiyel Fark Hesaplama</a></li>
  <li class="list-group-item"><a href="ash2.php">Akım Hesaplama</a></li>
  <li class="list-group-item"><a href="dbh2.php">Direnç Hesaplama</a></li>
   <li class="list-group-item"><a href="okgh2.php">Ohm Kanunu-Genel Hesaplama</a></li>
</ol>


</body>
</html>