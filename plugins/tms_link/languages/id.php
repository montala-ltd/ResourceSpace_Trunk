<?php


$lang["tms_link_configuration"]='Konfigurasi Tautan TMS';
$lang["tms_link_dsn_name"]='Nama DSN lokal untuk terhubung ke database TMS. Pada Windows, ini dikonfigurasi melalui Administrative tools->Data Sources (ODBC). Pastikan koneksi yang benar telah dikonfigurasi (32/64 bit)';
$lang["tms_link_table_name"]='Nama tabel atau tampilan TMS yang digunakan untuk mengambil data TMS';
$lang["tms_link_user"]='Nama pengguna untuk koneksi basis data TMS';
$lang["tms_link_password"]='Kata sandi untuk pengguna basis data TMS';
$lang["tms_link_resource_types"]='Pilih jenis sumber daya yang terhubung dengan TMS';
$lang["tms_link_object_id_field"]='Bidang yang digunakan untuk menyimpan ID objek TMS';
$lang["tms_link_checksum_field"]='Bidang metadata yang digunakan untuk menyimpan checksum. Ini untuk mencegah pembaruan yang tidak perlu jika data tidak berubah';
$lang["tms_link_checksum_column_name"]='Kolom yang dikembalikan dari tabel TMS untuk digunakan sebagai checksum yang dikembalikan dari database TMS.';
$lang["tms_link_tms_data"]='Data TMS Langsung';
$lang["tms_link_database_setup"]='Koneksi database TMS';
$lang["tms_link_metadata_setup"]='Konfigurasi metadata TMS';
$lang["tms_link_tms_link_success"]='Koneksi berhasil';
$lang["tms_link_tms_link_failure"]='Koneksi gagal. Silakan periksa detail Anda.';
$lang["tms_link_test_link"]='Uji tautan ke TMS';
$lang["tms_link_tms_resources"]='Sumber Daya TMS';
$lang["tms_link_no_tms_resources"]='Tidak ditemukan Sumber Daya TMS Harap periksa apakah Anda telah mengonfigurasi plugin dengan benar dan memetakan bidang metadata ObjectID dan checksum yang benar.';
$lang["tms_link_no_resource"]='Tidak ada sumber daya yang ditentukan';
$lang["tms_link_resource_id"]='ID Sumber Daya';
$lang["tms_link_object_id"]='ID Objek';
$lang["tms_link_checksum"]='Checksum dapat diterjemahkan sebagai "Ceksum"';
$lang["tms_link_no_tms_data"]='Tidak ada data yang dikembalikan dari TMS';
$lang["tms_link_field_mappings"]='Pemetaan bidang TMS ke bidang ResourceSpace';
$lang["tms_link_resourcespace_field"]='Kolom ResourceSpace';
$lang["tms_link_column_name"]='Kolom TMS';
$lang["tms_link_add_mapping"]='Tambahkan pemetaan';
$lang["tms_link_performance_options"]='Pengaturan Skrip TMS - pengaturan ini akan mempengaruhi tugas terjadwal yang memperbarui data sumber daya dari TMS';
$lang["tms_link_query_chunk_size"]='Jumlah catatan yang akan diambil dari TMS dalam setiap bagian. Ini dapat disesuaikan untuk menemukan pengaturan yang optimal.';
$lang["tms_link_test_mode"]='Mode uji coba - Tetapkan ke benar dan skrip akan berjalan tetapi tidak memperbarui sumber daya';
$lang["tms_link_email_notify"]='Alamat email yang akan digunakan oleh skrip untuk mengirimkan pemberitahuan. Akan menggunakan alamat pemberitahuan sistem secara default jika dikosongkan;';
$lang["tms_link_test_count"]='Jumlah catatan untuk diuji pada skrip - dapat diatur menjadi angka yang lebih rendah untuk menguji skrip dan performa';
$lang["tms_link_last_run_date"]='Terakhir kali skrip dijalankan:';
$lang["tms_link_script_failure_notify_days"]='Jumlah hari setelahnya untuk menampilkan peringatan dan mengirim email jika skrip belum selesai';
$lang["tms_link_script_problem"]='PERINGATAN - skrip TMS tidak berhasil diselesaikan dalam %days% hari terakhir. Waktu terakhir dijalankan:';
$lang["tms_link_upload_tms_field"]='Mohon diterjemahkan: TMS ObjectID

