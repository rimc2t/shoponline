<div>
    <p>
        <b>Default for testing:</b> admin:admin, user:user, test:test, test123:123
    </p>
    <p>
        <b>We have a Super Assmin and You can not access it</b>
    </p>
</div>
<form id="signin" class="form-signin" method="POST">
    <a href="/"><img class="mb-4" src="/assets/icon/logo.png" alt="" width="72" height="72"></a>
    <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
    <label for="username" class="sr-only">Username</label>
    <input type="text" id="username" name="username" class="form-control" placeholder="Username" required autofocus>
    <label for="password" class="sr-only">Password</label>
    <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
    <input type="hidden" name="token" value="<?php echo $_SESSION['token']; ?>" />
    <div>
        <p>
            Don't you have an Account? <a href="/account/register">Register</a>
        </p>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="signin">Sign in</button>
    <p class="mt-5 mb-3 text-muted">&copy; 18520365 - NT213 - HKII - 2021</p>
</form>