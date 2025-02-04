<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yes or No</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            position: relative;
        }
        .container {
            text-align: center;
        }
        button {
            padding: 15px 30px;
            font-size: 18px;
            margin: 10px;
            cursor: pointer;
            border: none;
            border-radius: 5px;
            transition: 0.3s;
        }
        #yesBtn {
            background-color: #4CAF50;
            color: white;
        }
        #noBtn {
            background-color: #f44336;
            color: white;
            position: absolute;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Do you agree?</h1>
        <button id="yesBtn" onclick="goToAnotherPage()">Yes</button>
        <button id="noBtn" onmouseover="moveButton()">No</button>
    </div>

    <script>
        function moveButton() {
            const button = document.getElementById('noBtn');
            const maxX = window.innerWidth - button.clientWidth;
            const maxY = window.innerHeight - button.clientHeight;

            const randomX = Math.floor(Math.random() * maxX);
            const randomY = Math.floor(Math.random() * maxY);

            button.style.left = `${randomX}px`;
            button.style.top = `${randomY}px`;
        }

        function goToAnotherPage() {
            window.location.href = 'https://www.example.com';
        }
    </script>
</body>
</html>
