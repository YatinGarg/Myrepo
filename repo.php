<html>
<form action='scnd.php' method='GET'>
<input type='password' name='myname'><br>
<input type='submit' value='click here'>
</form>
<br>
<input type='text' name='cude' value='slurp'>
<html>
<?php
echo $_GET['myname'];
$goto = "https://www.google.co.in/";

if (isset($goto))
{
	echo $goto;
	header("Location: $goto");
}
echo "see the changes";
?>