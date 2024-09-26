<?php
define('NAME', 'Ed-Carl A. Moya');
define('STUDENT_NUMBER', '2020-08937-MN-0');
define('ADDRESS', '17 Pearl, Lot 2, Apitong St. Marikina Heights, Marikina City');
define('EMAIL_ADDRESS', 'dcrlmya@gmail.com');
define('CONTACT_NUMBER', '09978814879');
define('WEB_ADDRESS', 'https://www.facebook.com/User0211');
define('LAB_TITLE', 'Laboratory Activity No. 8');
define('DESCRIPTION', 'Array Manipulations – Word Counter');

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
        <h2>Array Manipulations – Word Counter</h2>
        <?php
$text = (isset($_POST['text'])) ? $_POST['text'] : '';
echo '<form method="post" id="myForm">';
echo 'Enter text:<br />';
echo '<textarea name="text" style="width:500px">';
echo $text;
echo '</textarea><br />';
echo '<input type="submit" value="Process">&nbsp;';
echo '<input type="button" value="Reset" onclick="resetForm()">&nbsp;'; 
echo '</form>';
$text = preg_replace('/[^a-zA-Z0-9 ]/', '', trim($text));
$colors[] = '#00CCFF';
$colors[] = '#FF00FF';

if ($text <> '') {
    $text = strtolower($text);
    $allwords = explode(' ', $text);
    $uniquewordlist = array_unique($allwords);
    sort($uniquewordlist);

    if (current($uniquewordlist) == '') {
        $deleteditem = array_shift($uniquewordlist);
    }

    foreach ($uniquewordlist as $word)
        $counter[$word] = 0;

    $totalwords = 0;
    foreach ($allwords as $word) {
        if ($word != '') {
            $counter[$word]++;
            $totalwords++;
        }
    }

    echo '<table border=1 style="width:500px">';
    echo '<tr><td colspan=4 align=center>Array Manipulation - Word Counter</td></tr>';
    echo '<tr><td>No.</td><td>Word</td><td>Frequency</td><td>Percent</td></tr>';
    $i = 1;
    foreach ($uniquewordlist as $word) {
        $color = current($colors);

        $length = number_format($counter[$word] / $totalwords * 100.00, 2);

        echo '<tr>';
        echo '<td>', $i, '.</td>';
        echo '<td>', $word, '</td>';
        echo '<td>', $counter[$word], '</td>';
        echo '<td style="background:', $color, '">', $length, '%</td>';
        echo '</tr>';

        next($colors);

        if (current($colors) === false) {
            reset($colors);
        }
        $i++;
    }
    echo '</table>';
}
?>

<script>
    function resetForm() {
        document.getElementById("myForm").reset();
    }
</script>




 </section>
    </div>

    <footer>
        <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
    </footer>

</body>
</html>
