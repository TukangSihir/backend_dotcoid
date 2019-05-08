# backend_dotcoid
Tutorial Instalasi<br><br>
    $ git clone https://github.com/TukangSihir/backend_dotcoid.git\n<br>
    $ cp .env .env.example<br>
        <p>rubah username, password, dan database</p>
    $ composer install<br>
    $ php artisan key:generate<br>
    $ php artisan migrate<br>
    $ php artisan serve<br>
    Pergi ke http://localhost:8000<br>
    
**Route list**<br>
/lowongan


# Logika dan Struktur Data

        <?php
            //Inisialisasi Array
            $S = array(2, 1, 6, 9, 9, 4, 3);

            //Descending Sort
            rsort($S);

            for($increment = 0; $increment < count($S); $increment++){
                $nd = $S[$increment];
                //Cek nilai Maksimal array dan Bandingkan dengan $nd
                if(max($S) > $nd){
                    echo $nd;
                    break;
                }
            }
        ?>

# Knowledge & Experience Questions

1. MVC merupakan kepanjangan dar Model View Controller, Model biasanya berisi untuk manipulasi data (Create, Read, Update,  Delete); View berisi tampilan website seperti css,html dll; dan Controller berisi mengatur apa yang direquest dan menampilkan kembali pada user. Struktur MVC sangat disarankan pada Web Development karen pada pemakaian struktur MVC lebih efisien, rapi dan mudah untuk melakukan development
2. gitflow adalah branching Git yang berguna dalam masa produksi, pada gitflow terdapat dua branch yaitu Master dan Development
3. Ya, Saya memilih Codeigniter karena pada codeigniter sangat mudah dipahami dan instalasi lebih mudah 
4. menentukan terlebih dahulu apa yang diperlukan, menentuka nama tabel tabel, menentukan field field primary key dan foreign key, melakukan relasi, kemudian melakukan test
5. Text Editor: Visual Studio Code<br>Web Server: Apache<br>Database: MySql<br>Web Browser: Mozilla Firefox
