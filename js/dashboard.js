document.addEventListener('DOMContentLoaded', function() {
    const adminDropdown = document.getElementById('admin-dropdown');
    adminDropdown.addEventListener('click', function(e) {
        // Prevent toggling when clicking submenu items
        if (e.target.closest('.sidebar-submenu')) return;
        adminDropdown.classList.toggle('open');
    });

    const attendanceDropdown = document.getElementById('attendance-dropdown');
    attendanceDropdown.addEventListener('click', function(e) {
        if (e.target.closest('.sidebar-submenu')) return;
        attendanceDropdown.classList.toggle('open');
    });

    const marksDropdown = document.getElementById('marks-dropdown');
    marksDropdown.addEventListener('click', function(e) {
        if (e.target.closest('.sidebar-submenu')) return;
        marksDropdown.classList.toggle('open');
    });
});
