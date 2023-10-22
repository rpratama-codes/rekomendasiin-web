# Rekomendasiin Web

Rekomendasiin - Aplikasi web toko online dengan fitur perekomendasian berbasis SPK dengan metode SAW

Rekomendasiin adalah aplikasi startup ecommerce toko online yang memberikan fitur perekomendasian sesuai keinginan atau kebutuhan penggunanya. Untuk melakukan perekomendasian kami menggunakan algoritma sistem pendukung keputusan dengan metode simple additive weighting (SAW), metode tersebut menggunakan penjumlahan yang terbobot dengan hasil akhir sebuah perangingan dari setiap alternatif kebutuhan

## How to run

1. setup the env variable. see [ENV Setup.](#config--requirement)
2. deploy to http dir. usually ``/var/www/html/``

OR

1. setup the env variable. see [ENV Setup.](#config--requirement)
2. run with php development server ``"php -S [HOST]:[PORT] -t ."``  
just remove the doble quote

## Config & Requirement

Other documentation see <https://github.com/rizqikazukun/rekomendasiin-web/wiki/docSystem>

## Setup the environment

1. Import the database. database available at ``docs/database/rekomendasiin.sql``
2. Setup The ENV Variable

### ENV Setup

This is not using dot env, so please config it to environment manually.  

On linux edit the .bashrc or .zshrc base on your environment.  
On windows use ``set VARIABLE_NAME=VALUE`` to set the env.  

```sh
# fill with the actual url and port if exist
# example 'http://localhost:3000'
BASE_PATH=

# Use mysql database
# adn fill the config
DB_NAME=
DB_USER=
DB_PASS=
DB_HOST=
```

## Wiki & Documentation

<https://github.com/rizqikazukun/rekomendasiin-web/wiki>

## Contibutor

- Rizqi Pratama (<rizqi.mailsos@gmail.com>)
- Eko Prasetyo (<ekkopras99@gmail.com>)
- Arif Rinaldi (<arifrinaldi68@gmail.com>)

## LICENSE

Hak Cipta (HKI)  
Nomor Permohonan : EC00202152938  

Source Code :  
Open : October 2023  
Close : August 2021 - October 2023  
