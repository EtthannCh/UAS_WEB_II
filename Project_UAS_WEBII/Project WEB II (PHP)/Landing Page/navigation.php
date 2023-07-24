<?php require_once "../Login/lib.php";
include_once "../lib.php"; ?>
<style>
    nav {
        position: fixed;
        background-color: #000000;
        height: 50px;
        width: 100%;
        z-index: 3;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
    }

    .container {
        display: flex;
        justify-content: space-between;
    }

    .logo {
        padding: 6px 0;
        margin-right: 0;
    }

    .logo a {
        color: white;
        font-size: 25px;
        text-decoration: none;
    }

    nav ul {
        margin-left: 130px;
        list-style: none;
        display: flex;
        /* justify-content: space-between; */
        align-items: center;
    }

    nav ul li {
        display: inline-block;
        margin: 0 5px;
        padding: 0;
    }

    nav ul li a {
        padding: 15px 0;
        font-size: 12px;
        color: white;
        display: block;
        text-decoration: none;
    }

    nav ul li a:hover {
        background-color: rgba(255, 255, 255, 0.9);
        color: #000000;
        font-weight: 600;
    }

     nav .menu ul {
        width: 400px;
        gap: 40px;
    }

    .navbar-icon{
        margin-left: 30px;
    }

    .navbar-icon .links{
        margin-left:20px;
    } 

    .searchbar-container {
        margin-left: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px 0;
    }

    .searchbar {
        width: 200px;
        height: 22.5px;
        max-width: 400px;
        background: rgba(255, 255, 255, 0.8);
        display: flex;
        align-items: center;
        border-radius: 60px;
        padding: 10px 0px;
        border: 1.25px solid #141414;
    }

    .searchbar-container .searchbar input[type=text] {
        font-size: 10px;
        padding-left: 10px;
        border-radius: 15px;
        border: 1px solid transparent;
        background: transparent;
    }

    .searchbar-container .searchbar input[type=text]::placeholder {
        font-size: 10px;
        color: rgb(78, 77, 77);
    }

    .searchbar-container .searchbar input[type=text]:focus {
        outline: none;
    }

    .searchbar-container .searchbar button[type=submit] {
        border-radius: 0 100% 100% 0;
        padding: 3px 8px;
        overflow: hidden;
        margin-left: 40px;
        border: 0;
        background: #141414;
        cursor: pointer;
    }

    .icon-search {
        width: 8px;
        filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(204deg) brightness(104%) contrast(104%);
    }

    .navbar-icon {
        margin-right: 80px;
        padding: 13px 0;
    }

    .navbar-icon ul{
        margin-left: 50px;
    }

    .navbar-icon a {
        padding: 0;
    }

    .navbar-icon img {
        width: 14px;
        margin: 0 20px;
        filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(204deg) brightness(104%) contrast(104%);
    }

    .toggle {
        display: none;
    }

    .toggle img {
        filter: invert(100%) sepia(0%) saturate(0%) hue-rotate(204deg) brightness(104%) contrast(104%);
        width: 25px;
        padding: 12px 0;
    }

    nav ul .menu,
    .logo,
    .searchbar-container {
        display: inline-block;
    }

    .dropdown-toggle-label {
        cursor: pointer;
    }

    .dropdown-menu {
        display: none;
    }

    #dropdown-toggle {
        display: none;
    }

    #dropdown-toggle:checked~.dropdown-menu {
    display: block;
    background-color: black;
    margin-left: 0px;
    }
    
</style>

<!--Navigation Bar-->
<nav>
    <div class="container">
        <div class="logo"><a href="../Landing Page/index.php">AES</a></div>
        <div class="menu">
            <ul>
                <li><a href="../Product Category (PHP)/product-category.php">Shop</a></li>
                <li><a href="../About US (PHP)/comp-profile.php">About Us</a></li>
                <li><a href="../Contact US (PHP)/contact.php">Contact Us</a></li>
            </ul>
        </div>
        <!--Search Bar-->
        <div class="searchbar-container">
            <form action="" class="searchbar">
                <input type="text" id="search" name="search" placeholder="Search here..." results=5
                    autosave=some_unique_value name=s>
                <button type="submit"><img class="icon-search" src="img/search.svg"></button>
            </form>
        </div>

        <!--Icon-->
        <div class="navbar-icon">
            <?php if (cekLogin()) { 
                if ($_SESSION['level'] === 'user') {?>
                <ul>
                    <li><a href="../Payment_Page/index.php?id=<?php echo $_SESSION['id_user']; ?>"><img
                                src="img/cart2.svg"></a></li>
                    <div class="number-cart" style="color:#fff">
                        <?php echo howManyData($_SESSION["id_user"]); ?>
                    </div>
                    <li><a href="#"><img src="img/bell.svg"></a></li>
                    <li class="dropdown">
                        <label for="dropdown-toggle"><img src="img/person-circle.svg" alt=""></label>
                        <input type="checkbox" id="dropdown-toggle">
                        <ul class="dropdown-menu">
                            <li><a href="../profile/profile.php">My Profile</a></li>
                            <br>
                            <li><a href="../History_User/index.php">History</a></li>
                            <br>
                            <li><a href="../Login/logout.php">Logout <i class="fas fa-sign-out"></i></a></li>
                        </ul>
                    </li>
                </ul>
            <?php } elseif ($_SESSION['level'] === 'admin') {?>
                <ul>
                        <li><a href="../Payment_Page/index.php?id=<?php echo $_SESSION['id_user']; ?>"><img src="img/cart2.svg"></a></li>
                        <div class="number-cart" style="color:#fff">
                            <?php echo howManyData($_SESSION["id_user"]); ?>
                        </div>
                        <li><a href="#"><img src="img/bell.svg"></a></li>
                        <li class="dropdown">
                            <label for="dropdown-toggle"><img src="img/person-circle.svg" alt=""></label>
                            <input type="checkbox" id="dropdown-toggle">
                            <ul class="dropdown-menu">
                                <li><a href="../Admin-Main Dashboard (PHP)/AdminDashboard.php">Back to Dashboard</a></li>
                                <br>
                                <li><a href="../Login/logout.php">Logout <i class="fas fa-sign-out"></i></a></li>
                            </ul>
                        </li>
                    </ul>
                    <?php } } elseif (!cekLogin()) { ?>
                <div class="links">
                    <a href="../Login/Login.php"><img src="img/cart2.svg"></a>
                    <a href="../Login/Login.php"><img src="img/bell.svg"></a>
                    <a href="../Login/Login.php"><img src="img/person-circle.svg"></a>
                </div>
            <?php } ?>
        </div>

        <!--Toggler-->
        <!-- <div class="toggle">
            <img src="img/toggler-icon.webp">
        </div> -->
    </div>
</nav>
<script>
    document.getElementById('dropdown-toggle').addEventListener('click', function () {
        var dropdownMenu = this.nextElementSibling;
        dropdownMenu.style.display = dropdownMenu.style.display === 'block' ? 'none' : 'block';
    });

</script>