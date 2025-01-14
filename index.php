<!DOCTYPE html>
<html>
<head>
    <title>Current Time</title>
    <script>
        function displayBrowserTime() {
            const browserTime = new Date();
            document.getElementById('browserTime').innerText = browserTime.toString();
        }

        window.onload = displayBrowserTime;
    </script>
</head>
<body>
    <h1>Current Time</h1>
    <p><strong>Browser's Timezone:</strong> <span id="browserTime"></span></p>
    <p><strong>UTC Time:</strong> <?php echo gmdate("Y-m-d H:i:s"); ?> UTC</p>
</body>
</html>