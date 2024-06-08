<?php
if (isset($_POST['submit'])) {
    if (create($_POST) > 0){
        $success = true;
        header("Location: " . $_SERVER['PHP_SELF'] . "?success=true");
        exit();
    } else {
        echo "
            <script>
                alert('Data Gagal Di Input');
                window.location = 'create.php'
            </script>
        ";
        }             
}
?>