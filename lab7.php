<?php
define('NAME', 'Ed-Carl A. Moya');
define('STUDENT_NUMBER', '2020-08937-MN-0');
define('ADDRESS', '17 Pearl, Lot 2, Apitong St. Marikina Heights, Marikina City');
define('EMAIL_ADDRESS', 'dcrlmya@gmail.com');
define('CONTACT_NUMBER', '09978814879');
define('WEB_ADDRESS', 'https://www.facebook.com/User0211');
define('LAB_TITLE', 'Laboratory Activity No. 7');
define('DESCRIPTION', 'Regular Expression Test');

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
        <h2>Regular Expression Test</h2>
        <?php
            $patterns[] = array('String containing "PHP"', 'PHP');
            $patterns[] = array('Starting with "PHP"', '^PHP');
            $patterns[] = array('Ends with "PHP"', 'PHP$');
            $patterns[] = array('String equal to "PHP"', '^PHP$');
            $patterns[] = array('Word starting with letter "C"', '\bC\w+');
            $patterns[] = array('Non-empty lowercase string', '^[a-z]+$');
            $patterns[] = array('Non-empty uppercase string', '^[A-Z]+$');
            $patterns[] = array('Minimum 10 letters Maximum 20 letters', '^.{10,20}$');
            $patterns[] = array('Minimum 10 digits Maximum 20 digits', '^\d{10,20}$');
            $patterns[] = array('Minimum 10 characters Maximum 20 characters', '^.{10,20}$');
            $patterns[] = array('Valid PHP variable name', '^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$');
            $patterns[] = array('Valid PHP constant name', '^[a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*$');
            $patterns[] = array('Valid decimal (base-10) integer', '^\d+$');
            $patterns[] = array('Valid float number', '^\d+(\.\d+)?$');
            $patterns[] = array('5-letter string', '^.{5}$');
            $patterns[] = array('5-digit string', '^\d{5}$');
            $patterns[] = array('5 ascii characters', '^[\x00-\x7F]{5}$');
            $patterns[] = array('5 non-alphanumeric characters', '^[^a-zA-Z0-9]{5}$');
            $patterns[] = array('Passing Grade (1.00,1.25,1.50 to 3.00)', '^(1\.00|1\.25|1\.50|2\.00|2\.25|2\.50|2\.75|3\.00)$');
            $patterns[] = array('Sub-domain Name (Ex. .edu or .ue.edu or .ccss.ue.edu)', '^(\.[a-zA-Z0-9-]+)+$');

            echo '<form method="post">';
            $i = 1;
            echo '<table border=1>';
            echo '<tr><td colspan=5 align=center>Regular Expression Test</td></tr>';
            echo '<tr><td>No.</td><td>Description</td><td>String</td><td>RegEx Pattern</td><td>Result</td>';
            foreach ($patterns as $pattern_item) {
                $description = $pattern_item[0];
                $pattern = $pattern_item[1];
                $value = isset($_POST["field$i"]) ? $_POST["field$i"] : '';
                if ($pattern == '') {
                    $result = 'Missing pattern';
                    $pattern = '&nbsp;';
                } else {
                    $pattern = '/' . $pattern . '/';
                    if (preg_match($pattern, $value)) {
                        $result = 'Valid';
                    } else {
                        $result = 'Invalid';
                    }
                }
                echo "<tr>";
                echo "<td>$i.</td><td>$description</td>";
                echo "<td><input type=text name=\"field$i\" value=\"$value\"></td>";
                echo "<td>$pattern</td><td>$result</td>";
                echo '<tr>';
                $i++;
            }
            echo '</table><br />';
            echo '<input type="submit" name="validate" value="Validate Data">&nbsp';
            echo '<input type="reset" value="Reset">&nbsp';
            echo '</form>';
        ?>


 </section>
    </div>

    <footer>
        <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
    </footer>

</body>
</html>
