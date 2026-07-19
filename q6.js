//q6
function payement(status) {
    return new Promise((resolve, reject) => {
        try {
            if (status) {
                resolve("Successful...")
            }else{
                reject("Unsuccessful...")
            }
        } catch (error) {
            console.log(error.messaage);
        }
    });
}

async function test(input) {
    await payement(input)
    
}

test(true)