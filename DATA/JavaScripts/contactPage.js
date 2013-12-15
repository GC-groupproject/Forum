/**
	Programmer: Durwin Barcenas
	Date: December 13, 2013
*/
function validateName()
{
	var name = document.getElementById("contactName").value; 
	
	if(name.length == 0)
	{
		producePrompt("Name is Required", "namePrompt", "red"); 
		return false; 
	}
	if(!name.match(/^[A-Za-z]*\s{1}[A-Za-z]*$/))
	{
		producePrompt("First and Last name Please", "namePrompt", "red"); 
		return false; 
	}
	producePrompt("Welcome " + name, "namePrompt", "green"); 
		return true; 
	
}

function validatePhone()
{
	var phone = document.getElementById("contactPhone").value; 
	
	if(phone.length == 0)
	{
		producePrompt("Phone Number is Required ", "phonePrompt", "red"); 
		return false; 
	}
	if(!phone.match(/^[0-9]{10}$/)) {
		producePrompt("Digits Only And Include Area Code", "phonePrompt", "red"); 
		return false; 
	}
	producePrompt("Valid Phone Number " + name, "phonePrompt", "green"); 
		return true; 
	
}

function validateEmail()
{
	var email = document.getElementById("contactEmail").value; 
	
	if(email.length == 0)
	{
		producePrompt("Email is Required", "emailPrompt", "red"); 
		return false; 
	}
	if(!email.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)){
		producePrompt("Email Address is Invalid", "emailPrompt", "red"); 
		return false; 
	}
	producePrompt("Valid Email", "emailPrompt", "green"); 
		return true; 
}

function validateMessage()
{
	var contactMessage = document.getElementById("contactMessage").value; 
	
	if(contactMessage.length == 0)
	{
		producePrompt("Message is Required", "messagePrompt", "red"); 
		return false; 
	}
	producePrompt("Now press send, you will be contacted shortly. ", "messagePrompt", "green"); 
		return true; 

}



function producePrompt(message, promptLocation, color)
{
	document.getElementById(promptLocation).innerHTML = message; 
	document.getElementById(promptLocation).style.color = color; 
}