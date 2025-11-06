# WebAutoRefresher

**WebAutoRefresher** is a small, safe-for-testing PHP project that automates repeated requests or browser opens for a given URL.  
It provides two modes:

- **Browser mode** (`index.php`): opens the target URL in new browser tabs/windows repeatedly (visible) — useful for simple manual testing.
- **Silent mode (curl)** (`refresher_curl.php`): sends HTTP requests in the background using PHP `curl` (no pop-up tabs) — useful for load or functional testing of your own endpoints.

> ⚠️ **Important**: Use this tool **only** on websites that you own or have explicit permission to test. Do **not** use it to artificially inflate traffic, impressions, or perform any abusive activity. Misuse may violate laws or service terms.

---

## Features

- Accepts a target URL and number of repetitions (quantity).
- Browser mode: triggers repeated `window.open()` (works from your browser).
- Silent mode: performs repeated `curl` requests from the server/host (no visible pop-ups).
- Configurable delay between requests.
- Simple and minimal code — easy to adapt.

---

## Usage

### 1. Browser mode (visible tabs)
1. Place `index.php` in a web server root (e.g. `/var/www/html/WebAutoRefresher`).
2. Open in your browser: `http://your-server/WebAutoRefresher/index.php`.
3. Enter the URL and a quantity (e.g., 100), press **Start Auto Refresh**.
4. The script will open the target URL in new tabs with a short delay. Close tabs when done.

### 2. Silent / curl mode (no browser pop-ups)
1. Place `refresher_curl.php` on your PHP-enabled server.
2. Call it from command line or via browser with POST data (recommended via CLI to avoid timeouts).
3. Example CLI:
```bash
php refresher_curl.php "https://example.com" 100 1
