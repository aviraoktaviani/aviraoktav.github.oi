<!DOCTYPE html>
<html lang="en">
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

  background-color: #230038;
   }
  .active{
      background-color:#230038;
    }
  
}
   
 body {
  background-image:url("warteg.jpg");
  }
  
* {
  box-sizing: border-box;
}

body {
  font-family: Monaco, courier, monospace;
  background-color: #d2c6d6;
}

/* Style the header */
header {
  background-color: #320866;
  padding: 15px;
  text-align: center;
  font-size: 40px;
  color: yellow;
  background-image: url('warteg.jpg.jpg');
}






/* Style the footer */
footer {
  background-color: #360a4b;
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
  <h2>warteg online</h2>
</header>
   
   <ul>
<li><a class="index2.php">Home</a></li>
 <li><a href="form.php">Daftar</a></li>
 <li><a href="presensi.php">Presensi</a></li>
 <li><a class="active" href="login.php">Logout</a></li>
</ul> 
 </div>
  
 
<section>

 
  <article>
    <h1>warteg online : </h1>
    <p>Kami berikan solusi praktis untuk memanjakan lidah anda dengan masakan yang terolah istimewa,hygenis dan menu yang menggugah selera</p>
    <p>Enak dan Lezat. Nikmati menu makanan hemat dengan harga mahasiswa,perut kenyang hatipun senang!</p>
     <p> </p>
     <p>Diskon 30% setiap pembelian Rp100.000.</p>

  
   
  </article>
   
</section>

<footer>
  <p>Created by : Avira Oktaviani</p>
</footer>

</body>
</html>