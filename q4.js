//q4
class Product {
  constructor(productname, productid, price, category) {
    this.productid = productid;
    this.productname = productname;
    this.price = price;
    this.category = category;
  }
  dispInfo() {
    console.log("\nid: " + this.productid);
    console.log("name: " + this.productname);
    console.log("price: " + this.price);
    console.log("category: " + this.category);
  }
}

const p1 = new Product("Pen", 12, 10, "Stationary");
const p2 = new Product("Pencil", 22, 50, "Stationary");
const p3 = new Product("Penpencil", 33, 15, "Stationary");

const li = [p1, p2, p3];

for (let index = 0; index < li.length; index++) {
  const element = li[index];
  element.dispInfo();
}
