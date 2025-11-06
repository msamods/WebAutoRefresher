
---

## 💻 3. index.php (Full Web Version)
Save this as `index.php`  
(URL references automatically point to your GitHub repo `msamods/WebAutoRefresher`)

```php
<?php
// ------------------------------------------------------------
// WebAutoRefresher (Web Version)
// Created by Shefin | MSAMODS | WhatYouWantKerala (WyWk.in)
// Repo: https://github.com/msamods/WebAutoRefresher
// ------------------------------------------------------------
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $url = trim($_POST['url'] ?? '');
    $qty = (int)($_POST['qty'] ?? 0);
    $delay = (int)($_POST['delay'] ?? 2000);

    if (!filter_var($url, FILTER_VALIDATE_URL) || $qty <= 0) {
        $error = "❌ Please enter a valid URL and quantity greater than 0.";
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <title>Running | WebAutoRefresher</title>
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <style>
                body {
                    background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
                    font-family: "Poppins", sans-serif;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    color: #fff;
                }
                .container {
                    background: rgba(255, 255, 255, 0.1);
                    padding: 40px;
                    border-radius: 15px;
                    box-shadow: 0 8px 25px rgba(0,0,0,0.3);
                    text-align: center;
                    width: 90%;
                    max-width: 480px;
                }
                h1 {
                    color: #00e6ac;
                    font-size: 28px;
                }
                .log {
                    margin-top: 20px;
                    font-size: 18px;
                }
                .done { color: #00ffcc; font-weight: bold; }
                button {
                    background: #00e6ac;
                    border: none;
                    padding: 10px 25px;
                    color: #000;
                    border-radius: 8px;
                    cursor: pointer;
                    font-weight: 600;
                    margin-top: 15px;
                    transition: 0.3s;
                }
                button:hover {
                    background: #00ffbf;
                    transform: scale(1.05);
                }
                a {
                    color: #00e6ac;
                    text-decoration: none;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>WebAutoRefresher 🚀</h1>
                <p>Refreshing <strong><?php echo htmlspecialchars($url); ?></strong><br>
                Total: <strong><?php echo $qty; ?></strong> times<br>
                Delay: <strong><?php echo $delay; ?> ms</strong></p>

                <div id="log" class="log">Starting...</div>
                <button id="stopBtn" onclick="stopRun()">🛑 Stop</button>
                <p style="margin-top:20px;font-size:14px;color:#ccc;">
                    <a href="https://github.com/msamods/WebAutoRefresher" target="_blank">MSAMODS @ GitHub</a>
                </p>
            </div>

            <script>
                const url = <?php echo json_encode($url); ?>;
                const total = <?php echo json_encode($qty); ?>;
                const delay = <?php echo json_encode($delay); ?>;
                let count = 0;
                let stopped = false;

                function refreshNow() {
                    if (stopped) return;
                    if (count >= total) {
                        document.getElementById('log').innerHTML = "✅ <span class='done'>Completed</span> " + total + " refreshes.";
                        return;
                    }
                    count++;
                    document.getElementById('log').innerHTML = "🔁 Refreshing " + count + " / " + total;
                    window.open(url, '_blank');
                    setTimeout(refreshNow, delay);
                }

                function stopRun() {
                    stopped = true;
                    document.getElementById('log').innerHTML = "⛔ Stopped after " + count + " refreshes.";
                }

                if (confirm("Start refreshing " + total + " times?\n⚠️ Only use for testing your own sites.")) {
                    refreshNow();
                } else {
                    document.getElementById('log').innerHTML = "❎ Cancelled by user.";
                }
            </script>
        </body>
        </html>
        <?php
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WebAutoRefresher</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #fdbb2d);
            font-family: "Poppins", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #fff;
        }
        .form-container {
            background: rgba(0,0,0,0.7);
            padding: 40px;
            border-radius: 20px;
            width: 90%;
            max-width: 480px;
            text-align: center;
            box-shadow: 0 8px 25px rgba(0,0,0,0.4);
        }
        h2 {
            color: #00e6ac;
            font-size: 30px;
        }
        input {
            width: 80%;
            padding: 12px;
            margin: 10px 0;
            border: none;
            border-radius: 10px;
            outline: none;
            font-size: 16px;
        }
        button {
            background: #00e6ac;
            color: #000;
            border: none;
            padding: 12px 30px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 18px;
            font-weight: 600;
            transition: 0.3s;
        }
        button:hover {
            background: #00ffbf;
            transform: scale(1.05);
        }
        p.note {
            font-size: 14px;
            color: #ffeb3b;
        }
        a {
            color: #00ffbf;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>🌐 WebAutoRefresher</h2>
        <?php if (!empty($error)): ?>
            <p style="color: #ff4444; font-weight:bold;"><?php echo htmlspecialchars($error); ?></p>
        <?php endif; ?>
        <form method="POST">
            <input type="url" name="url" placeholder="Enter URL (e.g. https://wywk.in)" required><br>
            <input type="number" name="qty" placeholder="No. of refreshes" min="1" required><br>
            <input type="number" name="delay" placeholder="Delay in ms (default 2000)" value="2000"><br>
            <button type="submit">🚀 Start Auto Refresh</button>
        </form>
        <p class="note">⚠️ For safe web testing only.<br>
        <a href="https://github.com/msamods/WebAutoRefresher" target="_blank">View Project on GitHub</a></p>
    </div>
</body>
</html>
