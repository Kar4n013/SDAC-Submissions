//q17 & q18 & q20
class Product {
    constructor(name,price,category) {
        this.name = name
        this.price = price
        this.category = category
    }
}

function findMostExpensiveProduct(products) {
    pr = products[0]
    for (let index = 0; index < products.length; index++) {
        const element = products[index];
        if (Math.max(pr.price,element.price) > pr.price) {
            pr = element
        }
    }
    return pr
}

function filterProducts(products) {
    const output = products.filter((products) => {
        return products.price > 1000
    })
    return output
}

const p1 = new Product ("AC",25000,"Electronics");
const p2 = new Product ("TV",20000,"Electronics");
const p3 = new Product ("Fan",3000,"Electronics");
const p4 = new Product ("Laptop",55000,"Electronics");
const p5 = new Product ("Cooler",5500,"Electronics");

//q20
console.log(p1.name);
console.log(p5.name);


const list = [p1,p2,p3,p4,p5]

//17
console.log("\nMost Expensive Product: ");
console.log(findMostExpensiveProduct(list));

//q18
console.log("\nProduct with price more than 1000 units: ");
console.log(filterProducts(list));

