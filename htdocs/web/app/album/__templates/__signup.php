<?php
$signup = false;
$result = false; // Ensure $result is initialized to avoid undefined variable notice

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['phone'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $result = signup($username, $password, $email, $phone);
    $signup = true;
}
?>

<?php
if ($signup) {
    if (!$result) {
        ?>
        <main class="container">
            <div class="bg-light p-5 rounded mt-3">
                <h1>Signup Successful</h1>
                <p class="lead">Now you can go to the login page <a href="login.php">here</a>.</p>
            </div>
        </main>
        <?php
    } else {
        ?>
        <main class="container">
            <div class="bg-light p-5 rounded mt-3">
                <h1>Signup Failed 1</h1>
                <p class="lead">Something went wrong. Please try again.</p>
            </div>
        </main>
        <?php
    }
}
?>

<main class="form-signin">
    <form method="post" action="signup.php">
        <img class="mb-4" src="https://png.pngtree.com/png-vector/20191003/ourmid/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1786166.jpg" alt="" width="72" height="89">
        <h1 class="h3 mb-3 fw-normal">Please signup</h1>

        <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingInputusername" placeholder="Your name">
            <label for="floatingInputusername">Username</label>
        </div>

        <div class="form-floating">
            <input name="phone" type="text" class="form-control" id="floatingInputphone" placeholder="Your phone">
            <label for="floatingInputphone">Phone</label>
        </div>

        <div class="form-floating">
            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign up</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2017&ndash;2021</p>
    </form>
</main>
<?php
// Ensure this is the closing PHP tag for any other logic, if needed.
?>
