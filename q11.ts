class CustomerList {
  name: String;
  age: number;
  address: String;

  constructor(name: String, age: number, address: String) {
    ((this.name = name), (this.age = age), (this.address = address));
    ECommerceStore.customerCount();
  }
}
class ECommerceStore {
  static totalCustomers: number;

  public static customerCount() {
    this.totalCustomers++;
  }
}

class Main {
     c1 = new CustomerList("Tom",20,"Borivali");
}
