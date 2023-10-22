<!DOCTYPE html>
<html>
<head>
   
</head>
<body>
    <?php
    $letterA = 'A';
    $letterB = 'B';
    $letterC = 'C';
    ?>

    <div >
        <div class="row">
            <div class="box"><?php echo $letterA; ?></div>
        </div>
        <div class="row">
            <div class="box"><?php echo $letterA; ?></div>
            <div class="box"><?php echo $letterB; ?></div>
            
        </div>
        <div class="row">
            <div class="box"><?php echo $letterA; ?></div>
            <div class="box"><?php echo $letterB; ?></div>
            <div class="box"><?php echo $letterC; ?></div>
        </div>
    </div>
    <div>
    <style>
       
            

        
        .clear{
            display: flex;
            margin-bottom: 10px;
            align-items: left;
            
        }
        .kotak {
            width: 100px;
            height: 100px;
            border: 1px solid black;
            text-align: center;
            line-height: 100px;
            align-items: left;
           margin: 5px;
            
        }
    </style>
    <?php

    $angka = 10;

        echo " $angka.<br>";

        $angka_kali = $angka * 8;
        echo "8*10= $angka_kali. <br>";

        $angka_bagi = $angka_kali / 4;
        echo "80/4 =$angka_bagi. <br>";

        $angka_kurang = $angka_bagi - 6;    
        echo "20-6= $angka_kurang. <br>";

        $angka_tambah = $angka_kurang + 2;
        echo "14+2=$angka_tambah. <br>";
?>

    </div>
   
</body>
</html>
