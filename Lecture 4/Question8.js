function validateCreditCard(creditCardNumber) {
  var visa = /^4[0-9]{12}(?:[0-9]{3})?$/;
  var masterCard = /^5[1-5][0-9]{14}$/;
  var amex = /^3[47][0-9]{13}$/;
  var dinersClub = /^3(?:0[0-5]|[68][0-9])[0-9]{11}$/;
  var discover = /^6(?:011|5[0-9]{2})[0-9]{12}$/;
  var jcb = /^(?:2131|1800|35\d{3})\d{11}$/;

  if (visa.test(creditCardNumber)) {
    return "Visa";
  } else if (masterCard.test(creditCardNumber)) {
    return "MasterCard";
  } else if (amex.test(creditCardNumber)) {
    return "American Express";
  } else if (dinersClub.test(creditCardNumber)) {
    return "Diners Club";
  } else if (discover.test(creditCardNumber)) {
    return "Discover";
  } else if (jcb.test(creditCardNumber)) {
    return "JCB";
  } else {
    return "Invalid Credit Card Number";
  }
}

var creditCardNumber = prompt("Enter your credit card number");
var creditCardType = validateCreditCard(creditCardNumber);
alert(creditCardType);
