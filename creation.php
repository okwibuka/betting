<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.collapsible {
  background-color: #777;
  color: white;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 15px;
}

.active, .collapsible:hover {
  background-color: #555;
}
#link{
      background-color:#0a0f0f;
	  font-family:Tahoma;
	  color:white; 
	  height:60px;
	  margin-top:-15px;
}
ul{text-decoration:none;}
li{float:left;list-style:none;height:25px;width:130px;text-align:center;}
li a{font-family:italic;text-decoration:none;text-align:center;display:block;color:white;}
li a:hover{background-color:rgb(128,128,128);border-radius:3px;height:25px}

#picture{
matgin-top:80px;
text-align:center;
height:80px;
}
.content {
  padding: 0 18px;
  display: none;
  overflow: hidden;
  background-color: #f1f1f1;
}
</style>
</head>
<body>



<div id="link">

<ul>
<li><a href="home.php">Home</a></li>

<li><a href="news.php">News</a></li>
<li><a href="objective.php">About Us</a></li>
<li><a href="">Contact Us</a></li>
<li><a href="creation.php">Create Account</a></li>

</ul>
</div>
<button type="button" class="collapsible">REGISTER</button>
<div class="content"><br><br>
<form action="re.php" method="post">
FIRST NAME<input type="text" style="text" name="fname" required><br>
<br>&nbsp;LAST NAME<input type="text" name="lname" style="text" required><br><br>

<u><b>enter sex</b></u><br>
<input type="radio" name="name"/> Male  
<input type="radio" name="name"/> Female 
</br>
<br>

   	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  Email : <input type="text"  name="email" placeholder="Ex:toptech12@gmail.com" required></br><br>
		
		Phone number:<input type="number" name="number" placeholder="Ex:+250789......" required><br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspPassword: <input type="Password" name="psw" required>&nbsp;&nbsp;
  <br><br>
		
		
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;National Id: <input type="number" name="id" placeholder="Ex:4564566651...." required ><br><br>
		
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Nationality:<select name="nationality" value="nationality">
			<option value="Rwanda">Rwandan</option>
			<option value="Ugandan">Ugandan</option>
			<option value="Kanyan">Kanyan</option>
			<option value="Burundi">Burundi</option>
			<option value="RDC">RDC</option>
			<option value="south Sudane">south Sudane</option>
			<option value="China">China</option>
			<option value="USA">USA</option>
			<option value="SOUTH KOREA">SOUTH KOREA</option>
			</select><br><br>
			 <input type="submit" value="finish">
</div>


</div>
</form>
<script>
var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}
</script>

</body>
</html>
