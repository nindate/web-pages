<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>LandscapeTitles| florida web design</title>
</head>

<body>
<div id="container">
  <div id="header">
    <?php
      function get_server_name(){
      $server_name = shell_exec('uname -n');
      //$server_name = shell_exec('curl http://169.254.169.254/latest/meta-data/hostname');
      return $server_name;
      }
      $server_name = get_server_name();
      echo "<h2 style='text-align:center'><span class='off'>Welcome to your application on </span>$server_name</h2>";
    ?>
    <h1><span class="off">Landscape</span>Titles</h1>
    <div id="links">
      <a href="#">Home</a>
      <a href="#">About</a>
      <a href="#">Products</a>
      <a href="#">Services</a>
      <a href="#">Portfolio</a>
      <a href="#">Contact</a>
    </div>
  </div>
  <div id="content">
    <img class="picture" src="images/image1.jpg"/>
    <div class="contenttext">
      <h2>Template Information</h2>
      <p>You may use this template in any way you would like, please just leave the link at the bottom to our site in place. In order to add your own pictures, simply insert an image as usual, and just add class=&quot;picture&quot; to each image. The shadow is automatically added to the images. Make sure your image is exactly 750px wide for best results.</p>
    </div>
    <img class="picture" src="images/image2.jpg"/>
    <div class="contenttext">
      <h2>Template Information</h2>
      <p>You may use this template in any way you would like, please just leave the link at the bottom to our site in place. In order to add your own pictures, simply insert an image as usual, and just add class=&quot;picture&quot; to each image. The shadow is automatically added to the images. Make sure your image is exactly 750px wide for best results.</p>
    </div>
    <img class="picture" src="images/image3.jpg"/>
    <div class="contenttext">
      <h2>Template Information</h2>
      <p>You may use this template in any way you would like, please just leave the link at the bottom to our site in place. In order to add your own pictures, simply insert an image as usual, and just add class=&quot;picture&quot; to each image. The shadow is automatically added to the images. Make sure your image is exactly 750px wide for best results.</p>
    </div>
  </div>
    
  <div id="footer"><a href="http://www.bryantsmith.com">web design florida</a></div>
</div>
</body>
</html>
