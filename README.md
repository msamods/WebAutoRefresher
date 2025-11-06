# 🌐 WebAutoRefresher

**WebAutoRefresher** is an open-source automation tool built by **Shefin** and the **MSAMODS Team** for the **WhatYouWantKerala (WyWk)** community — [wywk.in](https://wywk.in).  
It helps developers safely **auto-refresh or test web pages** for performance, uptime, and behavior under repeated requests.

> ⚠️ This tool is made for **educational and testing purposes only**.  
> Use it only on **your own websites** or those you have permission to test.  
> Do **not** use it for artificial traffic or analytics manipulation.

---

## 🧠 Overview

| Mode | Description | File |
|------|--------------|------|
| 💻 Web UI | Beautiful, browser-based interface for auto-refresh testing | [`index.php`](https://github.com/msamods/WebAutoRefresher/blob/main/index.php) |
| 🖥️ CLI Tool | Terminal-friendly script using `curl` for silent background refreshes | [`autorefresh.sh`](https://github.com/msamods/WebAutoRefresher/blob/main/autorefresh.sh) |

---

## ✨ Features

- 🎨 Clean and colorful UI (gradient + glass design)
- ⚙️ Customizable refresh delay
- 📄 PHP + HTML + JavaScript (no external dependencies)
- 💬 CLI version for automation via Bash
- 🧠 Works on localhost or remote servers
- 📊 Logs and completion summary
- 🪶 Lightweight, open-source, and free

---

## 🧩 Web Version Usage (index.php)

### 🛠️ Installation
1. Copy or clone the repo:
   ```bash
   git clone https://github.com/msamods/WebAutoRefresher.git
   cd WebAutoRefresher
Place the files in your PHP web server directory (e.g. htdocs/WebAutoRefresher/).

Start your server (XAMPP / Laragon / LAMP / PHP Built-in):

bash
Copy code
php -S localhost:8000
Open in browser:

bash
Copy code
http://localhost:8000/index.php
▶️ How to Use
Enter your Target URL (e.g., https://wywk.in)

Set Number of Refreshes (e.g., 10)

Set Delay (milliseconds) between refreshes (e.g., 2000)

Click 🚀 Start Auto Refresh

The system logs each refresh in real-time.

Stop anytime with the 🛑 Stop button.

🧰 CLI Version Usage (autorefresh.sh)
🧩 Setup
Make sure you have bash and curl installed.

Give execution permission:

bash
Copy code
chmod +x autorefresh.sh
Run:

bash
Copy code
./autorefresh.sh
💬 Example Run
java
Copy code
===============================================
🌐 WebAutoRefresher v1.0
Developed by Shefin & MSAMODS | WyWk.in
===============================================

🔗 Enter the URL to refresh: https://wywk.in
🔁 Enter number of refreshes: 5
⏱️ Enter delay between refreshes (seconds, default 2): 1

[1/5] ✅ Refreshed successfully (HTTP 200)
[2/5] ✅ Refreshed successfully (HTTP 200)
...
✅ Completed 5 refreshes.
🎉 Thanks for Using | MSAMODS & WyWk.in 🚀
🧱 Project Structure
bash
Copy code
WebAutoRefresher/
│
├── index.php           # Web UI version (HTML + PHP)
├── autorefresh.sh      # CLI version for terminal users
├── LICENSE             # MIT License
└── README.md           # Documentation (this file)
📸 Screenshots (Optional)
You can add images here once the project is live.

scss
Copy code
![WebAutoRefresher UI](assets/screenshot1.png)
![CLI Output](assets/screenshot2.png)
(Place images inside /assets/ folder and update paths.)

👨‍💻 Developers
Name	Role	GitHub
Shefin	Lead Developer	@Shefin
MSAMODS Team	Contributors	github.com/msamods

🧩 Community: WhatYouWantKerala (WyWk)

🪪 License
Licensed under the MIT License.
You’re free to use, modify, and distribute this project with credit to MSAMODS and WyWk.

See LICENSE for full details.

🔖 Keywords
Shefin, MSAMODS, WyWk, wywk.in, Kerala, WebAutoRefresher,
auto-refresh, php, bash, curl, automation, testing,
developer-tools, open-source, github, website-tools

💡 Support & Contribution
🛠️ Want to improve it? Fork and create a pull request!
💬 Report issues or suggest features on the GitHub Issues page.
🌍 Stay connected with the WyWk community: wywk.in

❤️ Credits
Developed by Shefin
Under MSAMODS — github.com/msamods
For the WhatYouWantKerala (WyWk) community — wywk.in

“We build tools for what you want — not what you’re told.”
— MSAMODS | WyWk Kerala

