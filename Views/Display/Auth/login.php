<div class="container w-100">
    <div class="app">
        <h1 class="is-size-1 has-text-centered">Login</h1>
        <form action="index.html" method="POST">
            <div class="field">
                <label class="label">Username</label>
                <div class="control has-icons-left has-icons-right">
                    <input class="input" type="text" placeholder="Text input" value="bulma">
                    <span class="icon is-small is-left">
                        <i class="fas fa-user"></i>
                    </span>
                    <span class="icon is-small is-right">
                        <i class="fas fa-check"></i>
                    </span>
                </div>
            </div>

            <div class="field">
                <label class="label">Email</label>
                <div class="control">
                    <input class="input" type="password" placeholder="Password">
                </div>
            </div>
            <div class="button-group">
                <button class="button is-primary">Sign In !</button>
                <a href="?controller=Page&action=register" class="button is-primary">Register !</a>
            </div>
        </form>
    </div>
</div>