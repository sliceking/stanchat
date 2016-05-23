function entrance(username,password){
    $.ajax({
        dataType:'JSON',
        data:{
            username: username,
            password: password
        },
        method: 'post',
        url: './assets/login.php',
        success: function(response){
            var response = response;
            if(response.success === true){
                location.reload();
            }else{
                var fail_div = $('<div>',{
                    class:'login_fail'
                });
                var fail_text = $('<p>',{
                    text:'-Incorrect Username and/or Password.'
                });
                $(fail_div).append(fail_text);
                $('#login_section').append(fail_div);
            }
        }
    })
}
function logout(){
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
    $.ajax({
        dataType: 'JSON',
        url: './assets/fetch_history.php',
        success: function (response) {
            var response = response;
            var responseData = response.data;
            var chat_history = $('#chat_history');
            $(chat_history).empty();
            for(var i=0; i<responseData.length; i++){
                var chat_div = $('<div>',{
                    class:'chat_line'
                });
                var chat_text = $('<p>',{
                    text:responseData[i].timestamp + ' | ' + responseData[i].user + ' : ' + responseData[i].text
                });
                $(chat_div).append(chat_text);
                chat_history.prepend(chat_div);
                chat_history.scrollTop(chat_history[0].scrollHeight);
            }
            $('p').linkify();
        }
    })
}
function fetch_online_users(){
    $.ajax({
        dataType: 'JSON',
        url: './assets/fetch_users.php',
        success: function (response) {
            var response = response;
            var responseData = response.data;
            var online_users = $('#online_users');
            $(online_users).empty();
            for(var i=0; i<responseData.length; i++){
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
    if (text === ''){
        return;
    }
    $.ajax({
        dataType:'JSON',
        data:{
            text: text
        },
        method: 'post',
        url: './assets/chat_post.php',
        success: function(response){
            var responseData = response;
        }
    })
}
// function fetch_latest(){
//     console.log('latest fired');
//     $.ajax({
//         dataType: 'JSON',
//         url: './assets/fetch_latest.php',
//         success: function (response) {
//             var response = response;
//             var responseData = response.data;
//             var chat_history = $('#chat_history');
//             for(var i=0; i<responseData.length; i++){
//                 console.log(responseData[i]);
//                 var chat_div = $('<div>',{
//                     class:'chat_line'
//                 });
//                 var chat_text = $('<p>',{
//                     text:responseData[i].timestamp + ' | ' + responseData[i].user + ' : ' + responseData[i].text
//                 });
//                 $(chat_div).append(chat_text);
//                 chat_history.append(chat_div);
//                 chat_history.scrollTop(chat_history[0].scrollHeight);
//             }
//         }
//     })
// }
function add_user_check(){
    var registration_section = $('#registration_section');
    var username = $('#register_username');
    var password = $('#register_password');
    var confirm_password = $('#register_password2');
    var clear = true;
    $('.login_fail').remove();
    if(username.val() === ''){
        var username_fail = $('<p>',{
            text:'Please Enter a username',
            class:'login_fail'
        });
        $(registration_section).append(username_fail);
        clear = false;
        console.log('username not clear');

    }
    if ($(password).val() === ''){
        var password_fail = $('<p>',{
            text:'Please Enter a password',
            class:'login_fail'
        });
        $(registration_section).append(password_fail);
        clear = false;
        console.log('password not clear');

    }
    if($(password).val() !== $(confirm_password).val()){
        var password_mismatch = $('<p>',{
            text:'Passwords do not match',
            class:'login_fail'
        });
        $(registration_section).append(password_mismatch);
        clear = false;
        console.log('passwords are not cleared');

    }
    if (clear){
        console.log('clear');
        add_user_ajax(username.val(),password.val());
    }
}
function add_user_ajax(username,password){
    $.ajax({
        dataType:'JSON',
        data:{
            username: username,
            password: password
        },
        method: 'post',
        url: './assets/add_user.php',
        success: function(response){
            var responseData = response;
            console.log(responseData);
            if(response.success === true){
                location.reload();
            }else{
                var fail_div = $('<div>',{
                    class:'login_fail'
                });
                var fail_text = $('<p>',{
                    text:'Registration failed.'
                });
                $(fail_div).append(fail_text);
                $('#registration_section').append(fail_div);
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
        entrance(username,password);
   });
    register.click(function(){
        add_user_check();
    });
    logout_button.click(function(){
        logout();
    });
    $(chat_input).keydown(function(event){
        if(event.keyCode === 13){
            var chat_text = $(chat_input).val();
            chat_post(chat_text);
            fetch_history();
            chat_input.val('');
        }
    });
    $(password_box).keydown(function(event){
        if(event.keyCode === 13){
            var username = $('#username').val();
            var password = $('#password').val();
            entrance(username,password);
        }
    });
    if(main){
        window.onbeforeunload = function(event) {
            logout();
        };
    }

});
