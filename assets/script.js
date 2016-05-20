function entrance(type,username,password){
    console.log('entrance fired');
    $.ajax({
        dataType:'JSON',
        data:{
            username: username,
            password: password
        },
        method: 'post',
        url: './assets/' +type + '.php',
        success: function(response){
            var responseData = response;
            console.log(responseData);
            console.log('entrance complete');
        }
        
    })
}
function logout(){
    console.log('logout fired');
    $.ajax({
        dataType:'JSON',
        // data:{
        //     username: username,
        //     password: password
        // },
        // method: 'post',
        url: './assets/logout.php',
        success: function(response){
            var responseData = response;
            console.log(responseData);
            console.log('logged out');
        }

    })
}
$(document).ready(function(){
    var login = $('#login');
    var register = $('#register');
    var logout_button = $('#logout');
    login.click(function(){
        var username = $('#username').val();
        var password = $('#password').val();
       entrance('login',username,password);
   });
    register.click(function(){
        var username = $('#username').val();
        var password = $('#password').val();
        entrance('register',username,password);
    });
    logout_button.click(function(){
        logout();
    })
});
