<?php

if (isset($_POST['submit'])) {
    // $name = filter_input(INPUT_POST,'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // $age = filter_input(INPUT_POST,'age', FILTER_SANITIZE_SPECIAL_CHARS);
 
    echo $name;
}
?>

<a href="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);  ?>?name=Brad&age=30">Click</a>

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