<html>
    <head>
    <title>

    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        /*buat ngestop biar ga auto running. karena javascript kalo ga dipanggil kan ga jalan, dan dia ga eror
        cek eror di bagian inspect yang console, kalo ga ada yang eror disana berarti aman */
        function hello() {
            alert("Selamat Anda mendapat 1 Milyar"); /*buat memunculkan sesuatu, jangan lupa titik koma*/
        }
        function tambah() {
            /* pake DOM buat ambil isian yang ada di body*/
            var bilangan1 = document.getElementById("bil1").value;
            var bilangan2 = document.getElementById("bil2").value;
            var hasil = Number.parseInt(bilangan1) + Number.parseInt(bilangan2); /*manggil parse int buat javascript code number*/

            document.getElementById("hasil").innerHTML = hasil;
        }
    </script>    
    </head>
    <body>
        <div class="container">
           <button class="btn btn-primary" onclick="hello();">Klik Disini</button> 
           <p>
            <!--sebelum bikin dom, buat dulu filenya-->
            Bilangan pertama :  <!--masukin input, number tuh ada spinnernya-->
            <input type="text" class="form-control" id="bil1" value="0">
            <br>
            Bilangan kedua : <!--masukin input-->
            <input type="text" class="form-control" id="bil2" value="0">
            <br>
            Hasil Penjumlahan : <!--dibikin pake div aja-->
            <div id="hasil"></div>
            <br>
            <button class="btn btn-success" onclick="tambah();">Tambah</button>
           </p>
        </div>

    </body>
</html>