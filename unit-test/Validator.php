<?php

// file: Validator.php
// Menambahkan fungsi baru ValidateName()
function ValidateName($name) {
    // Mengecek apakah nama kosong
    if (empty(trim($name))) {
        throw new InvalidArgumentException("Nama tidak boleh kosong");
    }
    
    // Mengecek apakah nama hanya berisi huruf dan spasi
    if (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
        throw new InvalidArgumentException("Nama harus berupa huruf");
    }

    return true;
}
?>