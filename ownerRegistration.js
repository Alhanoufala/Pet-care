const form = document.getElementById('form');
const Fname = document.getElementById('Fname');
const Lname = document.getElementById('Lname');
const email = document.getElementById('email');
const phonenumber = document.getElementById('phonenumber');
const pass = document.getElementById('pass');

form.addEventListener('sbmit', (e) => {
  e.preventDefault();

  valdateForm();
} );

function valdateForm() {
  const FnameValue = Fname.value.trim();
 // const LnameValue = Lname.value.trim();
 // const mailValue = email.value.trim();
 // const phonenumberValue = phonenumber.value.trim();
 // const passValue = pass.value.trim();

  if(FnameValue > 20 ){
    setErrorFor(FnameValue, 'Fisrt name must be less or equal to 20 characters')
  } else{
    setSuccessFor(FnameValue)
  }

}

function setErrorFor(input, message){
  const formControl = input.parentElement; //.form-control
  const small = formControl.querySelector('small');

  small.innerText = message;

  formControl.className = 'form-control error';

}

function setSuccessFor(input){
  const formControl = input.parentElement; //.form-control
  formControl.className = 'form-control success';

}