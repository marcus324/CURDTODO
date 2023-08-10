<?php 

$name = trim(htmlspecialchars($_REQUEST['name'], ENT_QUOTES));
$email = trim(htmlspecialchars($_REQUEST['email'], ENT_QUOTES));
$password = $_REQUEST['password'];
$gender = $_REQUEST['gender'];
$password_pattern = '/^[a-zA-Z0-9]{5,10}$/';

$errors = [];

if (strlen($name) == 0) {
    $errors['name'] = 'name is required';
}
if (strlen($password) == 0) {
    $errors['password'] = 'password is required';
} else if (!preg_match($password_pattern, $password)) {
    $errors['password'] = 'password must be greater that 5 and less than 10';
}
if (strlen($email) == 0) {
    $errors['email'] = 'email is required';
} else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'email is not valid email';
}
if (strlen($gender) == 0) {
    $errors['gender'] = 'gender is required';
}

$filename = './users.json';
$users = json_decode(file_get_contents($filename), true);
foreach ($users as $user) {
    if ($user['email'] == $email) {
        $errors['email'] = 'email is exist';
    }
}
if (count($errors)) {
    $errors = http_build_query($errors);
    header("Location:register_form.php?$errors");
}

$users[] = [
    'id' => !count($users) ? 1 :  ++end($users)['id'],
    'name' => $name,
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT),
    'gender' => $gender,
];

file_put_contents($filename, json_encode($users));
$path = '/path/to/files/';
$iterator = new FilesystemIterator($path);
foreach ($iterator as $fileInfo) {
    
    echo $fileInfo->getFilename() . PHP_EOL;
}
?>


