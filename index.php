<?php
require_once "header.php";
session_start();
// echo $_SESSION['userlogin'];
?>

<section class="header">
    <nav>
        <a href="index.php"><span class="website-name">Health Care</span></a>

        <div class="navbar">
            <ul>
                <li>
                    <a href="">Home</a>
                </li>
                <li>
                    <a href="doctors.php">Doctors</a>
                </li>
                <li>
                    <a href="">Blood Bank</a>
                </li>
                <?php
                if (!isset($_SESSION['isDoctor'])) : ?>
                    <li>
                        <a href="<?php echo isset($_SESSION["userlogin"]) ? "appointment.php" : "patientlogin.php"; ?>">Appointment</a>
                    </li>
                <?php endif; ?>
                <?php if (!isset($_SESSION["userlogin"])) : ?>
                    <li>
                        <a href="patientlogin.php">Login</a>
                    </li>
                    <li>
                        <a href="patientReg.php">SignIn</a>
                    </li>
                    <li>
                        <a href="adminlogin.php">ADMIN</a>
                    </li>
                <?php endif; ?>
                <?php
                if (isset($_SESSION["userlogin"])) : ?>
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                    <li>
                        <a class="btn" href="<?php
                                                if ($_SESSION["userlogin"] == 1) echo "doctorProfile.php";
                                                else if ($_SESSION["userlogin"] == 0) echo "patientProfile.php";
                                                else echo "admin.php";
                                                ?>"> <i class='fas fa-user-circle'></i> <?php echo  $_SESSION['name'] ?? "ADMIN"; ?></a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </nav>
</section>
<br>
<section class="doctors">
    <h1>Doctors</h1>
    <br>

    <div class="box-1">
        <div>
            <img src="images/dummy.jpg" alt="">
        </div>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore mollitia obcaecati et tenetur veritatis laudantium sint error tempore ab possimus harum, nemo placeat molestias nostrum sunt odit blanditiis doloremque odio?</p>
        </div>
    </div>

    <div class="box-1">
        <div>
            <img src="images/dummy.jpg" alt="">
        </div>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore mollitia obcaecati et tenetur veritatis laudantium sint error tempore ab possimus harum, nemo placeat molestias nostrum sunt odit blanditiis doloremque odio?</p>
        </div>
    </div>

    <div class="box-1">
        <div>
            <img src="images/dummy.jpg" alt="">
        </div>
        <div>

            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero numquam veritatis quo et cum. Dignissimos expedita, odio blanditiis reiciendis maiores commodi iusto nam obhjohuaperiam. Exhvhvhpedita, quam possimus.</p>

        </div>
    </div>

    <div class="box-1">
        <div>
            <img src="images/dummy.jpg" alt="">
        </div>
        <div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore mollitia obcaecati et tenetur veritatis laudantium sint error tempore ab possimus harum, nemo placeat molestias nostrum sunt odit blanditiis doloremque odio?</p>
        </div>
    </div>
</section>
<section class="blogs">

</section>
<?php require_once "footer.php"; ?>