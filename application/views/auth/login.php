<?php $this->load->view('auth/_partials/header.php'); ?>
<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center d-flex vh-100 justify-content-center align-items-center">

        <div class="col-12 col-md-9 col-lg-5">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                        <div class="col-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Monitoring Kualitas Air</h1>
                                </div>
                                <?php if ($this->session->flashdata('message_login_error')) : ?>
                                    <div class="alert alert-danger">
                                        <?= $this->session->flashdata('message_login_error') ?>
                                    </div>
                                <?php endif ?>
                                <form class="user" action="" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email" value="<?= set_value('email') ?>">
                                        <?php if (form_error("email")) echo
                                        "<span class='text-danger ml-2'>" . strip_tags(form_error("email")) . "</span>" ?>
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="password" placeholder="Password" name="password">
                                        <?php if (form_error("email")) echo
                                        "<span class='text-danger ml-2'>" . strip_tags(form_error("password")) . "</span>" ?>
                                    </div>

                                    <input type="submit" class="btn btn-primary btn-user btn-block" value="Login" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>

<?php $this->load->view('_partials/footer.php'); ?>