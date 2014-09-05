<!DOCTYPE html>
<html>
<head>
    <title>SoftUni Students</title>
    <style>
        label {
            display: inline-block;
            margin: 5px 0;
        }
    </style>
</head>
<body>
<form action="SoftUni-Students.php" method="get">
    <label for="column">Sort By:</label>
    <select name="column" id="column">
        <option value="id">id</option>
        <option value="username">username</option>
        <option value="result">result</option>
    </select><br>
    Show:
    <input type="radio" id="asc" name="order" value="ascending" checked="checked" />
    <label for="asc">Ascending</label>
    <input type="radio" id="desc" name="order" value="descending"/>
    <label for="desc">Descending</label><br>
    <label for="students">Students:</label><br>
    <textarea name="students" id="students" cols="50" rows="10">Pesho, pesho.g@gmail.com, onsite, 400
        Mariika, mariika@gmail.com, online, 350
        Geri, geri@gmail.com, online, 50
        Pesho, peshkata@gmail.com, onsite, 0
        Gosho & Kiro, gosho@gmail.com, onsite, 400
        Mincho, praznikov@vremeto.bg, online, 50</textarea><br>
    <input type="submit" value="Submit"/>
</form>
</body>
</html>