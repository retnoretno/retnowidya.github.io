<html>
 </head>
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
  background-color: #04AA6D;
}
header {
   text-align: center;
   background-color: #9ACD32;
   height: 100px;
  }
article{
   text-align: left;
   background-color: #9ACD32;
}
footer {
   text-align:center;
   background-color:  #FFFF00;
  }
</style>
</head>
<body>
  <header>
    <h1> Pemrograman WEB </h1>
 <ul>
  <li> <a class="active" href="home.php"> Home </a> </li>
  <li> <a href="daftar.php"> Daftar </a></li>
  <li> <a href="presen.php"> Presensi</a> </li>
   <li> <a href="login.php"> Login</a> </li>
 </ul>
</header>
<section>

<body>
 <form action="cekdatabasedaftar.php" method="POST">
  <h1> FORM DAFTAR </h1>
  <label> Nis </label>
    <input type="text" name="Nis"> <br> <br>
  <label> Nama Depan </label>
    <input type="text" name="nama_dpn"> <br> <br>
    <label> Nama Belakang </label>
    <input type="text" name="nama_blk"><br><br>
    <label> Tempat Lahir </label>
    <input list="tempatlahir" name="tpt_lahir">
      <datalist id="tempatlahir">
        <option value="Kab Madiun">
        <option value="Kab Ngawi">
        <option value="Kab Magetan">
        <option value="Kab Ponorogo">
      </datalist> <br> <br>
<label> Tanggal Lahir </label>
      <input type="date" name="tgl_lahir"> <br> <br>

      <label> Jenis Kelamin </label>
      <input type="radio" id="laki-laki" name="kelamin">
      <label> Laki- laki </label>
      <input type="radio" id="Perempuan" name="kelamin">
      <label> Perempuan </label> <br><br>
      
      <label> Hobby </label> 
      <input type="checkbox" id="Olahraga" value="Olahraga" name="hobby[]">
      <label> Olahraga </label> 
      <input type="checkbox" id="Membaca" value="Membaca" name="hobby[]">
      <label> Membaca </label> 
      <input type="checkbox" id="Kluyuran" value="Kluyuran" name="hobby[]">
      <label> Kluyuran </label> <br> <br>
      <label> Alamat </label>
      <textarea rows="3" name="alamat"> </textarea> <br> <br>

      <input type="submit" value="Daftar">
      <input type="Reset">
  </form>

  <footer>
    <p> Created by retno widya ningsih<br>xii rpl 2</p>
  </footer>

 </section>
 </body>
 <html>