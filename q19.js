class Order {
  constructor(name, amount) {
    this.name = name;
    this.amount = amount;
  }
}
function calculateTotalRevenue(list) {
    
  const total = list.reduce(
    (total, order) => (total += order.amount),0
  );
  return total
}
const o1 = new Order("Shirt", 5500);
const o2 = new Order("Shoes", 8500);
const o3 = new Order("Jeans", 7500);

const list = [o1, o2, o3];

console.log("\n Total Amount of Order is "+calculateTotalRevenue(list));
