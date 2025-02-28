 const SignUpButton=document.getElementById('SignUpButton');
 const SignInButton=document.getElementById('SignInButton');
 const signInForm=document.getElementById('signIn');
 const signUpForm=document.getElementById('signup');

 SignUpButton.addEventListener('click',function(){
    signInForm.style.display="none";
    signUpForm.style.display="block";
 })
 SignInButton.addEventListener('click',function(){
    signInForm.style.display="block";
    signUpForm.style.display="none";
 })