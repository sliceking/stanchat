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
        left:50%;
        z-index: 10;
    }
    .header_div h4:hover{
        color:coral;
        cursor: pointer;
    }
</style>
<div class="header_div">
    <h4>StanChat</h4>
    <h4 data-toggle="modal" data-target="#who_is_stan_modal">Who is Stan?</h4>
    <img src="./assets/images/stan2.png"/>
    <h4  data-toggle="modal" data-target="#about_modal">About</h4>
    <h4 id="logout">Logout</h4>
</div>



<!-- Modal -->
<div id="who_is_stan_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Who is Stan?</h4>
            </div>
            <div class="modal-body">
                <p>Stan is an adventurer, and web developer with a passion for communication. </p>
                <p>He enjoys his time by traveling to a from the mountaintops, where he learns the secrets of the universe. </p>
                <p>During his latest of travels, the mountains told him to make a chat application. </p>
            </div>
        </div>
    </div>
</div>


<!-- Modal -->
<div id="about_modal" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">About StanChat</h4>
            </div>
            <div class="modal-body">
                <p>StanChat is a project that was started in May 2016 by Stan Wielga. </p>
                <p>During his youth he spent much time on the old chat program mIRC, and while learning the ins and outs of web development he spent much time on a chat program called HipChat. </p>
                <p>This project is his attempt to grow as a developer, and to learn what the most important aspects of communication are in the complex age of information we live in today.</p>
            </div>
        </div>

    </div>
</div>