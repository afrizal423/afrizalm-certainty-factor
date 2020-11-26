<p align="right">
بِسْــــــــــــــمِ اللَّهِ الرَّحْمَنِ الرَّحِيم 
</p>

# Expert System With Certainty Factor Using PHP

Pakcage perhitungan sistem pakar dengan certainty factor menggunakan PHP. 

## Installation

- Pastikan anda sudah memiliki composer di device anda.
- Install menggunakan perintah
    ```
    composer require afrizalmy/certainty_factor
    ```
## How To Use
- Silahkan lihat pada file [ini](example/index.php)
- Terdapat dua parameter dalam function ProsesHitung()
    - parameter pertama yaitu berupa data master yang didapatkan dari pakar
        - Silahkan masukkan berupa array of object
        - contohnya seperti dibawah ini:
        ```
        $arr = [];
        $arr[0]['kode_case'] = "P01";
        $arr[0]['nama_case'] = "Anemia Aplastik";
        $arr[0]['kode_rule'] = "G01";
        $arr[0]['nama_rule'] = "Terasa lemas diseluruh tubuh";
        $arr[0]['nilai_mb'] = 0.8;
        $arr[0]['nilai_md'] = 0.2;

        $arr[1]['kode_case'] = "P01";
        $arr[1]['nama_case'] = "Anemia Aplastik";
        $arr[1]['kode_rule'] = "G02";
        $arr[1]['nama_rule'] = "Merasakan sakit kepala";
        $arr[1]['nilai_mb'] = 0.8;
        $arr[1]['nilai_md'] = 0.1;
        ```
        - Lalu masukkan variable ```$arr``` kedalam parameter pertama dalam fungsi ProsesHitung 
        - Lebih efektif anda menggunakan looping untuk menyimpan ke variable ```$arr``` tersebut
        <br>
    - parameter kedua yaitu berupa data inputan dari user
        - Silahkan masukkan berupa array of object
        - contohnya seperti dibawah ini:
        ```
        $arr = [];
        $arr[0]['kode_rule'] = "G01";
        $arr[0]['persentase_user'] = 0.8;

        $arr[1]['kode_rule'] = "G02";
        $arr[1]['persentase_user'] = 0.5;
        ```
        - Lalu masukkan variable ```$arr``` kedalam parameter kedua dalam fungsi ProsesHitung 
        - Lebih efektif anda menggunakan looping untuk menyimpan ke variable ```$arr``` tersebut
         <br>
    - <b>PERLU DIINGAT!!</b> <br>
        Nama dari array of object <b>jangan diubah!</b> 
        penjelasan:
        - object ```kode_case``` ini adalah kode dari case atau tautan untuk menghubungkan antara case dengan gejala. Atau lebih mudah dipahami seperti unique id dari sebuah penyakit (jika studi kasusnya penyakit).
        - object ```nama_penyakit``` ini adalah nama yang mendeskripsikan dari kode rule. Atau lebih mudah dipahami seperti nama dari sebuah penyakit (jika studi kasusnya penyakit)
        - object ```kode_rule``` ini adalah kode dari rule atau tautan untuk menghubungkan antara case dengan gejala. Atau lebih mudah dipahami seperti unique id dari gejala (jika studi kasusnya penyakit).
        - object ```nama_rule``` ini adalah nama yang mendeskripsikan dari kode rule. Atau lebih mudah dipahami seperti nama gejala (jika studi kasusnya penyakit)
        - object ```nilai_mb``` dan object ```nilai_md``` ini adalah hasil nilai dari pakar. Belum paham? silahkan dibaca referensi bagian bawah ini.
        - object ```persentase_user``` ini adalah persentase dari kepercayaan user, <b>INGAT!</b> jangan lupa konversikan ke bilangan bagi 100 atau float. contoh: 80% maka hasilnya 0.80
- Hasil dari perhitungan akan nampak seperti dibawah ini
    ```
    {
        "list_case":
        [
            {
            "kode_case":"P01",
            "nama_case":"Anemia Aplastik",
            "hasil_perhitungan":0.2977600000000000246558329308754764497280120849609375
            },
            {
            "kode_case":"P02",
            "nama_case":"Anemia Defisiensi Zat besi",
            "hasil_perhitungan":0.414553600000000022074431171859032474458217620849609375
            },
            {
            "kode_case":"P03",
            "nama_case":"Anemia Kremis\/Kronik",
            "hasil_perhitungan":0.244000000000000050182080713057075627148151397705078125
            }
        ],
        "hasil_pakar":
        {
            "kode_case":"P02",
            "nama_case":"Anemia Defisiensi Zat besi",
            "hasil_perhitungan":0.414553600000000022074431171859032474458217620849609375
        }
    }
    ```
    - Dari hasil output terdapat dua object yaitu list_case dan hasil_pakar.
    - Object list_case didalamnya memiliki data array of object lagi
        - Object list_case ini menampung semua hasil perhitungan dari case yang ada
    - Object hasil_pakar didalamnya memiliki object lagi yaitu nama_case dan hasil_perhitungan
        - Object hasil_pakar ini menampung hasil akhir dari semua case yang ada
    - Silahkan berkreasi lagi dari output seperti yang diatas. Lanjutkan sesuai logika aplikasi anda

## NOTE!!!
- [Data Test dan Input Test](src/Tester) yang didapat bukanlah data dari pakar untuk pembobotan MB (<i>measure of belief / ukuran kepercayaan</i>) maupun MD (<i> measure of disbelief / ukuran ketidakpercayaan</i>)
- Data case / penyakit, rule dan gejala didapat dari [jurnal ini](https://prpm.trigunadharma.ac.id/public/fileJurnal/hpxu6%20-%20Trinanda.pdf)
- Silahkan ubah data tersebut sesuai studi kasus masing-masing

## Hitung Manual
- Silahkan lihat file [.ods](manual.ods) ini untuk perhitungan manual dari contoh inputan diatas 

## Referensi
1. [SISTEM PAKAR PENDIAGNOSA PENYAKIT ANAK MENGGUNAKAN CERTAINTY FACTOR (CF)](https://ejournal.unsrat.ac.id/index.php/JIS/article/view/705/0)
2. [Perancangan Aplikasi Sistem Pakar Penyakit Roseola Dengan Menggunakan Metode Certainty Factor](https://www.ejurnal.stmik-budidarma.ac.id/index.php/JSON/article/view/1956)
3. [SISTEM PAKAR DIAGNOSA PENYAKIT PADA AYAM MENGGUNAKAN METODE CERTAINTY FACTOR](https://www.scribd.com/document/431280343/Dokumentasi-Sistem-Pakar-Ayam-Skripsi)
4. [SISTEM PAKAR penyelesaian metode Certainty Factor
](http://ariecandra02.blogspot.com/2017/05/sistem-pakar-penyelesaian-metode_64.html)


## Disclaimer

* <b>Dilarang keras</b> di perjual-belikan, source ini saya publikasi untuk keperluan belajar saja.

## Donation

* Bagi yang ingin berdonasi terbentuknya sistem ini, siapapun, berapapun, saya ucapkan terimakasih sebanyak-banyaknya. Via Gopay / Dana.

### Gopay<br>
<img src="img/gpy.png" height="400"> <br>

### Dana<br>
<img src="img/dana.png" height="350">