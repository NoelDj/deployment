<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Use the Password Generator From Words. Create passwords with words that can be used as online passwords on any sites.">
    <title>Password Generator From Words | How to Create a Secure Password</title>
    <link rel="canonical" href="https://www.desktools.tk/password-generator-based-on-words">
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
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
                <h2 id="intro-heading">Create Passphrases with this Online Generator</h2>
                <p>Create passphrases that can be used as online passwords on any sites.</p>
                <p>Click the generate button to create a new password. You can also edit it to your liking.</p>
                <div id="fb-root"></div>
                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="6sqFn1p9"></script>
                <div class="fb-share-button" data-href="https://www.desktools.tk/password-generator-based-on-words" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.desktools.tk%2Fpassword-generator-based-on-words&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
            </div>


            <div class="card mb-5">
                <div class="card-body">
                    <h1 class="card-title">Password Generator From Words</h1>
                    <div class="row mb-4">
                        <div class="col md-12 position-relative">
                            <input type="text" class="form-control" id="word">
                            <button class="btn btn-sm position-absolute" style="top:50%;left:96%;transform: translateY(-50%);display: flex;align-items: center;justify-content: center;padding: .4rem;" id="copyButton"><img src="../img/clipholder.png" width="15"></button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col md-3">
                            <label for="">Seperator</label>
                            <br>
                            <input type="text" id="char" value="-" maxlength="6">
                        </div>
                        <div class="col md-3">
                            <label for="range" class="form-label">Number of Word</label>
                            <br>
                            <input type="number" name="" id="number" value="3" min="1" max="6">
                            <input type="range" class="form-range" id="range" value="3" min="1" max="6" step="1">
                        </div>
                        <div class="col md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="case" value="" id="first_uppercase" checked>
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    Upper Case First word
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="case" value="" id="lowercase">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    Lowercase
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="case" value="" id="random_case">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    Random Case
                                </label>
                            </div>
                        </div>
                        <div class="col md-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="special">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    Special Characters
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="numbers">
                                <label class="form-check-label" for="flexCheckIndeterminate">
                                    Numbers
                                </label>
                            </div>
                        </div>
                    </div>
                    <button id="btn" class="btn btn-primary">Generate</button>
                    <button id="copy" class="btn btn-secondary">Copy <img src="/img/clipholder.png" width="12" alt=""></button>
                </div>
            </div>

            <article class="card p-4">
                <div class="col-md-8">
                    <h2>How are the passwords generated?</h2>
                    <p>When you click the generate button several words are selected from a list containing more than 1000 words. These words are then combined into a passphrase.</p>
                    <p>You can generate as many passwords as you like and edit them to make sure they are completely unique to you.</p>
                    <h2>What makes up a strong password?</h2>
                    <p><strong>Length:</strong> The length of a password is a factor in determening the strength of a password.
                        Every character added exponentially increases the number of potential combinations for a word.</p>
                    <p><strong>Random:</strong> A password with an unpredictable pattern is hard to guess. Use random random characters or words you rarely see in a book for example.
                        By using at least 3 random words and aditionally combining them with a random character, significalty increases the strength if a password.</p>
                    <h2>Do we store any passwords?</h2>
                    <p>We do not store passwords created within our code.</p>
                </div>
            </article>

        </main>
        <footer class="pt-5 my-5 text-muted border-top">
            Created By Noel &copy; &middot; 2022 &middot; <a href="https://noeldesigner.com">noeldesigner.com</a>
        </footer>
    </div>



</body>

</html>

<?php
require_once 'components/footer.php';
?>



<?php
require_once 'components/scripts.php';
?>