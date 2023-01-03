<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Worc counter for essays and posts. Use this word counter to see the length of your texts.">
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
                <form action="#">
                    <input type="file" id="imgfile" />
                    <input type="button" id="btnLoad" value="Load" onclick="main();" />
                </form>
                <canvas id="canvas"></canvas>
                <div id="palette"></div>
                <div id="complementary"></div>
            </div>

        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            Created By Noel &copy; &middot; 2022 &middot; <a href="https://noeldesigner.com">noeldesigner.com</a>
        </footer>
    </div>

    <script>
        const main = () => {
            const imgFile = document.getElementById("imgfile");
            const image = new Image();
            const file = imgFile.files[0];
            const fileReader = new FileReader();

            fileReader.onload = () => {
                image.onload = () => {
                    const canvas = document.getElementById("canvas");
                    canvas.width = image.width;
                    canvas.height = image.height;
                    const ctx = canvas.getContext("2d");
                    ctx.drawImage(image, 0, 0);

                    const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
                    const buildRgb = (imageData) => {
                        const rgbValues = [];
                        for (let i = 0; i < imageData.length; i += 4) {
                            const rgb = {
                                r: imageData[i],
                                g: imageData[i + 1],
                                b: imageData[i + 2],
                            };
                            rgbValues.push(rgb);
                        }
                        return rgbValues;
                    };
                }

            }
        }
    </script>
</body>

</html>