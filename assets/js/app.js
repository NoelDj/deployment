
document.querySelector('#btn').addEventListener('click', generatePassword)

let c = document.querySelector('#char').value
let phrase = ''
let words = ''

function generatePassword () {
    fetchWord(document.querySelector('#number').value, c)
    /* const password = generateString(document.querySelector('#number').value)
setPassword(password) */
}




async function fetchWord(n, char) {
    n = validateNumber(n)
    
    const response = await fetch('https://random-word-api.herokuapp.com/word?number=' + n)
    const data = await response.json() 
    words = data
    let password = data.join(char)
    console.log(password)
    phrase = password
    if (document.querySelector('#special').checked) {
        password = randomCharacters(password)
    }
    if (document.querySelector('#numbers').checked) {
        password = randomNumber(password)
    }
    if (document.querySelector('#random_case').checked) {
        document.querySelector('#word').value = randomCase(password)
    }
    if (document.querySelector('#first_uppercase').checked) {
        document.querySelector('#word').value = upperCase(password)
    }
    if (document.querySelector('#lowercase').checked) {
        document.querySelector('#word').value = lowerCase(password)
    }
    
}

document.querySelector('#special').addEventListener('change', (e)=>{
    if(e.target.checked){
        document.querySelector("#word").value = randomCharacters(document.querySelector("#word").value)
    } else {
        document.querySelector("#word").value = document.querySelector("#word").value.slice(1)
    }
})

function randomCharacters(string){
    chars = ['*','!','”','#','$','%','&','’','(',')','*','+',',','-','.','/',':',';','<','=','>','?','@','[',']','^','_','`','{','|','}','~']
    return chars[Math.floor(Math.random()*chars.length)] + string
}

document.querySelector('#numbers').addEventListener('change', (e)=>{
    if(e.target.checked){
        document.querySelector("#word").value = randomNumber(document.querySelector("#word").value)
    } else {
        document.querySelector("#word").value = document.querySelector("#word").value.slice(1)
    }
})

function randomNumber(string){
    return Math.floor(Math.random()*9) + string
}

function validateNumber(n) {
    if(n > 6) {
        return 6
    }
    if(n <= 0){
        return 1
    }
    return n
}

fetchWord(document.querySelector('#number').value, c)

document.querySelector('#char').addEventListener('keyup', (e)=>{
    const char = e.target.value
    c = char
    document.querySelector("#word").value = words.join(char)
})

document.querySelector('#random_case').addEventListener('change', (e)=>{
    if(e.target.checked){
        document.querySelector("#word").value = randomCase(document.querySelector("#word").value)
    }
})

document.querySelector('#first_uppercase').addEventListener('change', (e)=>{
    if(e.target.checked){
        document.querySelector("#word").value = upperCase(document.querySelector("#word").value)
    }
})

document.querySelector('#lowercase').addEventListener('change', (e)=>{
    if(e.target.checked){
        document.querySelector("#word").value = lowerCase(document.querySelector("#word").value)
    }
})

function upperCase(string) {
    return string[0].toUpperCase() + string.slice(1).toLowerCase();
}

function lowerCase(string) {
    return string.toLowerCase()
}

function randomCase(string) {
    string = string.split('').map(e=>{
        return Math.random() < .5? e.toLowerCase() : e.toUpperCase();
    }).join('')
    return string
}

document.querySelector('#range').addEventListener('change', (e)=>{
    document.querySelector('#number').value = e.target.value
})

document.querySelector('#number').addEventListener('change', (e)=>{
    document.querySelector('#range').value = e.target.value
})

document.querySelector('#copyButton').addEventListener('click', (e)=>{
    copyText()
})

document.querySelector('#copy').addEventListener('click', (e)=>{
    copyText()
})

function copyText() {
    const copyText = document.querySelector("#word");
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    navigator.clipboard.writeText(copyText.value);
}
  
