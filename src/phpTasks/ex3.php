<?php 
    $title = "Exercise 3 - Chi Nguyen";
    $md = "PHP exercise: Variable, Strings & Operators";
?>
<?php include 'header.php'; ?>

<div class="inputForm">
    <h2>Form Creation</h2>
    <p><i>Create a simple HTML form to collect the user Firstname and Lastname.
        Use the echo statement to print “Hello [Firstname] [Lastname], You are welcome to my site.” inside an h3 tag.
    </i></p>
    <form class="row g-3" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="col-12">
            <div style="margin-top:-5px"></div>
            <label for="inputName" class="form-label">First Name</label>
            <input type="text" class="form-control" name="inputFname" placeholder="e.g Lilja" required>
        </div>
        <div class="col-12">
            <label for="inputName" class="form-label">Last Name</label>
            <input type="text" class="form-control" name="inputLname" placeholder="e.g Heikkinen" required>
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Email</label>
            <input type="email" class="form-control" name="inputEmail" placeholder="username@domain.com">
        </div>
        <div class="col-md-6">
            <label for="inputPhone" class="form-label">Phone number</label>
            <input type="phone" class="form-control" name="inputPhone" placeholder="+358 1234 56789">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>

    <?php
    // Check for a post request & print the result in the same page
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fname = $_POST['inputFname'];
            $lname = $_POST['inputLname'];
            $email = $_POST['inputEmail'];
            $phone = $_POST['inputPhone'];
            echo "<h3>Hello " . $fname . " " . $lname . "! You are welcome to my site.</h3>";
            echo "<p>Your email is " . $email . " and your phone number is " . $phone . ".</p>";
        }
    ?>
</div>

<h2>HTML Table</h2>
<p><i>Prepare a simple HTML table and apply Bootstrap styles to it.
    Note, you have already done a table in Exercise 1. If you wish, you can use the same table.
</i></p>
<div class="table-responsive">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">S.n</th>
                <th scope="col">Name</th>
                <th scope="col">Grade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>John</td>
                <td>5</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Alice</td>
                <td>4</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Bob</td>
                <td>5</td>
            </tr>
        </tbody>
    </table>
</div>

<h2>String Variables</h2>
<p><i>Write a PHP script with two string variables ($str1 = "Hello"; $str2 = "World";).
    Join them together and print the length of the string.
</i></p>
<?php
    $str1 = "Hello";
    $str2 = "World";
    $mystr = $str1 . " " . $str2;
    echo "<p>Length of the string: " . strlen($mystr) . ".</p>";
?>

<h2>Number Addition</h2>
<p><i>Write a script to add up the numbers: 298, 234, 46.
    Use variables to store these numbers and an echo statement to output your answer.
</i></p>
<?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;
    $sum = $num1 + $num2 + $num3;
    echo "<p>Sum of the numbers: " . $sum . ".</p>";
?>

<h2>Browser Detection</h2>
<p><i>Write a PHP script to detect the browser being used to view your pages.
    Hint: Use predefined variables: $_SERVER.
</i></p>
<?php
    $browser = $_SERVER['HTTP_USER_AGENT'];
    echo "<p>You are using the browser " . $browser . ".</p>";
?>

<h2>File Modification Time</h2>
<p><i>Write a PHP script in the footer section of your universal footer to display the last modification time of a file. 
    Hint: Use predefined variable $_SERVER, basename function  to get the filename , filetime function to get the last modified time & date function to print the date and time.
</i></p>
<?php
    echo "<p>Please see the footer section.</p>";
?>

<?php include 'footer.php'; ?>