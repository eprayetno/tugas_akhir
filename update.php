<?php
$id = $_GET["id"];
require 'functions.php';

$film = query("SELECT * FROM film WHERE id=$id")[0];
if (isset($_POST["submit"])) {
    if (update($id)>0) {
        echo "
            <script>
            alert('Film berhasil diupdate!');
            document.location.href = 'index.php';
            </script>
            ";
    } else {
        echo "
            <script>
            alert('Film gagal diupdate!');
            document.location.href = 'index.php';
            </script>
            ";
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
                <form action="" method="POST">
                            <div class="row clearfix">
                                <div class="col-sm-6">
                                <input type="hidden" class="form-control" placeholder="id" id="id" name="id" required value="<?= $film["id"] ?>"/>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Judul</label>
                                            <input type="text" class="form-control" placeholder="Judul" id="judul" name="judul" required value="<?= $film["judul"] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Tahun</label>
                                            <input type="text" class="form-control" placeholder="Tahun" id="tahun" name="tahun" required value="<?= $film["tahun"] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                            <label>Sutradara</label>
                                            <input type="text" class="form-control" placeholder="Sutradara" id="sutradara" name="sutradara" required value="<?= $film["sutradara"] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Genre</label>
                                            <input type="text" class="form-control" placeholder="Genre" id="genre" name="genre" required value="<?= $film["genre"] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Poster</label>
                                            <input type="text" class="form-control" placeholder="Poster" id="poster" name="poster" required value="<?= $film["poster"] ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-line">
                                        <label>Sinopsis</label>
                                        <textarea rows="4" class="form-control no-resize" placeholder="Please type what you want..." name="sinopsis" id="sinopsis"><?= $film["sinopsis"] ?></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn bg-pink waves-effect m-b-15" name="submit" id="submit">UPDATE</button>
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