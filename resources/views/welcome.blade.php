<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Shop</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #e8f5e3 0%, #f5f5dc 50%, #a8dadc 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .container {
            text-align: center;
            padding: 3rem;
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 90%;
        }

        h1 {
            color: #2a9d8f;
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        p {
            color: #6b705c;
            font-size: 1.2rem;
            margin-bottom: 3rem;
            line-height: 1.6;
        }

        .buttons {
            display: flex;
            gap: 1.5rem;
            justify-content: center;
            flex-wrap: wrap;
        }

        .btn {
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        }

        .btn-products {
            background: linear-gradient(135deg, #98d8c8 0%, #6bcaba 100%);
            color: white;
        }

        .btn-products:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(107, 202, 186, 0.4);
        }

        .btn-users {
            background: linear-gradient(135deg, #457b9d 0%, #1d3557 100%);
            color: white;
        }

        .btn-users:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 20px rgba(69, 123, 157, 0.4);
        }

        .icon {
            margin-right: 0.5rem;
            font-size: 1.2rem;
        }

        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }

            p {
                font-size: 1rem;
            }

            .buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome to Shop</h1>
        <p>In time, this will be the best online shop:) <br> Start managing our products and users.</p>

        <div class="buttons">
            <a href="{{ route('products.index') }}" class="btn btn-products">
                <span class="icon">🛍️</span>
                View Products
            </a>
            <a href="{{ route('users.index') }}" class="btn btn-users">
                <span class="icon">👥</span>
                Manage Users
            </a>
        </div>
    </div>
</body>
</html>
