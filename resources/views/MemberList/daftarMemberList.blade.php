<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IWAKU App</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
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
            color: white;
            text-align: center;
            /* Center the text */
        }

        .sidebar-menu {
            color: white;
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid white;
            padding-bottom: 10px;
            /* Add padding for better appearance */
        }
    </style>
</head>

<body>

    <div class="navbar">
        <div class="app-name">IWAKU</div>

        <div class="top-right-menu">
            <div class="icon">

            </div>
            <div class="icon">
                <i class="fas fa-search"></i>
            </div>
            <div class="icon">
                <i class="fas fa-bell"></i>
            </div>
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button
                        class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div><i class="fas fa-user"></i></i></div>

                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>

                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
    </div>

    <div class="sidebar">
        <div class="sidebar-menu">
            <a href="home" style="color: white; text-decoration: none;">Home</a>
        </div>
        <div class="sidebar-menu">
            <a href="payment" style="color: white; text-decoration: none;">Payment</a>
        </div>
        <div class="sidebar-menu" style="color: black">Member List</div>
        {{-- <div class="sidebar-menu">
            <a href="home" style="color: white; text-decoration: none;">Document</a>
        </div> --}}
    </div>
    <div class="main-content">
        <div class="main-menu">
            <h2>RT01</h2>
        </div>

        <div class="main-menu">
            <h2>RT02</h2>

        </div>

        <div class="main-menu">
            <h2>RT03</h2>

        </div>
        <div class="main-menu">
            <h2>RT04</h2>
        </div>
    </div>

</body>

</html>
