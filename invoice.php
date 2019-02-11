<html>
<head>

  <title>Customer Invoice</title>

</head>
<style>
body{
	font-family: Arial, Helvetica, sans-serif;
	background-color: #fff;
	padding: 50px;
}
	header {
		color: red;
	}
	Total{
		color: red;
		float: right;
		padding-right: 50%;
	}
	right_Receipt{
		float: right;
		padding-right: 50%;
	}
	
	left {
		float: right;
	}
  b {
    padding: 10px;
  }
</style>
<body>
<?php
  $firstname = $_POST["fname"];
  $lastname = $_POST["lname"];
  $Address = $_POST["address"];
  $City = $_POST["city"];
  $email = $_POST["email"];
  $Provinces = $_POST["Provinces"];
  $Unumber =$_POST["Unumber"];
   $Pcode =$_POST["Pcode"]; 
   $Quantity = $_POST["Quantity"];

   if ($firstname == ""  ){
     print ('Please correct Your first name <br>');
    return false;
   }
   if ($lastname === "") {
     echo 'Please correct Your last name';
    return false;
   }
   if ($Address === "") {
     echo 'Please correct Your Adress';
    return false;
   }
   if ($City === "") {
     echo 'Please correct Your City name';
    return false;
   }
   if ($email=== "") {
     echo 'Please correct Your Email';
    return false;
   }
   if ($Unumber === "") {
     echo 'Please correct Your Unit Number ';
    return false;
   }
   if ($Pcode === "") {
     echo 'Please correct Your postal Code';
    return false;
   }
 
?>
<?php
 $sum = $Quantity * "20.99";
 $Four = "0.15";
 $Manitoba = "0.15";
 $Ontario = "0.13";
 $Quebec = "0.14975";
 $Saskatchewan= "0.11";
 $Alberta= "0.05";
 $British_Columbia = "0.12";
 $Newfoundland = "0.15";
 $Nova_Scotia = "0.15";
 $Prince_Edward = "0.15";
 $New_Brunswick = "0.15";
 $Total_Manitoba = "0.15";
 $Total_Saskatchewan = $sum + $sum * $Saskatchewan + $sum - $sum ;
 $Total_Brunswick = $sum + $sum * $New_Brunswick + $sum - $sum ;
 $Total_Nova = $sum + $sum * $Nova_Scotia + $sum - $sum ;
 $Total_Prince =  $sum + $sum * $Prince_Edward + $sum - $sum ;
 $Total_Four = $sum + $sum * $Four + $sum - $sum ;
 $Total_Newfoundland = $sum + $sum * $Newfoundland + $sum - $sum ;
 $Total_Ontario = $sum + $sum * $Ontario + $sum - $sum ;
 $Total_Manitoba = $sum + $sum * $Manitoba + $sum - $sum ;
 $Total_Quebec = $sum + $sum * $Quebec + $sum - $sum ;
 $Total_Saskatchewan = $sum + $sum * $Saskatchewan + $sum - $sum ;
 $Total_Albert = $sum + $sum * $Alberta + $sum - $sum ;
 $Total_British = $sum + $sum * $British_Columbia + $sum - $sum ;
 $Delivery = array( 'Zero' => '$0', 'One' => '$3.00' , 'Two' => '$4.00', 'Three' => '$5.00' , 'Four' => '$6.00' );

    
?>
<center><font size=5>Thank You: We've recived your order.<br><br></font></center>
<?php
 print(" <header> <font size=5> Shipping To:</font></header><br>");
 print (" <br> $firstname $lastname <br> $email<br> $Address, $Unumber <br> $City, $Provinces <br> $Pcode <br> <br> <br>");	
