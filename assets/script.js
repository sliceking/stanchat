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
            location.reload();
        }
        
    })
}
function logout(){
    console.log('logout fired');
    $.ajax({
        dataType:'JSON',
        url: './assets/logout.php',
        success: function(response){
            var responseData = response;
            console.log(responseData);
            console.log('logged out');
            location.reload();
        }
    })
}
function fetch_history() {
    console.log('history fired');
    $.ajax({
        dataType: 'JSON',
        url: './assets/fetch_history.php',
        success: function (response) {
            var response = response;
            var responseData = response.data;
            for(var i=0; i<responseData.length; i++){
                console.log(responseData[i]);

            }
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
