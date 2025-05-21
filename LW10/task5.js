const users = [
  { id: 1, name: "Alice" },
  { id: 2, name: "Bob" },
  { id: 3, name: "Charlie" }
]

let mapa = users.map(function (obj) {
  return obj.name
})
console.log(mapa)