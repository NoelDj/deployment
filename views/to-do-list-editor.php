<?php
require_once 'components/meta.php'
?>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Lobster&display=swap');

    #todo-title {
        font-size: 3rem;
        font-family: 'Lobster', cursive, arial, sans-serif;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    td {
        border: 0;
        text-align: left;
        padding: 8px;
        padding-top: 15px;
    }


    tr td:last-child input {
        all: unset;
        width: 100%;
    }

    tr td:first-child {
        width: 2%;
    }

    tr td:last-child {
        border-bottom: 1px solid #e0e0e0;
    }

    .page {
        background: white;
        display: block;
        margin: 0 auto;
        margin-bottom: 0.5cm;
        box-shadow: 0 0 0.5cm rgba(0, 0, 0, 0.2);
        width: 21cm;
        height: 29.7cm;
        padding: 0 3rem;
    }

    #input,
    .generatePDF {
        display: block;
        margin: 0 auto;
        width: 21cm;
    }
</style>

<?php
require_once 'components/header.php';
?>

<main>

    <div class="col-md-8 mb-5" id="input">
        <div class="input-group mb-4">
            <input id="todo" type="text" class="form-control" placeholder="Todo" aria-label="Username" aria-describedby="basic-addon1">
            <button id="add" class="btn btn-primary">Add</button>
        </div>
    </div>



    <div class="page mb-5 p-5">
        <form class="form">

            <h2 class="p4" id="todo-title" style="padding: 2rem;text-align:center;">To Do List</h2>
            <table>
                <tbody>
                </tbody>
            </table><br>
        </form>
    </div>

    <div class="generatePDF mb-4">
        <input class="btn btn-primary" type="button" id="create_pdf" value="Generate PDF">
    </div>

    <div class="col-md-8 mb-5 p-4 card" id="input">
        <h1>Todo List Free Online</h1>
    </div>

</main>
<?php
require_once 'components/footer.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
<script>
    let todoId = 0
    let loaded = 0
    const storedList = JSON.parse(localStorage.getItem("todolist"));


    let list = storedList || []

    list.forEach(e => {
        appendList(e)
    })
    load()
    console.log(list)



    document.querySelector('#add').addEventListener('click', () => {

        const task = document.querySelector('#todo').value
        const obj = {
            "task": task,
            "check": 0
        }
        list.push(obj)
        appendList(obj)
        document.querySelector('#todo').value = ''
        console.log(list)
        localStorage.setItem("todolist", JSON.stringify(list));

    })





    function appendList(task) {
        const tr = document.createElement('tr')

        if (task.check) {
            tr.innerHTML = `
                        <td><input type="checkbox" class="checked-todo" checked data-id="${todoId}"></td>
                        <td><input type="text" class="edit-todo" id="${todoId} "value="${task.task}"></td>`
        } else {
            tr.innerHTML = `
                        <td><input type="checkbox" class="checked-todo" data-id="${todoId}"></td>
                        <td><input type="text" class="edit-todo" id="${todoId} "value="${task.task}"></td>`
        }


        tr.id = todoId
        document.querySelector('tbody').appendChild(tr)
        todoId += 1
        console.log(loaded)
    }

    function load() {
        document.querySelectorAll('.edit-todo').forEach(e => {
            e.addEventListener('input', v => {
                console.log(list[parseInt(v.target.id)].task)
                list[parseInt(v.target.id)].task = v.target.value
                localStorage.setItem("todolist", JSON.stringify(list));
            })
        })

        document.querySelectorAll('.checked-todo').forEach(e => {
            e.addEventListener('change', v => {
                list[parseInt(v.target.dataset.id)].check = v.target.checked
                console.log(list)
                localStorage.setItem("todolist", JSON.stringify(list));

            })
        })
    }


    document.querySelector('.form').addEventListener('submit', (e) => {
        e.preventDefault()
    })

    $(document).ready(function() {
        var form = $('.form'),
            cache_width = form.width(),
            a4 = [595.28, 841.89];

        $('#create_pdf').on('click', function() {
            $('body').scrollTop(0);
            createPDF();
        });

        function createPDF() {
            getCanvas().then(function(canvas) {
                var
                    img = canvas.toDataURL("image/png"),
                    doc = new jsPDF({
                        unit: 'px',
                        format: 'a4'
                    });
                doc.addImage(img, 'JPEG', 20, 20);
                doc.save('To Do List');
                form.width(cache_width);
            });
        }

        function getCanvas() {
            form.width((a4[0] * 1.33333) - 80).css('max-width', 'none');
            return html2canvas(form, {
                imageTimeout: 2000,
                removeContainer: true
            });
        }
    });
</script>


<?php
require_once 'components/scripts.php';
?>