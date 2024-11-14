<?php

if (isset($_POST['submit'])) {
    echo $_GET['name'];
    echo $_GET['age'];
}
?>

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30">Click</a>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&age=30"  method="POST">
    <div>
        <label for="name">Name: </label>
        <input type="text" name="" />
    </div>
    <div>
        <label for="age">Age: </label>
        <input type="text" age="age" />       
    </div>
    <input type="submit" value="Submit" name="submit" />

</form>"></form>