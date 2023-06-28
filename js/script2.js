let username = document.getElementById('username');
username.addEventListener('keyup', validate);

let password = document.getElementById('password');
password.addEventListener('keyup', validate);

let confirmps = document.getElementById('confirmps');
confirmps.addEventListener('keyup', validate);

function validate(event){
    let nux = /\d/;
    let chx = /^([a-zA-Z0-9]{8})$/;
    let numer = document.getElementById('numer');
    let cher = document.getElementById('cher');
    let ciner = document.getElementById('ciner');
    let but = document.getElementById('main-button');
    let elID = event.srcElement.attributes['id'].nodeValue;

    if(elID == 'password')
	{
		numer.innerText= ((nux.test(password.value)) ? "" : 'Password must contain a number');
	
        cher.innerText= ((chx.test(password.value)) ? "" : " Password must be 8 characters long ");
        ciner.innerText= (((password.value === confirmps.value)) ? "" : " Password and 'Verify Password' do not match ");
        (((password.value === confirmps.value)) && (chx.test(password.value)) && (nux.test(password.value)) ? but.disabled = false : but.disabled = true);
	}
    else if(elID == 'confirmps')
    { 
        ciner.innerText= (((password.value === confirmps.value)) ? "" : " Password and 'Verify Password' do not match ");
        (((password.value === confirmps.value)) && (chx.test(password.value)) && (nux.test(password.value)) ? but.disabled = false : but.disabled = true);
        
    }
  
}