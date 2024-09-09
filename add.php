<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มสินค้า - Tanaka Japan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #f13f31;
            color: #fff;
            padding: 15px;
            text-align: center;
        }
        section {
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .form-container {
            width: 600px;
            padding: 50px;
            background-color: #f8f9fa;
            border: 1px solid #dee2e6;
            border-radius: 8px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            margin: auto;
        }
        h3 {
            color: #333;
            text-align: center;
        }
        input[type="text"] {
            margin-bottom: 15px;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #dee2e6;
            border-radius: 5px;
            width: 100%;
        }
        input[type="submit"] {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            width: 100%;
            margin-top: 10px;
        }
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
    </style>
</head>
<body>

    <header>
        <h1 style="color: white;">เพิ่มสินค้า</h1>
    </header>

    <section>
        <div class="form-container">
            <form action="adding.php" method="POST">
                <h3>รายละเอียดสินค้า</h3>
                <input type="text" name="ProductName" placeholder="ชื่อสินค้า">
                <input type="text" name="ProductDescription" placeholder="คำอธิบายสินค้า">
                <input type="text" name="ProductPrice" placeholder="ราคาสินค้า">
                <input type="text" name="ProductRating" placeholder="คะแนนสินค้า">
                <input type="submit" class="btn-success" value="เพิ่มข้อมูล">
            </form>
            <form action="index.php">
                <input type="submit" class="btn-danger" value="หน้าแรก">
            </form>
        </div>
    </section>

</body>
</html>
