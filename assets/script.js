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
$(document).ready(function(){
    var login = $('#login');
    var register = $('#register');
    login.click(function(){
        var username = $('#username').val();
        var password = $('#password').val();
       entrance('login',username,password);
   });
    register.click(function(){
        var username = $('#username').val();
        var password = $('#password').val();
        entrance('register',username,password);
    })
});
