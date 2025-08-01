<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/adminDashboard.css">
</head>
<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h2>Schooling</h2>
        </div>
        <ul class="sidebar-menu">
            <li class="sidebar-dropdown" id="admin-dropdown">
                <span class="icon">👤</span>
                <span class="dropdown-title">Admin</span>
                <span class="dropdown-arrow">&#9654;</span>
                <ul class="sidebar-submenu">
                    <li class="active" id="admin-dashboard-link"><span class="icon">🏠</span> Admin Dashboard</li>
                    <li><span class="icon">➕</span> Add Student</li>
                    <li><span class="icon">👨‍💼</span> Add Employee</li>
                    <li><span class="icon">📋</span> Student Details</li>
                    <li><span class="icon">📋</span> Employee Details</li>
                </ul>
            </li>
            <li class="sidebar-section">Navigation</li>
            <li class="sidebar-dropdown" id="marks-dropdown">
                <span class="icon">🎓</span>
                <span class="dropdown-title">Marks</span>
                <span class="dropdown-arrow">&#9654;</span>
                <ul class="sidebar-submenu">
                    <li><span class="icon">➕</span> Add Marks</li>
                    <li><span class="icon">👁️</span> View Marks</li>
                </ul>
            </li>
            <li class="sidebar-dropdown" id="attendance-dropdown">
                <span class="icon">👨‍🏫</span>
                <span class="dropdown-title">Attendance</span>
                <span class="dropdown-arrow">&#9654;</span>
                <ul class="sidebar-submenu">
                    <li><span class="icon">👨‍🏫</span> Teacher Attendance</li>
                    <li><span class="icon">🎓</span> Student Attendance</li>
                </ul>
            </li>
            <li class="sidebar-section">Navigation</li>
            <li><span class="icon">⚙️</span> Settings</li>
        </ul>
    </div>
    <div class="main-content" id="main-content">
        <?php include 'adminDashboard.php'; ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="js/dashboard.js"></script>
    <script src="js/adminDashboard.js"></script>
</body>
</html> 