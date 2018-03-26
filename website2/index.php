<?php include 'server-info.php'; ?>
<DOCTYPE! html>
<html>
<head>
    <title>System Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Server & File Info</h1>
        <!-- If you are inside of html markup, and need to
        add an if statement or a loop, etc. that
        modifies or adds to the html, It is better to
         use a : after the last ), close the php tag
         and then below create a new php tag that ends
         the php code. Stick the html being modified or
         added between the two php tags-->
        <?php if($server): ?>
            <ul class="list-group">
                <?php
                    /*
                     * $server is our array list.
                     * $key is each individual 'key'
                     * In that list. And $value is the
                     * 'value' of each key.
                     *
                     * This is long hand syntax
                     * See next php tag for short hand version
                     */
//                    foreach($server as $key => $value) {
//                        // echo with both double and single quotes
//                        echo "$key: $value <br>";
//                        //echo $key.': '.$value.'<br>';
//                    }
                ?>
                <?php foreach($server as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key;?>: </strong>
                        <?php echo $value;?>
                        <br>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>

        <h1>Client Info</h1>
        <?php if($client): ?>
            <ul class="list-group">
                <?php foreach($client as $key => $value): ?>
                    <li class="list-group-item">
                        <strong><?php echo $key;?>: </strong>
                        <?php echo $value;?>
                        <br>
                    </li>
                <?php endforeach; ?>
            </ul>
        <?php endif; ?>
    </div>
</body>
</html>