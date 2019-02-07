<!DOCTYPE html>
<html>
    <head>
        <title></title>

        <meta charset="UTF-8" />

        <!-- Links -->
        <link rel="stylesheet" href="css/main.css">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Lobster|Montserrat|Quicksand" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <section class="slide-1">
            <div class="article-box">
                <h1 class="title">SevillaEyes</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic quos assumenda quidem ipsum ipsam eum sapiente aperiam fuga. A, quisquam.</p>
            </div>   
            <a href="#slide-3">
                <div class="option-box-1">
                    <i class="fas fa-user-alt"></i>
                    <p>About us</p>
                </div>
            </a>
            <a href="">
                <div class="option-box-2">
                    <i class="fas fa-camera"></i>
                    <p>Photos</p>
                </div>
            </a>
            <a href="">
                <div class="option-box-3">
                    <i class="fas fa-blog"></i>
                    <p>Blog</p>
                </div>
            </a>      
        </section>
        <!-- <section class="slide-2">
            <a href="#slide-3">
                <div class="option-box">
                    <i class="fas fa-user-alt"></i>
                    <p>About us</p>
                </div>
            </a>
            <a href="">
                <div class="option-box">
                    <i class="fas fa-camera"></i>
                    <p>Photos</p>
                </div>
            </a>
            <a href="">
                <div class="option-box">
                    <i class="fas fa-blog"></i>
                    <p>Blog</p>
                </div>
            </a>
        </section> -->
        <section class="slide-3" id="slide-3">
            <div class="about-us">
                <p>About us</p>
            </div>
            <div class="about-box">
                <div class="box">
                    <h1>Hubert</h1>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="box">
                    <h1>Ksawery</h1>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="box">
                    <h1>Jakub</h1>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="box">
                    <h1>Gabrysia</h1>
                    <p>Lorem ipsum dolor sit amet </p>
                </div>
                <div class="box">
                    <h1>Ada</h1>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="box">
                    <h1>Adrian</h1>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="box">
                    <h1>Daniel</h1>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="box">
                    <h1>Paweł</h1>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
                <div class="box">
                    <h1>Przemek</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
                <div class="box">
                    <h1>Szymon</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                </div>
            </div>
        </section>
        <section class="slide-4" id="slide-4">
            <div class="gallery-title">
                <p>Photos</p>
                <?php
                session_start();
                require_once('scripts/gallery_fetch_3rand.php');
                /* $zdjecie1[0]    tytul
                 * $zdjecie1[1]    zdjecie
                 * $zdjecie1[2]    opis
                 *
                 * $zdjecie2[0]    tytul
                 * $zdjecie2[1]    zdjecie
                 * $zdjecie2[2]    opis
                 *
                 * $zdjecie3[0]    tytul
                 * $zdjecie3[1]    zdjecie
                 * $zdjecie3[2]    opis
                 *
                 *useless_shit/gallery/IMG_20120203_104647.jpg
                 *
                 */
                ?>
            </div>
            <div class="gallery">
                <div class="gallery-box">

                </div>
                <div class="gallery-box">
                    
                </div>
                <div class="gallery-box">
                    
                </div>
            </div>
        </section>
    </body>
</html>
