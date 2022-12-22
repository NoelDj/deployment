const inputTextArea = document.querySelector('#input-textarea');
const characCount = document.querySelector('#charac-count');
const wordCount = document.querySelector('#word-count');
const characSpaces = document.querySelector('#charac-count-spaces')
const sentences = document.querySelector('#sentences')
const score =  document.querySelector('#score')
let formula = 0

inputTextArea.addEventListener('input', wordCounter);

window.addEventListener('DOMContentLoaded',wordCounter)

function wordCounter() {

    let txt = inputTextArea.value.trim();
    const wordAmount = txt.split(/\s+/).filter((item) => item).length
    const sentenceAmount = inputTextArea.value.split(/[.!?]+\s/).filter(Boolean).length
    const charactAmount = inputTextArea.value.length
    const charactspacesAmount = inputTextArea.value.replace(/\s\s+/g, ' ').length


    characSpaces.textContent = charactspacesAmount
    characCount.textContent =  charactAmount
    wordCount.textContent = wordAmount
    sentences.textContent = sentenceAmount
    
    if(wordAmount > 20) {
        formula = 4.71*(charactAmount/wordAmount)+.5*(wordAmount/sentenceAmount)-21.43
    }

    if(isNaN(formula) || formula < 2){
        formula = 0
    }
    /* const formula = 4.71*(charactAmount/wordAmount)+.5*(wordAmount/sentenceAmount)-21.43 */

}