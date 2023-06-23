<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Gallery</title>
    <link rel="stylesheet" href="gallstyle.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />"
<style>
    a{
			text-decoration: none;
		}
        </style>
</head>
<body>
    <div class="gallery">


        <div class="content">
            <img src="https://m.media-amazon.com/images/I/713AicY7oPS._AC_UF1000,1000_QL80_.jpg">
            <h4>The Girl with <br>no dream</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... printer took a galley of type and scrambled it to make a type specimen book.</p>
            <h6>$100.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <?php 
            echo '<form method="POST" action="form.php">
               <button class="buy1" >Buy Now</button>
             </form>';
           ?>
         
        </div>

        <div class="content">
            <img src="https://thestoryexchange.org/app/uploads/2023/06/IMG_7634-525x792.jpeg">
           <h4>The Invisible<br> Hour</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... printer took a galley of type and scrambled it to make a type specimen book.</p>
            <h6>$90.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star "></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <?php 
            echo '<form method="POST" action="form.php">
            <button class="buy1" >Buy Now</button>
             </form>';
           ?>
            
        </div>


        <div class="content">
            <img src="https://thestoryexchange.org/app/uploads/2023/06/IMG_7632-525x793.jpeg">
            <h4>Tom Lake A Navel<br>Ann Patchett</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... printer took a galley of type and scrambled it to make a type specimen book.</p>
            <h6>$110.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <?php 
            echo '<form method="POST" action="form.php">
            <button class="buy1" >Buy Now</button>
             </form>';
           ?>
        </div>


        <div class="content">
            <img src="https://thestoryexchange.org/app/uploads/2023/06/IMG_7628-525x793.jpeg">
            <h4>All the <br>Gold Starts</h4><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... printer took a galley of type and scrambled it to make a type specimen book.</p>
            <h6>$50.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <?php 
            echo '<form method="POST" action="form.php">
            <button class="buy1" >Buy Now</button>
             </form>';
           ?>
        </div>

        <div class="content">
            <img src="https://www.oberlo.com/media/1603897577-image22-1.jpg?fm=webp&w=1824&fit=max">
            <h4>Harry Potter &the<br>Philosopher Stone</h4><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... printer took a galley of type and scrambled it to make a type specimen book.</p>
            <h6>$50.00</h6>
            <ul>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star checked"></i></li>
                <li><i class="fa fa-star"></i></li>
            </ul>
            <?php 
            echo '<form method="POST" action="form.php">
            <button class="buy1" >Buy Now</button>
             </form>';
           ?>
        </div>

            <div class="content">
                <img src="https://m.media-amazon.com/images/I/51YImJ3TOtS._SY264_BO1,204,203,200_QL40_FMwebp_.jpg">
                <h4>A Million<br>Thoughts</h4><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. ... printer took a galley of type and scrambled it to make a type specimen book.</p>
                <h6>$105.00</h6>
                <ul>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star checked"></i></li>
                    <li><i class="fa fa-star"></i></li>
                </ul>
                <?php 
            echo '<form method="POST" action="form.php">
            <button class="buy1" >Buy Now</button>
             </form>';
           ?>
        </div>
    </div>
    <?php
        echo "<center>";
		echo "<a href=index.php ><i><b>Back to Home Page</b></i></a>";
        echo "</center>";
	?>
</body>
</html>