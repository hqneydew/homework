<!DOCTYPE html>
<html>
<head>
    <title>Календарь</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td {
            text-align: center;
            padding: 8px;
        }
        .weekend {
            background-color: pink;
        }
        .holiday {
            background-color: red;
        }
    </style>
</head>
<body>
    <div id="calendar"></div>

    <script src="calendar.js"></script>
    <script>
        // Запуск функции при загрузке страницы
        window.onload = function() {
            generateCalendar();
        };
    </script>
</body>
</html>