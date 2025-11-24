function checkPalindrome(str) {
    const lowerWord = str.toLowerCase('');
    const reverWord = lowerWord.split('').reverse().join('');
    return lowerWord === reverWord;
}

const input = document.getElementById('word');
const button = document.getElementById('calc');
const message = document.getElementById('message');

button.addEventListener('click', () => {
    const word = input.value.trim();

    if (word === '') {
        message.innerHTML = 'Enter Word!';
        return;
    } 

    const palTF = checkPalindrome(word);

    if (palTF) {
        message.innerHTML
    }

    
});