<?php
require_once 'components/meta.php'
?>



<?php
require_once 'components/header.php';
?>

<main>

    <div class="col-md-8 mb-4">
        <h1>Welcome to Desk Tools</h1>
        <p>Links on the page</p>

        <ul>
            <li><a href="password-generator-based-on-words">Password generator</a></li>
            <li><a href="word-counter-for-essays-and-posts">Word Counter</a></li>
            <li><a href="monochromatic-color-scheme-creator">Monochromatic Color Scheme Generator</a></li>
        </ul>

    </div>

    <div class="card p-4">
        <h2>Convert numbers to roman numbers</h2>
        <div class="form-group">
            <label for="number">Number</label>
            <input type="number" class="form-control" id="number" placeholder="Number" value="1000000">
        </div>
        <div class="form-group">
            <label for="number">Roman</label>
            <input type="text" class="form-control" id="roman">
        </div>
    </div>

</main>
<?php
require_once 'components/footer.php';
?>

<script>
    document.querySelector('#number').addEventListener('input', (e) => {
        document.querySelector('#roman').value = romanize(e.target.value)
    })

    function romanize(num) {
        if (isNaN(num))
            return NaN;
        var digits = String(+num).split(""),
            key = ["", "C", "CC", "CCC", "CD", "D", "DC", "DCC", "DCCC", "CM",
                "", "X", "XX", "XXX", "XL", "L", "LX", "LXX", "LXXX", "XC",
                "", "I", "II", "III", "IV", "V", "VI", "VII", "VIII", "IX"
            ],
            roman = "",
            i = 3;
        while (i--)
            roman = (key[+digits.pop() + (i * 10)] || "") + roman;
        return Array(+digits.join("") + 1).join("M") + roman;
    }
</script>

<?php
require_once 'components/scripts.php';
?>