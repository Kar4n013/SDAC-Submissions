class Orderts {
  orderid: number;
  customername: String;
  totalAmount: number;

  constructor(orderid: number, customername: String, totalAmount: number) {
    this.orderid = orderid;
    this.customername = customername;
    this.totalAmount = totalAmount;
  }
}
