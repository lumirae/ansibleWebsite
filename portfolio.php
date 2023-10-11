<!DOCTYPE html>
<html lang="nl-NL">

<head class="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Linda's Design</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <!--Icon page-->
    <link href="images\weblogo.png" rel="shortcut icon" type="image/x-icon">
</head>

<body>
    <img class="phoneimg" src="images\logo.png" width="108">
    <nav class="nav">
        <div class="main_list" id="mainListDiv">
            <ul>
                <a href="index.php">home</a>
                <a href="portfolio.php"><u>Portfolio</u></a>
                <img class="pcimg" src="images\logo.png" width="108">
                <a href="overmij.php">Over Mij</a>
                <a href="contact.php">Contact</a>
            </ul>
        </div>
    </nav>
    <br>
    <div class="porttekst">
        <h2><b>Portfolio:</b></h2>
        <p>Tekst</p>
    </div>
    <div class="portfolio">
        <!-- Slideshow container -->
        <div class="slideshow-container" style="padding-top:6%">
            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext">1 / 4</div>
                <img src="images/1.jpeg" style="width:100%">
                <div class="text"> </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 4</div>
                <img src="images/2.jpeg" style="width:100%">
                <div class="text"> </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 4</div>
                <img src="images/3.jpeg" style="width:100%">
                <div class="text"> </div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 4</div>
                <img src="images/4.jpeg" style="width:100%">
                <div class="text"> </div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
    </div>
    <br><br><br>
    <footer>
        <div class="footer">
            <a href="https://www.instagram.com/lindasdesign79/" target="_blank"><img src="images/instagram.png" width="38px"></a>
            <a href="https://www.facebook.com/Lindasdesign79/" target="_blank"><img src="images/facebook.png" width="38px"></a>
    </footer>
</body>
<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>

</html>