<?php
define('NAME', 'Ed-Carl A. Moya');
define('STUDENT_NUMBER', '2020-08937-MN-0');
define('ADDRESS', '17 Pearl, Lot 2, Apitong St. Marikina Heights, Marikina City');
define('EMAIL_ADDRESS', 'dcrlmya@gmail.com');
define('CONTACT_NUMBER', '09978814879');
define('WEB_ADDRESS', 'https://www.facebook.com/User0211');
define('LAB_TITLE', 'Laboratory Activity No. 3');
define('DESCRIPTION', 'Working with Data Types and Operators');

$school = 'POLYTECHNIC UNIVERSITY OF THE PHILIPPINES';
$course = 'Computer Engineering';
$yearlevel = 'Third Year';
$dateofbirth = 'February 11, 2001';
$gender = 'Male';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo LAB_TITLE; ?></title>
    <link rel="stylesheet" href="lab.css">
</head>
<body>

    <header>
        <?php echo NAME; ?>
        </br>
        <?php echo STUDENT_NUMBER; ?>
        </br>
        <?php echo ADDRESS; ?>
        </br>
        <?php echo EMAIL_ADDRESS; ?>
        </br>
        <?php echo CONTACT_NUMBER; ?>
        </br>
        <?php echo WEB_ADDRESS; ?>
        </br>
        </br>
        <?php echo LAB_TITLE; ?>
        </br>
        <?php echo DESCRIPTION; ?>
    </header>

    <div class="main-container">
        <nav>
            <ul>
                <li><a href="lab1.php">1. Hello World</a></li></br>
                <li><a href="lab2.php">2. Creating Basic PHP Script</a></li></br>
                <li><a href="lab3.php">3. Working with Data Types and Operators</a></li></br>
                <li><a href="lab4.php">4. Functions and Control Structures – Number to Words</a></li></br>
                <li><a href="lab5.php">5. Iteration Structures</a></li></br>
                <li><a href="lab6.php">6. String Functions in PHP</a></li></br>
                <li><a href="lab7.php">7. Regular Expression Test</a></li></br>
                <li><a href="lab8.php">8. Array Manipulations – Word Counter</a></li></br>
                <li><a href="lab9.php">9. Handling User Input – User Registration</a></li></br>
                <li><a href="lab10.php">Laboratory 10</a></li>
                <li><a href="lab11.php">Laboratory 11</a></li>
                <li><a href="lab12.php">Laboratory 12</a></li>
                <li><a href="lab13.php">Laboratory 13</a></li>
                <li><a href="lab14.php">Laboratory 14</a></li>
                <li><a href="lab15.php">Laboratory 15</a></li>
            </ul>
        </nav>

        <section class="content">
        <h2>Expressions and Results</h2>
        <!-- PHP Data Types -->
        <h3>PHP Data Types</h3>
        <table border="1">
            <tr><th>Expression</th><th>Result</th></tr>
            <?php
                $myinteger = 10;
                $myfloat = 10.57;
                $mystring = '10 apples';
                $myboolean = true;
                $mynull = null;
                $myarray = [1, 2, 3];

                echo '<tr><td>1a. $myinteger</td><td>', var_dump($myinteger), '</td></tr>';
                echo '<tr><td>1b. $myfloat</td><td>', var_dump($myfloat), '</td></tr>';
                echo '<tr><td>1c. $mystring</td><td>', var_dump($mystring), '</td></tr>';
                echo '<tr><td>1d. $myboolean</td><td>', var_dump($myboolean), '</td></tr>';
                echo '<tr><td>1e. $mynull</td><td>', var_dump($mynull), '</td></tr>';
                echo '<tr><td>1f. $myarray</td><td>', var_dump($myarray), '</td></tr>';
                
            ?>
        </table>

        <!-- PHP Arithmetic Operators -->
        <h3>PHP Arithmetic Operators</h3>
        <table border="1">
            <tr><th>Expression</th><th>Result</th></tr>
            <?php
                echo '<tr><td>2a. $myinteger + 10</td><td>', var_dump($myinteger + 10), '</td></tr>';
                echo '<tr><td>2b. $myinteger - 5</td><td>', var_dump($myinteger - 5), '</td></tr>';
                echo '<tr><td>2c. $myinteger * 2</td><td>', var_dump($myinteger * 2), '</td></tr>';
                echo '<tr><td>2d. $myinteger / 3</td><td>', var_dump($myinteger / 3), '</td></tr>';
                echo '<tr><td>2e. $myboolean + 1</td><td>', var_dump($myboolean + 1), '</td></tr>';
                echo '<tr><td>2f. $mystring * 2</td><td>', var_dump($mystring * 2), '</td></tr>';
            ?>
        </table>

        <!-- PHP Bitwise Operators -->
        <h3>PHP Bitwise Operators</h3>
        <table border="1">
            <tr><th>Expression</th><th>Result</th></tr>
            <?php
                echo '<tr><td>3a. $myinteger & 8</td><td>', var_dump($myinteger & 8), '</td></tr>';
                echo '<tr><td>3b. $myinteger | 8</td><td>', var_dump($myinteger | 8), '</td></tr>';
                echo '<tr><td>3c. $myinteger << 1</td><td>', var_dump($myinteger << 1), '</td></tr>';
                echo '<tr><td>3d. $myinteger >> 1</td><td>', var_dump($myinteger >> 1), '</td></tr>';

            ?>
        </table>

        <!-- PHP Comparison Operators -->
        <h3>PHP Comparison Operators</h3>
        <table border="1">
            <tr><th>Expression</th><th>Result</th></tr>
            <?php
                echo '<tr><td>4a. $myinteger == 10</td><td>', var_dump($myinteger == 10), '</td></tr>';
                echo '<tr><td>4b. $myinteger > 10</td><td>', var_dump($myinteger > 10), '</td></tr>';
                echo '<tr><td>4c. $myinteger >= 10</td><td>', var_dump($myinteger >= 10), '</td></tr>';
                echo '<tr><td>4d. $myinteger < 20</td><td>', var_dump($myinteger < 20), '</td></tr>';
                echo '<tr><td>4e. $myinteger <= 20</td><td>', var_dump($myinteger <= 20), '</td></tr>';
                echo '<tr><td>4f. $myinteger == $mystring</td><td>', var_dump($myinteger == $mystring), '</td></tr>';
                echo '<tr><td>4g. $myinteger === $mystring</td><td>', var_dump($myinteger === $mystring), '</td></tr>';
            ?>
        </table>

        <!-- PHP Logical Operators -->
        <h3>PHP Logical Operators</h3>
        <table border="1">
            <tr><th>Expression</th><th>Result</th></tr>
            <?php
                echo '<tr><td>5a. $myinteger >= 10 and $myinteger <= 20</td><td>', var_dump($myinteger >= 10 and $myinteger <= 20), '</td></tr>';
                echo '<tr><td>5b. $myinteger == 10 or $myinteger == 20</td><td>', var_dump($myinteger == 10 or $myinteger == 20), '</td></tr>';
                echo '<tr><td>5c. $myinteger == 10 xor $myinteger == 20</td><td>', var_dump($myinteger == 10 xor $myinteger == 20), '</td></tr>';
            ?>
        </table>

        </section>
    </div>

    <footer>
        <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
    </footer>

</body>
</html>
