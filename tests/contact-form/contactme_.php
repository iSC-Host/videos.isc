
<table width="760" border="0" cellspacing="10" cellpadding="0" align="center">
  <tr>
    <td align="center">

<?php 
if (isset($_POST["op"]) && ($_POST["op"]=="send")) { 

/******** START OF CONFIG SECTION *******/
  $sendto  = "";
  $subject = "Website Contact Enquiry";
// Select if you want to check form for standard spam text
  $SpamCheck = "Y"; // Y or N
  $SpamReplaceText = "*content removed*";
// Error message prited if spam form attack found
$SpamErrorMessage = "<p align=\"center\"><font color=\"red\">Malicious code content detected.
</font><br><b>Your IP Number of <b>".getenv("REMOTE_ADDR")."</b> has been logged.</b></p>";
/******** END OF CONFIG SECTION *******/


  $name = $_POST['name']; 
  $email = $_POST['email']; 
  $message = $_POST['message']; 
  
  $headers = "From: $email\n";
  $headers . "MIME-Version: 1.0\n"
		   . "Content-Transfer-Encoding: 7bit\n"
		   . "Content-type: text/html;  charset = \"iso-8859-1\";\n\n";
if ($SpamCheck == "Y") {		   
// Check for Website URL's in the form input boxes as if we block website URLs from the form,
// then this will stop the spammers wastignt ime sending emails
if (preg_match("/http/i", "$name")) {echo "$SpamErrorMessage"; exit();} 
if (preg_match("/http/i", "$email")) {echo "$SpamErrorMessage"; exit();} 
if (preg_match("/http/i", "$message")) {echo "$SpamErrorMessage"; exit();} 

// Patterm match search to strip out the invalid charcaters, this prevents the mail injection spammer 
  $pattern = '/(;|\||`|>|<|&|^|"|'."\n|\r|'".'|{|}|[|]|\)|\()/i'; // build the pattern match string 
                            
  $name = preg_replace($pattern, "", $name); 
  $email = preg_replace($pattern, "", $email); 
  $message = preg_replace($pattern, "", $message); 

// Check for the injected headers from the spammer attempt 
// This will replace the injection attempt text with the string you have set in the above config section
  $find = array("/bcc\:/i","/Content\-Type\:/i","/cc\:/i","/to\:/i"); 
  $email = preg_replace($find, "$SpamReplaceText", $email); 
  $name = preg_replace($find, "$SpamReplaceText", $name); 
  $message = preg_replace($find, "$SpamReplaceText", $message); 
  
// Check to see if the fields contain any content we want to ban
 if(stristr($name, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
 if(stristr($message, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
 
 // Do a check on the send email and subject text
 if(stristr($sendto, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
 if(stristr($subject, $SpamReplaceText) !== FALSE) {echo "$SpamErrorMessage"; exit();} 
}
// Build the email body text
  $emailcontent = " 
----------------------------------------------------------------------------- 
   WEBSITE CONTACT ENQUIRY
----------------------------------------------------------------------------- 

Name: $name 
Email: $email 
Message: $message 

_______________________________________ 
End of Email 
"; 
// Check the email address enmtered matches the standard email address format
 if (!preg_match("^[a-zA-Z0-9_.-]+@[a-zA-Z0-9-]+.[a-zA-Z0-9-.]+$^", $email)) { 
  echo "<p>It appears you entered an invalid email address</p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
} 

 elseif (!trim($name)) { 
  echo "<p>Please go back and enter a Name</p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
} 


 elseif (!trim($message)) { 
  echo "<p>Please go back and type a Message</p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
}  

 elseif (!trim($email)) { 
  echo "<p>Please go back and enter an Email</p><p><a href='javascript: history.go(-1)'>Click here to go back</a>.</p>"; 
} 

// Sends out the email or will output the error message 
 elseif (mail($sendto, $subject, $emailcontent, $headers)) { 
  echo "<br><br><p><b>Thank You $name</b></p><p>We will be in touch as soon as possible.</p>"; 

} 
} 
else { 
?> 
<p align="center">Please complete all details of your enquiry<br>and we will get back to you shortly.</p>
<br>
<form method="post"><INPUT NAME="op" TYPE="hidden" VALUE="send"> 
  <table> 
    <tr> 
      <td><p>Name:</p></td> 
      <td> 
        <input name="name" type="text" size="30" maxlength="150"> 
      </td> 
    </tr> 
      <tr> 
      <td><p>E-mail:</p></td> 
      <td> 
        <input name="email" type="text" size="30" maxlength="150"> 
      </td> 
    </tr> 

    <tr> 
      <td valign="top"><p>Message:</p></td> 
      <td><textarea name="message" cols="40" rows="6"></textarea></td> 
    </tr> 
    <tr><td></td> <td><input name="submit" type="submit" value="Send Message"></td></tr> 
  </table> 
</form> 
<?php } ?>

</td>
  </tr>
</table>
