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
<button type="button" class="collapsible">enter choices</button>
<div class="content"><br><br>
<form action="reo.php" method="post">
&nbsp;choice 1:<input type="text" style="text" name="first" placeholder="1x (first game drawn)...." ><br>
<br>&nbsp;choice 2:<input type="text" name="second" style="text" placeholder="1x1(1st game,1st team)..."><br><br>

 choice 3: <input type="text"  name="third" placeholder="3x1(3rd game,1st team)...."></br><br>
		
		&nbsp;choice 4:<input type="text" name="forth" placeholder="4x2(4rd game,2nd team)...."><br><br>
		
		choice 5: <input type="text" name="fifth" placeholder="2x (2nd game drawn)..."> &nbsp;&nbsp;
  <br><br>
		
		
		
		choice 6: <input type="text" name="sixth" placeholder="4x (4th game drawn)..."><br><br>
		ENTER AMOUNT:<input type="number" name="amount" required>
		
		<br><br>
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
