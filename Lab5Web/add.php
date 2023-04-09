<?php

$database = new Database();
if (isset($_POST['submit'])) {
    $data = [
        'nim' => $_POST['nim'],
        'nama' => $_POST['nama'],
        'umur' => $_POST['umur'],
        'kelas' => $_POST['kelas']
    ];
    $database->insert("tb_lab5web", $data);
}

$form = new Form("", "submit");
$form->addField("nim", "Nim");
$form->addField("nama", "Nama");
$form->addField("umur", "Umur");
$form->addField("kelas", "Kelas");
$form->displayForm();