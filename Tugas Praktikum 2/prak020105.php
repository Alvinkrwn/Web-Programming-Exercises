<html>

<head>Headings</head>
<style type="text/css">
    .warna {
        font-family: sans;
        color: red;
    }
</style>

<body>
    <?php
    $i = 1;
    do {
        if ($i % 2 == 0) {
            echo '<h' . $i . ' class="warna">Heading ' . $i . '</h' . $i . '>';
        } else {
            echo '<h' . $i . '>Heading ' . $i . '</h' . $i . '>';
        }

        $i++;
    } while ($i <= 6);
    ?>
</body>

</html>