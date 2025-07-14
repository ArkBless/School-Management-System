# Schooling Admin Dashboard

A modern, responsive web-based admin dashboard for school management. This project features a secure admin login, sidebar navigation with dropdowns, summary statistic cards, and interactive charts for data visualization.

## Features

- **Admin Login:** Secure login page with hardcoded admin credentials (`admin`/`admin`). No registration allowed.
- **Sidebar Navigation:** Collapsible sidebar with dropdown menus for Admin, Attendance, and Marks sections.
- **Dashboard Overview:** Summary cards for total students, employees, subjects, and holidays.
- **Quick Actions:** Buttons for adding students/employees, planning the academic calendar, and sending announcements.
- **Interactive Charts:** Pie chart visualization for monthly absentees using Chart.js.
- **Responsive Design:** Clean, modern UI styled with CSS for a professional look.

## Tech Stack

- **Frontend:** HTML, CSS, JavaScript
- **Backend:** PHP (for page structure and includes)
- **Charts:** [Chart.js](https://www.chartjs.org/) (via CDN)

## Getting Started

1. **Clone the repository:**
   ```bash
   git clone https://github.com/your-username/your-repo-name.git
   cd your-repo-name
   ```

2. **Set up a local PHP server:**
   - You can use [XAMPP](https://www.apachefriends.org/) or the built-in PHP server:
     ```bash
     php -S localhost:8000
     ```

3. **Open the app:**
   - Visit `http://localhost:8000/index.php` in your browser.

4. **Login:**
   - **Username:** `admin`
   - **Password:** `admin`

## File Structure

- `index.php` — Admin login page
- `dashboard.php` — Main dashboard layout with sidebar
- `adminDashboard.php` — Dashboard content (cards, actions, chart)
- `css/` — Stylesheets (`dashboard.css`, `adminDashboard.css`, `index.css`)
- `js/` — JavaScript files (`dashboard.js`, `adminDashboard.js`, `login.js`)

## Customization

- To change the hardcoded admin credentials, edit the logic in `js/login.js`.
- To add more dashboard features, extend `adminDashboard.php` and related JS/CSS files.

## License

This project is for educational purposes. Please adapt and extend as needed for your use case.

---

**Enjoy managing your school with ease!**
