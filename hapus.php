<?php
$id = $_GET["id"];
require 'functions.php';

if (hapus($id)>0) {
    echo "
        <script>
        alert('Film berhasil dihapus!');
        document.location.href = 'index.php';
        </script>
        ";
} else {
    echo "
        <script>
        alert('Film gagal dihapus!');
        document.location.href = 'index.php';
        </script>
        ";
}
?>