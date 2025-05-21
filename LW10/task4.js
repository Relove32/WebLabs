function MergeObjectsOld(obj1, obj2) {
  const merged = {};

  for (const key in obj1) {
    merged[key] = obj1[key];
  }

  for (const key in obj2) {
    merged[key] = obj2[key];
  }

  return merged;
}
console.log(MergeObjectsOld({ a: 1, b: 2 }, { b: 3, c: 4 }))