
@section('login')
<div class="home">
    <div class="gridItemRegister">
        <div class="homeText">
            Visit the most beautiful natural beauties of Herzegovina. Let the adventure begin!
        </div>    
        <div class="homeRegisterBtn" id="show">
            <button id="show">Register Now</button>
        </div> 
    </div>
    <div class="gridItemLoginPlaceholder">

    </div>
    <div class="gridItem">
        <div class="loginTitle">ACCOUNT LOGIN</div>
        <div class="termsAndPolicy">By logging in you agree to the <a href="#">terms of use</a> and <a href="#">privacy policy</a></div>
        <form action="{{url('post-login')}}" method="POST">
        {{ csrf_field() }}
            <input type="text" class="input" id="usernameLogin" placeholder="Email" name="email">
            @if ($errors->has('email'))
                <span class="error">{{ $errors->first('email') }}</span>
            @endif
            <input type="password" class="input" id="passwordLogin" placeholder="Password" name="password">
                <span class="error"><?php $error=""; echo $error?></span>
            <button id="loginBtn" type="submit">Login</button>
        </form>
        <span class="forgotPassword">Forgot password?</span>
        
    </div>
    @show
</div>