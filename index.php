<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    body {
  
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
} 
.images {
  opacity: 0.5;
}

.top-left {
  position: absolute;
  top: 30px;
  left: 37px;
 color: rgb(0, 0, 0);
 font-size: 252%;
 font-family:Garamond;
}
.top-right {
  position: absolute;
  top: 64px;
  right: 50px;
  font-size: 130%;
 
  padding:10px; 
  color: white; 
  text-decoration: none; 
  border-radius: 90px;
  font-family:serif;
}

hr{
  height:3.8px;
  border-width:0;
  color:black;
  background-color:black;
  width: 590%;
}
.button{
  text-decoration:none;
  color: black;
  font-family: Georgia, 'Times New Roman', Times, serif;
}

.button:hover {
  box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
}
#container
{
  position: relative;
}
#img2 {
    position: absolute;
    left: 589px;
    top: 200px;
    width: 300px;
    opacity: 0.8;
    border-radius: 5px;
}
p{
  text-align: center;
  position: relative;
  left: 589px;
    top: 500px;
    width: 300px;
}
.top-center {
  position: absolute;
  top: 410px;
  left: 580px;
 color: rgb(0, 0, 0);
 font-size: 90%;
 font-family:Garamond;
}
 
</style>

<body>
  <div id="container">
    <img class="images" src="https://dslntlv9vhjr4.cloudfront.net/bowls_images_2/iY6lElcMIFQmY.jpg"  height="730" width="1465">
    <center><img class="image" id="img2" src="https://thumbs.dreamstime.com/b/book-logo-vector-drawing-represents-design-53875554.jpg" alt="welcome"></center>
    <p class="top-center">A book is a number of pieces of paper, usually with words printed on them, which are fastened together and fixed inside a cover of stronger paper or cardboard. Books contain information, stories, or poetry, for example. His eighth book came out earlier this year and was an instant bestseller.</p>
    <div>
    <div class="top-left"><b>Online book<br>Shopping Site</b>
      <hr>
    </div>
<div class="top-right" >
    <b>
    <a href="home.html"  class="button" > Home</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="gallery.php" class="button" > Gallery</a>&nbsp;&nbsp;&nbsp;&nbsp;
    <a href="login.php"  class="button" > Log out&nbsp;&nbsp; </a>
    </b> 
</div>

        <?php
        echo '<b><form method="POST" action="gallery.php">
        <b><a  href="gallery.php" > </a></b>
          </form></b>';
     
        echo '<b><form method="POST" action="login.php">
        <b><a  href="login.php" ></a></b>
          </form></b>';
        ?>
</body>
</html>