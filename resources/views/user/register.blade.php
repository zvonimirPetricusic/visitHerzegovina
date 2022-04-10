@section('register')
<div class="signUpContainer" id="signUpContainer">
    <div class="registerTitle">
        <span>ACCOUNT REGISTRATION</span>
    </div>
    <div class="termsAndPolicy">If you register you agree to the <a href="#">terms of use</a> and <a href="#">privacy policy</a></div>
    <div class="termsAndPolicy">Click ESC button to quit</a></div>
    <!-- @if(count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>

        </div>
    @endif
    @if(\Session::has('success'))
        <p>{{\Session::get('success')}}</p>
    @endif -->
    <form method="POST" action="{{url('post-register')}}">
        {{csrf_field()}} 
        <input type="text" class="input" id="nameSurname" name="nameSurname" autofocus placeholder="Name and Surname" oninput="nameSurnameTest()" >
        <span id="errorNameSurname"></span>
        <input type="text" class="input" id="email" name="email" placeholder="Email" oninput="emailTest()">
        <span id="errorEmail"></span>
        <input type="password" class="input" id="password" name="password" placeholder="Password" oninput="passwordTest()">
        <span id="errorPassword"></span>
        <input type="password" class="input" id="confirmPassword" name="confirmPassword" placeholder="Confirm password" oninput="confirmPasswordTest()">
        <span id="errorConfirm"></span>
        <input type="submit" value="Register" name="submit"  id="registerBtn">
        <!--<button id="registerBtn">Register</button>-->
 
    </form>
    
    @show
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>


    function emailTest(){
        
        if(document.getElementById("email").value.includes("@") && document.getElementById("email").length!==0){
            document.getElementById("email").style="border:2px solid #4CAF50";
            document.getElementById("registerBtn").disabled = false;
            errorEmail.textContent = "";
        }else{
            document.getElementById("email").style="border:2px solid #f44336";
            errorEmail.textContent = "E-mail field must contain @ sign";
            document.getElementById("registerBtn").disabled = true;
        }
    }
    function nameSurnameTest(){
        if(document.getElementById("nameSurname").value.length !== 0){
            document.getElementById("nameSurname").style="border:2px solid #4CAF50";
            errorNameSurname.textContent = "";
            document.getElementById("registerBtn").disabled = false;
        }else{
            document.getElementById("nameSurname").style="border:2px solid #f44336";
            errorNameSurname.textContent = "This field is required!";
            document.getElementById("registerBtn").disabled = true;
        }
    }
    function passwordTest(){
        if(document.getElementById("password").value.length >= 8){
            document.getElementById("password").style="border:2px solid #4CAF50";
            document.getElementById("registerBtn").disabled = false;
            errorPassword.textContent = "";
        }else{
            document.getElementById("password").style="border:2px solid #f44336";
            errorPassword.textContent = "Password must contain at least 8 characters!";
            document.getElementById("registerBtn").disabled = true;
        }
    }
    function confirmPasswordTest(){
        if(document.getElementById("password").value === document.getElementById("confirmPassword").value){
            document.getElementById("confirmPassword").style="border:2px solid #4CAF50";
            errorConfirm.textContent = "";
            document.getElementById("registerBtn").disabled = false;
        }else{
            document.getElementById("confirmPassword").style="border:2px solid #f44336";
            errorConfirm.textContent = "Password doesn't match!";
            document.getElementById("registerBtn").disabled = true;
        }
        
    }

    // OPEN SIGN-UP CONTAINER
    $(document).ready(function(){
       
        $(document.getElementById("signUpContainer")).hide();
        $("#hide").click(function(){
          $(document.getElementById("signUpContainer")).hide();
        });
        var elem="#signUpContainer";
        $( document ).on( 'keydown', function ( e ) {
            if ( e.keyCode === 27 ) { // ESC
                $( elem ).hide();
            }
        });
        $("#show").click(function(){
          $(document.getElementById("signUpContainer")).show();
        });
      });
</script>