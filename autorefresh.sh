#!/bin/bash
# --------------------------------------------------------
# WebAutoRefresher (CLI)
# Created by Shefin | MSAMODS | WhatYouWantKerala (WyWk.in)
# --------------------------------------------------------

clear
echo "==============================================="
echo "🌐 WebAutoRefresher v1.0"
echo "Developed by Shefin & MSAMODS | WyWk.in"
echo "==============================================="
echo ""

# Ask for URL
read -p "🔗 Enter the URL to refresh: " URL

# Validate URL
if [[ ! "$URL" =~ ^https?:// ]]; then
  echo "❌ Invalid URL. Please include http:// or https://"
  exit 1
fi

# Ask for number of refreshes
read -p "🔁 Enter number of refreshes: " COUNT

if ! [[ "$COUNT" =~ ^[0-9]+$ ]]; then
  echo "❌ Invalid number. Please enter digits only."
  exit 1
fi

# Ask for delay (optional)
read -p "⏱️ Enter delay between refreshes (seconds, default 2): " DELAY
DELAY=${DELAY:-2}

echo ""
echo "🚀 Starting $COUNT refreshes for:"
echo "➡️  $URL"
echo "⏳ Delay: ${DELAY}s"
echo "==============================================="
echo ""

for ((i=1; i<=COUNT; i++))
do
  RESPONSE=$(curl -o /dev/null -s -w "%{http_code}" "$URL")
  if [ "$RESPONSE" -eq 200 ]; then
    echo "[$i/$COUNT] ✅ Refreshed successfully (HTTP 200)"
  else
    echo "[$i/$COUNT] ⚠️ HTTP $RESPONSE"
  fi
  sleep "$DELAY"
done

echo ""
echo "==============================================="
echo "✅ Completed $COUNT refreshes."
echo "🎉 Thanks for Using | MSAMODS & WyWk.in 🚀"
echo "==============================================="
