<?php 
    $title = "Exercise 4 - Chi Nguyen";
    $md = "PHP exercise: Control Flow & Loops";
?>
<?php include_once 'header.php'; ?>

<!--Question 2-->
<h2>If-Else</h2>
<p><i>Write a PHP script to get inputs (age and name) from the user and based on their age, decide if he/she is eligible for voting.
    (18 or more than 18 years is eligible for voting).
</i></p>
<form name="Ex4_form1" class="row g-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="hidden" name="Ex4_form1" value="1">    <!--To idenfify which form was submitted for POST process-->
    <div class = "col-6">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name="userName" placeholder="Enter your name" required>
    </div>
    <div class = "col-6">
        <label for="age" class="form-label">Age</label>
        <input type="number" class="form-control" name="userAge" placeholder="Enter your age" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php
// Check for a post request. Add isset to solve the undefined array keys error.
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Ex4_form1"])) {
        $userName = $_POST["userName"];
        $userAge = $_POST["userAge"];
        if ($userAge >= 18) {
            echo "<h5><b>\"Hello $userName, you are eligible for voting!\"</b></h5>";
        } else {
            echo "<h5><b>\"Hello $userName, you are not eligible for voting!\"</b></h5>";
        }
    }
?>
<br>

<!--Question 3-->
<h2>Switch Case</h2>
<p><i>Write a PHP script that gets the current month and prints one of the following responses, depending on whether it's August or not:
    It's August, so it's still holiday.
    Not August, this is Month-name so I don't have any holidays.
</i></p>
<?php
    $currentMonth = date("F");
    switch ($currentMonth) {
        case "August":
            echo "<p>It's August, so it's still holiday.</p>";
            break;
        default:
            echo "<p>Not August, this is $currentMonth so I don't have any holidays.</p>";
    }
?>
<br>

<!--Question 4-->
<h2>For Loop</h2>
<p><i>Write a PHP script that will print the multiplication table of a number (n).
</i></p>
<form name="Ex4_form2" class="row g-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="hidden" name="Ex4_form2" value="1"> 
    <div class = "col-12">
        <label for="number1" class="form-label">Number</label>
        <input type="number" class="form-control" name="number1" placeholder="Enter a number" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Ex4_form2"])) {
        $number1 = $_POST["number1"];
        echo "<p><b>Multiplication table of $number1:</b></p>";
        for ($i = 1; $i <= 10; $i++) {
            echo "<p>$number1 x $i = " . $number1 * $i . "</p>";
        }
    }
?>
<br>

<!--Question 5-->
<h2>While Loop</h2>
<p><i>Write a PHP script that will print all the numbers from 1 to n.
</i></p>
<form name="Ex4_form3" class="row g-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<input type="hidden" name="Ex4_form3" value="1">    
    <div class = "col-12">
        <label for="number2" class="form-label">Number</label>
        <input type="number" class="form-control" name="number2" placeholder="Enter a number" required>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["Ex4_form3"])) {
        $number2 = $_POST["number2"];
        echo "<p><b>All the numbers from 1 to $number2:</b></p>";
        $i = 1;
        while ($i <= $number2) {
            echo "<p>$i</p>";
            $i++;
        }
    }
?>
<br>

<!--Question 6-->
<h2>Foreach Loop</h2>
<p><i>Write a PHP script that will print all the elements of an array.
</i></p>
<?php
    $LAMP = array("Linux", "Apache", "MySQL", "PHP");
    echo "<p><b>LAMP array elements:</b></p>";
    foreach ($LAMP as $value) {
        echo "<p>$value</p>";
    }
?>

<?php include_once 'footer.php'; ?>