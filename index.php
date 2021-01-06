<!DOCTYPE html
        PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <link rel="stylesheet" type="text/css" href="main.css" />
</head>

<body>


<?php
/*
    $cleardb_url      = parse_url(getenv("CLEARDB_DATABASE_URL"));
    $cleardb_server   = $cleardb_url["host"];
    $cleardb_username = $cleardb_url["user"];
    $cleardb_password = $cleardb_url["pass"];
    $cleardb_db       = substr($cleardb_url["path"],1);

    
    echo $cleardb_server . "</br>";
    echo $cleardb_username . "</br>";
    echo $cleardb_password . "</br>";
    echo $cleardb_db;
    */
?>php

<div id="content">
    <h1>Insert event info</h1>
    <form action="product/search.php" method="GET">
        <div id="data">
            <label>Type of event:</label>
            <input type="text" name="event"><br />

            <label>Quantity of men:</label>
            <input type="text" name="qtyMen"><br />

            <label>Quantity of women:</label>
            <input type="text" name="qtyWomen"><br />

            <label>Quantity of children:</label>
            <input type="text" name="qtyChildren"><br />
        </div>

        <div id="buttons">
            <label>&nbsp;</label>
            <input type="submit" value="Call JSON"><br />
        </div>

    </form>
</div>
</body>

</html>