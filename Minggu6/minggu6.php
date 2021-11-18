<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Praktikum minggu 5</title>
</head>
<body>
        <h4> Mangga 1 kg = 15.000</h2>
        <h4> Jambu 1 kg = 13.000</h2>
        <h4> Salak 1 kg = 10.000</h2>
    <form method="POST" onsubmit="tampil()">

        <div>
            <center><label for="">Mangga</label></center>
                <center><input type="number" name="mangga" id="mangga" required></center>
        </div>
            <center><label for="">Jambu</label><center>
                <center><input type="number" name="jambu" id="jambu" required></center> 
        <div>
            <center><label for="">Salak</label></center>
                <center><input type="number" name="salak" id="salak" required></center>
        </div>

        <center><input type="submit" name="submit" value="hitung"><center>
    </form>
    <br><br>
    <div id="hasil">

    </div>

    <script type="text/javascript">
        <?php
            
            class mangga{
                private $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga = 15000;
                }
            
                public function jumlahMangga(){
                    return $this->jumlah;
                }

                public function hargaMangga(){
                    return $this->harga;
                }
            }

            class jambu{
                private $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga = 13000;
                }

                public function jumlahJambu(){
                    return $this->jumlah;
                }

                public function hargaJambu(){
                    return $this->harga;
                }
            }

            class salak{
                private $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga = 10000;
                }

                public function jumlahSalak(){
                    return $this->jumlah;
                }

                public function hargaSalak(){
                    return $this->harga;
                }
            }
            
        ?>
        

        function tampil(){
            event.preventDefault()
 
            var jmlMangga = document.getElementById('mangga').value;
            var jmlJambu = document.getElementById('jambu').value;
            var jmlSalak = document.getElementById('salak').value;

            var hargaMangga = 15000;
            var hargaJambu = 13000;
            var hargaSalak = 10000;

            var total = jmlMangga*hargaMangga + jmlJambu*hargaJambu + jmlSalak*hargaSalak;
            
            output = document.getElementById('hasil');
            output.style.border = "black outset 5px";
            output.style.background = "rgb(113, 241, 113)";
            // output.innerHTML = "tes";
            output.innerHTML = "Mangga : "+jmlMangga+" buah ->"+jmlMangga*hargaMangga +"<br>"+"Jambu : "+jmlJambu+" buah ->"+jmlJambu*hargaJambu+"<br>"+"Salak : "+jmlSalak+" buah ->"+ jmlSalak*hargaSalak+"<br>"+"<br><br><b>Total Belanja = </b>" + "<b>"+total+"</b>";
        }
        
         
        
    </script>
</body>
</html>