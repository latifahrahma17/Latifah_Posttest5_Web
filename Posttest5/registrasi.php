
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>
    
</head>
<body>
    <div class="header">
        <nav>
            <a href="#main">
                <p class="logo">
                    <img src="images/logo.PNG" alt="dy_photo" width="250" title="dy_photo">
                </p>
            </a>

            <ul class="nav-link">
                <li class="nav-item">
                    <a href="#main"><i class='fas fa-home'>HOME</i></a>
                </li>
                <li class="nav-item">
                    <a href="#about"><i class='fas fa-camera-retro'>ABOUT US</i></a>
                </li>
                <li class="nav-item">
                    <b class="mode" id="mode">MODE</b>
                </li>
                <li class="nav-item">
                    <a href="login.php">LOGIN</a>
                </li>
            </ul>
        </nav>
    </div>

    <center class="form">
        <h1 class="judul">Pengguna dyphoto</h1>
        <div class="form-class">
            <h3>Tambah Pengguna</h3><br><br>
            <form action="tambah.php" method="post">

                <label for="">Fullname</label><br>
                <input type="text" name="Fullname" class="form-text"><br><br> 
        
                <label for="">Username</label><br>
                <input type="text" name="rUsername" class="form-text"><br><br>
                
                <label for="">Password</label><br>
                <input type="password" name="rPassword" class="form-text"><br><br>
                
                <label for="">Konfirmasi Password</label><br>
                <input type="password" name="konfirpass" class="form-text"><br><br>
        
                <label for="">Birth Date</label><br>
                <input type="date" name="BirthDate" class="form-text"><br><br>
        
                <input type="radio" name="Gender">
                <label for="gender">Laki-Laki</label><br><br>
        
                <input type="radio" name="Gender">
                <label for="gender">Perempuan</label>
                
                <br><br>
                <input type="submit" name="rSubmit"  value="Submit" class="btn-submit">
            </form>
        </div>
    </center>
    
    <link rel="stylesheet" href="stylesheet/style.css">
    <link rel="stylesheet" href="stylesheet/php-style.css">
</body>
</html>