<?php

function date_br_to_mysql($data) {
    $data = explode("/", $data);
    $data_format = $data[2] . "-" . $data[1] . "-" . $data[0];
    return $data_format;
}

function date_mysql_to_br($data) {
    $data = explode("-", $data);
    $data_format = $data[2] . "/" . $data[1] . "/" . $data[0];
    return $data_format;
}
