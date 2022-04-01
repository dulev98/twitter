$(document).ready(function(){
    $('.modal').modal();
    
});

$('#registerConfirm').on('click', function(){
    var first_name= $('#first_name').val();
    var last_name= $('#last_name').val();
    var user_name= $('#user_name').val();
    var email= $('#email').val();
    var password= $('#password').val();

    $.ajax({
        url: 'users.php',
        type: 'POST',
        data:{
            first_name:first_name,
            last_name:last_name,
            user_name:user_name,
            email:email,
            password:password
        },
        success:function(data){
        
            if(data == "insert all data"){
                M.toast({html: 'All fields are required.'})
            }else if(data == "insert fname"){
                M.toast({html: 'Please enter your First Name.'})
            }else if(data == "insert lname"){
                M.toast({html: 'Please enter your Last Name.'})
            }else if(data == "insert uname"){
                M.toast({html: 'Please enter your Username.'})
            }else if(data == "check uname"){
                M.toast({html: 'Username is already taken.'})
            }else if(data == "insert email"){
                M.toast({html: 'Please enter your email.'})
            }else if(data == "check email"){
                M.toast({html: 'Email already exists.'})
            }else if(data == "insert password"){
                M.toast({html: 'Please enter your password.'})
            }else{
                M.toast({html: 'You registered successfully! Please log in.'})
            }
            
        }
    });
    
});

$('#loginUser').on('click', function(){
    var login_user_name = $('#login_user_name').val();
    var login_password = $('#login_password').val();

    $.ajax({
        url: 'login.php',
        type: 'POST',
        data: {
            login_user_name:login_user_name,
            login_password:login_password
        },
        success:function(data){
            if(data == "insert data"){
                M.toast({html: 'All fields are required.'})
            }else if(data =="insert uname"){
                M.toast({html: 'Enter your Username.'})
            }else if(data =="insert password"){
                M.toast({html: 'Enter your password.'})
            }else if(data =="incorrect"){
                M.toast({html: 'Username or password is incorrect.Please try again.'})
            }else if(data =="success"){
                alert ("Log in successfull")
                window.location.href = 'home.php';
            }

        }
    });
        

})


