<?php
require 'functions.php';
$film = query("SELECT * FROM film");

include 'header.php';
?>
<body>
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                     DAFTAR FILM
                    <small>Berikut ini adalah daftar film</small>
                </h2>
            </div>
            <div class="body">
                <div class="row">
                    <?php foreach ($film as $row): ?>
                    <div class="col-sm-6 col-md-3">
                        <div class="thumbnail">
                            <img src="img/<?= $row["poster"] ?>">
                            <div class="caption">
                            <h3><?= $row["judul"] ?> (<?= $row["tahun"] ?>)</h3>
                            <h6>Sutradara : <?= $row["sutradara"] ?></h6>
                            <h6><?= $row["genre"] ?></h6>
                            <p>
                                <?= $row["sinopsis"] ?>
                            </p>
                            <p>
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">EDIT</a>
                                <a href="javascript:void(0);" class="btn btn-primary waves-effect" role="button">DELETE</a>
                            </p>
                            </div>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>