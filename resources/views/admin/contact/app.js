














let username = document.querySelector('#username');
let email = document.querySelector('#email');
let phone = document.querySelector('#phone');
let password = document.querySelector('#password');
let cpassword = document.querySelector('#cpassword');
let submit = document.querySelector('.btn_clk');




submit.addEventListener('click',(event)=>{


	event.preventDefault();

	validate()

})


	
	const CheckSuccess = ()=>{


		let dom = document.getElementsByClassName('from-group succ')

		if(dom.length == 5){

			alert('Registration Sussfully ' + username.value.trim());

		}


	}


function validate()
{

	let usernameVal = username.value.trim()
	let emailVal = email.value.trim()
	let phoneVal = phone.value.trim()
	let passwordVal = password.value.trim()
	let cpasswordVal = cpassword.value.trim()

	

	if(usernameVal == ''){

		setError(username,"User Name Required")

	}else if(usernameVal.length <= 2){

		setError(username,"User Name Minimum 3 words")

	}else{

		setSuccess(username);
	}


	// ------ for email ------


	if(emailVal == ''){

		setError(email,"User Email Required")

	}else if(emailVal.length <= 5){

		setError(email,"Invalid Email")

	}else{

		setSuccess(email);
	}

	// ------ for Number ------


	if(phoneVal == ''){

		setError(phone,"User Mobile Number Required")

	}else if(phoneVal.length <= 10){

		setError(phone,"Mobile Number Minimum 11")

	}else{

		setSuccess(phone);
	}


	// ------ for Password ------


	if(passwordVal == ''){

		setError(password,"User Password Required")

	}else if(passwordVal.length < 8){

		setError(password,"User Password Minimum 8")

	}else{

		setSuccess(password);
	}


	// ------ for cPassword ------


	if(cpasswordVal == ''){

		setError(cpassword,"User Password Required")

	}else if(cpasswordVal != passwordVal){

		setError(cpassword,"Password Not Match")

	}else{

		setSuccess(cpassword);
	}


	CheckSuccess();
	



}


function setError(input,error){

	let parentDiv = input.parentElement

	parentDiv.className = "from-group error";

	let small = parentDiv.querySelector('small');	

	small.textContent = error


}


function setSuccess(input){

	let parentDiv = input.parentElement

	parentDiv.className = "from-group succ";

	let small = parentDiv.querySelector('small');	

	


}


