 <?   
 
$username = $_POST['email_address'];
$password = $_POST['password'];
$result = validate_credentials ($username , $password);

if($result){
     printf(" login successfully ");
}
else { 
  
?>


<main class = "from-signin">

<form method="post" action="login.php">
    <img class="mb-4" src="https://png.pngtree.com/png-vector/20191003/ourmid/pngtree-user-login-or-authenticate-icon-on-gray-background-flat-icon-ve-png-image_1786166.jpg" alt="" width="72" height="89">
    <h1 class="h3 mb-3 fw-normal">Please sign in </h1>

    <div class="form-floating">
      <input name="email_address" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input name = "password" type="password" class="form-control" id="floatingPassword" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-muted">© 2017–2021</p>
  </form>
</main>

<?

}


?>