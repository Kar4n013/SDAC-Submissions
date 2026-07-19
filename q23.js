class Product {
  constructor(name, instock) {
    this.name = name;
    this.instock = instock;
  }
}

function filterAvailableProducts(products) {
  const output = products.filter((product) => {
    return product.instock === true;
  });
  return output
}

const p1 = new Product("Tv", true);
const p2 = new Product("AC", false);
const p3 = new Product("Fridge", true);
const p4 = new Product("Cooler", false);

const list = [p1, p2, p3, p4];

console.log(filterAvailableProducts(list));

