<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
<div>
    <h1>Calculate distance</h1>
    <form action="output.php" method="post">
        <input type="number" name="railings" id="railings"/>
        <label for="railings">Railings</label>
        <br>
        <input type="number" name="posts" id="posts"/>
        <label for="posts">Posts</label>
        <input type="submit" />
    </form>
</div>

<div>
    <h1>Calculate Railings and Posts required</h1>
    <form action="output.php" method="post">
        <input type="text" name="distance" />
        <label for="distance">distance</label>
        <input type="submit" />
    </form>
</div>

</body>
</html>