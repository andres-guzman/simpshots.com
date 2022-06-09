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
        <style>@font-face{font-family:Tungsten;src:url(/fonts/TungstenNarrow-Semibold.woff2) format('woff2'),url(/fonts/TungstenNarrow-Semibold.woff) format('woff');font-weight:600;font-style:normal;font-display:swap}@keyframes fadeOut{from{opacity:1}to{opacity:0}}@keyframes leftBottom{0%{transform:translateX(0)}100%{transform:translateX(8rem)}}@keyframes marqueeFirst{0%{transform:translateY(0)}25%,5%,50%,75%{transform:translateY(0)}100%{transform:translateY(-100%)}}@keyframes marqueeSecond{0%{transform:translateY(0)}25%,5%,50%,75%{transform:translateY(0)}100%{transform:translateY(-100%)}}:root{font-size:23px;--invert__speed:2s;--marquee__speed:8s;--marquee__height:100px;--fontSize__huge:clamp(1rem, 10vw, 2rem);--fontSize__medium:clamp(1rem, 3vw, 3.45rem);--fontSize__small:1rem;--fontFamily__main:"Tungsten",Georgia,serif;--color__light:rgba(204, 204, 204, 1);--color__dark:rgba(204, 204, 204, 0.3)}::selection{background:var(--color__light);color:rgba(204,204,204,.3)}::-moz-selection{background:var(--color__light);color:rgba(204,204,204,.3)}html{height:100%}body{height:100%;background-color:rgba(13,13,13,1);background-image:url(/images/noise.png);margin:0;line-height:1;padding:0 5%;box-sizing:border-box}p{color:var(--color__dark);font:var(--fontSize__small) var(--fontFamily__main);line-height:.95;text-transform:uppercase;margin:0 0 30px 0}.fade--out{animation-name:fadeOut;animation-duration:.75s;animation-iteration-count:1;animation-timing-function:ease-in-out}.marquee{position:relative;height:var(--marquee__height);color:var(--color__light);font:var(--fontSize__small) var(--fontFamily__main);text-transform:uppercase;box-sizing:border-box;letter-spacing:1px}main{height:100%;display:grid;grid-template-areas:"header" "article" "footer";grid-template-columns:1fr;grid-template-rows:100px 1fr 100px}article{height:100%;display:grid;grid-template-columns:1fr 1fr;gap:5%;padding:50px 0;box-sizing:border-box;grid-area:article}header{display:flex;align-items:center;justify-content:center;border-bottom:1px solid var(--color__dark);grid-area:header}.marquee--footer__content,.marquee--header__content{overflow:hidden;height:26px}.marqueeFirst,.marqueeSecond{animation:marqueeFirst;animation-duration:var(--marquee__speed);animation-iteration-count:infinite;animation-timing-function:ease-out;padding-bottom:20px}.marqueeFirst a,.marqueeFirst span,.marqueeSecond a,.marqueeSecond span{color:var(--color__dark);padding:0 5px}footer{display:flex;align-items:center;justify-content:center;border-top:1px solid var(--color__dark);grid-area:footer}#shots--box{aspect-ratio:4/3;position:relative;box-sizing:border-box;border:4px solid var(--color__light);overflow:hidden}#shots{display:block;width:100%;position:relative;z-index:1}#shots--box::before{opacity:1;content:'';position:absolute;overflow:hidden;left:-10rem;top:-10rem;width:calc(100% + 10rem);height:calc(100% + 10rem);background-image:url(/images/homer.svg);background-size:8rem;animation-name:leftBottom;animation-duration:8s;animation-delay:0s;animation-iteration-count:infinite;animation-direction:normal;animation-timing-function:linear;animation-fill-mode:forwards;will-change:transform}#content--welcome>svg{width:100%;margin-bottom:30px}#simpshots--logo__version{fill:var(--color__light)}#simpshots--logo__char>path{fill:var(--color__dark);transition:fill 450ms ease-out 0s}#simpshots--logo__char>path:nth-child(1):hover,#simpshots--logo__char>path:nth-child(2):hover,#simpshots--logo__char>path:nth-child(3):hover,#simpshots--logo__char>path:nth-child(4):hover,#simpshots--logo__char>path:nth-child(5):hover,#simpshots--logo__char>path:nth-child(6):hover,#simpshots--logo__char>path:nth-child(7):hover,#simpshots--logo__char>path:nth-child(8):hover,#simpshots--logo__char>path:nth-child(9):hover{fill:var(--color__light)}#content--welcome>p:first-of-type{font-size:var(--fontSize__medium)}#content--welcome>p:first-of-type span{color:var(--color__light)}#content--welcome>p:last-of-type{margin-bottom:30px}#button{color:var(--color__light);font:var(--fontSize__small) var(--fontFamily__main);cursor:pointer;background:0 0;width:160px;height:70px;transition:box-shadow 350ms ease 0s;padding-bottom:4px;border:5px solid var(--color__light);border-radius:35px;outline:0;text-transform:uppercase}#button:hover{box-shadow:1px 1px var(--color__light),2px 2px var(--color__light),3px 3px var(--color__light),4px 4px var(--color__light),5px 5px var(--color__light),6px 6px var(--color__light),7px 7px var(--color__light)}@media screen and (max-width:680px){main{height:auto;display:flex;flex-direction:column;padding-top:12%}footer,header{display:none}article{display:flex;flex-direction:column-reverse;padding:0;text-align:center}#content--welcome>svg{margin-bottom:15px}#content--welcome>p:first-of-type{margin-bottom:0}}@media screen and (max-height:556px){.marquee{height:50px}}</style>
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
                    <svg version="1.1" id="simpshots--logo" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 49.79 15.34" style="enable-background:new 0 0 49.79 15.34;" xml:space="preserve">
                        <g id="simpshots--logo__version">
                            <path d="M48.67,1.51l-0.18-1.48h0.17l0.09,0.92l0.02,0.18h0l0.02-0.18l0.09-0.92h0.16l-0.18,1.48H48.67z"/>
                            <path d="M49.03,1.51V1.3h0.17v0.21H49.03z"/>
                            <path d="M49.52,0.83h-0.09V0.69h0.09c0.06,0,0.09-0.04,0.09-0.11V0.29c0-0.09-0.03-0.15-0.09-0.15c-0.06,0-0.09,0.05-0.09,0.15 v0.26h-0.16V0.3c0-0.18,0.08-0.28,0.25-0.28s0.26,0.1,0.26,0.28v0.26c0,0.11-0.06,0.19-0.13,0.21c0.07,0.02,0.13,0.09,0.13,0.21 v0.28c0,0.18-0.1,0.28-0.26,0.28s-0.25-0.1-0.25-0.28V0.97h0.16v0.28c0,0.09,0.03,0.15,0.09,0.15c0.06,0,0.09-0.05,0.09-0.15v-0.3 C49.61,0.87,49.58,0.83,49.52,0.83z"/>
                        </g>
                        <g id="simpshots--logo__char">
                            <path d="M5.07,5.84H2.82V2.4c0-0.32-0.06-0.53-0.24-0.53S2.33,2.07,2.33,2.4v2.66c0,0.61,0.12,0.81,0.51,1.24l1.12,1.12 c0.79,0.85,1.12,1.38,1.12,2.76v2.25c0,1.95-0.93,2.9-2.56,2.9S0,14.37,0,12.42v-2.9h2.25v3.41c0,0.32,0.06,0.53,0.24,0.53 s0.24-0.2,0.24-0.53v-2.62c0-0.59-0.12-0.75-0.47-1.14l-1.2-1.16C0.39,7.31,0,6.68,0,5.44V2.9C0,0.99,0.97,0,2.6,0 c1.62,0,2.48,0.99,2.48,2.9L5.07,5.84L5.07,5.84z"/>
                            <path d="M5.54,0.16h2.39v15.02H5.54V0.16z"/>
                            <path d="M11.02,15.18l-0.37-5.89L10.51,7h-0.04l0.02,2.29v5.89H8.44V0.16h2.88l0.37,5.6l0.1,1.62h0.04l0.1-1.62l0.37-5.6h2.88 v15.02h-2.11V9.29L13.11,7h-0.04l-0.14,2.29l-0.39,5.89H11.02z"/>
                            <path d="M15.69,15.18V0.16h3.08c1.34,0,2.15,0.83,2.15,2.37v4.42c0,1.54-0.81,2.37-2.15,2.37h-0.69v5.84h-2.39V15.18z M18.27,7.53 c0.2,0,0.26-0.16,0.26-0.63V2.6c0-0.47-0.06-0.63-0.26-0.63h-0.18v5.56C18.09,7.53,18.27,7.53,18.27,7.53z"/>
                            <path d="M26.45,5.84H24.2V2.4c0-0.32-0.06-0.53-0.24-0.53s-0.24,0.2-0.24,0.53v2.66c0,0.61,0.12,0.81,0.51,1.24l1.12,1.12 c0.79,0.85,1.12,1.38,1.12,2.76v2.25c0,1.95-0.93,2.9-2.56,2.9s-2.52-0.95-2.52-2.9v-2.9h2.25v3.41c0,0.32,0.06,0.53,0.24,0.53 s0.24-0.2,0.24-0.53v-2.62c0-0.59-0.12-0.75-0.47-1.14l-1.2-1.16c-0.69-0.71-1.08-1.34-1.08-2.58V2.9c0-1.91,0.97-2.9,2.6-2.9 c1.62,0,2.48,0.99,2.48,2.9C26.45,2.9,26.45,5.84,26.45,5.84z"/>
                            <path d="M29.84,8.58h-0.53v6.6h-2.39V0.16h2.39v6.35h0.53V0.16h2.39v15.02h-2.39V8.58z"/>
                            <path d="M37.98,12.48c0,1.89-0.97,2.86-2.64,2.86c-1.66,0-2.62-0.97-2.62-2.86V2.86c0-1.89,0.95-2.86,2.62-2.86 c1.66,0,2.64,0.97,2.64,2.86V12.48z M35.34,13.48c0.2,0,0.24-0.2,0.24-0.53V2.4c0-0.32-0.04-0.53-0.24-0.53 c-0.18,0-0.22,0.2-0.22,0.53v10.55C35.12,13.27,35.16,13.48,35.34,13.48z"/>
                            <path d="M41.88,2.09v13.09h-2.4V2.09h-1.26V0.16h4.93v1.93H41.88z"/>
                            <path d="M48.45,5.84H46.2V2.4c0-0.32-0.06-0.53-0.24-0.53s-0.24,0.2-0.24,0.53v2.66c0,0.61,0.12,0.81,0.51,1.24l1.12,1.12 c0.79,0.85,1.12,1.38,1.12,2.76v2.25c0,1.95-0.93,2.9-2.56,2.9s-2.52-0.95-2.52-2.9v-2.9h2.25v3.41c0,0.32,0.06,0.53,0.24,0.53 s0.24-0.2,0.24-0.53v-2.62c0-0.59-0.12-0.75-0.47-1.14l-1.2-1.16c-0.69-0.71-1.08-1.34-1.08-2.58V2.9c0-1.91,0.97-2.9,2.6-2.9 c1.62,0,2.48,0.99,2.48,2.9L48.45,5.84L48.45,5.84z"/>
                        </g>
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
            button.addEventListener("click", () => {
                let simpShots = document.getElementById("shots");
                simpShots.classList.add("fade--out");

                simpShots.addEventListener("animationend", () => {
                    var xhr = new XMLHttpRequest();
                    xhr.onload = () => {
                        if (xhr.status >= 200 && xhr.status < 300) {
                            document.getElementById("shots--box").innerHTML = xhr.responseText;
                        } else {
                            console.log("Error");
                        }
                    };

                    xhr.open("GET", "loader.php");
                    xhr.send();

                    console.log("Ramdom shot loaded OK");
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