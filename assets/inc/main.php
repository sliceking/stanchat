<style>
    .main_container{
        width:100%;
        height:83%;
        border:3px solid black;
        position:relative;
    }
    .chat_history{
        position:absolute;
        width:80%;
        height:90%;
        border:3px solid red;
        overflow: scroll;
    }
    .online_users{
        position:absolute;
        width:20%;
        height:90%;
        right:0;
        border:3px solid green;
        overflow: scroll;
    }
    .text_input{
        border:3px solid orange;
        position:absolute;
        bottom:0;
        height:10%;
        width:100%;
    }
    .chat_line{
        position:relative;
        top:80%;
    }
    .main_container input{
        height:100%;
        width:100%;
    }
</style>

<div class="main_container">
    <div class="chat_history">

    </div>
    <div class="online_users">

    </div>
    <div class="text_input">
        <input id="chat_input" placeholder="enter message here">
    </div>

</div>