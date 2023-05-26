<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Factura Fast Service</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            color: #333333;
        }
        
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #cccccc;
            border-radius: 4px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        
        .logo {
            margin-bottom: 10px;
        }
        
        .logo img {
            max-width: 150px;
        }
        
        .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        
        .subtitle {
            font-size: 16px;
            margin-bottom: 10px;
        }
        
        .invoice-details {
            margin-bottom: 20px;
        }
        
        .item {
            margin-bottom: 10px;
        }
        
        .item .name {
            font-weight: bold;
        }
        
        .item .price {
            float: right;
        }
        
        .total {
            font-size: 18px;
            font-weight: bold;
            text-align: right;
            margin-top: 20px;
        }
        
        .contact-info {
            margin-top: 20px;
            text-align: center;
        }
        
        .phone {
            margin-bottom: 5px;
        }
        
        .email {
            color: #0044cc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="title">Factura FastService</div>
            <div class="subtitle">Restaurante de comida mejicana</div>
        </div>
        
        <div class="invoice-details">
            @foreach($productos as $producto)
            <div class="item">
                <div class="name">{{ $producto->nombre }}</div>
                <div class="price">${{ $producto->precio }}</div>
            </div>
            @endforeach
        </div>
        
        <div class="total">
            Total: ${{ $total }}
        </div>
        
        <div class="contact-info">
            <div class="phone">Teléfono: 656 885 207</div>
            <div class="email">Email: fastservice2@outlook.es</div>
        </div>
    </div>
</body>
</html>
