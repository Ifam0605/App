<?php

$username = $_POST['emile'];
$password = $_POST['password'];

$result = validate_credentials($username, $password);

if($result){
   ?>
<main class="container">
    <div class="bg-body-tertiary p-5 rounded mt-3">
        <h1>Login Done</h1>
        <p class="lead">This example is a quick exercise. login valition</p>
        <a class="btn btn-lg btn-primary" href="/docs/5.3/components/navbar" role="button">View navbar docs »</a>
    </div>
</main>
<?php
}
else{
    

?>

<main class="form-signin w-100 m-auto">
    <form method="post" action="login.php">
        <img class="mb-4" src="https://marstech.lk/wp-content/uploads/2025/03/Mars-Logo.png" alt="" width="250"
            height="100">
        <h1 class="h3 mb-3 fw-normal"> Signup hear</h1>
        <div class="form-floating">
            <input type="name" name="name" class="form-control" id="floatingInput" placeholder="Type Your Name">
            <label for="floatingInput">User Nmae</label>
        </div>
        <br>
        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="Type Your Email">
            <label for="floatingInput">Email Address</label>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input type="text" name="phone" class="form-control" id="floatingPassword" placeholder="Phone Number">
            <label for="floatingPassword">Phone Number </label>
        </div>
        <div class="form-check text-start my-3">
            <input class="form-check-input" type="checkbox" value="remember-me" id="checkDefault">
            <label class="form-check-label" for="checkDefault">Remember me</label>
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Signup</button>
    </form>
</main>

<?php
}
?>