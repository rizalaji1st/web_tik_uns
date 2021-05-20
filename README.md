<p align="center"><img src="https://tik.uns.ac.id/wp-content/uploads/2018/04/logo_dark.png" width="400"></p>
<h3 align="center">TIK UNS</h3>

## Tentang Website TIK

Menysusun ulang website TIK menggunakan framework laravel.

## Mockup Aplikasi

Mockup aplikasi dan pembagian PIC dapat dilihat pada link berikut  **[Mockup Aplikasi](https://docs.google.com/spreadsheets/d/12XlHdSvXHcrZap8Caafhc3FwPynTUViV9iljuF7iCCE/edit?usp=sharing)**

## Cara Clone Project

- Clone seperti biasa
- Masuk ke direktori hasil clone menggunakan terminal/powershell
- masukan perintah 
```
$ composer install
```
- masukan perintah 
```
$ npm install
```
- jika perintah npm tidak bisa dilakukan, install node js terlebih dahulu, **[Download Node Js](https://nodejs.org/en/download/)**
- masukan perintah 
```
$ cp .env.example .env
```
- setting env agar bisa terhubung dengan database production, menggunakan database MySql.
- masukan perintah 
```
$ php artisan key:generate
$ php artisan migrate:refresh
```
- langkah terakhir untuk mengkompilasi resources UI seperti file js, css, dan scss, masukan perintah
```
$ npm run dev
```
- Buat symbolic link untuk mengonsumsi media yang diupload pengguna
```
$ php artisan storage:link
```
- lakukan test dengan menjalankan aplikasi, masukkan perintah dibawah ini dan buka alamat http://127.0.0.1:8000
```
$ php artisan serve
```
