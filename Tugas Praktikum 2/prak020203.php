<!DOCTYPE html>
<html lang="en">

<head>
    <style>
        .warnaganjil {
            font-family: sans;
            color: red;
            background-color: white;
        }

        .warnagenap {
            font-family: sans;
            color: white;
            background-color: red;
        }
    </style>
</head>

<body>
    <?php
    $baris = 4;
    $kolom = 5;
    $angka = 1;
    echo "<table border='1'>";

    for ($i = 1; $i <= $baris; $i++) {
        echo "<tr>";

        for ($j = 1; $j <= $kolom; $j++) {
            if ($angka % 2 === 0) { ?>

                <td class="warnagenap"><?= $angka ?></td>
                
            <?php } else { ?>
                    
                <td class="warnaganjil"><?= $angka ?></td>

            <?php }

            $angka++;
        }

        echo "</tr>";
    }

    echo "</table>";
    ?>

</body>

</html>