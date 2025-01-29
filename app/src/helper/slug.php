<?php

function createSlug($text) {
    // Menghapus karakter yang tidak diinginkan (misalnya, simbol)
    $text = preg_replace('/[^a-zA-Z0-9\s-]/', '', $text);

    // Mengganti spasi dengan tanda hubung (hyphen)
    $text = preg_replace('/[\s-]+/', '-', $text);

    // Menghapus spasi atau tanda hubung di awal dan akhir string
    $text = trim($text, '-');

    // Mengubah semua karakter menjadi huruf kecil
    $text = strtolower($text);

    return $text;
}
