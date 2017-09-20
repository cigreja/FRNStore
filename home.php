<?php
include('includes/head.php');
include('includes/nav.php');

// check if they are logged in
if (isset($_SESSION['current-cookie']) && isset($_COOKIE[$_SESSION['current-cookie']])) {
    $cookie = $_SESSION['current-cookie'];
    $user = $_SESSION['current-user'];
    ?>
    <!-- Log out Form -->
    <div id="logout-form">
        <form class="form-horizontal" action="logout.php" method="post">

            <input type="hidden" name="cookie-id" value="<?php echo $cookie; ?>">
            <div name="welcome-user">
                <center><h1><b>Welcome <?php echo $user->getName(); ?> to FRNStore !</b></h1></center>
                <center><button type="submit" class="btn btn-warning">Log Out</button></center>
            </div>

        </form>
    </div>

    <?php
} else {
    $cookie = "";
    $user = new User();
    ?>
    <!-- login form -->
    <div id="login-form">
        <form class="form-horizontal" action="login.php" method="post" >
            <fieldset>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputEmail" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-primary" >Login</button>
                        <div name="login-error"></div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>


    <br>


    <!-- sign up form -->
    <div id="signup-form">
        <form class="form-horizontal" action="signup.php" method="post">
            <fieldset>
                <div class="form-group">
                    <label for="inputName" class="col-lg-2 control-label">Name</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputName" name="name" placeholder="Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                    <div class="col-lg-10">
                        <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="col-lg-2 control-label">Password</label>
                    <div class="col-lg-10">
                        <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Password" required>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <button type="submit" class="btn btn-info">New User</button>
                        <div name="signup-error"></div>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
    <?php
}
?>

<?php
include('includes/footer.php');
?>

