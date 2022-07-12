<?php

$pdo = new PDO("sqlite:banco.sqlite");

$pdo->exec("CREATE TABLE students (id INTEGER PRIMARY KEY, name TEXT, birth_date TEXT);");

echo "uahsuhauhsuahus";

