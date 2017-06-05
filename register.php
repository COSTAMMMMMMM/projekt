<?php
if(isset($error)) {
$ul =<<<EOD
<ul>
$error
</ul>
EOD;
echo $ul;
}
?>
<form method="post" action="trans.php">
<table>
<tr>
<td width="100px">Nick</td>
<td>
<input type="text" name="name">
</td>
</tr>
<tr>
<td>Hasło</td>
<td>
<input type="password" name="pass1">
</td>
</tr>
<tr>
<td>Powtórz hasło</td>
<td>
<input type="password" name="pass2">
</td>
</tr>
<tr>
<td>Adres email</td>
<td>
<input type="text" name="mail">
</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit" value="Rejestruj">
</td>
</tr>
</table>
</form>
