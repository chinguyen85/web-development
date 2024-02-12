<?php
$title = "Form Validation - Chi Nguyen";
include_once "header.php";
?>

<h2>Sign Up</h2>
<p><i>Please fill in below information to register!</i></p>
<form name="sign-up" action="" method="post">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" required minlength="3" maxlength="30">
    </div><br>
    <span id="nameError" style="color: red;"></span>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div><br>
    <span id="emailError" style="color: red;"></span>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password" name="password" required minlength="8">
    </div><br>
    <span id="passwordError" style="color: red;"></span>
    <div class="form-group">
        <label for="age">Age</label>
        <input type="number" class="form-control" id="age" name="age" min="18" max="100">
    </div><br>
    <span id="ageError" style="color: red;"></span>
    <!--div class="form-group">
        <label for="message">Message</label>
        <textarea class="form-control" id="message" name="message" required></textarea>
    </div-->
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

<script>
    // function to validate name
    function validateName() {
        const name = document.getElementById("name").value;
        const nameError = document.getElementById("nameError");
        if (name.length < 3 || name.length > 30) {
            nameError.innerHTML = "Name must be at least 3 characters and less than 30 characters";
            return false;
        }
        else {
            nameError.innerHTML = "";
            return true;
        }
    }

    // function to validate email
    function validateEmail() {
        const email = document.getElementById("email").value;
        const emailError = document.getElementById("emailError");
        if (email === "" || email.includes("@") === -1) {
            nameError.innerHTML = "Email must contain @";
            return false;
        }
        else {
            emailError.innerHTML = "";
            return true;
        }
    }

    // function to validate password
    function validatePassword() {
        const password = document.getElementById("password").value;
        const passwordError = document.getElementById("passwordError");
        if (password.length < 6) {
            passwordError.innerHTML("Password must be at least 6 characters.");
            return false;
        }
        else {
            passwordError.innerHTML = "";
            return true;
        }
    }
    
    // function to validate age
    function validateAge() {
        const age = document.getElementById("age").value;
        const ageError = document.getElementById("ageError");
        if (age < 18) {
            ageError.innerHTML("You must be at least 18 years old");
            return false;
        }
        else {
            ageError.innerHTML = "";
            return true;
        }
    }

    // event listener for real time validation
    document.getElementById("name").addEventListener("input", validateName);
    document.getElementById("email").addEventListener("input", validateEmail);
    document.getElementById("password").addEventListener("input", validatePassword);
    document.getElementById("age").addEventListener("input", validateAge);
</script>

<?php include_once "footer.php"; ?>
