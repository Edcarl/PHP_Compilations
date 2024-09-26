<?php
define('NAME', 'Ed-Carl A. Moya');
define('STUDENT_NUMBER', '2020-08937-MN-0');
define('ADDRESS', '17 Pearl, Lot 2, Apitong St. Marikina Heights, Marikina City');
define('EMAIL_ADDRESS', 'dcrlmya@gmail.com');
define('CONTACT_NUMBER', '09978814879');
define('WEB_ADDRESS', 'https://www.facebook.com/User0211');
define('LAB_TITLE', 'Laboratory Activity No. 4');
define('DESCRIPTION', 'Functions and Control Structures – Number to Words');

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
        <h2> Functions and Control Structures</h2>
        <?php
        $number = (int)(isset($_POST['number']) ? $_POST['number'] : 0);
        if (($number < 1) or ($number > 999)) {
        if (count($_POST) > 0) {
            $words = 'Sorry, I can process numbers from 1 to 999 only!';
        } else {
            $words = '&nbsp;';
        }
        } else {
        $words = $number . ' in words is ' . NumberToWords($number);
        }

        echo '<form action="" method="post">';
        echo '<table cellpadding=4 border=1 style="border-collapse:collapse">';
        echo '<tr><td align="center"><strong>Number to Words</strong></td></tr>';
        echo '<tr><td>Enter a number (1-999)&nbsp;<input type=text name=number>&nbsp;';
        echo '<input type="submit" value="Convert to words"></td></tr>';
        echo '<tr><td align="center"><strong>', $words, '</strong></td></tr>';
        echo '</table>';
        echo '</form>';

        function NumberToWords($number)
        {
        $words = '';
        $hundreds = floor($number / 100);
        $tens = floor($number % 100);
        $ones = $tens % 10;

        $numberWords = [
            1 => 'One', 2 => 'Two', 3 => 'Three', 4 => 'Four', 5 => 'Five',
            6 => 'Six', 7 => 'Seven', 8 => 'Eight', 9 => 'Nine', 10 => 'Ten',
            11 => 'Eleven', 12 => 'Twelve', 13 => 'Thirteen', 14 => 'Fourteen', 15 => 'Fifteen',
            16 => 'Sixteen', 17 => 'Seventeen', 18 => 'Eighteen', 19 => 'Nineteen'
        ];

        $tensWords = [
            2 => 'Twenty', 3 => 'Thirty', 4 => 'Forty', 5 => 'Fifty',
            6 => 'Sixty', 7 => 'Seventy', 8 => 'Eighty', 9 => 'Ninety'
        ];

        if ($hundreds > 0) {
            $words .= $numberWords[$hundreds] . ' Hundred';
            if ($tens > 0) {
                $words .= ' and ';
            }
        }

        if ($tens > 19) {
            $words .= $tensWords[floor($tens / 10)];
            if ($ones > 0) {
                $words .= ' ' . $numberWords[$ones];
            }
        } elseif ($tens > 0) {
            $words .= $numberWords[$tens];
        }

        if ($number == 0) {
            $words = 'Zero';
        }

        return $words;
        }
        ?>


        </section>
    </div>

    <footer>
        <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
    </footer>

</body>
</html>
