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
        <style>@font-face{font-family:Alloy;src:url(/fonts/alloy_bold-webfont.woff2) format('woff2'),url(/fonts/alloy_bold-webfont.woff) format('woff');font-weight:400;font-style:normal;font-display:swap}@font-face{font-family:PF;src:url(/fonts/PFArmaFive.woff2) format('woff2'),url(/fonts/PFArmaFive.woff) format('woff');font-weight:400;font-style:normal;font-display:swap}@keyframes fadeOut{0%{opacity:1}100%{opacity:0}}@keyframes leftBottom{0%{transform:translate(0,0)}100%{transform:translate(7rem,7rem)}}@keyframes marqueeUp{0%{transform:translate3d(var(--move-initial),0,0)}100%{transform:translate3d(var(--move-final),0,0)}}@keyframes marqueeDown{0%{transform:translate3d(var(--move-initial),0,0)}100%{transform:translate3d(var(--move-final),0,0)}}:root{font-size:16px;--marquee__speedUp:17s;--marquee__speedDown:10s;--marquee__height:45px;--fontSize__huge:clamp(7vw, 3vw, 1rem);--fontSize__small:1rem;--fontFamily__big:"Alloy",Arial,sans-serif;--fontFamily__small:"PF",Arial,sans-serif;--color__light:rgba(255, 255, 255, 1);--color__dark:rgba(11, 11, 14, 1);--color__accent:rgba(255, 0, 84, 1)}::selection{background:var(--color__light);color:var(--color__dark)}::-moz-selection{background:var(--color__light);color:var(--color__dark)}html{height:100%}body{height:100%;background-color:#1a1a20;margin:0;line-height:1;border-left:10px solid var(--color__light);border-right:10px solid var(--color__light);box-sizing:border-box}h1{color:var(--color__light);font:var(--fontSize__huge) var(--fontFamily__big);text-transform:uppercase;margin:0 0 2rem 0;line-height:.825;letter-spacing:3px}h2{display:none;color:var(--color__light);font:var(--fontSize__huge) var(--fontFamily__big);text-transform:uppercase;margin:0 0 2rem 0}p{color:var(--color__light);font:var(--fontSize__small) var(--fontFamily__small);line-height:1.3;text-transform:uppercase;margin:0 0 2rem 0}p span{color:var(--color__accent)}.fade--out{animation-name:fadeOut;animation-duration:.4s;animation-fill-mode:forwards;animation-iteration-count:1;animation-timing-function:linear}main{height:100%;display:flex;align-items:center;justify-content:center;flex-direction:column}article{display:grid;grid-template-columns:1fr 1fr;height:100%;gap:34px;box-sizing:border-box;align-items:center;padding:0 7%}.marquee{width:100%;height:var(--marquee__height);color:var(--color__dark);font:var(--fontSize__small) var(--fontFamily__small);box-sizing:border-box;white-space:nowrap;overflow:hidden}header{background-color:#fff;display:flex;align-items:center;justify-content:center;inline-size:max-content}.marqueeSeparator{margin-right:44px}.marquee .marqueeDown .marqueeSeparator span,.marquee .marqueeDown a,.marquee .marqueeUp .marqueeSeparator span{color:var(--color__accent);text-decoration:none}.marqueeUp{--offset:15vw;--move-initial:calc(-10% + var(--offset));--move-final:calc(-20% + var(--offset));animation:marqueeUp;animation-duration:var(--marquee__speedUp);animation-timing-function:linear;animation-iteration-count:infinite;transform:translate3d(var(--move-initial),0,0)}.marqueeDown{--offset:-20vw;--move-initial:calc(10% + var(--offset));--move-final:calc(20% + var(--offset));animation:marqueeDown;animation-duration:var(--marquee__speedDown);animation-timing-function:linear;animation-iteration-count:infinite;transform:translate3d(var(--move-initial),0,0)}footer{background-color:#fff;display:flex;align-items:center;justify-content:center}#shots--box{aspect-ratio:4/3;position:relative;box-sizing:border-box;border:7px solid var(--color__light);overflow:hidden}#shots{display:block;width:100%;position:relative;z-index:1}#shots--box::before{opacity:1;content:'';position:absolute;overflow:hidden;left:-10rem;top:-10rem;width:calc(100% + 10rem);height:calc(100% + 10rem);background-image:url(/images/homer.svg);background-size:7rem;animation-name:leftBottom;animation-duration:8s;animation-delay:0s;animation-iteration-count:infinite;animation-direction:normal;animation-timing-function:linear;animation-fill-mode:forwards;will-change:transform}#content--welcome{display:grid;justify-items:end;text-align:right;box-sizing:border-box}#simpshots--logo__version{fill:var(--color__light)}#button{color:var(--color__light);font:var(--fontSize__small) var(--fontFamily__small);cursor:pointer;background:#1a1a20;width:160px;height:70px;transition:box-shadow 350ms ease 0s;padding-bottom:4px;border:6px solid var(--color__light);border-radius:35px;outline:0;text-transform:uppercase}#button:hover{box-shadow:-1px 1px var(--color__light),-2px 2px var(--color__light),-3px 3px var(--color__light),-4px 4px var(--color__light),-5px 5px var(--color__light),-6px 6px var(--color__light),-7px 7px var(--color__light),-8px 8px var(--color__light)}@media screen and (max-width:968px){body{border:none;padding:10px}main{height:auto;display:flex;flex-direction:column;padding-top:12%}h1{display:none}h2{display:block}footer,header{display:none}article{display:flex;flex-direction:column-reverse;padding:0;text-align:center}#content--welcome{text-align:center;justify-items:center}#content--welcome p{margin-bottom:1rem}}@media screen and (max-height:556px){.marquee{height:50px}}</style>
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
                    <p>This mini website contains over 5.000 funny screenshots from <span>The Simpsons</span> from season 1 to season 20. Enjoy!</p>
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