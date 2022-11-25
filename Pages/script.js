$(document).ready(()=>{
    var password = '';
    var confirmedPassword = '';
  $('.account-create').click(function(){
    password = $('.first-password').val();
    confirmedPassword =  $('.password-confirmation').val();

    console.log(password);
    console.log(confirmedPassword);

  if( password === confirmedPassword){
    alert('Account succesfully created!');
    window.location.replace('customerLogin.html');
  }else{
    alert('Wrong password combination!')
    $('.first-password').val('');
    $('.password-confirmation').val('');
    }
  });
});


