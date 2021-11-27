<html>
<head>
	<style>
   ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #EE82EE;
}

.active {
  background-color: 
  background-color: blue;
}
header {
   text-align: center;
   background-color: #9ACD32;
   height: 100px;
  }
article{
   text-align: left;
   background-color:skyblue;
}
footer {
   text-align:center;
   background-color:  #FFFF00;
  }
 </style>
 </head>
<body>
<header>
<h1> Pemrograman WEB  </h1>

  <ul>
<li>  <a class="home.php"> Home </a> </li>
  <li> <a href="daftar.php"> Daftar </a></li>
  <li> <a href="presen.php"> Presensi </a> </li>
  <li> <a href="login.php"> Login</a> </li>
  </ul>
</header>
<section>
	
</head>
<body>

	<br/>
	<a href="daftar.php">+ TAMBAH MAHASISWA</a>
	<br/>
	<br/>
	<table border="1">
		<tr>
			<th>NIS</th>
			<th>NAMA DEPAN</th>
			<th>NAMA BELAKANG</th>
			<th>TEMPAT LAHIR</th>
			<th>TANGGAL LAHIR</th>
			<th>KELAMIN </th>
			<th>HOBBY</th>
			<th>ALAMAT</th>
		</tr>
		<?php 
		include 'konek2.php';
		$no = 1;
		$koneksi = mysql_connect("localhost","root","","retnowdy");
		$data = mysqli_query($connect,"select * from daftar");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $d['Nis']; ?></td>
				<td><?php echo $d['nama_dpn']; ?></td>
				<td><?php echo $d['nama_blk']; ?></td>
				<td><?php echo $d['tpt_lahir']; ?></td>
				<td><?php echo $d['tgl_lahir']; ?></td>
				<td><?php echo $d['kelamin']; ?></td>
				<td><?php echo $d['hobby']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td>
					<a href="edit2.php?id=<?php echo $d['nis']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['nis']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
<footer>
  <p> Created by Retno Widya Ningsih xiirpl2 </p>
</footer>
</body>
</html>