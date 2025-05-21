function UniqueElements(arr)
{
    let Obj = {}
    for (let j = 0; j < arr.length; j++)
    {
        if (typeof arr[j] == "number")
        {
            arr[j] = arr[j].toString()       
        }
        let key = arr[j]
        if (key in Obj)
        {
            Obj[key]++
        } else {
            Obj[key] = 1
        }
    }
    return Obj 
}
console.log(UniqueElements(['Шпиониро', 'Golubiro', 2, '2', 2, 12, 3]))
