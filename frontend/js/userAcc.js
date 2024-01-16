function validateForm() {
    var cardNumber = document.getElementById("card_number").value;
    var expiryDate = document.getElementById("exp_date").value;
    var cvc = document.getElementById("cvc").value;

    if (cardNumber == "" || expiryDate == "" || cvc == "") {
        alert("All fields must be filled out");
        return false;
    }
   
    return true;
}