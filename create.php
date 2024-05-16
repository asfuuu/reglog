<?php

$errors = [];
$data = [];

if (empty($_POST['name'])) {
    $errors['name'] = 'Name is required.';
}
if (empty($_POST['username'])) {
   $errors['username'] = 'username is required.';
}

if (empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}

if (empty($_POST['password'])) {
   $errors['password'] = 'Password is required.';
}
if (empty($_POST['confirmPassword'])) {
   $errors['confirmPassword'] = 'confirmPassword is required.';
}


if (!empty($errors)) {
    $data['success'] = false;
    $data['errors'] = $errors;
} else {
    $data['success'] = true;
    $data['message'] = 'Success!';
}

echo json_encode($data);