<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="descriptions" content="<?php echo $md; ?>">
    <title><?php echo $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.2/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
</head>

<body>
  <div class="container">
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="ex1.php"><i>Chi Nguyen</i></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="ex1.php">Exercise 1</a>
                  </li>
                  <!--li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      PHP Exercises
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="ex1.php">Ex 1: Getting Started with PHP</a></li>
                      <li><a class="dropdown-item" href="ex2.php">Ex 2: Universal Header & Footer</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="ex3.php">Ex 3: Variable, String & Operators</a></li>
                      <li><a class="dropdown-item" href="ex4.php">Ex 4: Control Flow & Loops</a></li>
                      <li><a class="dropdown-item" href="ex5.php">Ex 5: Project Plan</a></li>
                      <li><a class="dropdown-item" href="ex6.php">Ex 6: Arrays</a></li>
                      <li><a class="dropdown-item" href="ex7.php">Ex 7: CRUD APP</a></li>
                    </ul>
                  </li-->
                  <li class="nav-item">
                    <a class="nav-link" href="ex2.php">Exercise 2</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ex3.php">Exercise 3</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ex4.php">Exercise 4</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="https://github.com/hiephamk/Web_PHP_Group_13/blob/main/README.md" target="blank">Exercise 5</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ex6.php">Exercise 6</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="ex7.php">Exercise 7</a>
                  </li>
                </ul>
                <select class="selectpicker" data-width="fit">
                    <option data-content='<span class="flag-icon flag-icon-us"></span> English'>English</option>
                    <option  data-content='<span class="flag-icon flag-icon-fi"></span> Suomi'>Suomi</option>
                    <option  data-content='<span class="flag-icon flag-icon-vn"></span> Tiếng Việt'>Tiếng Việt</option>
                  </select>
              </div>
            </div>
          </nav>
    </header>

    <div class="row body-page">
      <div class="left-col col-md-6">