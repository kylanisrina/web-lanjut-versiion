<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>App 1</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap');

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2),
                        0 0 20px rgba(103, 126, 234, 0.5);
            width: 350px;
            position: relative;
            overflow: hidden;
        }
        .logo {
            width: 80px;
            height: 80px;
            position: absolute;
            top: -20px;
            left: -10px;
            background-color: #4a69dd;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 24px;
            font-weight: bold;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #4a69dd;
            margin-bottom: 1.5rem;
            font-weight: 600;
        }
        label {
            display: block;
            margin-bottom: 0.5rem;
            color: #555;
            font-weight: 500;
        }
        input[type="text"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-sizing: border-box;
            transition: border-color 0.3s ease;
        }
        input[type="text"]:focus {
            outline: none;
            border-color: #4a69dd;
            box-shadow: 0 0 0 2px rgba(74, 105, 221, 0.2);
        }
        input[type="submit"] {
            width: 100%;
            padding: 0.75rem;
            background-color: #4a69dd;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            transition: background-color 0.3s ease, transform 0.1s ease;
        }
        input[type="submit"]:hover {
            background-color: #3d5abb;
        }
        input[type="submit"]:active {
            transform: scale(0.98);
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
        }

        .logo {
            text-align: center;
            font-size: 24px;
            margin-bottom: 20px;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        input, select {
            margin-bottom: 10px;
            padding: 5px;
        }
        .input-invalid {
            border: 1px solid red;
        }
        .pesan-error {
            color: red;
            font-size: 0.8em;
            margin-top: -5px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    @yield('content')

 <script src="..."></script>
</body>
</html>