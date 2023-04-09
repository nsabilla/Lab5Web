<?php

include "form.php";
include "database.php";
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

echo "<html><head><link href=\"style.css\" rel=\"stylesheet\" type=\"text/css\" /><title>Mahasiswa</title></head><body><div class=\"container\">";
$form = new Form("form_input.php", "submit");
$form->addField("nim", "Nim");
$form->addField("nama", "Nama");
$form->addField("umur", "Umur");
$form->addField("kelas", "Kelas");
$form->displayForm();
echo "</div></body></html>";
