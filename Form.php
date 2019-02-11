<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link rel="stylesheet" href="style.css">
<script type="text/javascript" src="main.js"></script>

</head>
<body>

  
<div class="row">
  <div class="col-75">
    <div class="container">
      <form name="Form" action="invoice.php" onsubmit="return validateForm()" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Personal Information</h3>
            <label for="fname"><i class="fa fa-user"></i> First Name  <span class="error_field" id="error_fname"></span></label>
            <input type="text" id="fname" name="fname" placeholder="John M. Doe">
            <label for="lname"><i class="fa fa-user"></i> Last Name <span class="error_field" id="error_lname"></span><span id="error_pass"></span></label></label>
            <input type="text" id="lname" name="lname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email <span class="error_field" id="error_email"></span><span id="error_pass"></span></label></label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="Pnumber">Phone Number <span class="error_field" id="error_Pnumber"></span><span id="error_pass"></span></label></label>
            <input type="text" id="Pnumber" name="Pnumber" placeholder="111-222-3333">
            <input type="hidden" name="Quantity" value="<?=htmlspecialchars($_POST['Quantity']);?>"/>
          
          </div>

          <div class="col-50">
            <h3>Shipping Address</h3>
            
            <label for="adr"><i class="fa fa-address-card-o"></i> Address <span class="error_field" id="error_Address"></span><span id="error_pass"></span></label></label>
            <input type="text" id="address" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City <span class="error_field" id="error_city"></span><span id="error_pass"></span></label></label>
            <input type="text" id="city" name="city" placeholder="Toronto">

            <div class="row">
              <div class="col-50">
                <label for="Unumber">Unit Number <span class="error_field" id="error_Unumber"></span><span id="error_pass"></span></label></label>
                <input type="text" id="Unumber" name="Unumber" placeholder="123 ">
              </div>
              <div class="col-50">
                <label for="zip">Postal codes <span class="error_field" id="error_Pcode"></span><span id="error_pass"></span></label></label>
                <input type="text" id="Pcode" name="Pcode" placeholder="A1A1A1">
              </div>
              <label class="provences" for="Provinces">Provinces</label>
              <select class="Test" id="Provinces" name="Provinces">
                
                  <option value="Ontario">Ontario</option>
                   <option value="Newfoundland">Newfoundland</option>
                    <option value="Prince Edward">Prince Edward</option>
                   <option value="Nova Scotia">Nova Scotia</option>
                   <option value="New Brunswick">New Brunswick</option>
                    <option value="Quebec">Quebec</option>      		
                   <option value="Manitoba">Manitoba</option>
                    <option value="Saskatchewan">Saskatchewan</option>
                   <option value="Alberta">Alberta</option>
                   <option value="British Columbia">British Columbia</option>
                </select> 
              
            </div>


            <!-- <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
           
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div> -->
            </div>
          </div>
          
        </div>
        <!-- <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label> -->
        <input type="submit" value="checkout" class="btn">
        <input type="reset" value="Reset" class="btn">
      </form>
    </div>
  </div>
  
</div>

</body>
</html>
