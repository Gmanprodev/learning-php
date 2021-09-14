<!DOCTYPE html>
<html lang="en" dir="ltr">

<?php require('../templates/head.php'); ?>

<body>
    
<?php require('../templates/nav.php'); ?>

    <main class="height">
        <div class="row">
            <form class="col s12 m8 offset-m2" method="POST" action="#">
                <div class="card-panel">
                    <div class="row">
                        <div class="input-field col s12">
                            <i class="fas fa-user-cog prefix teal-text"></i>
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
                    <div class="row">
                        <button type="submit" class="col s12 btn-large teal text-shadow">
                            Log In <i class="fas fa-sign-in-alt"></i>
                        </button>
                    </div>
                </div>
            </form>
        </div>

        <div class="row">
            <div class="col s12">
                <p class="center-align">
                    <a href="./register.view.php" class=" btn-small teal text-shadow">Create an Account</a>
                </p>
            </div>
        </div>
    </main>

<?php require('../templates/footer.php'); ?>

</body>
</html>