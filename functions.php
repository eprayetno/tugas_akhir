<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_film");
function query($query) {
    global $koneksi;
    $result = mysqli_query($koneksi, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data) {
    global $koneksi;
    $judul = $data["judul"];
    $tahun = $data["tahun"];
    $genre = $data["genre"];
    $sutradara = $data["sutradara"];
    $poster = $data["poster"];
    $sinopsis = $data["sinopsis"];

    $query = "INSERT INTO film VALUES ('','$judul','$tahun','$genre','$sutradara','$poster','$sinopsis')";
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi);
}

function hapus($id) {
    global $koneksi;
    mysqli_query($koneksi,"DELETE FROM film WHERE id = $id");
    return mysqli_affected_rows($koneksi);
}

function update($data) {
    global $koneksi;
    $id = $data["id"];
    $judul = $data["judul"];
    $tahun = $data["tahun"];
    $genre = $data["genre"];
    $sutradara = $data["sutradara"];
    $poster = $data["poster"];
    $sinopsis = $data["sinopsis"];

    $query = "UPDATE film SET
                judul = '$judul',
                tahun = '$judul',
                genre = '$judul',
                sutradara = '$judul',
                poster = '$judul',
                sinopsis = '$judul'
                WHERE id = $id
                ";
    mysqli_query($koneksi,$query);
    return mysqli_affected_rows($koneksi); 
}
?>