<div class="form">
    <h1>Welcome Back!</h1>
    <form role="form" action="/login" method="POST" name="login" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off">
        <div class="field-wrap">
            <div class="form-group input-group"><span id="basic-addon1" class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" name="username" placeholder="Username" aria-describedby="basic-addon1" class="form-control" />
            </div>
        </div>

        <div class="field-wrap">
            <div class="form-group input-group"><span id="basic-addon2" class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" name="password" placeholder="Password" aria-describedby="basic-addon2" autocomplete="off" class="form-control" />
            </div>
        </div>
        <p class="forgot"><a href="/forgot">Forgot Password?</a></p>
        <button type="button" class="btn btn-danger button button-block" onclick="logIn()">Log In</button>
    </form>
</div>

<div class="form">
    <form role="form" action='/signup' , method='POST' , name='signup' , accept-charset='UTF-8' , enctype='application/x-www-form-urlencoded' , autocomplete='off'>

        <div class="field-wrap">
            <div class="form-group input-group">
                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-tags"></span></span>
                <input type="text" name="firstname" class="form-control" placeholder="First Name *" aria-describedby="basic-addon1">

                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-tags"></span></span>
                <input type="text" name="lastname" class="form-control" placeholder="Last Name *" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="field-wrap">
            <div class="form-group input-group">
                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-user"></span></span>
                <input type="text" name="username" class="form-control" placeholder="Username *" aria-describedby="basic-addon1">

                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-envelope"></span></span>
                <input type="text" name="email" class="form-control" placeholder="E-Mail *" aria-describedby="basic-addon1">
            </div>
        </div>

        <div class="field-wrap">
            <div class="form-group input-group">
                <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" name="password" class="form-control" placeholder="Password *" aria-describedby="basic-addon2" , autocomplete='off'>

                <span class="input-group-addon" id="basic-addon2"><span class="glyphicon glyphicon-lock"></span></span>
                <input type="password" name="password2" class="form-control" placeholder="Comfirm Password *" aria-describedby="basic-addon2" , autocomplete='off'>
            </div>
        </div>

        <button type="button" class="button button-block btn btn-danger" onclick="regUser()">Register</button>
    </form>
</div>

<div class="form">
    <br><br>
    <input type="submit" value="Log Out" onclick="logOut()">
    <input type="submit" value="Clear" onclick="clean()">
    <br>
    <br>
    <div class="field-wrap">
        <input type="text" name="manga" id="manga" value="Terra Formars">
    </div>
    <input type="submit" value="List Manga" onclick="getManga()">
    <input type="submit" value="Find by Title" onclick="findManga()">
    <input type="submit" value="Chapter +1" onclick="oneUp()">

</div>
<section class="mangas" id="manga-area"></section>