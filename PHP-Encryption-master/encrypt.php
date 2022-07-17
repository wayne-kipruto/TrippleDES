<?php
include('function/function.php');
include('function/emailer.php');
// the encryption  method
	if($_POST['text'] || $_POST['key']){
		$encrypted_txt = encrypt_decrypt('encrypt', $_POST['text'], $_POST['key']);
	}
?>
<!--Html Territory -->
 <!doctype html>
 <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.slim.min.js"></script>
    <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
    <title>Send Email Example</title>
  </head>
    <body class="body"onload="showRandomNumber();">

    <script src="https://randojs.com/1.0.0.js"></script>
        <script>
            function showRandomNumber(){
                document.getElementById("myNumber").innerHTML = rando(0, 10000000000);
            }
        </script>
  <!--the form for entering the message -->
    <form action = "function/emailer.php" method="POST">

    <label for="inputEmail">From <span style="color: #FF0000">*</span></label>
         <input type="text" name="fromEmail" id="fromEmail" class="form-control"  value="info@codingbirdsonline.com" >
         <br>

    <label for="inputPassword">Subject <span style="color: #FF0000">*</span></label>
         <div class="form-label-group">
                            <input type="text" id="subject" name="subject" class="form-control" placeholder="Subject" required>
         </div><br/>
    <p>Enter your Message Here:</p> 
    <br>

	<textarea name="text" rows="5" cols="30" placeholder="Write text here (for encryption)"><?= $_POST['text'] ?></textarea><br/>
   <!--The Secrtet key to be used -->
    <p> Your Secret Key:<p></p>
    <div id="myNumber"></div>
    <br>
    <p>Enter Your Secret key Here:</p>
	<input name="key" placeholder="key" type="text" value="<?= $_POST['key'] ?>" /><br/><br/>
	<button>Encrypt Text</button><br/>
    <p>Encrypted Message: </p> <br>
</br>
    <textarea disabled name="message" rows="5" cols="30"><?= $encrypted_txt ?></textarea><br/>

    <div class="col-md-12"></div>
     <p> <label for="email"><b>Recepient Email Address:</b></label></p>
     <input type = "text" class="form-control" id="email" name="emailAddress"/>
     <div class = "row">
    <p> <label for="phone"><b>Recepient phone number:</b></label></p>
     <input type = "number" class="form-control" id="mobile" name="phoneNumber"/>
     <div class = "row">
         <div class="col-md-12">
            
         </div>
     </div>
     <br>
     <input type="submit" class="submit_btn" id= "submit" value="Submit"> 
     <br>      

	
    
</form>

    
    

 </body>

