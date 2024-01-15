# Web Applications in PHP January Preparation

## Overview
This repository contains the necessary files and instructions for the PHP January exam scheduled for January 18th, 2024. Ensure you have at least 200MB of free space on your hard drive for setup.

## Setup Instructions
1. **Clone the Repository:** Clone this repo to `c:\sites_laravel`.
2. **Configure Homestead:**
    - Add `php2324.test` to `homestead.yaml`.
    - Add `php2324` to databases in `homestead.yaml`.
3. **Environment Setup:**
    - Rename `.env.example` to `.env`.
    - Restart and reprovision your Homestead.
4. **Project Initialization:**
    - In PhpStorm, open the project `php2324`.
    - Run `npm install && composer install` in the terminal.
    - Migrate the database with `php artisan migrate`.
    - Cache the icons using `php artisan icons:cache`.
5. **Customize Footer:** Adjust the footer component to display your name and date/time.

## Usage
- After setting up, run `npm run dev` and navigate to `http://php2324.test/` to check if the application is working.
- Note that the 'Shows' link may not be functional initially.

## Final Remarks
- The exam is 3 hours, open book/internet, and monitored.
- Ensure PhpStorm is updated to the latest version and remove AI extensions like Copilot.
- During the exam, take screenshots of your progress as required.
