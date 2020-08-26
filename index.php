<center>
<title>Legofy - Riverside Rocks</title>
<br>
<h1>Select an Image from a URL</h1>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/siimple@3.3.1/dist/siimple.min.css"
    />
    <style>
    a{
        text-decoration: none;
    }
    body{
        background-color: black;
    }
    input[type=text]{
        padding: 15px;
        font-size: 16px;
        width: 35%;
    }
    button[type=submit]{
        padding: 15px;
    }
    </style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<center>
<br>
<form method="get"><input type="text" placeholder="Url to an image.." name="url"><button type="submit"><i class="far fa-link" aria-hidden="true"></i>></button></form>
<?php

$file = $_GET["url"];

$new = uniqid();


// Prevents people from running console injections
$shell = array(";", "&&", "&", "|");

if(isset($_GET["url"])){
    if(!in_array($file, $shell)){
        exec("cd .. && cd i && wget ${file} -O ${new}.png && legofy ${new}.png");
        echo "<img src='/i/${new}_lego.png' /><br>";
    }else{
        die("Something went wrong.");
    }
}
?>
