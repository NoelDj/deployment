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
        .count {
            background-color: #0547ad;
            width: 100%;
            padding: 7px;
            position: relative;
            display: flex;
            font-family: sans-serif;
            justify-content: space-around;
            text-align: center;
            border-radius: 5px 5px 0px 0px;
        }

        .count p {
            color: #ceced7;
        }

        .count h5 {
            color: #ffffff;
            font-size: 22px;
        }

        .container {
            background-color: #ffffff;
            padding: 30px 20px 20px 20px;
            border-radius: 0px 0px 8px 8px;
        }

        textarea {
            width: 100%;
            border: none;
            resize: none;
            outline: none;
            font-size: 16px;
            line-height: 28px;
            padding: 10px;
            max-height: 280px;
            color: #000000;
            box-shadow: 0 20px 65px rgba(20, 114, 177, 0.1);
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
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="6sqFn1p9"></script>
                <div class="fb-share-button" data-href="https://www.desktools.tk/password-generator-based-on-words" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.desktools.tk%2Fpassword-generator-based-on-words&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
            </div>


            <div class="card mb-5">
                <!--Result box-->
                <div class="count">
                    <!--Word count results-->
                    <div>
                        <h5 id="word-count">0</h5>
                        <p>Words</p>
                    </div>
                    <!--character count results-->
                    <div>
                        <h5 id="charac-count">0</h5>
                        <p>Characters</p>
                    </div>

                    <div>
                        <h5 id="charac-count-spaces">0</h5>
                        <p>Characters without spaces</p>
                    </div>

                    <div>
                        <h5 id="sentences">0</h5>
                        <p>Sentences</p>
                    </div>

                </div>

                <!--A place to input content-->
                <div class="container">

                    <textarea id="input-textarea" rows="12" placeholder="Start Typing here..."></textarea>

                </div>
            </div>

            <article class="card p-4">
                <div class="col-md-8">
                    <h2>How to use this word counter?</h2>
                    <p>Paste your text in the field above.</p>
                </div>
            </article>

        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            Created By Noel &copy; &middot; <script type="text/javascript">
                document.write(new Date().getFullYear() + 1);
            </script> &middot; <a href="https://noeldesigner.com">noeldesigner.com</a>
        </footer>
    </div>

    <script src="../assets/js/wordcount.js"></script>

</body>

</html>