<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Worc counter for essays and posts. Use this word counter to see the length of your texts.">
    <title>Word Counter for Essays and Posts</title>
    <link rel="canonical" href="https://www.desktools.tk/word-counter-for-essays-and-posts">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <style>
        .x .square {
            color: hsl(0, 0%, 0%);

        }
    </style>
</head>

<body>

    <div class="col-lg-8 mx-auto p-4 py-md-5">
        <header class="d-flex align-items-center pb-3 mb-5 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <img src="../img/desktools-logo.png" width="180" alt="">
            </a>
        </header>

        <main>
            <div class="col-md-8 mb-4">
                <h1 id="intro-heading">Word Counter for Essays or Posts</h1>
                <p>Use this word counter to see the length of your texts.</p>
                <p>Simply paste in your text and the number of words and characters show up.</p>
                <input type="color" name="" id="title-input">
            </div>


            <div class="card mb-5 p-4">
                <div id="capture">
                    <h4 id="title" style="color: #000; ">Hello world!</h4>
                    <div class="row" id="row-1">

                    </div>
                    <div id="co">
                        h2
                    </div>
                </div>

                <a href="/path/to/image" title="ImageName" id="a" download>Download</a>


            </div>

        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            Created By Noel &copy; &middot; <script type="text/javascript">
                document.write(new Date().getFullYear() + 1);
            </script> &middot; <a href="https://noeldesigner.com">noeldesigner.com</a>
        </footer>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html-to-image/1.11.3/html-to-image.js"
        integrity="sha512-M4ilfZ6USfdxlKwkS3mBrOIxUKloNOBUED1OD7bFBnoe4RXSOTO+qhPaBQa+FqPA53bYy22z4mOglnDoCfdcrQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        var node = document.getElementById('capture');
        
        function createColors(o) {
            console.log(o)
            document.getElementById('row-1').innerHTML = ''
            for (let index = 1; index < 6; index++) {
                const element = document.createElement('div')
                element.classList.add('x')
                element.classList.add('col')
                element.classList.add('md-2')
                element.innerHTML = `<div class="square square-sm">dss</div>`
                const hsl = `hsl(${o.h}, ${o.s}%, ${o.l}%)`
                element.style.backgroundColor = hsl
                document.getElementById('row-1').appendChild(element)
    
            }
        }


        document.querySelector('#title-input').addEventListener('change', (e) => {
            document.querySelector('#title').textContent = e.target.value
            createColors(hexToHSL(e.target.value))
            document.querySelector('#co').style.background = e.target.value
            htmlToImage.toPng(node)
            .then(function (dataUrl) {
                var img = new Image();
                
                img.src = dataUrl;
                document.querySelector('#a').setAttribute('href', dataUrl)
            })
            .catch(function (error) {
                console.error('oops, something went wrong!', error);
            }); 
        })

        function hexToHSL(H) {
            // Convert hex to RGB first
            let r = 0,
                g = 0,
                b = 0;
            if (H.length == 4) {
                r = "0x" + H[1] + H[1];
                g = "0x" + H[2] + H[2];
                b = "0x" + H[3] + H[3];
            } else if (H.length == 7) {
                r = "0x" + H[1] + H[2];
                g = "0x" + H[3] + H[4];
                b = "0x" + H[5] + H[6];
            }
            // Then to HSL
            r /= 255;
            g /= 255;
            b /= 255;
            let cmin = Math.min(r, g, b),
                cmax = Math.max(r, g, b),
                delta = cmax - cmin,
                h = 0,
                s = 0,
                l = 0;

            if (delta == 0)
                h = 0;
            else if (cmax == r)
                h = ((g - b) / delta) % 6;
            else if (cmax == g)
                h = (b - r) / delta + 2;
            else
                h = (r - g) / delta + 4;

            h = Math.round(h * 60);

            if (h < 0)
                h += 360;

            l = (cmax + cmin) / 2;
            s = delta == 0 ? 0 : delta / (1 - Math.abs(2 * l - 1));
            s = +(s * 100).toFixed(1);
            l = +(l * 100).toFixed(1);

            const obj = {
                h: l,
                s: s,
                l: l
            }

            return obj;
        }
    </script>
</body>

</html>