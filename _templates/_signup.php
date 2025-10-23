<?php
$signup = false;
if(isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['phone']) ){
    

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $error = User::singup($username, $password, $email, $phone);
    $signup = true;


    }

         if($signup){ 
                if(!$error){
                ?>
<main class="container">
    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>Signup Success</h1>
        <p class="lead"> <a href="../app/login.php">Now You Can Login Here</a>.</p>
    </div>
</main>
<?php }else{ ?>
<main class="container">
    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>Signup Failed</h1>
        <p class="lead">Something went wrong <?php echo $error ?> <a href="../app/signup.php">Signup Again</a>.</p>
    </div>
</main>
<?php } ?>

<?php }else{
         ?>

<main class="form-signin w-100 m-auto">
    <!-- 3 action -->
    <form method="POST" action="signup.php">
        <img class="mb-4" src="https://marstech.lk/wp-content/uploads/2025/03/Mars-Logo.png" alt="" width="300"
            height="150">
        <!-- 3 signup -->
        <h1 class="h3 mb-3 fw-normal">Signup here</h1>

        <!-- 3 username and phone added -->
        <div class="form-floating"> <input type="text" name="username" class="form-control" id="floatingInput"
                placeholder="name@example.com"> <label for="floatingInput">Username</label> </div>

        <div class="form-floating"> <input type="text" name="phone" class="form-control" id="floatingInput"
                placeholder="name@example.com"> <label for="floatingInput">Phone</label> </div>

        <div class="form-floating"> <input type="email" name="email" class="form-control" id="floatingInput"
                placeholder="name@example.com"> <label for="floatingInput">Email address</label> </div>
        <div class="form-floating"> <input type="password" name="password" class="form-control" id="floatingPassword"
                placeholder="Password"> <label for="floatingPassword">Password</label> </div>
        <div class="form-check text-start my-3"> <input class="form-check-input" type="checkbox" value="remember-me"
                id="checkDefault"> <label class="form-check-label" for="checkDefault">
                Remember me
            </label> </div> <button class="btn btn-primary w-100 py-2 hvr-buzz " type="submit">Sign in</button>
        <p class="mt-5 mb-3 text-body-secondary">© 2017–2025</p>
    </form>
</main>
<?php } ?>