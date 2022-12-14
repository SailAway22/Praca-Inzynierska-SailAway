
<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/login.css">
    <title>LOGIN PAGE</title>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="login-and-registration">
            <div class="login-container">
                <form class="login" action="login" method="POST">
                    <div class="messages">
                        <?php if(isset($messages))
                            {
                                foreach ($messages as $message){
                                    echo $message;
                                }
                            }
                        ?>
                    </div>
                    <input name="email" type="text" placeholder="em">
                    <input name="password" type="password" placeholder="password">
                    <button type="submit">LOGIN</button>
                </form>
            </div>
            <div class="registration">
                <a href="https://sail-away.azurewebsites.net/registration">REGISTRATION</a>
            </div>
        </div>
    </div>
</body>
