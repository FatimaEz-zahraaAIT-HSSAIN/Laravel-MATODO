const text = document.querySelector('.sec-text');
const first = document.querySelector('.first-text');

const textLoad = () =>{
    setTimeout(() => {
        first.textContent = "Stay "
    }, 1);
    setTimeout(() => {
        text.textContent = "organised."
    }, 0);
    setTimeout(() => {
        text.textContent = "focused."
    }, 4000);
    setTimeout(() => {
        text.textContent = "clearminded."
    }, 8000);
    setTimeout(() => {
        text.textContent = "MATODO."
    }, 12000);
    setTimeout(() => {
        first.textContent = "Use "
    }, 11900);
}

textLoad();

setInterval(textLoad, 16000);