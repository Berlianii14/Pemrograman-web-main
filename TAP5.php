<html>
    <head>
        <title>Praktikum 5</title>
    </head>
    <body>
        <header>
            <div style="text-align:center;">
                <h1>Konversi Barang</h1>
            </div>
        </header>
        <?php
            $Barang = array ("Laptop", "Keyboard", "Mouse", "DrawingPad");
            $Stok = array (4, 3, 2, 0);
            $Stok_Kg = array (4, 3, 2, 1);
            $Stok_Mg = konversi($Stok_Kg, false);
            $Stok_g = konversi($Stok_Kg, true);

            function konversi ($Stok_Kg, $Gram){
                $Stok_g = array();
                $Stok_Mg = array();
    
                if($Gram == true){
                    foreach ($Stok_Kg as $value){
                        array_push($Stok_g, $value * 1000);
                    }
                    return $Stok_g;
                } else {
                    foreach ($Stok_Kg as $value){
                        array_push($Stok_Mg, $value * 1000000);
                    }
                    return $Stok_Mg;
                }
            }

            $blacklist = "0"
        ?>

        <table width = 500 border =1 >
                    <tr bgcolor=00fffff>
                        <th>No</th>
                        <th>Nama Barang</th>
                        <th>Berat (Kg)</th>
                        <th>Berat (g)</th>
                        <th>Berat (Mg)</th>
                        <th>Stok</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td> <?php echo $Barang [0]; ?> </td>
                        <td> <?php echo $Stok_Kg [0]; ?> </td>
                        <td> <?php echo $Stok_g [0]; ?> </td>
                        <td> <?php echo $Stok_Mg [0]; ?> </td>
                        <td> <?php echo $Stok [0]; ?> </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td> <?php echo $Barang [1]; ?> </td>
                        <td> <?php echo $Stok_Kg [1]; ?> </td>
                        <td> <?php echo $Stok_g [1]; ?> </td>
                        <td> <?php echo $Stok_Mg [1]; ?> </td>
                        <td> <?php echo $Stok [1]; ?> </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td> <?php echo $Barang [2]; ?> </td>
                        <td> <?php echo $Stok_Kg [2]; ?> </td>
                        <td> <?php echo $Stok_g [2]; ?> </td>
                        <td> <?php echo $Stok_Mg [2]; ?> </td>
                        <td> <?php echo $Stok [2]; ?> </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td> <?php echo $Barang [3]; ?> </td>
                        <td> <?php echo $Stok_Kg [3]; ?> </td>
                        <td> <?php echo $Stok_g [3]; ?> </td>
                        <td> <?php echo $Stok_Mg [3]; ?> </td>
                        <td> <?php echo $Stok [3]; ?> </td>
                    </tr>
                    
                    
                </table>";
         
        
    </body>
</html>