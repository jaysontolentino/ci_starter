<div class="row justify-content-md-center align-items-center">
    <div class="col col-md-5">
        <div class="card p-4">

        <?= alert('success', 'signout_success') ?>

            <h3>Sign In</h3>

            <hr>

            <?= form_open('signin') ?>

                <div class="form-group">
                    <label for="username">Username</label>
                    <input name="username" id="username" type="text" class="form-control form-control-sm" required>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input name="password" id="password" type="password" class="form-control form-control-sm" required>
                </div>

                <button type="submit" class="btn btn-primary btn-block">Sign In</button>

                <?= alert('error', 'signin_failed') ?>

            <?= form_close() ?>

        </div>
    </div>
</div>