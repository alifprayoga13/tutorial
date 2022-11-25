<?php

$conn = mysqli_connect("localhost", "root", "", "multi_user");

if (!$conn) {
    echo "Connection Failed";
}
