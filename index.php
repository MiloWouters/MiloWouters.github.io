<?php
// hier word er gecontroleerd of er op de verzendknop is geklikt
if(isset($_POST["verzend"]))
{
// hier wordt een willekeurig getal tussen 1 en 6 bewaard in de variabele $worp
$worp = rand(1,6); 

// hier wordt afhankelijk van $worp een afbeelding getoond op het beeldscherm
switch ($worp) {
 case "1":
  echo "<img src='http://www.online-dobbelsteen.nl/img/1c.gif' />";
  break;
 
 case "2":
 echo "<img src='http://www.online-dobbelsteen.nl/img/2c.gif' />";
 break;
 
 case "3":
 echo "<img src='http://www.online-dobbelsteen.nl/img/3c.gif' />";
 break;
 
 case "4":
 echo "<img src='http://www.online-dobbelsteen.nl/img/4c.gif' />";
 break;
 
 case "5":
 echo "<img src='http://www.online-dobbelsteen.nl/img/5c.gif' />";
 break;
 
 case "6":
 echo "<img src='http://www.online-dobbelsteen.nl/img/6c.gif' />";
 break;

}
}

else { echo"<img src='http://www.online-dobbelsteen.nl/img/3c.gif' />"; }
?>
<br />
<form action="werp1.php" method="post">
<input type="submit" name="verzend" value="WERP" /> 123
</form>
 </body>
</html>

