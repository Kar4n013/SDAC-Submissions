//q5
const product = ["tv", "Ac", "Remote"];
const [tv, ac, remote] = product;

console.log("Array Destructuring: ");

console.log(tv);
console.log(remote);

const productsinfo = [
  {
    name: "tv",
    price: "20000",
    quantity: "100",
  },
  {
    name: "Ac",
    price: "30000",
    quantity: "100",
  },
  {
    name: "Fridge",
    price: "20000",
    quantity: "100",
  },
];

const [Tv, Ac, Fridge] = productsinfo;

console.log("\nObject Destructuring: ");

console.log(Tv);
console.log(Ac);
console.log(Fridge);
