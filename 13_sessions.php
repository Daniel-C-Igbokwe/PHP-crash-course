<?php 

if (isset($_POST['submit'])) {
    $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);

    $password = $_POST('password');

    echo $name;

    if($username == "John" && $password = 'password') {
        $_SESSION['username'] = $username;
        header('Location: /php-crash/extras/dashboard.php');
    } else {
        echo 'incorrect Login';
    }
}
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30"  method="POST">
    <div>
        <label for="username">Username: </label>
        <input type="text" name="username" />
    </div>
    <div>
        <label for="password">Password: </label>
        <input type="password" age="password" />       
    </div>
    <input type="submit" value="Submit" name="submit" />








