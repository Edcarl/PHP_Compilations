<?php
define('NAME', 'Ed-Carl A. Moya');
define('STUDENT_NUMBER', '2020-08937-MN-0');
define('ADDRESS', '17 Pearl, Lot 2, Apitong St. Marikina Heights, Marikina City');
define('EMAIL_ADDRESS', 'dcrlmya@gmail.com');
define('CONTACT_NUMBER', '09978814879');
define('WEB_ADDRESS', 'https://www.facebook.com/User0211');
define('LAB_TITLE', 'Laboratory Activity No. 6');
define('DESCRIPTION', 'String Functions in PHP');

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
        <h2>String Functions in PHP</h2>
        <?php
        $string = isset($_POST['string']) ? $_POST['string'] : ' ';
        if (!empty($string)) {
            echo '<form method="post" action="">';
            echo '<input type="text" name="string" value="', htmlspecialchars($string, ENT_QUOTES, 'UTF-8'), '" size="100"><br /><br />';
            echo '<input type="submit" value="Apply Functions">&nbsp;';
            echo '<input type="reset" value="Reset"><br />';
            echo '</form>';
            echo '<table border="1">';
            echo '<tr><th>No.</th><th>Function</th><th>Result</th></tr>';

            echo '<tr><td>1.</td><td>Original String</td>';
            echo '<td>','*', htmlspecialchars($string, ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>2.</td><td>Number of characters</td>';
            echo '<td>','*', strlen($string),'*', '</td></tr>';
            
            echo '<tr><td>3.</td><td>Number of words</td>';
            echo '<td>','*', str_word_count($string),'*', '</td></tr>';
            
            echo '<tr><td>4.</td><td>First character to uppercase</td>';
            echo '<td>','*', htmlspecialchars(ucfirst($string), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>5.</td><td>First character of each word to uppercase</td>';
            echo '<td>','*', htmlspecialchars(ucwords($string), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>6.</td><td>To lowercase</td>';
            echo '<td>','*', htmlspecialchars(strtolower($string), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>7.</td><td>To uppercase</td>';
            echo '<td>','*', htmlspecialchars(strtoupper($string), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>8.</td><td>Without leading spaces</td>';
            echo '<td>','*', htmlspecialchars(ltrim($string), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>9.</td><td>Without trailing spaces</td>';
            echo '<td>','*', htmlspecialchars(rtrim($string), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>10.</td><td>Without leading and trailing spaces</td>';
            echo '<td>','*', htmlspecialchars(trim($string), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>11.</td><td>MD5 value of $string</td>';
            echo '<td>','*', md5($string),'*', '</td></tr>';
            
            echo '<tr><td>12.</td><td>Base 64 of string value</td>';
            echo '<td>','*', base64_encode($string),'*', '</td></tr>';

            echo '<tr><td>13.</td><td>First 16 characters</td>';
            echo '<td>','*', htmlspecialchars(substr($string, 0, 16), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>14.</td><td>Last 4 characters</td>';
            echo '<td>','*', htmlspecialchars(substr($string, -4), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>15.</td><td>4 characters starting from 20\'th position</td>';
            echo '<td>','*', htmlspecialchars(substr($string, 19, 4), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>16.</td><td>Position of the word "guide"</td>';
            echo '<td>','*', var_dump(strpos($string, 'guide')),'*', '</td></tr>';
            
            echo '<tr><td>17.</td><td>Position of the word "UE"</td>';
            echo '<td>','*', var_dump(true=== 'UE'),'*', '</td></tr>';
            
            echo '<tr><td>18.</td><td>"HTML" word in uppercase</td>';
            echo '<td>','*', htmlspecialchars(strtoupper('HTML'), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>19.</td><td>' . htmlspecialchars("<INPUT>") .' word in uppercase</td>';
            echo '<td>','*', htmlspecialchars(strtoupper('<INPUT>'), ENT_QUOTES, 'UTF-8'),'*', '</td></tr>';
            
            echo '<tr><td>20.</td><td>String converted to array</td>'; echo '<td>';
            
            $words = explode(' ', $string);
            foreach ($words as $word) {
                echo '*', htmlspecialchars($word, ENT_QUOTES, 'UTF-8') ,'*', '<br>';
            }
            echo '</td></tr>';
            echo '</table>';
        } else {
            echo 'Please enter a string in the textbox.';
        }
        ?>
 </section>
    </div>

    <footer>
        <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
    </footer>

</body>
</html>
