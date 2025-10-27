# Crypto Ransomware Simulator

## Disclaimer
This project is for <strong>educational</strong> and <strong>demonstration purposes only.</strong>
No real files are encrypted, no data is collected, and no payments are processed.
It is designed to teach how ransomware works in a safe, simulated environment.

## Project Overview
This project simulates the basic process of a <strong>crypto ransomware attack</strong>, from the moment 
a user downloads a malicious file to when their data appears "encrypted." The goal is to 
help students and cybersecurity enthusiasts understand the <strong>technical flow and social 
engineering aspects</strong> of ransomware without any real-world damage.

## Goals
- Educate others about how <strong>crypto ransomware</strong> operates.
- Demonstrate the <strong>attack and encryption phases</strong> safely.
- Provide an interactive learning tool for <strong>workshops or class presentations.</strong>
- Encourage responsible cybersecurity awareness and defensive thinking.

## Target Users
- Computer science students
- Cybersecurity beginners
- Educators teaching malware and ransomware concepts

## How the Simulation Works
1. The victim visits a <strong>fake bank webpage</strong> and downloads what appears to be a legitimate bank statement.
2. Upon clicking the <strong>Download button</strong>, the page transitions to a blank screen explaining what would 
happen during a real attack, downloading and encrypting files.
3. The user then moves to a <strong>ransom note email page</strong>, where they are asked to “pay” a simulated ransom 
(in Bitcoin).
4. When they press <strong>Pay Now</strong>, the simulator displays another page explaining that in a real attack, the 
victim may or may not receive the decryption key.

Throughout the process, <strong>no real encryption or payment</strong> takes place. The pages and scripts are only used to visually 
simulate these actions.

## General Features
- <strong>HTML</strong> – page layout and structure
- <strong>CSS</strong> – design and styling
- <strong>Python</strong> – handles timer and simulated logic (e.g., countdown to payment deadline)

## How to Run the Project
1. Clone this respository:
    `git clone https://github.com/yourusername/ransomware-simulator.git`
2. Open the folder in <strong>VS Code</strong> (or your preferred editor).
3. Right-click on index.html → <strong>Open with Live Server</strong> (or open it manually in your browser).
4. Follow the on-screen flow to simulate the ransomware infection process.

## How to install Live Server:
1. <strong>Open Extensions Panel</strong>
    - Open VS Code.
    - In the Activity Bar on the left side, click on the <strong>Extensions</strong> icon.
2. <strong>Search for Live Server</strong>
    - In the Extensions search box, type <strong>"Live Server"</strong>.
    - Look for the extension titled <strong>"Live Server"</strong> by <strong>Ritwick Dey</strong>.
    - Click on <strong>Install</strong> to install the Live Server extension.
3. <strong>Verify the Installation</strong>
    - After the installation, you will see a <strong>"Installed"</strong> message in the Extensions panel.
    - You can also check the Extensions sidebar, and <strong>Live Server</strong> should now be listed among your installed extensions.
4. <strong>Launch Live Server</strong>
    - Open the <strong>HTML file</strong> you want to preview in the browser.
    - At the bottom-right corner of the VS Code window, you will see a <strong>Go Live</strong> button. Click on it to start the Live Server.
    - Alternatively, you can right-click on your HTML file and select <strong>"Open with Live Server"</strong> from the context menu.
5. <strong>Live Preview in Browser</strong>
    - Your default web browser will open automatically with a live preview of your HTML page.
    - As you make changes to your code in VS Code, simply save the file, and the browser will automatically refresh, reflecting the changes instantly.
6. <strong>Stop the Live Server (Optional)</strong>
    - To stop the Live Server, simply click on the <strong>"Port: [number]"</strong> (for example, <strong>Port: 5500</strong>) at the bottom-right corner of VS Code. This will stop the live server and close the browser window.
    - You can also use the <strong>Stop Live Server</strong> button from the <strong>VS Code status bar</strong> if it's visible.