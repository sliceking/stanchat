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
            var response = response;
            var responseData = response.data;
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
            var chat_history = $('#chat_history');
            for(var i=0; i<responseData.length; i++){
                console.log(responseData[i]);
                var chat_div = $('<div>',{
                    class:'chat_line'
                });
                var chat_text = $('<p>',{
                    text:responseData[i].timestamp + ' | ' + responseData[i].user + ' : ' + responseData[i].text
                });
                $(chat_div).append(chat_text);
                chat_history.append(chat_div);
                chat_history.scrollTop(chat_history[0].scrollHeight);
            }
        }
    })
}
function fetch_online_users(){
    console.log('history fired');
    $.ajax({
        dataType: 'JSON',
        url: './assets/fetch_users.php',
        success: function (response) {
            var response = response;
            console.log(response);
            var responseData = response.data;
            var online_users = $('#online_users');
            for(var i=0; i<responseData.length; i++){
                console.log(responseData[i]);
                var users_div = $('<div>',{
                    class:'users_line'
                });
                var users_text = $('<p>',{
                    text:responseData[i].login
                });
                $(users_div).append(users_text);
                online_users.append(users_div);
            }
            
        }
    })
}
function chat_post(text){
    console.log('post fired');
    $.ajax({
        dataType:'JSON',
        data:{
            text: text
        },
        method: 'post',
        url: './assets/chat_post.php',
        success: function(response){
            var responseData = response;
            console.log(responseData);
            console.log('post complete');

        }

    })
}
function fetch_latest(){
    console.log('latest fired');
    $.ajax({
        dataType: 'JSON',
        url: './assets/fetch_latest.php',
        success: function (response) {
            var response = response;
            var responseData = response.data;
            var chat_history = $('#chat_history');
            for(var i=0; i<responseData.length; i++){
                console.log(responseData[i]);
                var chat_div = $('<div>',{
                    class:'chat_line'
                });
                var chat_text = $('<p>',{
                    text:responseData[i].timestamp + ' | ' + responseData[i].user + ' : ' + responseData[i].text
                });
                $(chat_div).append(chat_text);
                chat_history.append(chat_div);
                chat_history.scrollTop(chat_history[0].scrollHeight);
            }
        }
    })
}
$(document).ready(function(){
    var login = $('#login');
    var password_box = $('#password');
    var register = $('#register');
    var logout_button = $('#logout');
    var chat_input = $('#chat_input');
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
    });
    $(chat_input).keydown(function(){
        if(event.keyCode === 13){
            var chat_text = $(chat_input).val();
            chat_post(chat_text);
            fetch_latest();
            chat_input.val('');
        }
    });
    $(password_box).keydown(function(){
        if(event.keyCode === 13){
            var username = $('#username').val();
            var password = $('#password').val();
            entrance('login',username,password);
        }
    });
    
});
