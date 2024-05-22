const form = document.getElementById('form');
const firstname = document.getElementById('first-name');
const lastname = document.getElementById('last-name');
const collegename = document.getElementById('college-name');
const email = document.getElementById('email');
const password = document.getElementById('password');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element,message) =>{
    const inputControl= element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');
 
    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
}
 const setSuccess = element => {
   const inputControl = element.parentElement;
   const errorDisplay = inputControl.querySelector('.error');

   errorDisplay.innerText = '';
   inputControl.classList.add('success');
   inputControl.classList.remove('error');
 }
   
   validEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
   }

const  validateInputs = () => {
const firstnameValue = firstname.Value.trim();
const lastnameValue = lastname.Value.trim();
const collegenameValue = collegename.Value.trim();
const emailValue = email.Value.trim();
const passwordValue = password.Value.trim();

if(firstnamevalue === ''){
  setError(firstname, 'firstname is required');
}else {
   setSuccess(firstname);
}

if( lastnamevalue === ''){
    setError(lastname, '  lastname is required');
  }else {
     setSuccess(lastname);
  }

  if( collegenamevalue === ''){
    setError(collegename, '  collegename is required');
  }else {
     setSuccess(collegename);
  }

  if(emailValue === '') {
    setError(email, 'Email is required');
} else if (!isValidEmail(emailValue)) {
    setError(email, 'Provide a valid email address');
} else {
    setSuccess(email);
}

if(passwordValue === '') {
    setError(password, 'Password is required');
} else if (passwordValue.length < 8 ) {
    setError(password, 'Password must be at least 8 character.')
} else {
    setSuccess(password);
}
};