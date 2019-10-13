<div class="container w-100">
    <div class="app">
        <h1 class="is-size-1 has-text-centered">Login</h1>
        <form action="./Http/Controllers/RegisterController.php" method="POST">
            <div class="field">
                <label class="label">Name</label>
                <div class="control">
                    <input class="input" type="text" name="name" placeholder="Your Name">
                </div>
            </div>

            <div class="field">
                <label class="label">Username</label>
                <div class="control">
                    <input class="input" type="text" name="username" placeholder="Username">
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="button-group">
                <button class="button is-primary">Register !</button>
            </div>
        </form>
    </div>
</div>