<?php
$json = file_get_contents("https://www.digilabs.cz/hiring/data.json");
$data = json_decode($json, true);