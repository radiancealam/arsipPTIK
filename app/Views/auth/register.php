<?= $this->extend('auth/layouts/main'); ?>

<?= $this->section('page-content') ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Register</h1>
                                </div>
                                <?= view('Myth\Auth\Views\_message_block') ?>
                                <form class="user" action="<?= route_to('/register') ?>" method="post">
                                    <?= csrf_field() ?>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user <?php if (session('errors.username')) : ?>is-invalid<?php endif ?>" name="username" value="<?= old('username') ?>" placeholder="NIM sebagai Username">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control form-control-user <?php if (session('errors.email')) : ?>is-invalid<?php endif ?>" name="email" aria-describedby="emailHelp" value="<?= old('email') ?>" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" name="password" placeholder="Password" autocomplete="off">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user <?php if (session('errors.pass_confirm')) : ?>is-invalid<?php endif ?>" name="pass_confirm" placeholder="Repeat Password" autocomplete="off">
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Register
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <p><?= lang('Auth.alreadyRegistered') ?> <a href="<?= route_to('login') ?>"><?= lang('Auth.signIn') ?></a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>