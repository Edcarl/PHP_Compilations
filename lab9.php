<?php
define('NAME', 'Ed-Carl A. Moya');
define('STUDENT_NUMBER', '2020-08937-MN-0');
define('ADDRESS', '17 Pearl, Lot 2, Apitong St. Marikina Heights, Marikina City');
define('EMAIL_ADDRESS', 'dcrlmya@gmail.com');
define('CONTACT_NUMBER', '09978814879');
define('WEB_ADDRESS', 'https://www.facebook.com/User0211');
define('LAB_TITLE', 'Laboratory Activity No. 9');
define('DESCRIPTION', 'Handling User Input – User Registration');

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
        <h2>Handling User Input – User Registration</h2>
        <?php
            function generate_textbox($name, $value) {
                return '<input type="text" name="' . $name . '" value="' . $value . '">';
            }

            function generate_password($name, $value) {
                return '<input type="password" name="' . $name . '" value="' . $value . '">';
            }

            function generate_textarea($name, $value) {
                return '<textarea name="' . $name . '">' . $value . '</textarea>';
            }

            function generate_checkbox($name) {
                return '<input type="checkbox" name="' . $name . '">';
            }

            $lastname = isset($_POST['txtLastname']) ? $_POST['txtLastname'] : '';
            $firstname = isset($_POST['txtFirstname']) ? $_POST['txtFirstname'] : '';
            $middlename = isset($_POST['txtMiddlename']) ? $_POST['txtMiddlename'] : '';
            $emailaddress = isset($_POST['txtEmail']) ? $_POST['txtEmail'] : '';
            $username = isset($_POST['txtUsername']) ? $_POST['txtUsername'] : '';
            $password = isset($_POST['txtPassword']) ? $_POST['txtPassword'] : '';
            $confirmpassword = isset($_POST['txtConfirmPassword']) ? $_POST['txtConfirmPassword'] : '';
            $comments = isset($_POST['txtComments']) ? $_POST['txtComments'] : '';
            $agree = isset($_POST['chkAgree']) ? $_POST['chkAgree'] : '';

            if (count($_POST) == 0) {
                echo '<form method="post" action="lab9.php">';
                echo '<table>';
                echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';

                echo '<tr><td>Lastname</td><td>', generate_textbox('txtLastname', $lastname), '</td></tr>';
                echo '<tr><td>Firstname</td><td>', generate_textbox('txtFirstname', $firstname), '</td></tr>';
                echo '<tr><td>Middlename</td><td>', generate_textbox('txtMiddlename', $middlename), '</td></tr>';
                echo '<tr><td>Email Address</td><td>', generate_textbox('txtEmail', $emailaddress), '</td></tr>';
                echo '<tr><td>Username</td><td>', generate_textbox('txtUsername', $username), '</td></tr>';
                echo '<tr><td>Password</td><td>', generate_password('txtPassword', $password), '</td></tr>';
                echo '<tr><td>Confirm Password</td><td>', generate_password('txtConfirmPassword', $confirmpassword), '</td></tr>';
                echo '<tr><td>Comments</td><td>', generate_textarea('txtComments', $comments), '</td></tr>';
                echo '<tr><td>Agree</td><td>', generate_checkbox('chkAgree'), '</td></tr>';

                echo '<tr><td colspan=2>';
                echo '<input type="submit" name="btnRegister" value="Register">&nbsp;';
                echo '<input type="reset" name="btnReset" value="Reset">&nbsp;';
                echo '</td></tr>';
                echo '</table>';
                echo '</form>';
            } else {
                echo '<table>';
                echo '<tr><td colspan=2><strong>Lab 9 - Form Processing (User Registration)</td></tr>';
                echo '<tr><td colspan=2 align=center><strong>FORM SUBMITTED</td></tr>';

                echo '<tr><td>Lastname</td><td>', $lastname, '</td></tr>';
                echo '<tr><td>Firstname</td><td>', $firstname, '</td></tr>';
                echo '<tr><td>Middlename</td><td>', $middlename, '</td></tr>';
                echo '<tr><td>Email Address</td><td>', $emailaddress, '</td></tr>';
                echo '<tr><td>Username</td><td>', $username, '</td></tr>';
                echo '<tr><td>Password</td><td>***masked***</td></tr>';
                echo '<tr><td>Confirm Password</td><td>***masked***</td></tr>';
                echo '<tr><td>Comments</td><td>', $comments, '</td></tr>';
                echo '<tr><td>Agree</td><td>', ($agree == 'on') ? 'Yes' : 'No', '</td></tr>';

                echo '</table>';
            }
        ?>
    </body>


 </section>
    </div>

    <footer>
        <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
    </footer>

</body>
</html>
