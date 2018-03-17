<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{asset('css/semantic.min.css')}}">
    <script scr="{{asset('js/Jquery-2.1.4.min.js')}}"></script>
    <script scr="{{asset('js/semantic.min.js')}}"></script>
</head>
<body>
<div class="ui grid">
    <div class="row">
        <div class="three wide column"></div>
        <div class="ten wide column"><br><br>
            <form class="ui form">
                <div class="field">
                    <label>Username</label>
                    <input type="text" name="username" placeholder="Username">
                </div>
                <div class="field">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="password">
                </div>

                <button class="ui button" type="submit">Submit</button>
            </form>
        </div>
        <div class="three wide column"></div>
    </div>

</div>

</body>
</html>