<?PHP
include ('encryption.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial scale=1.0">
        <title>Encryption & Decryption using Tripple DES</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <h1> Encryption & Decryption using Tripple DES</h1>
        <div class="form">
            <form id="web-form" method="POST" action="send.php">
                <label> <b>Enter your message here: </b></label>
                <input type = "text" name="msgBox" id="msgBox" placeholder="Enter message here"> <br>
                <label> <b> Recipient Email Address: </b></label>
                <input type="text" name="emailAddress" id="emailAddress" placeholder="Email Address"> <br>
                <label> <b>Recipient Phone Number: </b></label>
                <input type="tel" name="phoneNumber" id="phoneNumber" placeholder="Phone Number"> <br><br>
                <button type="submit" name="submit">Submit</button>

            </form>
        </div>
    </body>
</html>