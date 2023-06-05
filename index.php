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
    // mt_srand((double)microtime()); // * 100000
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
        <meta name="theme-color" content="#e6e6e6">
        <link rel="stylesheet" href="styles/simpshots.min.css">
    </head>
    
    <body>
        <main>
            <header class="marquee">
                <div class="marqueeUp">
                    <span class="marqueeSeparator">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</span>
                    <span class="marqueeSeparator">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</span>
                    <span class="marqueeSeparator">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</span>
                    <span class="marqueeSeparator">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</span>
                    <span class="marqueeSeparator">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</span>
                    <span class="marqueeSeparator">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</span>
                    <span class="marqueeSeparator">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</span>
                    <span class="marqueeSeparator">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</span>
                    <span class="marqueeSeparator">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</span>
                    <span class="marqueeSeparator">Simpsons <span>+</span> Screenshots <span>=</span> Simpshots</span>
                </div>
            </header>

            <article id="main--content">
                <section id="content--welcome">
                    <h1>Welcome to Simpshots</h1>
                    <p>This mini website contains over 5.000 funny screenshots from <span>The Simpsons</span> from season 1 to season 20.</p>
                    <button id="button">Next</button>
                </section>
                
                <section id="content--shots">
                    <h2>Simpshots</h2>
                    <div id="shots--box">
                        <img id="shots" alt="The Simpsons Screenshot" src="<?php echo $path . $img ?>">
                    </div>
                </section>
            </article>

            <footer class="marquee">
                <div class="marqueeDown">
                    <span class="marqueeSeparator">Created by <a href="https://twitter.com/__mookid__" target="_blank" rel="noopener">mookid</a></span>
                    <span class="marqueeSeparator">Created by <a href="https://twitter.com/__mookid__" target="_blank" rel="noopener">mookid</a></span>
                    <span class="marqueeSeparator">Created by <a href="https://twitter.com/__mookid__" target="_blank" rel="noopener">mookid</a></span>
                    <span class="marqueeSeparator">Created by <a href="https://twitter.com/__mookid__" target="_blank" rel="noopener">mookid</a></span>
                    <span class="marqueeSeparator">Created by <a href="https://twitter.com/__mookid__" target="_blank" rel="noopener">mookid</a></span>
                    <span class="marqueeSeparator">Created by <a href="https://twitter.com/__mookid__" target="_blank" rel="noopener">mookid</a></span>
                    <span class="marqueeSeparator">Created by <a href="https://twitter.com/__mookid__" target="_blank" rel="noopener">mookid</a></span>
                    <span class="marqueeSeparator">Created by <a href="https://twitter.com/__mookid__" target="_blank" rel="noopener">mookid</a></span>
                    <span class="marqueeSeparator">Created by <a href="https://twitter.com/__mookid__" target="_blank" rel="noopener">mookid</a></span>
                    <span class="marqueeSeparator">Created by <a href="https://twitter.com/__mookid__" target="_blank" rel="noopener">mookid</a></span>
                </div>
            </footer>
        </main>

        <script>
            button.addEventListener("click", () => {
                let simpShots = document.getElementById("shots");
                simpShots.classList.add("fade--out");
                
                simpShots.addEventListener("animationend", () => {
                    let xhr = new XMLHttpRequest();
                    xhr.onload = () => {
                        if (xhr.status >= 200 && xhr.status < 300) {
                            document.getElementById("shots--box").innerHTML = xhr.responseText;
                            console.log("Ramdom shot loaded OK");
                        } else {
                            console.log("Error loading image");
                        }
                    };
                    xhr.open("GET", "loader.php");
                    xhr.send();
                });
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