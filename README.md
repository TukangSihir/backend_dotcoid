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


## Logika dan Struktur Data

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
