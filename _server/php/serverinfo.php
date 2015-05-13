<?php

$dd=array(
	'Server Address'=>$_SERVER['SERVER_ADDR'],
	'Server Name'=>$_SERVER['SERVER_NAME'],
	'Server Software'=>$_SERVER['SERVER_SOFTWARE'],
	'Document Root'=>$_SERVER['DOCUMENT_ROOT'],
	'HTTP Host'=>$_SERVER['HTTP_HOST'],
	'Remote Address'=>$_SERVER['REMOTE_ADDR'],
	'Remote Port'=>$_SERVER['REMOTE_PORT'],
	'Script File Name'=>$_SERVER['SCRIPT_FILENAME'],
	'Server Admin'=>$_SERVER['SERVER_ADMIN'],
	'Serever Port'=>$_SERVER['SERVER_PORT'],
	'Script Name'=>$_SERVER['SCRIPT_NAME'],
	'Request URI'=>$_SERVER['REQUEST_URI'],	
	'PHP Self'=>$_SERVER['PHP_SELF']
);
?>
<table style="border: 1px solid #000000;width: 600px" align="center">
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 17pt;text-align: center;width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		<strong>Name</strong></td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 17pt;text-align: center;color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<strong>Value</strong></td>
	</tr>
<?php
foreach ($dd as $key=>$value){
?>
	<tr>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; width: 298px; color: #2214B9;border-style: solid;border-width: 1px;">
		<?php echo $key?> </td>
		<td style="font-family: 'Times New Roman', Times, serif;font-size: 15pt;text-align: left; color: #2214B9;border-style: solid;border-width: 1px; width: 298px;">
		<?php echo $value?></td>
	</tr>
<?php } ?>
</table>
