<html>
<head>
<style>
* {
  box-sizing: border-box;
}

body {
font-family: Arial, Helvetica, sans-serif;
}

header {
  font-family: "copperplate",fantasy;
  background-color: #320866;
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
  padding: 25px;
  text-align: center;
  font-size: 30px;
  color: white;
}
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
  background-color:  #230038;
}

.active {
  background-color:  #230038;
}


section {

  background-color : #d2c6d6;
  text-align: center;
}
article { 
 background-color : #d2c6d6;
  text-align: center;
  height:50%;
  widht:100%;
  padding:20px;
}

footer {
  background-color: #360a4b;
  padding: 10px;
  text-align: center;
  
}

@media (max-width: 600px) {
  nav, article {
    width: 100%;
    height: auto;
  }
}

</style>
</head>
   <body>
   <nav>
	   <ul>
  <li><a class="active" href="index.html">Login</a></li>
 
	   </ul>
	   </nav>
<header>
  <h2>Form Login : </h2>
</header>
     <section>
	 <article>
	 
	 <form action="ceklogin.php" method="post">
<label> Username </label><br>
<input type="text" name="username"><br>
<label> Password </label><br>
<input type="password" name="password"><br>
<br>
<input type="Submit">
<input type="reset">


</form>
</article>
	 </section>

	   
<footer>
 <p>Di Buat Oleh <br> Avira Oktaviani XII RPL 1</p>
</footer>
	   
</body>
</html>

