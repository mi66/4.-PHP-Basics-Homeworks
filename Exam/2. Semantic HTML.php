<!DOCTYPE html>
<html>
<head>
    <title>Semantic HTML</title>
    <style>
        label, textarea, input {
            display: block;
            margin: 10px 0;
        }
        textarea {
            width: 600px;
            height: 100px;
        }
    </style>
</head>
<body>

<form action="SemanticHTML.php" method="get">
    <label for="input1">Enter text here:</label>
    <textarea id="input1" name="html"><div id="header">
        </div> <!-- header --></textarea>
    <input type="submit" value="Submit"/>
</form>

<br>
<br>


<form action="SemanticHTML.php" method="get">
    <label for="input2">Enter text here:</label>
    <textarea id="input2" name="html"><div style="color:red" id="header">
        </div> <!-- header --></textarea>
    <input type="submit" value="Submit"/>
</form>

<br>
<br>


<form action="SemanticHTML.php" method="get">
    <label for="input3">Enter text here:</label>
    <textarea id="input3" name="html"><div class="header" style="color:blue">
        </div> <!-- header --></textarea>
    <input type="submit" value="Submit"/>
</form>

<br>
<br>


<form action="SemanticHTML.php" method="get">
    <label for="input4">Enter text here:</label>
    <textarea id="input4" name="html"><div align="left" id="nav" style="color:blue">
            <ul class="header">
                <li id="main">
                    Hi, I have id="main".
                </li>
            </ul>
        </div> <!-- nav --></textarea>
    <input type="submit" value="Submit"/>
</form>

<br>
<br>


<form action="SemanticHTML.php" method="get">
    <label for="input5">Enter text here:</label>
    <textarea id="input5" name="html">  <p class = "section" >
        <div style = "border: 1px" id = "header" >
            Header
            <div id = "nav" >
                Nav
            </div>   <!--   nav   -->
        </div>  <!--header-->
        </p> <!-- end paragraph section --></textarea>
    <input type="submit" value="Submit"/>
</form>

<br>
<br>


</body>
</html>