class Customer {
  constructor(customername, customerid, email, category) {
    this.customerid = customerid;
    this.customername = customername;
    this.email = email;
    this.category = category;
  }
  dispInfo() {
    console.log("\nid: " + this.customerid);
    console.log("name: " + this.customername);
    console.log("email: " + this.email);
    console.log("category: " + this.category);
  }
}

const c1 = new Customer("Tom", 12, "tom@gmail.com", "Borivali");
const c2 = new Customer("Peter", 22, "peter@gmail.com", "Kandivali");
const c3 = new Customer("Grace", 33, "grace@gmail.com", "Dahisar");

const li = [c1,c2,c3]

for (let index = 0; index < li.length; index++) {
    const element = li[index];
    element.dispInfo()
}
