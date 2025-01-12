<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="dashboard.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <nav class="navbar">
        <div class="logo">
            <i class="fas fa-book"></i>
            <span>Online Library Management System</span>
        </div>
        <button class="logout-btn">LOG ME OUT</button>
    </nav>

    <div class="menu-bar">
        <a href="#" class="active">DASHBOARD</a>
        <a href="#">CATEGORIES</a>
        <a href="#">AUTHORS</a>
        <a href="#">BOOKS</a>
        <a href="#">ISSUE BOOKS</a>
        <a href="#">REG STUDENTS</a>
        <a href="#">CHANGE PASSWORD</a>
    </div>

    <div class="container">
        <h1>ADMIN DASHBOARD</h1>
        
        <div class="stats-grid">
            <div class="stat-card">
                <i class="fas fa-book"></i>
                <h2>8</h2>
                <p>Books Listed</p>
            </div>
            
            <div class="stat-card">
                <i class="fas fa-sync"></i>
                <h2>1</h2>
                <p>Books Not Returned Yet</p>
            </div>
            
            <div class="stat-card">
                <i class="fas fa-users"></i>
                <h2>5</h2>
                <p>Registered Users</p>
            </div>
            
            <div class="stat-card">
                <i class="fas fa-user-edit"></i>
                <h2>11</h2>
                <p>Authors Listed</p>
            </div>
            
            <div class="stat-card">
                <i class="fas fa-list"></i>
                <h2>5</h2>
                <p>Listed Categories</p>
            </div>
        </div>
    </div>
</body>
</html>