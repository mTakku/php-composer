<p align="center" >
  <b>POINT UTAMA</b>
</p>

---

> #### PHP COMPOSER
> - Dependensi manajemen membantu mengelola dan mengunduh library yang diperlukan secara otomatis, menghindari masalah kesesuaian versi.
> - Composer adalah alat manajemen dependensi yang paling populer untuk PHP saat ini, terinspirasi oleh NPM dan Bundler.
> - Instalasi Composer cukup mudah, dan setelah terpasang, dapat dengan mudah mengelola dependensi proyek PHP.
>
> Berikut kode untuk mengecek versi composer :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/5107008d-d538-45a7-8e3a-c1fc3b7cab88)
>
> #### PROJECT COMPOSER
> - Untuk Membuat proyek menggunakan Composer cukup sederhana dengan membuat file ```composer.json```, bisa dilakukan secara manual atau otomatis dengan perintah ```composer init```.
> - Composer memungkinkan pengguna untuk menambahkan lisensi dan metadata ke proyek dengan mudah.
> - Composer akan membuat folder vendor dan file ```composer.lock``` secara otomatis saat menginstal dependensi.
> - Menghapus file ```composer.json```, ```composer.lock```, dan folder ```vendor``` adalah cara mudah untuk menghapus proyek Composer.
> - Composer menyediakan autoload untuk memuat otomatis semua class yang ada di direktori vendor.
>
> Berikut kode ketika melakukan composer init :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/d1c276fe-f60f-4c76-a347-116a40789f32)
>
> Berikut file composer.json :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/54fa49f8-2946-49ed-a6ca-50ce89eab5f0)
>
> berikut kode ketika melakukan composer update :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/6ad6183a-6b7a-484e-9908-39794a885073)
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/2651f90e-43ea-4c0f-932f-6fe2f0d76b97)
---
> #### HELLO WORLD
> - Composer menyediakan autoload untuk memuat otomatis semua class yang ada di direktori vendor.
>
> berikut kode composer hello world :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/240a0c96-d7aa-4659-a438-6385cb169244)
---
> #### AUTOLOAD
> - Untuk menggunakan autoload, proyek harus mengikuti standar, seperti PSR-4, dan menambahkan konfigurasi autoload di file ```composer.json```.
>
> Berikut kode untuk membuat autoload :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/794b3adf-e2cc-4fd0-944e-8d8de734875b)
---
> #### COMPOSER DUMP-AUTOLOAD
> - Perintah composer dump-autoload digunakan untuk memperbarui file ```autoload.php``` setelah mengubah konfigurasi autoload.
> - Named space dalam Composer harus sama dengan nama direktori dan nama file yang digunakan.
> - Fitur autoload di Composer memungkinkan penggunaan library secara otomatis tanpa perlu manual include file-file PHP.
>
> Berikut kode class people :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/677f84bd-4ca6-4763-8017-2ac89124172f)
>
> Berikut kode untuk menggunakan autoload :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/9c05bf25-3344-4e39-95c6-5fdc36d6602e)
---
> #### REPOSITORY
> - Repositori Packagist adalah tempat penyimpanan library, dependensi, dan framework berbasis Composer secara default.
---
> #### MENAMBAH DEPENDENCY
> - Disarankan untuk membagi aplikasi menjadi bagian kecil dan menyimpan library dependensinya di repositori untuk kemudahan pengelolaan.
> - Menentukan versi library yang akan digunakan dalam file composer.json menggunakan Semantic Versioning.
> - Pastikan untuk composer update setiap menambah library dan melakukan generate autoload : ```composer dump-autoload```
>
> Berikut kode composer dependency :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/edfda618-6797-454f-a176-e46626be1412)
>
> Berikut kode menambah library monolog :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/3193b7c4-4000-4971-baa2-01f0fad53285)
>
> Hasil composer update :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/1aa650b6-3b40-49bf-a04e-1d2119344af6)
>
> Berikut kode mencoba monolog :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/f41c4821-1ffb-422a-aacb-1da9381d084e)
---
> #### LIBRARY
> - Composer tidak hanya mendukung pembuatan proyek, tetapi juga pembuatan library yang dapat digunakan dalam proyek orang lain.
> - Proses membuat library dengan Composer mirip dengan membuat proyek, namun dengan perbedaan pada pemilihan jenis project saat inisialisasi.
> - Setelah membuat library, Anda dapat menentukan dependency dan versi PHP yang dibutuhkan di file ```composer.json```.
> - Autoload dan namespace perlu ditentukan dalam library untuk memastikan interoperabilitas yang baik.
> - Setelah membuat library, Anda dapat mengunggahnya ke repository Git agar dapat digunakan oleh orang lain.
> - Penggunaan library dari repository dapat diintegrasikan dengan Composer dengan menambahkannya sebagai repository di file ```composer.json```.
> - Proses upgrade versi library cukup mudah, hanya perlu mengubah kode, membuat rilis baru, dan melakukan update versi di project yang menggunakannya.
>
> Berikut kode untuk membuat library :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/a7c0f10e-370b-4b66-a6cb-8a8d15d92d6d)
>
> Berikut kode class customer :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/4b833b9c-6970-43e5-bea7-bd96d3b2392a)
>
> Berikut kode menambah dependency :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/0e3b1462-5b0c-4059-8daa-dbb57a327134)
>
> Berikut kode hello library :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/8ba3a018-e970-400e-9dfa-65911e6129fe)
>
> Berikut kode update library :
>
> ![image](https://github.com/mTakku/php-composer/assets/145539342/0942b368-67cb-4889-8cb1-a988d5c8fee8)
---
> #### PACKAGIST
> - Menggunakan Packagist untuk submit library memudahkan manajemen dependensi, tidak perlu tambahkan repository manual di ```composer.json```.
> - Keuntungannya adalah kita tidak perlu menambahkan repository git di composer.json satu per satu
> - bisa sync secara otomatis ketika ada release versi baru
---
> #### SCRIPT
> = Fitur script pada Composer memungkinkan pembuatan perintah khusus untuk shortcut atau eksekusi perintah terminal.
>
> Contoh kode script :
> ![image](https://github.com/mTakku/php-composer/assets/145539342/91d220fb-d16e-47a6-83da-200396a6ab2b)
---

<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

---

> - Jika terkena rate limited oleh composer bagaimana cara menghilangkannya selain mengganti wifi/ip

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>

> - Dengan composer kita dapat mengelola dan mengunduh library yang diperlukan secara otomatis, menghindari masalah kesesuaian versi

---


















