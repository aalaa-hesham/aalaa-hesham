<?php

$title = "Login";
include_once "layouts/header.php";
include_once "App/Middlewares/guest.php";
include_once "layouts/navbar.php";
include_once "layouts/breadcrumb.php";
use App\Database\Models\User;
use App\Http\Requests\Validation;


$validation = new Validation;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $validation->setKey('email')->setValue($_POST['email'])->required()->regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/', 'wrong email or password')->exists('users', 'email');
    $validation->setKey('password')->setValue($_POST['password'])->required()->regex('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,32}$/', 'wrong email or password');

    if (empty($validation->getErrors())) {
        $user = new User;
        $user->setEmail($_POST['email']);

        if ($user->getUserByEmail()->get_result()->num_rows == 1) {
            $authenticatedUser = $user->getUserByEmail()->get_result()->fetch_object();
                    //  comparaison between pass db and input user
            if (password_verify($_POST['password'], $authenticatedUser->password)) {

                if ($authenticatedUser->email_verified_at) {

                    if (isset($_POST['remember_me'])) {
                        setcookie('remember_me', $_POST['email'], time() + 86400 * 365, '/');
                    }
                    $_SESSION['user'] = $authenticatedUser;

                    header('location:index.php');
                    die;
                } else {
                    $_SESSION['email'] = $_POST['email'];

                    header('location:check-code.php?page=login');
                    die;
                }
            } else {
                $error = 'wrong email or password';
            }
        } else {
            $error = 'wrong email or password';
        }
    }
}
?>
<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> <?= $title ?> </h4>
                        </a>
                        
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="" method="post">
                                        <input type="email" name="email" placeholder="Email" value="<?= $_POST['email'] ?? "" ?>">
                                        <?= "<p class='text-danger'>" . $validation->getError('email') . "</p>" ?>

                                        <input type="password" name="password" placeholder="Password">
                                        <?= "<p class='text-danger'>" . $validation->getError('password') . "</p>" ?>
                                        <?= isset($error) ? "<p class='text-danger'>" . $error . "</p>" : "" ?>
                                        <div class="button-box">
                                            <div class="login-toggle-btn">
                                                <input type="checkbox">
                                                <label>Remember Me</label>
                                                <a href="#">Forgot Password?</a>
                                            </div>
                                            <button type="submit"><span>Login</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div id="lg2" class="tab-pane">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" name="user-name" placeholder="Username">
                                        <input type="password" name="user-password" placeholder="Password">
                                        <input name="user-email" placeholder="Email" type="email">
                                        <div class="button-box">
                                            <button type="submit"><span>Register</span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php



include_once "layouts/footer.php";
include_once "layouts/footer-scripts.php";
?>