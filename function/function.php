<?php
$characters = 'abcdefghijklmnopqrstvuwyxzABCDEFGHIJKLMNOPQRSTVUWYXZ0123456789!@#$%^&*';
function random_pass($length_pass, $characters)
{
    return substr(str_shuffle($characters), 0, $length_pass);
};
