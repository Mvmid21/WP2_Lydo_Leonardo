<html>

<head>
    <title>TOKO SEPATU</title>

    <style>
        .error1 {
            color: black;
        }
    </style>
</head>
<body>
        <form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
        <center>
            <table cellpadding="10"> 
                <tr>
                <th> <?= form_error('nama'); ?></th>
                <th><?= form_error('no'); ?></th>
                <th> <?= form_error('merk'); ?></th>
                <th> <?= form_error('ukuran'); ?></th>
                </tr>
                </table>
 
                <table cellpadding=10>
                <tr>
                    <td colspan="5">NAMA PEMBELI</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama" placeholder="Nama" style="width: 200px;"></td>
                </tr>
                <tr>
                    <td colspan="5">NO HP</td>
                    <td>:</td>
                    <td> <input type="text" name='no' id='no' placeholder="No HP" style="width: 200px;"></td>
                </tr>
                <tr>
                    <td colspan="5">MERK SEPATU</td>
                    <td>:</td>
                    <td>
                        <select name="merk" id="merk" placeholder="merk spt" style="width: 200px; text-align: center">
                            <option value="">--PILIH MERK SEPATU--</option>
                            <option value="Nike">NIKE</option>
                            <option value="Adidas">ADIDAS</option>
                            <option value="Kickers">KICKERS</option>
                            <option value="Eiger">EIGER</option>
                            <option value="Bucherri">BUCHERRI</option>
                        </select>
                    </td>
                <tr>
                    <td colspan="5">UKURAN SEPATU</td>
                    <td>:</td>
                    <td>
                    <select name="ukuran" id="ukuran" placeholder="ukuran Spt" style="
                    width: 200px; text-align: center">
                            <option value="">--PILIH UKURAN SEPATU--</option>
                            <option value="34">34</option>
                            <option value="35">35</option>
                            <option value="36">36</option>
                            <option value="37">37</option>
                            <option value="38">38</option>
                            <option value="39">39</option>
                            <option value="40">40</option>
                            <option value="41">41</option>
                            <option value="42">42</option>
                            <option value="43">43</option>
                            <option value="44">44</option>
                        </select>
                    </td>
                </tr>
            </table>
            <br>  
            </center>
        <footer>
        <table style="float:right">.
                <tr>
                <td><input type="submit" value="KONFIRMASI"></td>
                <td><input type="reset" value="BATAL"></td>
                </tr>
            </table>
    </footer>
</body>
</html>
</body>

</html>
