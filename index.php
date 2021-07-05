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
    mt_srand( (double)microtime() * 1000000 ); //100000
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
        <meta property="og:title" content="The Simpsons screenshots">
        <meta property="og:type" content="website">
        <meta property="og:description" content="Random screenshots form the Simpsons.">
        <meta property="og:url" content="http://www.simpshots.com/">
        <meta property="og:image" content="http://www.simpshots.com/icon.png">
        <link rel="icon" type="image/png" href="favicon.png">
        <link rel="apple-touch-icon" href="icon.png">
        <meta name="theme-color" content="#fafafa">
        <style>@font-face{font-family:Alloy;src:url(css/fonts/alloy_semibold-webfont.woff2) format('woff2'),url(css/fonts/alloy_semibold-webfont.woff) format('woff');font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:PF;src:url(css/fonts/PFArmaFive.woff2) format('woff2'),url(css/fonts/PFArmaFive.woff) format('woff');font-weight:400;font-style:normal;font-display:swap}::selection{background:#fff;color:#171819}::-moz-selection{background:#fff;color:#171819}@keyframes leftBottom{0%{transform:translate(0,0)}100%{transform:translate(8rem,8rem)}}@keyframes marqueeLeft{from{transform:translateX(0)}to{transform:translateX(-100%)}}html{height:100%;font-size:calc(.75vw + 3.5px)}body{--font-big:4.5rem;--marquee-font:15px;--marquee-speed:160s;--marquee-height:35px;background-color:#0b0b0e;background-image:url(img/41.gif);border-right:11px solid #fff;border-left:11px solid #fff;margin:0;line-height:1;transition:all ease-in-out .75s;height:100%;box-sizing:border-box}.is-hidden{display:none}header{width:100vw;height:var(--marquee-height);max-width:100%;display:flex;align-items:center;background-color:#fff;position:relative;overflow:hidden;box-sizing:border-box}footer:hover .marquee--inner__footer,header:hover .marquee--inner__header{animation-play-state:paused}.marquee--inner__header{text-align:center;white-space:nowrap;will-change:transform;animation:marqueeLeft var(--marquee-speed) linear infinite;flex-shrink:0}.marquee--inner__footer>p,.marquee--inner__header>p{color:#000;font:var(--marquee-font) PF,Arial,Helvetica,sans-serif;line-height:1;margin:0}.marquee--inner__footer p>span,.marquee--inner__header p>span{margin-right:5rem}.marquee--inner__footer p span strong,.marquee--inner__header p span strong{color:#ff0048}#main--frame{display:grid;grid-template-columns:1fr 1.25fr;gap:4vw;flex:1}section#shots--panel,section#welcome--panel{align-self:center}main{height:100%;display:flex;flex-direction:column}#welcome--panel{text-align:right;display:flex;flex-direction:column;align-items:flex-end;padding-bottom:1.25rem}h1{color:#fff;font:var(--font-big) Alloy,Arial,Helvetica,sans-serif;text-transform:uppercase;line-height:1;letter-spacing:2px;transition:all ease-in-out .75s;margin:0 0 4vh 0}#welcome--panel h1,#welcome--panel p{max-width:710px}#welcome--panel p{color:#fff;font:16px PF,Arial,Helvetica,sans-serif;padding-left:9rem;box-sizing:border-box;margin:0 0 5.5vh 0}#welcome--panel p a{color:#ff0048;text-decoration:none;transition:all 350ms ease 0s}#welcome--panel p a:hover{color:#fff;text-shadow:1px 1px #ff0048,2px 2px #ff0048,3px 3px #ff0048,4px 4px #ff0048}#shots--panel{padding-right:1rem}#shots-box{display:flex;width:800px;height:580px;overflow:hidden;margin-bottom:10px;border:5px solid #f1f1f1;position:relative;transition:all ease-in-out .75s;z-index:0}#shots-box::before{opacity:1;content:'';position:absolute;overflow:hidden;left:-10rem;top:-10rem;width:calc(100% + 10rem);height:calc(100% + 10rem);background-image:url(img/image.svg);background-size:8rem;animation-name:leftBottom;animation-duration:8s;animation-delay:0s;animation-iteration-count:infinite;animation-direction:normal;animation-timing-function:linear;animation-fill-mode:forwards;will-change:transform}.show{opacity:1}.fade--out{opacity:0;transition:opacity .5s}#shots{width:100%;position:relative;z-index:1;align-self:center}#button{font:21px PF,Arial,Helvetica,san-serif;cursor:pointer;background:0 0;color:#fff;width:160px;height:70px;transition:box-shadow 350ms ease 0s;padding-bottom:4px;border:5px solid #fff;border-radius:35px;outline:0}#button:hover{color:#fff;box-shadow:1px 1px #fff,2px 2px #fff,3px 3px #fff,4px 4px #fff,5px 5px #fff,6px 6px #fff,7px 7px #fff}footer{height:var(--marquee-height);position:relative;display:flex;align-items:center;white-space:nowrap;overflow:hidden;background-color:#fff;box-sizing:border-box;transition:all ease-in-out .75s}.marquee--inner__footer{text-align:center;white-space:nowrap;will-change:transform;animation:marqueeLeft var(--marquee-speed) linear infinite;animation-direction:reverse;flex-shrink:0}@media screen and (max-width:1310px),screen and (max-height:690px){body{border:none;padding:15px;height:auto}header{display:none}footer{display:none}#main--frame{grid-template-columns:unset}#welcome--panel{display:block;height:auto;text-align:center;padding-bottom:0}#welcome--panel h1,#welcome--panel p{max-width:100%}#welcome--panel p{font-size:14px;line-height:1.25;padding-left:unset;margin-bottom:4vh}#shots--panel{padding-right:0;text-align:center}#shots-box{width:auto;height:66vw}#button{margin:0 auto}.is-hidden{display:block}.is-visible{display:none}}</style>
    </head>
    <body>
        <main>
            <header>
                <div class="marquee--inner__header">
                    <p><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span></p>
                </div>

                <div class="marquee--inner__header">
                    <p><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span></p>
                </div>
            </header>

            <div id="main--frame">
                <section id="welcome--panel">
                    <h1>Welcome to Simpshots</h1>
                    <p>This mini website contains over 5.000 funny screenshots from The Simpsons from season 1 to season 20, <span class="is-visible">hand-picked by this guy:</span><span class="is-hidden">tap the 'Next' button to load more:</span> <span class="is-visible"><a href="https://twitter.com/__mookid__">Twitter</a> \ <a href="https://www.behance.net/andresguzmancanedo">Behance</a> \ <a href="https://github.com/andres-guzman">Github</a> <br> Click the "Next" button to load more:</span></p>
                    <button id="button">Next</button>
                </section>

                <section id="shots--panel">
                    <div id="shots-box">
                        <img id="shots" class="show" alt="Random Simpsons screenshot" src="<?php echo $path . $img ?>">
                    </div>
                </section>
            </div>

            <footer>
                <div class="marquee--inner__footer">
                    <p><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span></p>
                </div>

                <div class="marquee--inner__footer">
                    <p><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span><span>Simpsons <strong>+</strong> Screenshots <strong>=</strong> Simpshots</span></p>
                </div>
            </footer>
        </main>
        
        <script>
            document.addEventListener("click", function (evt) {
                if(evt.target.id === "button") {
                    
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