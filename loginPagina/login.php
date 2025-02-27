<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="Styles/login.css">
    <!--<link rel="stylesheet" href="Styles/general.css">-->
    <link rel="stylesheet" href="Styles/dropdown.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <title>Login</title>
</head>
<body>
    <div class="dropdown_menu">
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li>
                    <a href="#">Games</a>
                    <ul class="dropdown">
                        <li>
                            <a href="flappyBird.html">Flappy bird</a>
                        </li>
                        <li>
                            <a href="donkeyKong.html">Donkey kong</a>
                        </li>
                    </ul>
                </li>
                <li><a class="login" href="loginPagina/login.php">Login</a></li>
            </ul>
        </nav>
    </div>
    
    <div class="container" id="signup" style="display: none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="First Name" required>
                <label for="fname">First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="Last Name" required>
                <label for="lname">Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="Sign Up" style="color: white;">
        </form>
        <p class="or">
            ----------or----------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <!--kan nog meer aan toevoegen als ik wil-->
        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="SignInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn"> <!--kan het terug laten verschijnen door de style weg te doen (ik bedoel dan enkel dit kleine style blokje en niet het hele script!!)-->
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="email">Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" id="password" placeholder="Password" required>
                <label for="password">Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="Sign In" style="color: white;">
        </form>
        <p class="or">
            ----------or----------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <!--kan nog meer aan toevoegen als ik wil-->
        </div>
        <div class="links">
            <p>Don't have account yet ?</p>
            <button id="SignUpButton">Sign Up</button>
        </div>
    </div>
    <script src="login.js"></script>
</body>
</html>