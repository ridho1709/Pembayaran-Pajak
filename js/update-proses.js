// Mengambil data ke modal untuk diupdate
$(document).on('click', '.edit-link', function() {
    var id = $(this).data('id');
    
    // Mengambil data berdasarkan ID
    $.ajax({
        url: 'get_data.php',
        type: 'GET',
        data: { id: id },
        success: function(response) {
            var data = JSON.parse(response);
            $('#edit-id').val(data.id);
            $('#edit-nama').val(data.nama);
            // Isi input lainnya sesuai kebutuhan
        }
    });
});

// Mengirim data yang telah diubah untuk disimpan ke database
$('#editForm').on('submit', function(e) {
    e.preventDefault();

    $.ajax({
        url: 'update_data.php',
        type: 'POST',
        data: $(this).serialize(),
        success: function(response) {
            alert('Data berhasil diupdate');
            location.reload(); // Refresh halaman setelah berhasil update
        }
    });
});