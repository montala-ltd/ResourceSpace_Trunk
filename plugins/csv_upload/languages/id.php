<?php

$lang["csv_upload_nav_link"] = 'Unggah CSV';
$lang["csv_upload_intro"] = 'Plugin ini memungkinkan Anda untuk membuat atau memperbarui sumber daya dengan mengunggah file CSV. Format CSV sangat penting';
$lang["csv_upload_condition2"] = 'CSV harus memiliki baris header';
$lang["csv_upload_condition3"] = 'Untuk dapat mengunggah file sumber nanti menggunakan fungsi penggantian batch, harus ada kolom bernama \'Nama file asli\' dan setiap file harus memiliki nama file yang unik';
$lang["csv_upload_condition4"] = 'Semua kolom wajib untuk sumber daya yang baru dibuat harus ada dalam CSV';
$lang["csv_upload_condition5"] = 'Untuk kolom yang memiliki nilai yang mengandung <b>koma (,)</b>, pastikan Anda memformatnya sebagai tipe <b>teks</b> sehingga Anda tidak perlu menambahkan tanda kutip (""). Saat menyimpan sebagai file csv, pastikan untuk memeriksa opsi mengutip sel tipe teks';
$lang["csv_upload_condition6"] = 'Anda dapat mengunduh contoh file CSV dengan mengklik <a href="../downloads/csv_upload_example.csv">csv-upload-example.csv</a>';
$lang["csv_upload_condition7"] = 'Untuk memperbarui data sumber daya yang sudah ada, Anda dapat mengunduh CSV dengan metadata yang sudah ada dengan mengklik opsi \'Ekspor CSV - metadata\' dari menu tindakan hasil koleksi atau pencarian';
$lang["csv_upload_condition8"] = 'Anda dapat menggunakan kembali file pemetaan CSV yang telah dikonfigurasi sebelumnya dengan mengklik \'Unggah file konfigurasi CSV\'';
$lang["csv_upload_error_no_permission"] = 'Anda tidak memiliki izin yang tepat untuk mengunggah file CSV';
$lang["check_line_count"] = 'Setidaknya dua baris ditemukan dalam file CSV';
$lang["csv_upload_file"] = 'Pilih file CSV';
$lang["csv_upload_default"] = 'Bawaan (Default)';
$lang["csv_upload_error_no_header"] = 'Tidak ditemukan baris header dalam file';
$lang["csv_upload_update_existing"] = 'Memperbarui sumber daya yang sudah ada? Jika tidak dicentang maka sumber daya baru akan dibuat berdasarkan data CSV';
$lang["csv_upload_update_existing_collection"] = 'Hanya memperbarui sumber daya dalam koleksi tertentu?';
$lang["csv_upload_process"] = 'Proses';
$lang["csv_upload_add_to_collection"] = 'Tambahkan sumber daya yang baru dibuat ke koleksi saat ini?';
$lang["csv_upload_step1"] = 'Langkah 1 - Pilih berkas';
$lang["csv_upload_step2"] = 'Langkah 2 - Opsi sumber daya default';
$lang["csv_upload_step3"] = 'Langkah 3 - Peta kolom ke bidang metadata';
$lang["csv_upload_step4"] = 'Langkah 4 - Memeriksa data CSV';
$lang["csv_upload_step5"] = 'Langkah 5 - Memproses CSV';
$lang["csv_upload_update_existing_title"] = 'Memperbarui sumber daya yang sudah ada';
$lang["csv_upload_update_existing_notes"] = 'Pilih opsi yang diperlukan untuk memperbarui sumber daya yang sudah ada';
$lang["csv_upload_create_new_title"] = 'Membuat sumber daya baru';
$lang["csv_upload_create_new_notes"] = 'Pilih opsi yang diperlukan untuk membuat sumber daya baru';
$lang["csv_upload_map_fields_notes"] = 'Sesuaikan kolom dalam CSV dengan bidang metadata yang diperlukan. Klik \'Berikutnya\' akan memeriksa CSV tanpa benar-benar mengubah data';
$lang["csv_upload_map_fields_auto_notes"] = 'Bidang metadata telah dipilih sebelumnya berdasarkan nama atau judul tetapi tolong periksa bahwa ini benar';
$lang["csv_upload_workflow_column"] = 'Pilih kolom yang berisi ID status alur kerja';
$lang["csv_upload_workflow_default"] = 'Status alur kerja default jika tidak ada kolom yang dipilih atau jika tidak ditemukan status yang valid di dalam kolom';
$lang["csv_upload_access_column"] = 'Pilih kolom yang berisi tingkat akses (0=Terbuka, 1=Dibatasi, 2=Kerahasiaan)';
$lang["csv_upload_access_default"] = 'Tingkat akses default jika tidak ada kolom yang dipilih atau jika tidak ditemukan akses yang valid di kolom';
$lang["csv_upload_resource_type_column"] = 'Pilih kolom yang berisi pengidentifikasi jenis sumber daya';
$lang["csv_upload_resource_type_default"] = 'Tipe sumber daya default jika tidak ada kolom yang dipilih atau jika tidak ditemukan tipe yang valid di dalam kolom';
$lang["csv_upload_resource_match_column"] = 'Pilih kolom yang berisi pengenal sumber daya';
$lang["csv_upload_match_type"] = 'Cocokkan sumber daya berdasarkan ID sumber daya atau nilai bidang metadata?';
$lang["csv_upload_multiple_match_action"] = 'Tindakan yang harus diambil jika terdapat beberapa sumber daya yang cocok ditemukan';
$lang["csv_upload_validation_notes"] = 'Periksa pesan validasi di bawah sebelum melanjutkan. Klik Proses untuk menyimpan perubahan';
$lang["csv_upload_upload_another"] = 'Unggah CSV lainnya';
$lang["csv_upload_mapping config"] = 'Pengaturan pemetaan kolom CSV';
$lang["csv_upload_download_config"] = 'Unduh pengaturan pemetaan CSV sebagai file';
$lang["csv_upload_upload_config"] = 'Mengunggah file pemetaan CSV';
$lang["csv_upload_upload_config_question"] = 'Unggah file pemetaan CSV? Gunakan ini jika Anda telah mengunggah CSV yang serupa sebelumnya dan telah menyimpan konfigurasinya';
$lang["csv_upload_upload_config_set"] = 'Konfigurasi set CSV';
$lang["csv_upload_upload_config_clear"] = 'Hapus konfigurasi pemetaan CSV';
$lang["csv_upload_mapping_ignore"] = 'TIDAK DIGUNAKAN';
$lang["csv_upload_mapping_header"] = 'Judul Kolom';
$lang["csv_upload_mapping_csv_data"] = 'Data contoh dari CSV';
$lang["csv_upload_using_config"] = 'Menggunakan konfigurasi CSV yang sudah ada';
$lang["csv_upload_process_offline"] = 'Mengolah file CSV secara offline? Ini sebaiknya digunakan untuk file CSV yang besar. Anda akan diberitahu melalui pesan ResourceSpace setelah pengolahan selesai';
$lang["csv_upload_oj_created"] = 'Pekerjaan unggah CSV telah dibuat dengan ID pekerjaan # [jobref]. <br/>Anda akan menerima pesan sistem ResourceSpace setelah pekerjaan selesai';
$lang["csv_upload_oj_complete"] = 'Pekerjaan unggah CSV selesai. Klik tautan untuk melihat file log lengkap';
$lang["csv_upload_oj_failed"] = 'Gagal mengunggah pekerjaan CSV';
$lang["csv_upload_processing_x_meta_columns"] = 'Memproses %count kolom metadata';
$lang["csv_upload_processing_complete"] = 'Pemrosesan selesai pada [time] ([hours] jam, [minutes] menit, [seconds] detik)';
$lang["csv_upload_error_in_progress"] = 'Pemrosesan dibatalkan - file CSV ini sedang diproses';
$lang["csv_upload_error_file_missing"] = 'Galat - Berkas CSV hilang: [file]';
$lang["csv_upload_full_messages_link"] = 'Menampilkan hanya 1000 baris pertama, untuk mengunduh file log lengkap silakan klik <a href=\'[log_url]\' target=\'_blank\'>di sini</a>';
$lang["csv_upload_ignore_errors"] = 'Abaikan kesalahan dan proses file apa pun';
$lang["csv_upload_process_offline_quick"] = 'Lewati validasi dan proses file CSV secara offline? Ini hanya harus digunakan untuk file CSV besar setelah pengujian pada file yang lebih kecil telah selesai dilakukan. Anda akan diberitahu melalui pesan ResourceSpace setelah pengunggahan selesai';
$lang["csv_upload_force_offline"] = 'CSV yang besar ini mungkin memerlukan waktu yang lama untuk diproses sehingga akan dijalankan secara offline. Anda akan diberitahu melalui pesan ResourceSpace setelah proses selesai';
$lang["csv_upload_recommend_offline"] = 'CSV yang besar ini mungkin memerlukan waktu yang sangat lama untuk diproses. Disarankan untuk mengaktifkan pekerjaan luring jika Anda perlu memproses CSV yang besar';
$lang["csv_upload_createdfromcsvupload"] = 'Dibuat dari plugin Unggah CSV';
$lang["plugin-csv_upload-title"] = 'Unggah CSV';
$lang["plugin-csv_upload-desc"] = 'Unggah metadata menggunakan file CSV.';

$lang["csv_upload_check_file_error"] = 'File CSV tidak dapat dibuka atau dibaca';
$lang["csv_upload_check_utf_error"] = 'File CSV tidak valid UTF-8. Karakter tidak valid pada baris';
$lang["csv_upload_condition1"] = 'Pastikan file CSV dikodekan menggunakan <b>UTF-8</b>.';
$lang["csv_upload_check_removebom"] = 'File CSV memiliki BOM yang tidak dapat dihapus';