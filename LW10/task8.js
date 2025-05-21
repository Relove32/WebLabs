const numbers = [2, 5, 8, 10, 3];

let mult = numbers.map(function (num) {
    return num * 3;
})
console.log(mult);
let filtered = mult.filter(function (num) {
    if (num > 10) { return num; }
})
console.log(filtered);