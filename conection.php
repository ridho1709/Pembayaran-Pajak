<?php
$conn = mysqli_connect("localhost","root","","db_pajak");

// Tampil data
function query($query) {
    global $conn ;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;
}

// Tambah Data
function create($data){
    global $conn ;
    $npwp = htmlspecialchars($data["npwp"]);
    $nama = htmlspecialchars($data["nama"]);
    $usaha = htmlspecialchars($data["jenis_usaha"]);
    $pajak = htmlspecialchars($data['jenis_pajak']);
    $alamat = htmlspecialchars($data['alamat']);
    $telpon = htmlspecialchars($data['telpon']);
    $tanggal = htmlspecialchars($data['tanggal']);
    $total = htmlspecialchars($data['total']);
    $query = "INSERT INTO transaction (npwp, nama, jenis_usaha, jenis_pajak, alamat, no_tlpn, tanggal, total) 
                VALUES ('$npwp', '$nama', '$usaha', '$pajak', '$alamat','$telpon','$tanggal','$total')";

        mysqli_query($conn, $query) ;

        return mysqli_affected_rows($conn);
}

function billing_create($data){
    global $conn;
    $nama = $data["nama"];
    $tanggal = $data["tanggal"];
    $jenis_pajak = $data["jenis_pajak"];
    $jenis_pembayaran = $data["jenis_pembayaran"];
    $total = $data["total"];

    $query = "INSERT INTO biliings (nama, tanggal_pembayaran,   jenis_pajak, jenis_pembayaran, total) 
                VALUES 
                ('$nama', '$tanggal', '$jenis_pajak', '$jenis_pembayaran','$total')";
    
    mysqli_query($conn,$query);
    
    return mysqli_affected_rows($conn);
}

function delete($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM transaction WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function delete_account($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM account WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function reg($data) {
    global $conn;
    $email  = strtolower(stripslashes($data["email"]));
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $con_password = mysqli_real_escape_string($conn, $data["con_password"]);

    // Konfirmasi password
    if ($password !== $con_password) {
        echo "<script>
                alert('Konfirmasi Password Tidak Sesuai');
              </script>";
        return false;
    }

    // Enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // Insert ke database
    $query = "INSERT INTO account (email, username, password) VALUES ('$email', '$username', '$password')";

    if (mysqli_query($conn, $query)) {
        return mysqli_affected_rows($conn);
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
        return false;
    }
}


?>