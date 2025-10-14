console.log("----------------------------");

console.log("Сәлем!");
console.info('Хабар');
console.error('Қате');
console.warn("Warnong");

// -------------------------------------- //
console.log("----------------------------");


console.log("5 + 5 =", 5 + 5);
console.log("12 - 6 =", 12 - 6);
console.log("2 * 5 =", 2 * 5);
console.log("9 / 4 =", 9 / 4);
console.log("5 % 2 =", 5 % 2);

let a = 1;
var b = 2;
const c = 3;

console.log(`a + b = ${a + b}`)

// -------------------------------------- //
console.log("----------------------------");


var num_1 = 5;
var num_2 = 10;

console.log("Итог: " + (num_1 + num_2));

// -------------------------------------- //

let a1 = 5;
let a2 = 5;

let sum1 = a1 + a2;
let sum2 = a1 - a2;
let sum3 = a1 * a2;
let sum4 = a1 / a2;
let sum5 = a1 % a2;

// -------------------------------------- //
console.log("----------------------------");

console.log(`${a1} + ${a2} = ${sum1}`);
console.log(`${a1} - ${a2} = ${sum2}`);
console.log(`${a1} * ${a2} = ${sum3}`);
console.log(`${a1} / ${a2} = ${sum4}`);
console.log(`${a1} % ${a2} = ${sum5}`);

// -------------------------------------- //
console.log("----------------------------");

var num1 = 12;
var num2 = 10;

var result1 = num1 + num2;
var result2 = num1 - num2;
var result3 = num1 * num2;
var result4 = num1 / num2;
var result5 = num1 % num2;

console.log("Итог " + (result1));
console.log("Итог " + (result2));
console.log("Итог " + (result3));
console.log("Итог " + (result4));
console.log("Итог " + (result5));

// -------------------------------------- //
console.log("----------------------------");

var sum11 = 5;
sum11+=5;
console.log("5 + 5 = " + (sum11));

var sum22 = 6;
sum22 = sum22 * 5;
console.log("6 * 5 = " + (sum22));

// -------------------------------------- //
console.log("----------------------------");

var str_1 = "10";
var str_2 = "1"; 

console.log("All-1: " + (str_1 + str_2));

var str_3 = Number("7");
var str_4 = Number("15"); 

console.log("All-2.1: " + (str_3 + str_4));
console.log("All-2.2: " + (str_3 - str_4));
console.log("All-2.3: " + (str_3 * str_4));
console.log("All-2.4: " + (str_3 / str_4));
console.log("All-2.5: " + (str_3 % str_4));

// -------------------------------------- //
console.log("----------------------------");

console.log("Math: " + Math.PI);

console.log("Max: " + Math.max(12, 34, 2, 423, 32));
console.log("Min: " + Math.min(12, 34, 2, 423, 32));

// -------------------------------------- //
console.log("----------------------------");

var num = 10;

if(num==10) {
    console.log("True");
} 

console.log("----------------------------");

var num2 = 2;

if (num2 == 12) {
    console.log("True");
} else if (num2 >= 12) {
    console.log("Trur");
} else {
    console.log("False");
}

console.log("----------------------------");

var num3 = 5;

if (num3 == 5) {
    console.log("Керемет: 5");
} else if (num3 == 4) {
    console.log("Жарайды: 4");
} else if (num3 == 3) {
    console.log("Қанағаттандырады");
} else {
    console.log("Кате");
}