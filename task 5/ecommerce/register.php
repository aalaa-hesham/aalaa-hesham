<?php
$title = "Register";
include_once "layouts/header.php";
include_once "App/Middlewares/guest.php";
include_once "layouts/navbar.php";
include_once "layouts/breadcrumb.php";

use App\Database\Models\User;
use App\Http\Requests\Validation;
use App\Mails\VerificationCode;

$validation = new Validation;
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $validation->setKey('first_name')->setValue($_POST['first_name'])->required()->string()->min(2)->max(32);
    $validation->setKey('last_name')->setValue($_POST['last_name'])->required()->string()->min(2)->max(32);
    $validation->setKey('Phone')->setValue($_POST['Phone'])->required()->regex('/^01[0125][0-9]{8}$/')->unique('users', 'phone');
    $validation->setKey('email')->setValue($_POST['email'])->required()->regex('/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/')->unique('users', 'email');
    $validation->setKey('password')->setValue($_POST['password'])->required()->regex('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,20}$/', "Minimum 8 characters,and maximum 20 , at least one uppercase letter, one lowercase letter, one number and one special character:")->confirmed($_POST['password_confirmation']);
    $validation->setKey('password_confirmation')->setValue($_POST['password_confirmation'])->required();
    $validation->setKey('gender')->setValue($_POST['gender'])->required()->in(['m', 'f']);
    if (empty($validation->getErrors())) {
        $code = rand(100000, 999999);
        $user = new User;
        $user->setFirst_name($_POST['first_name']);
        $user->setLast_name($_POST['last_name']);
        $user->setEmail($_POST['email']);
        $user->setPhone($_POST['Phone']);
        $user->setGender($_POST['gender']);
        $user->setPassword($_POST['password']);
        $user->setCode($code);

        try{
            $user->insert();
            // send code
            $body = " Hello {$_POST['first_name']} {$_POST['last_name']}. Your Verification Code:<b style='color:blue;'>{$code} Thank You";
            $verificationCode = new VerificationCode($_POST['email'],"Verification Code",$body);
            if($verificationCode->send()){
                $_SESSION['email'] = $_POST['email'];
                header('location:check-code.php?page=register');die;
            }else{
                $error = "<p class='alert alert-danger text-center'>something went wrong</p>";
            }
        }catch(\Exception $e){
            $error = "<p class='alert alert-danger text-center'>something went wrong</p>";
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
                        <a class="active" data-toggle="tab" href="#lg2">
                            <h4> <?= $title ?> </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="" method="post">
                                        <?= $error ?? "" ?>
                                        <input name="first_name" type="text" placeholder="First Name" value="<?= $_POST['first_name'] ?? "" ?>">
                                        <?= "<p class='text-danger font-weight-bold  '>" . $validation->getError('first_name') . "</p>" ?>
                                        <input name="last_name" type="text" placeholder="Last Name" value="<?= $_POST['last_name'] ?? "" ?>">
                                        <?= "<p class='text-danger font-weight-bold  '>" . $validation->getError('last_name') . "</p>" ?>
                                        <input name="email" type="email" placeholder="Email" value="<?= $_POST['email'] ?? "" ?>">
                                        <?= "<p class='text-danger font-weight-bold  '>" . $validation->getError('email') . "</p>" ?>
                                        <input name="Phone" type="number" placeholder="Phone" value="<?= $_POST['Phone'] ?? "" ?> ">
                                        <?= "<p class='text-danger font-weight-bold  '>" . $validation->getError('Phone') . "</p>" ?>
                                        <input name="password" type="password" placeholder="Password">
                                        <?= "<p class='text-danger font-weight-bold  '>" . $validation->getError('password')  . "</p>" ?>
                                        <input name="password_confirmation" type="password" placeholder="Confirm Password">
                                        <?= "<p class='text-danger font-weight-bold  '>" . $validation->getError('password_confirmation') . "</p>" ?>
                                        <select name="gender" class="form-control" id="">
                                            <option <?= (isset($_POST['gender']) && $_POST['gender'] == 'f') ?  "selected" : '' ?> value="f">Female</option>
                                            <option <?= (isset($_POST['gender']) && $_POST['gender'] == 'm') ?  "selected" : '' ?> value="m">Male</option>
                                        </select>
                                        <div class="button-box mt-5">
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