<?php
define('NAME', 'Ed-Carl A. Moya');
define('STUDENT_NUMBER', '2020-08937-MN-0');
define('ADDRESS', '17 Pearl, Lot 2, Apitong St. Marikina Heights, Marikina City');
define('EMAIL_ADDRESS', 'dcrlmya@gmail.com');
define('CONTACT_NUMBER', '09978814879');
define('WEB_ADDRESS', 'https://www.facebook.com/User0211');
define('LAB_TITLE', 'Laboratory Activity No. 5');
define('DESCRIPTION', 'Iteration Structures');

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
        <h2>Iteration Structures</h2>
        <?php

echo '<form action="" method="post">';
echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
echo '<tr><td align="center"><strong>Magic Square</strong></td></tr>';
echo '<tr><td>Enter an odd number &nbsp;<input type=text name=number>&nbsp;';
echo '<input type="submit" value="Generate Magic Square"></td></tr>';
echo '</table>';
echo '</form>';
if (count($_POST) > 0) {
    $number = (int)(isset($_POST['number']) ? $_POST['number'] : 3);
    print_magicsquare($number);
}
function print_magicsquare($number)
{
   
    if ($number < 1) {
        $number = 3; 
    }
    if ($number % 2 === 0) {
        $number++; 
    }

    
    $matrix = array();
    for ($i = 0; $i < $number; $i++) {
        $matrix[$i] = array_fill(0, $number, 0);
    }

    
    $row = 0;
    $col = floor($number / 2);
    $matrix[$row][$col] = 1;

    
    for ($i = 2; $i <= $number * $number; $i++) {
        $newRow = ($row - 1 < 0) ? $number - 1 : $row - 1;
        $newCol = ($col + 1 >= $number) ? 0 : $col + 1;

        if ($matrix[$newRow][$newCol] != 0) {
            $row = ($row + 1) % $number;
        } else {
            $row = $newRow;
            $col = $newCol;
        }
        $matrix[$row][$col] = $i;
    }

    
    echo '<table border=1>';
    for ($r = 0; $r < $number; $r++) {
        echo '<tr>';
        for ($c = 0; $c < $number; $c++) {
            echo '<td>' . $matrix[$r][$c] . '</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
}
?>

        </section>
    </div>

    <footer>
        <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
    </footer>

</body>
</html>
