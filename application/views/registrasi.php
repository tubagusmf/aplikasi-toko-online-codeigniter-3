<body class="bg-gradient-primary">

    <div class="container" style="padding-bottom: 20px;">

        <div class="card o-hidden border-0 shadow-lg col-lg-6 my-5 mx-auto">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Buat Akun Anda</h1>
                            </div>
                            <form action="<?= base_url('registrasi'); ?>" method="POST" class="user">
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" id="exampleInputEmail" placeholder="Nama Anda">
                                    <small class="form-text text-danger ml-2"><?= form_error('nama'); ?></small>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username Anda">
                                    <small class="form-text text-danger ml-2"><?= form_error('username'); ?></small>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="password" name="password_1" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                        <small class="form-text text-danger ml-2"><?= form_error('password_1'); ?></small>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="password" name="password_2" class="form-control form-control-user" id="exampleRepeatPassword" placeholder="Ulangi Password">
                                        <!-- <small class="form-text text-danger ml-2"><?= form_error('password_2'); ?></small> -->
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Daftar
                                </button>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= base_url('auth/login'); ?>">Sudah Punya Akun? Silahkan Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>