<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="signin.css">
    <title> Login Page </title>
</head>

<body>
    <a class="back" href="../index.php">Back Home</a>
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form method="POST" action="signup_process.php" id="signupForm" onsubmit="return validateSignUpForm();">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registeration</span>
                <input type="text" name="full_name" placeholder="Full Name" id="full_name" required>
                <input type="email" name="email" name="email" placeholder="Email" id="email" required>
                <input type="password" name="password" placeholder="Password" id="password" required>
                <input type="checkbox" onclick="togglePasswordVisibility()"> Show Password
                <input type="int" name="phone_number" placeholder="Phone Number" id="phone_number" required>
                <button name="signup">Sign Up</button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form method="POST" action="signin_process.php" id="signInForm">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
                    <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>or use your email password</span>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" id="password2" required>
                <input type="checkbox" onclick="togglePasswordVisibility()"> Show Password
                <!-- <a href="#">Forget Your Password?</a> -->
                <button name="signin">Sign In</button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back!</h1>
                    <p>Enter your personal details to use all of site features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello, Friend!</h1>
                    <p>Register with your personal details to use all of site features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // ---------------------Show Password----------------------

        
        function togglePasswordVisibility() {

            // -------------Signup Visibility----------------
            var passwordInput = document.getElementById("password");
            var passwordInput2 = document.getElementById("password2");

            if (passwordInput.type === "password") {
                passwordInput.type = "text";
                passwordInput2.type = "text";
            } else {
                passwordInput.type = "password";
                passwordInput2.type = "password";
            }

            // -------------Login Visibility----------------

            if (passwordInput2.type === "password") {
                passwordInput2.type = "text";
            } else {
                passwordInput2.type = "password";
            }
        }
    
// ---------------Validimi---------------
        function validateSignUpForm() {
    
        var fullName = document.getElementById('full_name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        var phoneNumber = document.getElementById('phone_number').value;

        
        if (fullName.trim() === '' || email.trim() === '' || password.trim() === '' || phoneNumber.trim() === '') {
            alert('All fields must be filled out');
            return false;
        }

        
        if (!isValidPassword(password)) {
            alert('Password must be at least 8 characters long, start with a capital letter, and include a number');
            return false;
        }

        return true; 
    }

    function isValidPassword(password) {
        if (password.length < 8) {
            return false;
        }

        if (!/^[A-Z]/.test(password)) {
            return false;
        }

        if (!/\d/.test(password)) {
            return false;
        }

        return true;
    }
// ---------------Animacioni SignIn,SignUp---------------
    const container = document.getElementById('container');
        const registerBtn = document.getElementById('register');
        const loginBtn = document.getElementById('login');

        registerBtn.addEventListener('click', () => {
            container.classList.add("active");
        });

        loginBtn.addEventListener('click', () => {
            container.classList.remove("active");
        });
    </script>
</body>

</html>

