<div class="signin container" id="signin">
    <form method="post" class="container">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Sign In</button>
    </form>
</div>
<div class="signup" id="signup">
    <form method="post">
        <input type="text" placeholder="Name">
        <input type="email" placeholder="Email...">
        <input type="password" placeholder="Password...">
        <input type="password" placeholder="Confirm password">
        <input type="submit" onclick="signup()">
        <p>Click here to <a href="" onclick="show_sign_in()">Sign In</a></p>
    </form>
</div>