<style>
    .splash_header{
        display:flex;
        align-items: center;
        justify-content: center;
        position:relative;
        top:10%;
    }
    .splash_div{
        display:flex;
        flex-direction: row;
        justify-content: space-around;
        position:relative;
        top:10%;
    }

</style>
<div class="splash_header">
    <h1>Welcome to StanChat!</h1>
</div>
<div class="splash_div">
    <div id="registration_section">
        <h2>Register Here</h2>
<!--        <div class="form-group">-->
<!--            <label>First Name</label>-->
<!--            <input id="register_first_name" type="text" placeholder="enter first name">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label>Last Name</label>-->
<!--            <input id="register_last_name" type="text" placeholder="enter last name">-->
<!--        </div>-->
        <div class="form-group">
            <label>Username</label>
            <input id="register_username" type="text" placeholder="enter username">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input id="register_password" type="password" placeholder="enter password">
        </div>
        <div class="form-group">
            <label>Confirm Password</label>
            <input id="register_password2" type="password" placeholder="retype password">
        </div>
        <button id="register">Register</button>

    </div>
    <div>
        <h2>Or</h2>
    </div>
    <div id="login_section">
        <h2>Please Login</h2>
        <div class="form-group">
            <label>Username:</label>
            <input id='username' type="text" placeholder="enter username"><br>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input id='password' type="password" placeholder="enter password">
        </div>
        <div>
            <button id="login">Login</button>
        </div>
    </div>



</div>
