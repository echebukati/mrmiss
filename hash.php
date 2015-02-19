<?php
$link = mysqli_connect("localhost", "root", "", "mrmiss");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
$query = "SELECT id, barcode FROM studbupx";
if ($result = mysqli_query($link, $query)) {
    set_time_limit(0);
    /* fetch associative array */
    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $barcode = $row["barcode"];
        $random_salt = hash('sha512', uniqid(mt_rand(1, mt_getrandmax()), true)); //Create random salt
        $passwordj = hash('sha512', $barcode);
        $password = hash('sha512', $passwordj . $random_salt); //Hash password with salt
        $queryy = "UPDATE studbupx SET password='$password', salt='$random_salt' WHERE id=$id";
        mysqli_query($link, $queryy);
    }

    /* free result set */
    mysqli_free_result($result);
}

/* close connection */
mysqli_close($link);
?>