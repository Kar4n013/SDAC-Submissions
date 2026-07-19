const calculateDiscount = (prices) => {
    const output = prices.map((price)=>{
        return price - (price*0.1)
    })
    return output
}

const pricelist = [500,400,600,80,50]
console.log("Original Prices: " + pricelist);

console.log("Dicounted Prices: "+calculateDiscount(pricelist));
