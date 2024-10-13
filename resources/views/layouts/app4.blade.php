<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show User</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #1a1a1a 0%, #2c2c2c 50%, #1a1a1a 100%);
            height: 110vh;
            margin: 0;
            padding: 20px;
            overflow: hidden;
        }

        .container {
            max-width: 580px;
            margin: 20px auto;
            padding: 30px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.1);
            position: relative;
            z-index: 1;
        }
        h1 {
            color: #00ffee;
            text-align: center;
            margin-bottom: 30px;
        }

        .btn-list-user {
            display: inline-block;
            background-color: #3498db;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
            margin-left: 200px;
            transition: background-color 0.3s ease;
        }

        .btn-list-user:hover {
            background-color: #2980b9;
        }

        .konten-2 {
            margin-bottom: 20px;
        }

        .form-label {
            display: flex;
            margin-bottom: 20px;
            align-items: center;
            color: #00ffee;
            font-weight: bold;

        }

        .form-control, .form-select {
            width: 95%;
            padding: 10px;
            border: 0px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            color: #ffffff;
            background-color: rgba(255, 255, 255, 0.05);
        }

        .form-select {
            appearance: none;
            width: 95%;
            background-repeat: no-repeat;
            background-position: right 10px center;
        }

        .profile-img {
            max-width: 100%;
            height: auto;
            margin-top: 10px;
            border-radius: 4px;
        }

        .btn-submit, .btn-kembali {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-submit {
            background-color: #2ecc71;
            color: white;
            margin-right: 10px;
        }

        .btn-submit:hover {
            background-color: #27ae60;
        }

        .btn-kembali {
            background-color: #e74c3c;
            color: white;
            text-decoration: none;
        }

        .btn-kembali:hover {
            background-color: #c0392b;
        }

        .decoration {
            position: fixed;
            pointer-events: none;
            z-index: 0;
            opacity: 0.6;
        }

        .decoration::after {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle, rgba(255, 215, 0, 0.2) 0%, rgba(255, 215, 0, 0) 70%);
            transform: translate(-50%, -50%);
            filter: blur(5px);
        }

        .small {
            font-size: 20px;
        }

        .medium {
            font-size: 30px;
        }

        .large {
            font-size: 40px;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }


        @media (max-width: 768px) {
            .container {
                padding: 20px;
            }

            .btn-submit, .btn-kembali {
                display: block;
                width: 100%;
                margin-bottom: 10px;
            }
        }
    </style>
</head>
<body>
    @yield('content')

    <script src="..."></script>
</body>
</html>
