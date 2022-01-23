let semuaTombol = document.querySelectorAll('.btn-hapus');
semuaTombol.forEach(function(item){
    item.addEventListener('click','konfirmasi');
})

function konfirmasi (event) {
    // Buat pesan error untuk setiap tipe tabel
    let tombol = event.currentTarget;
    let judulAlert;
    let teskAlert;
    switch (tombol.getAttribute('data-table')) {
        case 'barcode':
            judulAlert = "Delete GGG PO number  "+tombol.getAttribute('data-name')+'?';
            teskAlert = "GGG PO akan terhapus !";
            break;
        
        case 'memo':
            judulAlert = "Hapus Memo  "+tombol.getAttribute('data-name')+'?';
            teskAlert = "Memo Berhasil dihapus";
            break;
    
        default:
            judulAlert = "Apakah anda yakin ?";
            teksAlert  = "Hapus data <b>"+tombol.getAttribute('data-name')+"</b>";
            break;
    }

    event.preventDefault();
    Swal.fire({
        title   : judulAlert,
        html    : teskAlert,
        icon    : "warning",
        showCancelButton    : true,
        cancelButtonColor   : '#6c757d',
        confirmButtonColor  : '#dc3545',
        cancelButtonText    : 'Tidak jadi',
        confirmButtonText   : "Ya, Hapus!",
        reverseButtons      : true,     
    })
    .then((result) => {
        if(result.value) {
            tombol.parentElement.submit();
        }   
    })
}