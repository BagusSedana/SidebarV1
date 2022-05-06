<?php
include "../koneksi.php";

$qry = "SELECT * FROM mahasiswa";
$exec_mahasiswa = $db->query($qry);

$qry = "SELECT * FROM jurusan";
$exec_jurusan = $db->query($qry);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IDigiSoftBox | Jurusan</title>

    <!--=========== Cutom Style Link ===========-->
    <link rel="stylesheet" href="../css/style.css">

    <!--=========== Custom Link Boxicon ===========-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/boxicons/2.1.2/css/boxicons.min.css' />
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css' integrity='sha512-GQGU0fMMi238uA+a/bdWJfpUGKUkBdgfFdgBm72SUQ6BeyWjoY/ton0tEjH+OSH9iP4Dfh+7HM0I9f5eR0L/4w==' crossorigin='anonymous'/>
</head>

<body>
    <!-- Navbar -->
    <nav class="sidebar close">
        <header>
            <!-- Logo & Name -->
            <div class="image-text">
                <span class="image">
                    <img src="../img/FIx.jpg" alt="Logo">
                </span>

                <div class="text header-text">
                    <span class="name">IDigiSoft<span style="color:#F4A01C ;">Box.</span></span>
                    <span class="profession">Web <span style="color:#F4A01C ;">Developer</span></span>
                </div>
                <!-- Logo & Name -->
            </div>
            <i class="bx bx-chevron-right toggle"></i>
        </header>
        <!-- Menu Bar -->
        <div class="menu-bar">
            <div class="menu">
                <li class="search-box">
                    <i class="bx bx-search icon"></i>
                    <input type="Enter" name="str" placeholder="Search here...">
                </li>
                <!-- List -->
                <ul class="menu-links">
                    <div class="dropdownMenu">
                        <li class="link">
                            <a href="index.php">
                                <i class='bx bxs-user icon'></i>
                                <span class="text link-text">Mahasiswa</span>
                            </a>
                        </li>
                        <div class="dropdownMenu-Content">
                            <li class="data"><a href="edit-data.php"><i class='bx bxs-calendar-edit icon'></i>Edit Data Mahasiswa</a> </li>
                                <li class="data"><a href="Searchdata.php"><i class='bx bx-data icon'></i> Cari Data Mahasiswa</a> </li>
                        </div>
                    </div>
                    
                    <div class="dropdownMenu">
                        <li class="link">
                            <a href="#">
                            <i class='bx bx-leaf icon'></i>
                                <span class="text link-text">Dosen</span>
                            </a>
                        </li>
                        <div class="dropdownMenu-Content">
                            <li class="data"><a href="edit-data.php"><i class='bx bxs-calendar-edit icon'></i>Edit Data Dosen</a> </li>
                                <li class="data"><a href=""><i class='bx bx-data icon'></i> Cari Data Dosen</a> </li>
                        </div>
                    </div>

                    <div class="dropdownMenu">
                        <li class="link">
                            <a href="../jurusan/index.php">
                            <i class='bx bxs-bar-chart-alt-2 icon'></i>
                                <span class="text link-text">Jurusan</span>
                            </a>
                        </li>
                        <div class="dropdownMenu-Content">
                                <li class="data"><a href="../jurusan/edit-data.php"><i class='bx bx-data icon'></i>Edit Data Jurusan</a> </li>
                                <li class="data"><a href="../jurusan/Searchdata.php"><i class='bx bxs-calendar-edit icon'></i>Cari Data Jurusan</a> </li>
                        </div>
                    </div>
                 
                    <li class="link">
                        <a href="#">
                            <i class='bx bx-cog icon'></i>
                            <span class="text link-text">Settings</span>
                        </a>
                    </li>
                </ul>
                <!-- List -->
            </div>
            <!-- Button Content -->
            <div class="bottom-content">
                <li class="link">
                    <a href="#">
                        <i class='bx bxs-log-out icon'></i>
                        <span class="text link-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="moon-sun">
                        <i class="bx bx-moon icon moon"></i>
                        <i class="bx bx-sun icon sun"></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
            <!-- Button Content -->
        </div>
        <!-- Menu Bar -->
    </nav>
    <!-- Navbar -->

    <!-- Dashboard -->
    <section class="home">
        
        <!-- Left -->
        <div class="container-left">
            <!-- Form -->
            <form action="../jurusan/_create.php" method="POST">
                <h1 class="text"> <b>Input <span style="color:#F4A01C ;">Data Jurusan</span></b></h1>
                <legend class="text">Lengkapi Biodata Jurusan Dengan Benar</legend>
                <hr>
                <div class="row mb-2">
                    <label for="nim" class="col-sm-2 col-form-label">Kode Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="kode" Required>
                    </div>
                </div>

                <div class="row mb-2">
                    <label for="nim" class="col-sm-2 col-form-label">Nama Jurusan</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="nama" Required>
                    </div>
                </div>

                
          <div class="container-left button">
            <input type="submit" class="btn btn-primary" value="Submit">
            <input type="button" class="btn btn-danger" value="Cancel">
          </div>
               
            </form>
        </div>
        <!-- Right -->
        <div class="container-right">
            <img src="../img/bg3.jpg" alt="Background" class="center">
        </div>
    
    </section>
    <!-- Dashboard -->

    <!-- Js -->
    <script src="../js/js.js"></script>
</body>

</html>