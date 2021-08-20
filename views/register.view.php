<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php require('partials/head.php'); ?>

<body>
    
<?php require('partials/nav.php'); ?>

    <div class="row">
        <form class="col s12 m8 offset-m2" method="POST" action="#">
            <div class="card-panel">
                <div class="row">
                    <div class="input-field col s12">
                        <i class="fas fa-user-plus prefix teal-text"></i>
                        <input id="username" name="username" type="text" minlength="5" maxlength="15" pattern="^[a-zA-Z0-9]{5,15}$" class="validate" required>
                        <label for="username">Username</label>
                    </div>
                </div>
                <div class="row">
                    <div class="input-field col s12">
                        <i class="fas fa-user-lock prefix teal-text"></i>
                        <input id="password" name="password" type="password" minlength="5" maxlength="15" pattern="^[a-zA-Z0-9\W+]{5,15}$" class="validate" required>
                        <label for="password">Password</label>
                    </div>
                </div>
                <br>
                <div class="row">
                    <button type="submit" class="col s12 btn-large teal text-shadow">
                        Register <i class="fas fa-sign-in-alt"></i>
                    </button>
                </div>
            </div>
        </form>
    </div>

    <div class="row">
        <div class="col s12">
            <p class="center-align">
                Already Signed Up? <a href="login.view.php" class="btn-small teal text-shadow">Log In</a>
            </p>
        </div>
    </div>

<?php require('partials/footer.php'); ?>

</body>
</html>