Identifier Objek TMS';
$lang["tms_link_upload_nodata"]='Tidak ditemukan data TMS untuk ObjectID ini:';
$lang["tms_link_confirm_upload_nodata"]='Silakan centang kotak untuk mengkonfirmasi bahwa Anda ingin melanjutkan dengan pengunggahan';
$lang["tms_link_enable_update_script"]='Aktifkan skrip pembaruan TMS';
$lang["tms_link_enable_update_script_info"]='Aktifkan skrip yang akan secara otomatis memperbarui data TMS setiap kali tugas terjadwal ResourceSpace (cron_copy_hitcount.php) dijalankan.';
$lang["tms_link_log_directory"]='Direktori untuk menyimpan log skrip. Jika ini dikosongkan atau tidak valid, maka tidak akan ada pencatatan log.';
$lang["tms_link_log_expiry"]='Jumlah hari untuk menyimpan log skrip. Semua log TMS dalam direktori ini yang lebih lama akan dihapus';
$lang["tms_link_column_type_required"]='<strong>CATATAN</strong>: Jika menambahkan kolom baru, harap tambahkan nama kolom ke daftar yang sesuai di bawah ini untuk menunjukkan apakah kolom baru berisi data numerik atau teks.';
$lang["tms_link_numeric_columns"]='Daftar kolom yang harus diambil sebagai UTF-8';
$lang["tms_link_text_columns"]='Daftar kolom yang harus diambil sebagai UTF-16';
$lang["tms_link_bidirectional_options"]='Sinkronisasi dua arah (menambahkan gambar RS ke TMS)';
$lang["tms_link_push_condition"]='Kriteria metadata yang harus dipenuhi agar gambar dapat ditambahkan ke TMS';
$lang["tms_link_tms_loginid"]='ID login TMS yang akan digunakan oleh ResourceSpace untuk memasukkan catatan. Akun TMS harus dibuat atau sudah ada dengan ID ini';
$lang["tms_link_push_image"]='Mendorong gambar ke TMS setelah pembuatan pratinjau? (Ini akan membuat catatan Media baru di TMS)';
$lang["tms_link_push_image_sizes"]='Ukuran pratinjau yang diinginkan untuk dikirim ke TMS. Dipisahkan dengan koma sesuai urutan preferensi sehingga ukuran pertama yang tersedia akan digunakan';
$lang["tms_link_mediatypeid"]='IDJenisMedia untuk digunakan pada catatan media yang dimasukkan';
$lang["tms_link_formatid"]='FormatID yang digunakan untuk catatan media yang dimasukkan';
$lang["tms_link_colordepthid"]='KedalamanWarnaID untuk digunakan pada catatan media yang dimasukkan';
$lang["tms_link_media_path"]='Jalur akar ke filestore yang akan disimpan di TMS contohnya \\RS_SERVER\\Filestore\\. Pastikan garis miring terakhir disertakan. Nama file yang disimpan di TMS akan mencakup jalur relatif dari akar filestore.';
$lang["tms_link_modules_mappings"]='Sinkronisasi dari modul tambahan (tabel / tampilan)';
$lang["tms_link_module"]='Modul';
$lang["tms_link_tms_uid_field"]='Kolom TMS UID';
$lang["tms_link_rs_uid_field"]='Kolom UID ResourceSpace';
$lang["tms_link_applicable_rt"]='Jenis sumber daya yang berlaku';
$lang["tms_link_modules_mappings_tools"]='Alat-alat';
$lang["tms_link_add_new_tms_module"]='Tambahkan modul TMS ekstra baru';
$lang["tms_link_tms_module_configuration"]='Konfigurasi modul TMS';
$lang["tms_link_tms_module_name"]='Nama modul TMS';
$lang["tms_link_encoding"]='mengodekan';
$lang["tms_link_not_found_error_title"]='Tidak ditemukan';
$lang["tms_link_not_deleted_error_detail"]='Tidak dapat menghapus konfigurasi modul yang diminta.';
$lang["tms_link_uid_field"]='TMS %module_name %tms_uid_field dapat diterjemahkan menjadi "TMS %nama_modul %tms_kolom_uid"';
$lang["tms_link_confirm_delete_module_config"]='Apakah Anda yakin ingin menghapus konfigurasi modul ini? Tindakan ini tidak dapat dibatalkan!';
$lang["tms_link_mediapaths_resource_reference_column"]='Kolom yang digunakan dalam tabel MediaMaster untuk menyimpan ID Sumber Daya. Ini opsional dan digunakan untuk menghindari beberapa sumber daya menggunakan ID Media Master yang sama.';
$lang["tms_link_write_to_debug_log"]='Sertakan kemajuan skrip dalam log debug sistem (memerlukan konfigurasi logging debug secara terpisah). Peringatan: Akan menyebabkan pertumbuhan cepat file log debug.';
$lang["plugin-tms_link-title"]='Tautan TMS';
$lang["plugin-tms_link-desc"]='Memungkinkan metadata sumber daya diekstraksi dari database TMS.';
$lang["tms_link_uid_field_int"]='TMS Integer UID. Atur ke false untuk mengizinkan UID non-integer.';
$lang["tms_link_selected_module_missing"] = 'Nama modul TMS saat ini diatur ke "%%MODULE%%" tetapi ini bukan opsi yang tersedia. Tinjau opsi di dropdown dan perbarui di bawah.';