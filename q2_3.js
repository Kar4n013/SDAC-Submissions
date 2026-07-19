//q2 & q3
function verifyAge(age) {
  try {
    if (age < 18) {
      throw new Error("Age Must be 18 or abouve");
    } else {
      console.log("Valid Age");
    }
  } catch (error) {
    console.log(error.message);
  }
}

verifyAge(20);
