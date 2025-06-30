<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
</head>

<body>
    <div class="container" id="signUp">
        <form method="post" action="register.php">
            <h1>Register</h1>
            <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="firstname" id="firstname" placeholder="First Name" required>
                <label for="firstname">First Name</label>
            </div>
            <div class="input-box">
                <i class="fas fa-user"></i>
                <input type="text" name="lastname" id="lastname" placeholder="Last Name" required>
                <label for="lastname">Last Name</label>
            </div>
            <div class="input-box">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="lastname">Email</label>
            </div>
            <div class="input-box">
                <i class="fa-solid fa-envelope"></i>
                <input type="password" name="password" id="password" placeholder="Create password" required>
                <label for="lastname">Password</label>
            </div>
            <input type="submit" value="Sign Up" name="signUp">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account ?</p>
            <button id="toSignInForm">Sign In</button>
        </div>
    </div>
    <div class="container" id="signIn">
        <h1>Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-box">
                <i class="fa-solid fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="Email" required>
                <label for="lastname">Email</label>
            </div>
            <div class="input-box">
                <i class="fa-solid fa-envelope"></i>
                <input type="password" name="password" id="password" placeholder="Create password" required>
                <label for="lastname">Password</label>
            </div>
            <input type="submit" value="Sign In" name="signin">
        </form>
        <p class="or">
            ----------or--------
        </p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't Have an Account Yet? ?</p>
            <button id="toSignUpForm">Sign Up</button>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>