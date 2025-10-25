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