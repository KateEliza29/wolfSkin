<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" href="include/style.css">
    <link rel="icon" href="include/images/wolf-logo.png">
    <title>Wolf Skin</title>
</head>
<body>
    
    <!--Navigation Bar -->
    <header id="headerWrapper" class="flex">
        <?php include "include/header.html" ?>
    </header>


    <!-- Section 1 - Hero --> 
    <section id="heroWrapper">
        <div id="hero">
            <div>
                <h1><span>Wolf</span> Skin</h1>
            </div>
            <div>
                <h2>Luxury tattoo studio located in Coventry</h2>
            </div>
        </div>
    </section>

    <!-- Section 2 - About --> 
    <section id="aboutWrapper">
        <div id="about">
            <div id="aboutTitle">
                <h3>About Us</h3>
            </div>
            <div id="about1">
                <h4>About 1</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sed feugiat dui. Praesent ullamcorper, 
                    massa non malesuada ornare, arcu velit placerat orci, eu dictum arcu justo non libero. Sed et congue sem. 
                    Praesent eu nisi ac ipsum dignissim ornare. Vivamus mi augue, congue et hendrerit vel, euismod non enim. 
                    Aenean a elementum purus. Vivamus gravida porta massa, at rutrum ipsum condimentum vitae.</p>
            </div>
            <div id="about2">
                <h4>About 2</h4>
                <p>Curabitur eget velit aliquam, hendrerit leo sed, finibus nunc. Pellentesque habitant morbi tristique 
                    senectus et netus et malesuada fames ac turpis egestas. Duis libero ante, sodales eu lorem a, hendrerit 
                    pharetra elit. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                    Cras egestas est porta mauris faucibus, sit amet molestie lacus consequat. Sed id nisl tincidunt, feugiat velit quis, 
                    ullamcorper justo. Suspendisse potenti. Nulla facilisi. Mauris iaculis quam non arcu accumsan, vitae lacinia tellus.</p>
            </div>
            <div id="about3">
                <h4>About 3</h4>
                <p>Donec eleifend congue rutrum. Donec nec nisl velit. Integer at ligula urna. Aliquam a odio imperdiet, 
                    molestie quam ac, tristique diam. Interdum et malesuada fames ac ante ipsum primis in faucibus. Sed turpis justo, 
                    mollis id vehicula id, auctor eget est. Praesent dignissim magna id lorem interdum sollicitudin. Duis efficitur 
                    massa velit, eget consequat sem aliquam in. Quisque non varius ex, at viverra velit. Donec arcu velit, molestie nec 
                    massa sed, placerat interdum neque. Morbi tincidunt lorem est, sit amet finibus nisl fringilla quis. Phasellus dictum 
                    scelerisque feugiat.</p>
            </div>
        </div>
    </section>

    <!-- Section 3 - Gallery --> 
    <section id="galleryWrapper">
        <div id="galleryTitle">
            <h3>Gallery</h3>
        </div>
        <div id="gallery">
            <div id="prevBtn" class="arrow-button flex"><i class="fas fa-arrow-circle-left"></i></div>
            <div class="carousel-slide">
                <div>
                    <img src="include/images/gallery1.jpg">
                </div>
                <div>
                    <img src="include/images/gallery3.jpg">
                </div>
                <div>
                    <img src="include/images/gallery4.jpg">
                </div>
                <div>
                    <img src="include/images/gallery5.jpg">
                </div>
                <div>
                    <img src="include/images/gallery6.jpg">
                </div>
                <div>
                    <img src="include/images/gallery7.jpg">
                </div>
                <div>
                    <img src="include/images/gallery8.jpg">
                </div>
                <div>
                    <img src="include/images/gallery9.jpg">
                </div>
                <div>
                    <img src="include/images/gallery10.jpg">
                </div>
            </div>
            <div id="nextBtn" class="arrow-button flex"><i class="fas fa-arrow-circle-right"></i></div>
        </div>
    </section>

    <!-- Section 4 - Prices -->
    <section id="pricesWrapper">
        <div id="priceTitle">
            <h3>Prices</h3>
        </div>
        <div id="prices" class="flex">
            <div id="price1">
                <h4>Price 1</h4>
                <hr>
                <p>£5.00</p>
                <p>Fusce facilisis convallis tellus, eget rhoncus libero dignissim ut. Ut tempor leo eros, sed aliquet nunc rutrum ac.</p>
            </div>
            <div id="price2">
                <h4>Price 2</h4>
                <hr>
                <p>£5.00</p>
                <p>Fusce facilisis convallis tellus, eget rhoncus libero dignissim ut. Ut tempor leo eros, sed aliquet nunc rutrum ac.</p>
            </div>
            <div id="price3">
                <h4>Price 3</h4>
                <hr>
                <p>£5.00</p>
                <p>Fusce facilisis convallis tellus, eget rhoncus libero dignissim ut. Ut tempor leo eros, sed aliquet nunc rutrum ac.</p>
            </div>
        </div>
        <div id="banner">

        </div>
    </section>


    <!-- Section 5 - Contact -->
    <section id="contactWrapper">

        <div id="contactTitle">
            <h3>Contact Us</h3>
        </div>
        <div id="socialMedia">
                <a href="#"><i class="fab fa-facebook-square"></i></a>
                <a href="#"><i class="fab fa-twitter-square"></i></a>
                <a href="#"><i class="fas fa-at"></i></a>
                <a href="#"><i class="fas fa-phone-square"></i></a>
            </div>
        <div id="contact" class="flex"> 
            <div id="address">
                <p><i class="fas fa-at"></i></p> <p>wolfskin@wolfskin.com </p>
                <p><i class="fas fa-phone-square"></i> <p></i>07777 777777 </p>
                <p><i class="fas fa-home"></i></p>
                <p>26 Fake Road</p>
                <p>Villagedon</p>
                <p>Townface</p>
                <p>Countymoose</p>
                <p>PP6 6PP</p>
            </div>
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d39810.98836869186!2d-1.187558697332404!3d51.41799560968235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48769f5798f5c8a9%3A0x57696a5423645124!2sBeenham%2C%20Reading!5e0!3m2!1sen!2suk!4v1595065123655!5m2!1sen!2suk" width="400" height="300" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
        </div>
    </section>
    
    
    <!-- Footer -->
    <footer class="flex">
        <?php include "include/footer.html" ?>
    </footer>
    
    
    <script src="include/app.js"></script>


</body>
</html>