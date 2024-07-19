    // Mengaktifkan dropdown saat kursor menyentuh langsung
    $('.dropdown').hover(
        function () {
            $(this).addClass('show');
            $(this).find('.dropdown-menu').addClass('show');
        },
        function () {
            $(this).removeClass('show');
            $(this).find('.dropdown-menu').removeClass('show');
        }
    );

    // Menonaktifkan dropdown saat diklik
    $('.dropdown').click(function (e) {
        e.stopPropagation();
    });

    // Event lain yang ingin Anda aktifkan saat dropdown diklik
    $('.dropdown').on('shown.bs.dropdown', function () {
        // Tambahkan kode yang ingin Anda jalankan saat dropdown tampil setelah diklik
    });