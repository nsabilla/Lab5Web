<?php


$database = new Database();
$nim = $_GET["nim"];

if (isset($_POST['submit'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'umur' => $_POST['umur'],
        'kelas' => $_POST['kelas']
    ];
    $database->update("tb_lab5web", $data, "nim=" . $nim);
    header("location: home");
}

$data = $database->get("tb_lab5web", "where nim=" . $nim);

$form = new Form("", "submit");
$form->addField("nim", "Nim", $data["nim"]);
$form->addField("nama", "Nama", $data["nama"]);
$form->addField("umur", "Umur", $data["umur"]);
$form->addField("kelas", "Kelas", $data["kelas"]);
$form->displayForm();
