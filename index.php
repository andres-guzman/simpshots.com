<?php
$root = '';
$path = 'shots/';
function getImagesFromDir($path) {
    $images = array();
    if ( $img_dir = @opendir($path) ) {
        while ( false !== ($img_file = readdir($img_dir)) ) {
            // checks for gif, jpg, png
            if ( preg_match("/(\.gif|\.jpg|\.png|\.bmp|\.jpeg|\.JPEG|\.JPG|\.BMP|\.PNG|\.GIF)$/", $img_file) ) {
                $images[] = $img_file;
            }
        }
        closedir($img_dir);
    }
    return $images;
}

function getRandomFromArray($ar) {
    mt_srand( (double)microtime() * 100000 ); //100000
    $num = array_rand($ar);
    return $ar[$num];
}
$imgList = getImagesFromDir($root . $path);
$img = getRandomFromArray($imgList);
?>
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Simpshots</title>
        <meta name="description" content="Random screenshots from The Simpsons for fun fun x2.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta property="og:title" content="The Simpsons Screenshots">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Random screenshots form the Simpsons. Try it for fun.">
        <meta property="og:url" content="http://www.simpshots.com/">
        <meta property="og:image" content="http://www.simpshots.com/simpshots.jpg">
        <link rel="icon" type="image/png" href="favicon.png">
        <link rel="apple-touch-icon" href="icon.png">
        <link rel="stylesheet" href="styles/simpshots.min.css">
        <meta name="theme-color" content="#e6e6e6">
    </head>
    <body>

        <main>
            <header class="marquee">
                <div class="marquee--header__content">
                    <div class="marqueeFirst">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</div>
                    <div class="marqueeSecond">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</div>
                </div>
            </header>

            <article id="main--content">
                <section id="content--shots">
                    <div id="shots--box">
                        <img id="shots" alt="The Simpsons Screenshot" src="<?php echo $path . $img ?>">
                    </div>
                </section>

                <section id="content--welcome">
                    <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 84.5 22.8" style="enable-background:new 0 0 84.5 22.8;" xml:space="preserve">
                        <path d="M8.5,14.8v4.4c0,2.4-1.2,3.6-3.6,3.6H3.6c-2.4,0-3.6-1.2-3.6-3.6v-5.4h2.9v5.3c0,0.7,0.4,1.1,1.1,1.1h0.4 c0.8,0,1.1-0.4,1.1-1.1v-3.9c0-0.9-0.3-1.3-0.9-1.8l-2.9-2.2c-1.3-1-1.7-2-1.7-3.6V3.6C0,1.2,1.2,0,3.6,0h1.2c2.4,0,3.6,1.2,3.6,3.6 v4.9H5.5V3.7c0-0.8-0.4-1.1-1.1-1.1H4.1C3.3,2.6,3,3,3,3.7v3.4C3,8.1,3.2,8.5,3.9,9l2.9,2.2C8.1,12.2,8.5,13.1,8.5,14.8z"/>
                        <path d="M12.8,22.6h-3V0.2h3V22.6z"/>
                        <path d="M16.8,5.1l0.1,11.1v6.4h-2.6V0.2h4.4l1.9,16.3l1.9-16.3H27v22.4H24v-6.5l0-11.1l-2.2,17.6H19L16.8,5.1z"/>
                        <path d="M31.4,22.6h-3V0.2h4.7c2.5,0,3.6,1.2,3.6,3.6v6.8c0,2.4-1.2,3.6-3.6,3.6h-1.7V22.6z M32.6,2.8h-1.2v8.8h1.2 c0.8,0,1.1-0.4,1.1-1.1V4C33.7,3.2,33.4,2.8,32.6,2.8z"/>
                        <path d="M46.3,14.8v4.4c0,2.4-1.2,3.6-3.6,3.6h-1.3c-2.4,0-3.6-1.2-3.6-3.6v-5.4h2.9v5.3c0,0.7,0.4,1.1,1.1,1.1h0.4 c0.8,0,1.1-0.4,1.1-1.1v-3.9c0-0.9-0.3-1.3-0.9-1.8l-2.9-2.2c-1.3-1-1.7-2-1.7-3.6V3.6C37.8,1.2,39,0,41.4,0h1.2 c2.4,0,3.6,1.2,3.6,3.6v4.9h-2.9V3.7c0-0.8-0.4-1.1-1.1-1.1h-0.4c-0.8,0-1.1,0.4-1.1,1.1v3.4c0,0.9,0.3,1.3,0.9,1.8l2.9,2.2 C45.9,12.2,46.3,13.1,46.3,14.8z"/>
                        <path d="M53.4,9.9V0.2h3v22.4h-3v-10h-2.8v10h-3V0.2h3v9.7H53.4z"/>
                        <path d="M63,22.8h-1.6c-2.4,0-3.6-1.2-3.6-3.6V3.6C57.8,1.2,59,0,61.4,0H63c2.4,0,3.6,1.2,3.6,3.6v15.6C66.6,21.6,65.4,22.8,63,22.8 z M62.5,2.6h-0.6c-0.8,0-1.1,0.4-1.1,1.1v15.3c0,0.8,0.4,1.1,1.1,1.1h0.6c0.8,0,1.2-0.4,1.2-1.1V3.8C63.6,3,63.2,2.6,62.5,2.6z"/>
                        <path d="M69.8,22.6V2.9h-2.6V0.2h8.2v2.7h-2.6v19.7H69.8z"/>
                        <path d="M84.5,14.8v4.4c0,2.4-1.2,3.6-3.6,3.6h-1.3c-2.4,0-3.6-1.2-3.6-3.6v-5.4h2.9v5.3c0,0.7,0.4,1.1,1.1,1.1h0.4 c0.8,0,1.1-0.4,1.1-1.1v-3.9c0-0.9-0.3-1.3-0.9-1.8l-2.9-2.2c-1.3-1-1.7-2-1.7-3.6V3.6c0-2.4,1.2-3.6,3.6-3.6h1.2 c2.4,0,3.6,1.2,3.6,3.6v4.9h-2.9V3.7c0-0.8-0.4-1.1-1.1-1.1H80c-0.8,0-1.1,0.4-1.1,1.1v3.4c0,0.9,0.3,1.3,0.9,1.8l2.9,2.2 C84,12.2,84.5,13.1,84.5,14.8z"/>
                    </svg>            

                    <p>Random loader of funny screenshots from <span>The Simpsons</span> from season 1 to season 20</p>
                    <p>Click the button to load more</p>
                    <button id="button">Next</button>
                </section>
            </article>            

            <footer class="marquee">
                <div class="marquee--footer__content">
                    <div class="marqueeFirst">Created by <a href="https://twitter.com/__mookid" target="_blank" rel="noopener">mookid</a></div>                    
                    <div class="marqueeSecond">Created by <a href="https://twitter.com/__mookid" target="_blank" rel="noopener">mookid</a></div>                    
                </div>
            </footer>
        </main>    


        <script>
            document.addEventListener("click", function (evt) {
                if(evt.target.id === "button") {

                    document.getElementById("shots").classList.add("fade--out");
                    
                    requestAnimationFrame(function () {
                        var xhr = new XMLHttpRequest ();
                        xhr.onload = function () {
                            if (xhr.status >= 200 && xhr.status < 300) {
                                document.getElementById("shots--box").innerHTML = xhr.responseText;
                            } else {
                                console.log('Error');
                            }
                        };
                        xhr.open('GET', 'loader.php');
                        xhr.send();
                    });
                }
            });
        </script>

        <script async src="https://www.googletagmanager.com/gtag/js?id=G-SMSLJT0G36"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-SMSLJT0G36');
        </script>
    </body>
</html>