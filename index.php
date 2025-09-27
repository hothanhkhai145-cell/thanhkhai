
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THÔNG TIN SINH VIÊN</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Comic+Neue:wght@700&display=swap" rel="stylesheet">
`   <style>
        body {
            font-family: 'Comic Neue', cursive;
            background-color: #ff6600 ;
            margin: 0;
            padding: 20px;
        }
        #main {
            background-color: #00ccff;
            padding: 20px;
            border-radius: 8px; 
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            margin: auto;
            text-align: center;
        }
        
        marquee {
            font-size: 24px;
            color: #fff;
            margin-bottom: 15px;
        }
        p {
            font-size: 18px;
            color: #ff000;
        }
        img {
            border-radius: 50%;
            margin-bottom: 15px;
        }
        #info {
            margin-top: 15px;
            text-align: left;
        }

        #footer {
            width: 400px;
            height: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin: auto;
            margin-top: 20px;
            background-color: #fff;
            display: flex;
            justify-content: space-around;
        }
        #footer a {
            text-decoration: none;
            color: #333;
            font-size: 18px;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <div id="main">
         <marquee behavior="scroll" direction="left" scrollamount="5"> THÔNG TIN SINH VIÊN  </marquee>
         <img src="hinh1.jpg" alt="Thành Khải" style="width:200px">
         <div id="info">
            <p>HỌ VÀ TÊN: HỒ THÀNH KHẢI</p>
            <p>MÃ SỐ SINH VIÊN: DH52200825</p>
            <p>LỚP: D22_TH10</p>
         </div>
        
    </div>
    <Div id="footer">
        <a href="a.php" > BÀI TẬP 1  </a>
        <a href="b.php" > BÀI TẬP 2  </a>
    </Div>
   
</body>
</html>