?>
<?php 
  print(" <header> <font size=5> Order Information: <Total>Total </font> </header>");
  print("<br> $Quantity x The Death Of Truth Book at $20.99 each <right_Receipt> $$sum</right_Receipt> ");
  if ($Provinces === "Newfoundland"  || $Provinces === "Prince Edward" || $Provinces === "Nova Scotia" || $Provinces === "New Brunswick") {
  	print("<br>Provincial Tax <right_Receipt> $ ");
  	 print(round($sum * $Four + $sum - $sum, 2)) ;
  	 print("</right_Receipt>");
  }
  elseif ($Provinces === "Manitoba" || $Provinces === "Ontario") {
  	print("<br>Provincial Tax <right_Receipt> $ ");
  	 print(round($sum * $Ontario + $sum -$sum,2) );
  	 print("</right_Receipt>");
  }
   elseif ($Provinces === "Quebec") {
  	print("<br>Provincial Tax<right_Receipt> $ ");
  	 print(round($sum * $Quebec + $sum -$sum, 2));
  	 print("</right_Receipt>");
  }
  elseif ($Provinces === "Saskatchewan") {
  	print("<br>Provincial Tax <right_Receipt> $ ");
  	 print(round($sum * $Saskatchewan + $sum -$sum,2 ));
  	 print("</right_Receipt>");
  }
  elseif ($Provinces === "Alberta") {
  	print("<br>Provincial Tax<right_Receipt>$ ");
  	 print(round($sum * $Alberta + $sum -$sum, 2 ));
  	 print("</right_Receipt>");
  }
  elseif ($Provinces === "British Columbia") {
  	print("<br>Provincial Tax<right_Receipt> $ ");
  	 print(round($sum * $British_Columbia + $sum -$sum, 2));
  	 print("</right_Receipt>");
  }
  // Ontario
  if ($Provinces === "Ontario" && $Total_Ontario >= "0.01" && $Total_Ontario <= "25.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['One']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Ontario,2) + "3");
    print("</right_Receipt>");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
  }
  elseif ($Provinces === "Ontario"  && $Total_Ontario >= "25.01" && $Total_Ontario <= "50.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Two']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Ontario,2) + "4");
    print("</right_Receipt>");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
  }
  elseif ($Provinces === "Ontario" && $Total_Ontario >= "50.01" && $Total_Ontario <= "81.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Three']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Ontario,2) + "5");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 3 days')));
  }
  elseif ($Provinces === "Ontario" && $Total_Ontario >"75.00") {
    print("<br>Delivery <right_Receipt> {$Delivery['Four']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Ontario,2) + "6");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 4 days')));
  }
  //end of Ontario
  //Manitoba 
  elseif ($Provinces === "Manitoba" && $Total_Manitoba >="0.01" && $Total_Manitoba  <= "25.00"){
    print("<br>Delivery <right_Receipt> {$Delivery['One']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Manitoba ,2) + "3");
    print("</right_Receipt>");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
  }
  elseif ($Provinces === "Manitoba" && $Total_Manitoba >="25.01" && $Total_Manitoba  <= "50.00"){
    print("<br>Delivery <right_Receipt> {$Delivery['Two']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Manitoba ,2) + "4");
    print("</right_Receipt>");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
  }
   elseif ($Provinces === "Manitoba" && $Total_Manitoba >="50.01" && $Total_Manitoba  <= "75.00"){
    print("<br>Delivery <right_Receipt> {$Delivery['Three']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Manitoba ,2) + "5");
    print("</right_Receipt>");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 3 days')));
  }
   elseif ($Provinces === "Manitoba" && $Total_Manitoba > "75"){
    print("<br>Delivery <right_Receipt> {$Delivery['Four']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Manitoba ,2) + "6");
    print("</right_Receipt>");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 4 days')));
  }
  //End of Manitoba
  //Quebec
  elseif ($Provinces === "Quebec"  && $Total_Quebec >= "0.01" && $Total_Quebec <= "25.00"  ){  
    print("<br>Delivery <right_Receipt> {$Delivery['One']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Quebec,2) + "3");
    print("</right_Receipt>"); 
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
     }
  elseif ($Provinces === "Quebec"  && $Total_Quebec >= "25.01" && $Total_Quebec <= "50.00"  ){  
    print("<br>Delivery <right_Receipt> {$Delivery['Two']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Quebec,2) + "4");
    print("</right_Receipt>");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days'))); 
     }
  elseif ($Provinces === "Quebec"  && $Total_Quebec >= "50.01" && $Total_Quebec <= "75.00"  ){  
    print("<br>Delivery <right_Receipt> {$Delivery['Three']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Quebec,2) + "5");
    print("</right_Receipt>"); 
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 3 days')));
     }      
  elseif ($Provinces === "Quebec"  && $Total_Quebec > "75.00"){  
    print("<br>Delivery <right_Receipt> {$Delivery['Four']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Quebec,2) + "6");
    print("</right_Receipt>"); 
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 4 days')));
     }  
    //end of Quebec
    //Newfoundland
  elseif ( $Provinces === "Newfoundland"   && $Total_Newfoundland  >= "0.01" && $Total_Newfoundland <= "25.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['One']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Newfoundland,2) + "3");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "Newfoundland"   && $Total_Newfoundland  >= "25.00" && $Total_Newfoundland <= "50.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Two']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Newfoundland,2) + "4");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "Newfoundland"   && $Total_Newfoundland  >= "50.01" && $Total_Newfoundland <= "75.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Three']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Newfoundland,2) + "5");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 3 days')));
 }
 elseif ( $Provinces === "Newfoundland"   && $Total_Newfoundland  > "75"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Four']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Newfoundland,2) + "6");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 4 days')));
 }
  // end of Newfiundland
 //Prince edward
  elseif ( $Provinces === "Prince Edward"   && $Total_Prince >= "0.01" && $Total_Prince <= "25.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['One']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Prince,2) + "3");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "Prince Edward"   && $Total_Prince >= "25.00" && $Total_Prince <= "50.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Two']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Prince,2) + "4");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "Prince Edward"   && $Total_Prince  >= "50.01" && $Total_Prince <= "75.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Three']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Prince,2) + "5");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 3 days')));
 }
 elseif ( $Provinces === "Prince Edward"   && $Total_Prince  > "75"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Four']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Prince,2) + "6");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 4 days')));
 }
 // end of Prince Edward

 //Nova scotia
 elseif ( $Provinces === "Nova Scotia"   && $Total_Nova >= "0.01" && $Total_Nova <= "25.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['One']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Nova,2) + "3");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "Nova Scotia"   && $Total_Nova >= "25.00" && $Total_Nova <= "50.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Two']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Nova,2) + "4");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "Nova Scotia"   && $Total_Nova  >= "50.01" && $Total_Nova <= "75.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Three']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Nova,2) + "5");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 3 days')));
 }
 elseif ( $Provinces === "Nova Scotia"   && $Total_Nova  > "75"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Four']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Nova,2) + "6");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 4 days')));
 }
 //end of Nova Scotia

 // New Brunswick
 elseif ( $Provinces === "New Brunswick"   && $Total_Brunswick >= "0.01" && $Total_Brunswick <= "25.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['One']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Brunswick,2) + "3");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "New Brunswick"   && $Total_Brunswick >= "25.00" && $Total_Brunswick <= "50.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Two']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Brunswick,2) + "4");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "New Brunswick"   && $Total_Brunswick >= "50.01" && $Total_Brunswick <= "75.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Three']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Brunswick,2) + "5");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 3 days')));
 }
 elseif ( $Provinces === "New Brunswick"   && $Total_Brunswick  > "75"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Four']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Brunswick,2) + "6");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 4 days')));
 }
 // end of New Brunsqick

 // Start Saskatchewan

 elseif ( $Provinces === "Saskatchewan"   && $Total_Saskatchewan >= "0.01" && $Total_Saskatchewan <= "25.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['One']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Saskatchewan,2) + "3");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "Saskatchewan"   && $Total_Saskatchewan >= "25.00" && $Total_Saskatchewan <= "50.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Two']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Saskatchewan,2) + "4");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "Saskatchewan"   && $Total_Saskatchewan >= "50.01" && $Total_Saskatchewan <= "75.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Three']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Saskatchewan,2) + "5");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 3 days')));
 }
 elseif ( $Provinces === "Saskatchewan"   && $Total_Saskatchewan  > "75"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Four']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Saskatchewan,2) + "6");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 4 days')));
 }
 // end of Saskatchewan

