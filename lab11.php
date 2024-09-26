<?php
session_start();
?>
<?php
define('NAME', 'Ed-Carl A. Moya');
define('STUDENT_NUMBER', '2020-08937-MN-0');
define('ADDRESS', '17 Pearl, Lot 2, Apitong St. Marikina Heights, Marikina City');
define('EMAIL_ADDRESS', 'dcrlmya@gmail.com');
define('CONTACT_NUMBER', '09978814879');
define('WEB_ADDRESS', 'https://www.facebook.com/User0211');
define('LAB_TITLE', 'Laboratory Activity No. 11');
define('DESCRIPTION', 'Managing State Information Using Session – Login Page Page');

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
        <h2>Managing State Information Using Session – Login Page Page</h2>
            <?php
                echo '<form method="post">';
                if (isset($_POST['login']) > 0) // login button is clicked
                    process_form();
                elseif (isset($_POST['logout'])) // logout button is clicked
                    process_logout();
                elseif (isset($_SESSION['username'])) // check if user is logged in
                    generate_welcomepage();
                else
                    generate_loginform(); // display login form
                echo '</form>';

                function generate_loginform() {
                    echo '<input type="text" name="username" placeholder="Username"><br>';
                    echo '<input type="password" name="password" placeholder="Password"><br>';
                    echo '<input type="submit" name="login" value="Login">';
                }

                function process_form() {
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $username = $_POST['username'];
                        $password = $_POST['password'];

                        if ((trim($username) != '') && ($password == '12345')) {
                            $_SESSION['username'] = $username;
                            $_SESSION['password'] = $password;
                            generate_welcomepage();
                        } else {
                            generate_loginerror();
                            generate_loginform();
                        }
                    }
                }

                function generate_loginerror() {
                    echo '<p>Login Failed</p>';
                }

                function process_logout() {
                    if (isset($_SESSION['username'])) {
                        echo '<strong>Logout Successful</strong><br/>';
                        session_destroy(); // Destroying the session
                    }
                    generate_loginform();
                }

                function generate_welcomepage() {
                    if (isset($_SESSION['username'])) {
                        $username = $_SESSION['username'];
                        echo '<p>Welcome back, ' . $username . '!</p>';
                        echo '<p>Lorem Ipsum</p>';
                        echo '<input type="submit" name="logout" value="Logout">';
                    } else {
                        generate_loginform();
                    }
                }
            ?>
        </section>
    </div>

    <footer>
        <p><?php echo '&copy; ', date('Y'), ' ', NAME, ' :: Rundate ', date('m/d/Y'); ?></p>
    </footer>
</body>
</html>