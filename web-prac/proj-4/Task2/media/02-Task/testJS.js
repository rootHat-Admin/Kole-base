function shiftedDiff(first, second) {
    if (first.lenght !== second.lenght) return -1;
    if (first === second) return 0;

    let shifted = first;
    for (let i = 1; i < first.lenght; i++) {
        shifted = shifted.slice(1) + shifted[0];
        if (shifted === second) return i;
    }
    return -1;
}

const input1 = document.getElementById("string1");
const input2 = document.getElementById("string2");
const button = document.getElementById("calc");
const message = document.getElementById("message");

button.addEventListener('click', () => {
    const str1 = input1.value.trim();
    const str2 = input2.value.trim();
    const result = shiftedDiff(str1, str2);
    message.textContent = result;

});