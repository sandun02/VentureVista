function emailSend(){
    var username = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var subject = document.getElementById('subject').value;
    var message = document.getElementById('message').value;

    var messageBody = "Name" + username +
    "<br/> Email " + email +
    "<br/> subject " +subject +
    "<br/> Message " + message;


    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "sandunnayanajith1999@gmail.com",
        Password : "B03B5AFDC02BE40F0CF7385A020A4DA3086D",
        To : 'sandunnayanajith02@gmail.com',
        From : "sandunnayanajith1999@gmail.com",
        Subject : "This is the subject",
        Body : messageBody
    }).then(
      message => {
        if(message == "OK"){
            swal("Successful!", "You clicked the button!", "success");
        }else{
            swal("Error!", "You clicked the button!", "error");
        }
      }
    );
}