// Alberta 
elseif ( $Provinces === "Alberta"   && $Total_Albert >= "0.01" && $Total_Albert <= "25.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['One']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Albert,2) + "3");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "Alberta"   && $Total_Albert >= "25.00" && $Total_Albert<= "50.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Two']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Albert,2) + "4");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "Alberta"   && $Total_Albert >= "50.01" && $Total_Albert <= "75.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Three']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Albert,2) + "5");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 3 days')));
 }
 elseif ( $Provinces === "Alberta"   && $Total_Albert > "75"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Four']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_Albert,2) + "6");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 4 days')));
 }

 // end of Alberta

 // British Coulumbia
  elseif ( $Provinces === "British Columbia"   && $Total_British >= "0.01" && $Total_British <= "25.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['One']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_British,2) + "3");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "British Columbia"   && $Total_British >= "25.00" && $Total_British <= "50.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Two']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_British,2) + "4");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 1 days')));
 }
 elseif ( $Provinces === "British Columbia"   && $Total_British >= "50.01" && $Total_British <= "75.00"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Three']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_British,2) + "5");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 3 days')));
 }
 elseif ( $Provinces === "British Columbia"   && $Total_British > "75"  ) {
    print("<br>Delivery <right_Receipt> {$Delivery['Four']} ");
    print("</right_Receipt>");
    print("<br>Total <right_Receipt> $");
    print(round($Total_British,2) + "6");
    print("</right_Receipt><br><br><br><br> Estimated Delivery Date:<b>");
    print(date('d-m-Y', strtotime(' + 4 days')));
 }
 // end of British Coulumbia
?>