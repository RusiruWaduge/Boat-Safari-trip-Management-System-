//Get the contact form elements
const form = docuent.querySelector('form');
const name = docuent.querySelector('#name');
const email = docuent.querySelector('#email');
const phone = docuent.querySelector('#phone');
const subject= docuent.querySelector('#subject');
const comment = docuent.querySelector('#comment');

//Add an event listener to the for's subit event
form.addEventListener('submit', function(event) {
	//Prevent the default form submission behavior
	event.preventDefault();
	
	//Validate the form fields
	if (!name.value || !email.value || !comment.value) {
		alert('Please fill in all required fields.');
		return;
	}
	
	//Create a new FormData object to store the form data
	const formData = new FormData(form);
	
	//Send the form data to the server
	fetch('/contact-us', {
		method: 'POST',
		body: formData
	})
	
	.then(function(response) {
		//Handle the response fromthe serverif (response.status === 200) {
			//success!
			alert('Your message has been sent successfully.');
		} 
		else {
			//Error!
			alert('There was an error sending your message.Please try again later.');
		}
	})
	
	.catch(function(error) {
		//Handle the Errorconsole.error(error);
	});
});
			
