<html>
<head>
    <script>
        function loaded()
        {
            alert("Congratulations! You are now subscribed!");
            window.setTimeout(CloseMe, 500);
        }

        function CloseMe()
        {
            window.close();
        }
    </script>
</head>
<body onLoad="loaded()">
Congratulations! You are now subscribed!
</body>