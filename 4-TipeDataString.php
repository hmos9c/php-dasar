<?php

echo 'Name : ';
echo 'Sanas Febriyan';
echo "\n";

echo "Name : ";
echo "Sanas\t Febriyan\n";

echo <<<TEXT
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc

TEXT;

echo <<<'SANAS'
Selamat belajar PHP
sekarang, kita belajar tipe data string
ini adalah cara ke-3 membuat string
bisa menggunakan heredoc
SANAS;
