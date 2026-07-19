const doublePrices = (prices) => {
    const output = prices.map((price)=>{
        return price*2
    })
    return output
}

const pricelist = [500,400,600,80,50]
console.log("Original Prices: " + pricelist);

console.log("Doubled Prices: "+doublePrices(pricelist));
