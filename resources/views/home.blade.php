<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWAKU App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Arial', sans-serif;
            background-color: #EDF1D6
        }

        .navbar {
            background-color: #8D7B68;
            padding: 20px;
            color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        .navbar-menu {}

        .app-name {
            font-size: 24px;
            font-weight: bold;
            margin-right: 20px;
        }

        .top-right-menu {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .icon {
            font-size: 18px;
            color: white;
            cursor: pointer;
        }

        .sidebar {
            background-color: #8D7B68;
            padding: 20px;
            height: calc(25vh - 20px);
            position: fixed;
            top: 60px;
            left: 0;
            z-index: 999;
            margin-top: 40px;
            margin-left: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(60, 42, 33, 0.7);
            /* Adjust shadow color */
        }

        .main-content {
            width: 1100px;
            height: 1000px;
            background: #A4907C;
            box-shadow: 10px 10px 4px rgba(0, 0, 0, 0.75);
            border-radius: 10px;
            margin-left: 220px;
            margin-top: 100px;
        }

        .main-menu {
            width: 1050px;
            height: 201px;
            box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);
            border-radius: 10px;
            margin-left: 30px;
            background-color: #4C3B2A;
            margin-top: 40px;
        }

        .main-menu h2 {
            font-size: 24px;
            font-weight: bold;
            margin-right: 20px;
            color: white
        }

        .sidebar-menu {
            color: white;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid white;
            padding-bottom: 10px;
            /* Add padding for better appearance */
        }

        .sidebar-menu a {
            text-decoration: none;
            color: white;
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="app-name">IWAKU</div>
        <div class="top-right-menu">
            <div class="icon">
                <i class="fas fa-search"></i>
            </div>
            <div class="icon">
                <i class="fas fa-bell"></i>
            </div>
            <div class="icon">
                <i class="fas fa-user"></i>
            </div>
        </div>
    </div>

    <div class="sidebar">
        <div class="sidebar-menu" style="color: black">Home</div>
        <div class="sidebar-menu">
            <a href="payment">Payment</a>
        </div>
        <div class="sidebar-menu">
            <a href="memberlist">Member List</a>
        </div>
        {{-- <div class="sidebar-menu">
            <a href="document">Document</a>
        </div> --}}
    </div>

    <div class="main-content">
        <div class="main-menu">
            <h2>Bulan Ini</h2>
            <ul>
                <!-- Add more list items as needed -->
            </ul>
        </div>

        <div class="main-menu">
            <h2>Transaksi terakhir</h2>
            <ul>
                <!-- Add more list items as needed -->
            </ul>
        </div>

        <div class="main-menu">
            <h2>Berita Terkini</h2>
            <ul>
                <!-- Add more list items as needed -->
            </ul>
        </div>
    </div>

</body>

</html>
