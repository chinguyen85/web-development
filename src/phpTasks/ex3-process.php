<?php 
    $title = "Successfully Submitted - Chi Nguyen";
?>
<?php include_once 'header.php'; ?>

<div class="row body-page">
    <div class="left-col col-md-6">
        <?php
            $inputFname = $_POST['inputFname'];
            $inputLname = $_POST['inputLname'];
            $inputEmail = $_POST['inputEmail'];
            $inputPhone = $_POST['inputPhone'];

            echo "<h3>Hello, " . $inputFname . " " . $inputLname . "!<br>" . "You are welcome to my site.</h3>";
        ?>
    </div>

<?php include_once 'footer.php'; ?>