<?php
require_once 'components/meta.php'
?>



<?php
require_once 'components/header.php';
?>

<main>

    <div class="col-md-8 mb-4">
        <h1>Business Name Generator Ideas</h1>
        <p>Get ideas for your new business using this generator.</p>
        <div id="fb-root"></div>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v15.0" nonce="6sqFn1p9"></script>
        <div class="fb-share-button" data-href="https://www.desktools.tk/business-name-generator-ideas" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fwww.desktools.tk%2Fpassword-generator-based-on-words&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>
    </div>

    <div class="col">
        <div class="row">
            <div class="col-md-8">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" id="text-input" placeholder="Enter keyword">
                    <div class="input-group-append">
                        <button class="btn text-white" type="button" id="button-input">Generate Names</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col mt-4">
        <div class="row" id="card-container">

        </div>
    </div>

</main>
<?php
require_once 'components/footer.php';
?>


<script>
    window.addEventListener('DOMContentLoaded', () => {
        document.querySelector('#button-input').addEventListener('click', () => {
            const value = document.querySelector('#text-input').value

            if (value.length < 2) {
                alert('Name is too short')
                return
            }

            if (value.length > 20) {
                alert('Name is too long')
                return
            }

            fetchNames(value)
        })

    })

    async function fetchNames(term) {
        document.querySelector('#card-container').innerHTML = ''
        const response = await fetch('https://business-name-generator.p.rapidapi.com/?q=' + term, {
            headers: {
                "X-RapidAPI-Key": "d5932b9a88msh7798690afe732c8p1f1c36jsnae5430b6a52f",
                "X-RapidAPI-Host": "business-name-generator.p.rapidapi.com"
            }
        });
        const names = await response.json();
        names.forEach(e => {
            const div = document.createElement('div')
            slug = slugify(e)
            div.classList.add('col-md-3')
            div.classList.add('mb-4')
            div.innerHTML = `
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">${e}</h5>
                            <p class="card-text">${slug}.com</p>
                            <p class="card-text"><small class="text-muted"><a target="_blank" href="https://www.godaddy.com/domainsearch/find?checkAvail=1&domainToCheck=${slug}">Check domain availability</a></small></p>
                        </div>
                    </div>`
            document.querySelector('#card-container').appendChild(div)
        })
    }

    function slugify(string) {
        const a = 'àáâäæãåāăąçćčđďèéêëēėęěğǵḧîïíīįìıİłḿñńǹňôöòóœøōõőṕŕřßśšşșťțûüùúūǘůűųẃẍÿýžźż·/_,:;'
        const b = 'aaaaaaaaaacccddeeeeeeeegghiiiiiiiilmnnnnoooooooooprrsssssttuuuuuuuuuwxyyzzz------'
        const p = new RegExp(a.split('').join('|'), 'g')

        return string.toString().toLowerCase()
            .replace(/\s+/g, '-')
            .replace(p, c => b.charAt(a.indexOf(c)))
            .replace(/&/g, '-and-')
            .replace(/[^\w\-]+/g, '')
            .replace(/\-\-+/g, '-')
            .replace(/^-+/, '')
            .replace(/-+$/, '')
    }
</script>

<?php
require_once 'components/scripts.php';
?>