<?php 
// var_dump($_POST);

include 'koneksi.php';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($koneksi, $_POST['name']);
    $email = mysqli_real_escape_string($koneksi, $_POST['email']);
    $message = mysqli_real_escape_string($koneksi, $_POST['message']);

    $query = "INSERT INTO contact_me (name, email, message, created_at)
                VALUES ('$name', '$$email', '$message', CURRENT_TIMESTAMP)";
    if (mysqli_query($koneksi, $query)) {
        header('Location: index.php?status=success');
    } else {
        echo "Erorr: " . mysqli_error($koneksi);
    }
    mysqli_close($koneksi);
    
}
?>