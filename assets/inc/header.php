<style>
    .header_div{
        background-color: #3f6060;
        width:100%;
        color:white;
        padding:3px;
        display:flex;
        flex-direction: row;
        justify-content: space-around;
        align-items: center;
        height:60px;
        position:relative;
    }
    .header_div img{
        position:absolute;
        width:75px;
        left:47%;
        z-index: 10;
    }
    .header_div h4:hover{
        color:coral;
    }
</style>
<div class="header_div">
    <h4>StanChat</h4>
    <h4>Who is Stan?</h4>
    <img src="./assets/images/stan2.png"/>
    <h4>About</h4>
    <h4 id="logout">Logout</h4>
</div>