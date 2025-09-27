<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style> 
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            display: flex;
            flex-wrap: wrap;  
            gap: 20px;        
        }
        .sp {
            width: 150px;      
            text-align: center;
            border: 1px solid #ddd;
            padding: 10px;
            border-radius: 8px;
        }
        .sp img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
    <?php
        for($i=1;$i<=24;$i++)
        {
            $s = 'ao2.webp';
            ?>
            
            <div class="sp">
                <div>SAN PHAM <?php echo $i; ?> </div>
                <img src="<?php echo $s; ?>" alt="">
            </div>
            <?php
        }
    ?>
    </div>
</body>
</html>