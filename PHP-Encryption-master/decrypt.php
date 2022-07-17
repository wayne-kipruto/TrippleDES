<?php
include('function/function.php');

	if($_POST['text'] || $_POST['key']){
		$decrypted_txt = encrypt_decrypt('decrypt', $_POST['text'], $_POST['key']);
	}
?>
<p>Enter Your Encrypted Message Here !</p>
<br>
<form method="POST">
	<textarea name="text" rows="5" cols="30" placeholder="Write text here (for decryption)"><?= $_POST['text'] ?></textarea><br/>
<p>Enter The Received Secret Key:</p>
<br>
	<input name="key" placeholder="key" type="text" value="<?= $_POST['key'] ?>" /><br/><br/>
	<p>Your Message will be displayed below:</p>
	<br>
	<textarea disabled name="text" rows="5" cols="30"><?= $decrypted_txt ?></textarea><br/>
	<button>Decrypt Text</button><br/>
</form>
