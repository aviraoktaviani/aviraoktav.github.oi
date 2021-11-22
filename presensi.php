<html>
<head>
<style>
    
    ul {

  list-style-type: none;

  margin: 0;

  padding: 0;

  overflow: hidden;

  background-color: #360a4b;

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

  background-color:#230038 ;
}
   
   .active{
      background-color: #230038;
    }
   header{
      text-align:center;
      background-color : #230038;
}
   table, td, th {

  border: 1px solid black;

}

th {

  background-color: #320866;

  color: white;

  }

td {

	text-align: center;

}
    
 body {
  background-image:url("warteg.jpg");
  }
  
* {
  box-sizing: border-box;
}

body {
  font-family: Monaco, courier, monospace;
}

/* Style the header */

header {
  font-family: "copperplate",fantasy;
  background-color: #320866;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  padding: 30px;
  text-align: center;
  font-size: 30px;
  color: white;
}


article {
  float: left;
  padding: 10px;
  width: 1350px;
  background-color: #d2c6d6;
}

/* Clear floats after the columns */
section::after {
  content: "";
  display: table;
  clear: both;
}

/* Style the footer */
footer {
  background-color: #360a4b ;
  padding: 10px;
  text-align: center;
  color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}
    </style>
</head>
<body>
  <header>
    <h2> Tabel Data Kelas </h2>
  </header>

<nav>
 <ul>
     
<li><a href="index2.php">Home</a></li>
 <li><a href="form.php">Daftar</a></li>
 <li><a class="active" href="presensi.php">Presensi</a></li>
   <li><a href="index.php">Logout</a></li>

</ul> 
</nav>
 </div>
<article>
    
   
    <h1> Daftar Hadir </h1>
    
  <section>
 <a href="daftar.php">+ TAMBAH DATA</a>
  <br/>
  <br/>
  <table border="1">
    <tr>
      <th>Nis</th>
      <th>Nama Depan</th>
      <th>Nama Belakang</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Hobby</th>
      <th>Alamat</th>
    </tr>
    <?php 
    include 'koneksi.php';
    $data = mysqli_query($connect,"select * from daftar");
    while($d = mysqli_fetch_array($data)){
      ?>
      <tr>
        <td><?php echo $d['nis']; ?></td>
        <td><?php echo $d['nama_dpn']; ?></td>
        <td><?php echo $d['nama_blk']; ?></td>
        <td><?php echo $d['tpt_lahir']; ?></td>
        <td><?php echo $d['tgl_lahir']; ?></td>
        <td><?php echo $d['kelamin']; ?></td>
        <td><?php echo $d['hobby']; ?></td>
        <td><?php echo $d['alamat']; ?></td>
        <td>
          <a href="edit.php?id=<?php echo $d['nis']; ?>">EDIT</a>
          <a href="hapus.php?id=<?php echo $d['nis']; ?>">HAPUS</a>
        </td>
      </tr>
      <?php 
    }
    ?>
  </table>
  </article>
  </section>
  <footer>
  <p>Created by : Avira Oktaviani</p>
</footer>
</body>
</html>