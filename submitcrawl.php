<!DOCTYPE html>
<html>
<head>
  <title>Submit a Website to be Crawled</title>
<link type='text/css' rel='stylesheet' href='https://static.sturtz.io/sn/css/master.min.css'>
<style>
textarea, input {
    color: #000000;
}
</style>

</head>
<body>
<center>
  <form method="post" name="url">
<h3>    Enter Your URL Here, Please keep it SFW:<br></h3>
    <input type="text" style="text-color:black;" name="textdata"><br>
    <input type="submit" class="button" name="submit" value="Submit URL">
    <input type="hidden" name="newline" value="\n">
  </form>
</center>
</body>
</html>

<?php              
$data=$_POST['textdata'];
$data = filter_var($data, FILTER_SANITIZE_URL);
if (filter_var($data, FILTER_VALIDATE_URL) === FALSE) {
    die('Not a valid URL');
}

$nl = "\n";
$fp = fopen('/home/sturtz/data.txt', 'a');

fwrite($fp, $data);
fwrite($fp, ' ');
fwrite($fp, $nl);
fclose($fp);


?>
