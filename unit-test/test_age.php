<?php 

require_once "Validator.php";

// --- Tambahan Test Case untuk ValidateName() ---

// Test case 3: Inputan nama lengkap (Valid)
try {
    $result = ValidateName("Nandana Febry Pradana");
    echo "PASS: Nama lengkap diterima\n";
} catch (Exception $e) {
    echo "FAIL: Nama lengkap tidak diterima. Error: " . $e->getMessage() . "\n";
}

// Test case 4: Nama dengan angka (Tidak Valid)
try {
    $result = ValidateName("febry 1212");
    echo "FAIL: Nama dengan angka seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Nama dengan angka ditolak. Error: " . $e->getMessage() . "\n";
}

// Test case 5: Input data kosong (Tidak Valid)
try {
    $result = ValidateName("");
    echo "FAIL: Data kosong seharusnya ditolak\n";
} catch (Exception $e) {
    echo "PASS: Data kosong ditolak. Error: " . $e->getMessage() . "\n";
}
?>
