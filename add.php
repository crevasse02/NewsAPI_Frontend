<?php
include_once('config.php');
$url = $mysqli->real_escape_string($_POST['url']);
$title = $mysqli->real_escape_string($_POST['title']);
$image = $mysqli->real_escape_string($_POST['image']);

$sql="INSERT INTO history_news (image, title, url) VALUES ('$image', '$title', '$url')";
if(!$result = $mysqli->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}?>