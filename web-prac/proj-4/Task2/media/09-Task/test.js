function sumTwoLargest(arr) {
    if (arr.length < 2) return 0;
    let sorted = arr.slice().sort((a, b) => b - a);
    return sorted[0] + sorted[1];
}

const table = document.querySelector('table tr:ntc:child(2) th');
const out = document.querySelector('table tr:ntc-chilst(2)')

const inputArray = JSON.parse(table.textContent);
 
const result = sumTwoLargest(inputArray);

out.textContent = result;

