<html>

<body>
    <h1>Login</h1>
    <form action="#" method="post">
        <p><label>Username :</label><input type="text" name="username"></p>
        <p><label>Password :</label><input type="password" name="password"></p>
        <p><button type="submit" name="submit">Submit</button></p>
    </form>

    <?php
    include('koneksi.php');
    $koneksi = new koneksi;
    session_start();

    if (isset($_POST['submit'])) {
        $data = $koneksi->validasi_login($_POST['username'], $_POST['password']);
        if ($data->num_rows > 0) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['status'] = "login";
            header("location:home.php");
        }
    }
    ?>


</body>


</html>