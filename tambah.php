<?php
require 'functions.php';
$pesan = "";
if (isset($_POST["submit"])) {
    if (tambah($_POST) > 0) {
        $pesan =  "Data film berhasil ditambahkan";
        $klas = "alert alert-success";
    } else {
        $pesan = "Data film gagal ditambahkan";
        $klas = "alert alert-danger";
    }
}

include 'header.php';
?>
<body>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                     TAMBAH DAFTAR FILM
                    <small>Anda bisa menambahkan daftar film dengan mengisi form di bawah ini</small>
                </h2>
            </div>
            <div class="body">
                <div class="<?= $klas ?>">
                    <?= $pesan ?>
                </div>
                <form action="" method="POST">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Judul" id="judul" name="judul" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Tahun" id="tahun" name="tahun" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Sutradara" id="sutradara" name="sutradara" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Genre" id="genre" name="genre" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Poster" id="poster" name="poster" required/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <textarea rows="4" class="form-control no-resize" placeholder="Sinopsis" name="sinopsis" id="sinopsis"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn bg-pink waves-effect m-b-15" name="submit" id="submit">TAMBAH</button>
                                        <a class="btn bg-cyan waves-effect m-b-15" role="button" data-toggle="collapse" href="index.php" aria-expanded="false" aria-controls="collapseExample">
                                        KEMBALI KE HALAMAN DEPAN
                                        </a>
                                    </div>
                                </div>
                            </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>