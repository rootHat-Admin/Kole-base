function checkPalindrome(str) {
    const lowerWord = str.toLowerCase('');
    const reversWord = lowerWord.split().reverse().join();
    return lowerWord === reversWord;
}

const input = document.getElementById('word');
const button = document.getElementById('calc');
const message = document.getElementById('message');

button.addEventListener('click', () => {
    const word = input.value.trim();

    if (word === '') {
        message.innerHTML = 'Сөзді енгізіңіз';
        return;
    }

    const palTF = checkPalindrome(word);

    if (palTF) {
        message.innerHTML = `Бұл <i class="font-bold">${word}</i> сөз палиндром.`;
    } else {
        message.innerHTML = `Бұл <i class="font-bold">${word}</i> сөз палиндром емес.`;
    }

});