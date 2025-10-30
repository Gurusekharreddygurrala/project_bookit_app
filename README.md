# BookIt – Fullstack Booking Application

A simple and modern fullstack booking app for experiences and events using React (Vite) frontend and Node/Express backend.

## 📁 Project Structure

bookit-frontend/ # React + Vite client code
bookit-backend/ # Express + SQLite server/API


## 🚀 How to Run Locally

### 1. Backend

cd bookit-backend
npm install
npm run dev

*Visit [http://localhost:5000](http://localhost:5000) to test APIs.*

### 2. Frontend

cd bookit-frontend
npm install
npm run dev

text
*Visit [http://localhost:5173](http://localhost:5173) to use the app.*


## 🔑 Promo Codes

You can use these promo codes during checkout:

- `SAVE10` (gives 10% discount)
- `FLAT100` (flat ₹100 discount)


## 🛠️ Features

- Browse experiences and see available time slots
- Detailed booking page with information
- Prevents double-booking of time slots
- Promo code discount support
- Error handling for invalid inputs and booking conflicts


## 📦 Notes

- `node_modules/` is excluded. Run `npm install` before starting.
- The database (`travel.db`) auto-creates and seeds on backend first run.
- Do **not** upload `.env` or local DB files to the repo.

## 🙏 Credits

- Designed and developed by GURU SEKHAR REDDY GURRALA
- For internship/fullstack assessment/demo use
