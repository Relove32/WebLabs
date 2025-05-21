function PrimeNumber(arr)
{
    for (let j = 0; j < arr.length; j++)
    {
        if (arr[j] > 1)
        {
            let isPrime = true
            for (let i = 2; i < arr[j]; i++)
            {
                if (arr[j] % i == 0)
                {
                    isPrime = false
                    break
                }
            }
            if(isPrime)
            {
                console.log("Число", arr[j], "простое")
            }
            else
            {
                console.log("Число", arr[j], "не простое")
            }
        }
        else if(arr[j] <= 1)
        {
            console.log("Число", arr[j], "не простое")
        }
        else
        {
            console.log(arr[j], "не число")
        }
    }
}
a = [3]
PrimeNumber(a)
a = [4]
PrimeNumber(a)
a = [3, 4, 5]
PrimeNumber(a)
a = [-1]
PrimeNumber(a)
a = ["tralala"]
PrimeNumber(a)
a = ["tuntun", 5, 6]
PrimeNumber(a)