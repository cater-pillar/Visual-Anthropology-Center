<?php

$conn = new mysqli('localhost', 'root', '', 'vac');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

$conn -> set_charset("utf8");