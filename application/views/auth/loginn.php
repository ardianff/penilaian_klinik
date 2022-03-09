<!doctype html>
<html lang="en">
    <head>
        <title>Login</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    </head>
    <body style="background:#1689c7;">
        <div class="container">
            <!-- grid -->
            <div class="row">
                <div class="col-sm-5 mx-auto mt-5 pt-5">
                    <?php if(!empty($this->session->flashdata('failed'))){?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            <span class="sr-only">Close</span>
                        </button>
                        <?= $this->session->flashdata('failed');?>
                    </div>
                    <?php }?>
                    <div class="card">
                        <div class="card-header">
                            Form Login
                        </div>
                        <div class="card-body">
                            <form method="POST" action="<?= base_url('login/proses');?>">
                                <div class="form-group">
                                    <label for="">Username</label>
                                    <input type="text" required
                                        class="form-control" name="user" id="user" placeholder="Masukan Username">
                                </div>
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" required
                                        class="form-control" name="pass" id="pass" placeholder="Masukan Password">
                                </div>
                                <button type="submit" class="btn btn-primary btn-md float-right">Login</button>
                            </form>
                        </div>
                        <div class="card-footer text-muted">
                            Copyright &copy; <?= date('Y');?> codekop
                        </div>
                    </div>
                </div>
            </div>
            <!-- grid -->
        </div>
        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>
