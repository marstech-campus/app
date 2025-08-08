<?php

//2.1

$username = $_POST['email'];
$password = $_POST['password'];
//echo $username;
//-------check th code before at bottom----- 2

$result= validate_credentials($username, $password);

if($result){
?>
<main class="container">
    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>Login Success</h1>
        <p class="lead">This example is a quick exercise to login with html form.</p> 
    </div>
</main>

<?php
}else{


// end of 2.1
?>

<main class="form-signin w-100 m-auto">
    <form method="POST" action="login.php">
        <img class="mb-4" src="https://marstech.lk/wp-content/uploads/2025/03/Mars-Logo.png" alt="" width="300"
            height="150">
        <h1 class="h3 mb-3 fw-normal">Please sign in</h1>
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

<?php
}
//2

// $username = $_POST['email'];
// $password = $_POST['password'];
// echo $username;
// -------write this code on top----- 2.1

?>