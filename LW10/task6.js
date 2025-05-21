const nums = { a: 1, b: 2, c: 3 };
let newobj = {};
function mapObjects(obj, callback) {
  for (key in obj) { newobj[key] = callback(obj[key]); }
}

mapObjects(nums, x => x * 2);
console.log(newobj);