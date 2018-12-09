<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Shadows+Into+Light+Two" rel="stylesheet">
    <link rel="stylesheet" href="css/main.css">

    <title>To Do</title>
</head>
<body>
    <div class="list">
        <h1 class="header">To Do</h1>
        <ul class="items">
            <li>
                <span class="item">Buy Groceries</span>
                <a href="#" class="done-button">Mark as done</a>
            </li>
            <li>
                <span class="item done">Learn PHP</span>
                
            </li>
        </ul>
        <form class="item-add" action="add.php" method="post">
            <input type="text" name="name" placeholder="Type a new task here" class="input" autocomplete="off" required>
            <input type="submit" value="Add" class="submit">
        </form>

    </div>
</body>
</html>