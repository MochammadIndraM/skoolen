DOKUMENTASI PENGGUNAAN APLIKASI
Clone project kami : https://github.com/MochammadIndraM/skoolen.git
Composer Install & Npm Install
Generate dengan menggunakan perintah “php artisan key:generate”

Jangan Lupa buat databasenya dan atur envnya
Gunakan perintah “php artisan migrate:refresh --seed” untuk menjalakan migration dan seeder dbnya.


Pastikan Storage public berfungsi: jalankan “php artisan storage:link” di terminal 
dan ubah .env “FILESYSTEM_DISK=local” menjadi “FILESYSTEM_DISK=public”
Untuk Menjalankan Skoolen Aktifkan “npm run dev” untuk tailwindnya 
“php artisan serve” untuk menjalankan localhostnya 
