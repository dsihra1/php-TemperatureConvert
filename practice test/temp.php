<?php
  //checking if the input is provided in textbox and radio button is clicked or not
  if (!isset($_GET["txttemp"]) && !isset($_GET["radtemp"]))
  {
	  echo"Please enter temperature and conversion method";
  }
  else
  {
	  //Getting the input from textbox
	  $temp = $_GET["txttemp"];
	  //Getting the input from radio button
	  $conv = $_GET["radtemp"];
	  //checking if temperature is between -100 and 100
	  if(($temp >= -100)&& ($temp <=100))
	  {
		  //checking which radio button is checked
		  if($conv=="1")
		  {
			  //Printing the entered temperature by the user and the conversion method selected
			  echo" You entered $temp C temperature and you have chosen to convert to Fahrenheit";
			  $temp = $temp * 9/5 + 32;
			  echo "Converted temperature is $temp";
		  }
		  else
		  {
			  echo"You entered $temp F temperature and you have chosen to convert to Celsius";
			  $temp = ($temp -32)*5/9;
			  echo "Converted temperature is $temp";
			  
		  }
		 
	  }
	  else
		 {
			   echo"You entered invalid temperature.<br>
			       Please enter temperature between -100 and 100";
		 }
  }
	  
?>