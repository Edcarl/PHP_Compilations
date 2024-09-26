<?php
define('NAME', 'Ed-Carl A. Moya');
define('STUDENT_NUMBER', '2020-08937-MN-0');
define('ADDRESS', '17 Pearl, Lot 2, Apitong St. Marikina Heights, Marikina City');
define('EMAIL_ADDRESS', 'dcrlmya@gmail.com');
define('CONTACT_NUMBER', '09978814879');
define('WEB_ADDRESS', 'https://www.facebook.com/User0211');
define('LAB_TITLE', 'Laboratory Activity No. 10');
define('DESCRIPTION', 'Handling User Input – Dynamic Page');

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
                <li><a href="lab10.php">10. Handling User Input – Dynamic Page</a></li></br>
                <li><a href="lab11.php">11. Managing State Information Using Session – Login Page Page</a></li></br>
                <li><a href="lab12.php">12. Managing State Information Using Cookies – Login Page</a></li></br>
                <li><a href="lab13.php">Laboratory 13</a></li>
                <li><a href="lab14.php">Laboratory 14</a></li>
                <li><a href="lab15.php">Laboratory 15</a></li>
            </ul>
        </nav>

        <section class="content">
        <h2>Handling User Input – Dynamic Page</h2>
            <?php
                $links['lab10_home.php'] = 'Home';
                $links['lab10_vision.php'] = 'Vision';
                $links['lab10_mission.php'] = 'Mission';
                $links['lab10_history.php'] = 'History';
                echo '<table width=100% border=1>';
                // navigation section
                echo '<tr><td>';
                foreach ($links as $key => $value)
                echo '&nbsp;<a href="?page=', $key, '"> ', $value, ' </a>&nbsp;';
                echo '</td></tr>';
                // dynamic content
                echo '<tr><td><br />';
                if ( isset($_GET['page']) ) {
                $page = $_GET['page'];
                if (is_readable($page))
                include_once($page);
                else
                echo 'File <strong>', $page, '</strong> not found!';
                }
                else {
                reset($links);
                include_once(key($links)); 
                }
                echo '<br /><br />';
                echo '</td></tr>';
                echo '</table>';
            ?>
 </section>
    </div>

    <footer>
        <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
    </footer>
</body>
</html>
