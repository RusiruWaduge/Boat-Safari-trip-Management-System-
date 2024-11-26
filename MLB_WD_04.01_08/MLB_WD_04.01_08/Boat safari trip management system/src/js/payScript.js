// Validate the payment form
function validateForm() {
// Get the form elements
  const pName = document.getElementById('pName');
  const pAddress = document.getElementById('pAddress');
  const pMail = document.getElementById('pMail');
  const pCard = document.getElementById('pCard');
  const pNameCard = document.getElementById('pNameCard');
  const pDate = document.getElementById('pDate');
  const pCode = document.getElementById('pCode');

//check if the required fields are empty
  if (pName.value === '' || pAddress.value === '' || pMail.value === '' || pCard.value === '' || pNameCard.value === '' || pDate.value === '' || pCode.value === '') {
    alert('Please fill in all the required fields.');
    return false;
  }
	return true;
}


//make the submit button enabled when checkbox of term and conditions is clicked
/*function enableButton() {
	if(document.getElementById('checkbox').checked){
		document.getElementById('submitbtn').disabled=false;
	}
	else{
		document.getElementById('submitbtn').disabled=true;
	}
}*/

//payment successful alert
function myFunction() {
    alert("Payment Successful");
}