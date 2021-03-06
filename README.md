<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## MySekolah v.1.0

Adalah aplikasi berbasis web untuk administrasi sistem akademik di SMU/SMK. Dikembangkan dengan:

- [Laravel 8.77.1](https://laravel.com/).
- [Template AdminLTE 3.1.0](https://adminlte.io/).
- Minimal php 7.2 ++ better php 8.*


## Installasi
- Clone https://github.com/alexistdev/mysekolah
- Copy file .env.example dan rename jadi .env
- Buat database kosong di localhost/phpmyadmin dengan nama:mysekolah
- Buka file .env dan isi pada bagian nama database dengan nama:mysekolah, jika MySQL anda memiliki username dan password, maka masukkan juga username dan password nya.
- jalankan di terminal: composer install
- jalankan di terminal: php artisan key:generate
- jalankan di terminal: php artisan migrate:fresh --seed
- jalankan di terminal: php artisan serve

## License

MySekolah is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
