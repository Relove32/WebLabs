function CountVowels(arr) {
    let i = 0;
    for (let j = 0; j < arr.length; j++) {
        if (
            arr[j] == "а" ||
            arr[j] == "е" ||
            arr[j] == "ё" ||
            arr[j] == "и" ||
            arr[j] == "о" ||
            arr[j] == "у" ||
            arr[j] == "ы" ||
            arr[j] == "э" ||
            arr[j] == "ю" ||
            arr[j] == "я"
        ) {
            i++;
        }
    }
    return i;
}

console.log(CountVowels("Тралалело Тралала!"));