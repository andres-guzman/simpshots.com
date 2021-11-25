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
        <meta name="theme-color" content="#fafafa">
    </head>
    <body>

        <main>
            <div class="marquee" id="marquee--header">Simpsons  +  Screenshots  =  Simpshots</div>

            <div id="content">
                <div class="marquee" id="marquee--left">Simpsons  +  Screenshots  =  Simpshots</div>

                <section id="content--shots">
                    <div id="shots-box">
                        <img id="shots" class="show" alt="Random Simpsons screenshot" src="<?php echo $path . $img ?>">
                    </div>
                </section>

                <section id="content--welcome">
                    <h1>Simpshots</h1>
                    <p>Random screenshots from <span>The Simpsons</span> from season 1 to season 20</p>
                    <p>Click the image to load more \ created by <a href="https://twitter.com/__mookid">@__mookid</a></p>
                </section>

                <div class="marquee" id="marquee--right">Simpsons  +  Screenshots  =  Simpshots</div>
            </div>


            <div class="marquee" id="marquee--footer">Simpsons  +  Screenshots  =  Simpshots</div>
        </main>    


        <script>
            document.addEventListener("click", function (evt) {
                if(evt.target.id === "shots") {
                    
                document.getElementById("shots").classList.add("fade--out");
                document.getElementById("shots").classList.remove("show");

                    requestAnimationFrame(function () {
                        var xhr = new XMLHttpRequest ();
                        xhr.onload = function () {
                            if (xhr.status >= 200 && xhr.status < 300) {
                                document.getElementById("shots-box").innerHTML = xhr.responseText;
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