<html>
    <head>
        <title>Login Admin</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
    </head>
    <body>
        <style>
            .kotak{
                border: 1px solid gainsboro;
                padding: 10px;
                margin: auto 10%;
                background-color: whitesmoke;
                border-radius: 20px;
            }
            .kotak table{
                background-color: white;
            }
            .kotak a{
                display: block;
                text-decoration: none;
                padding: 10px;
                width: 120px;
                color: white;
                border-radius: 5px;
                text-align: center;
                background-color: greenyellow;
            }
        </style>
        <div class="kotak">
            <div align="center"><strong><font size="6" face="Courier New, Courier,mono">
                Silakan Login Terlebih Dahulu</font></strong>
            </div>
            <form action="#" method="post" name="login" onsubmit="berhasil()">
                <table width="100px" border="0" align="center">
                    <tr>
                        <td>Username</td>
                        <td><input name="user" type="text" id="user"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input name="pass" type="password" id="pass"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" name="login" value="Masuk"><input type="reset"
                            name="reset" value="Batal"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
    <script>
        function berhasil(){
            alert("Login Berhasil!!");
        }
    </script>
</html>

<?php
if (isset($_POST['login'])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    if($user=="admin" && $pass=="admin"){
        echo "<div class=kotak><div align=center></div>";
    
    $fp = fopen("pesanan.txt","a+");
    echo "<div align=center><h2>Daftar Pemesanan</h2><table width=90% border=1 cellspacing=0 cellpadding=3>";

    echo "<tr align=center><td>Tanggal</td><td>Nama</td><td>Alamat</td><td>No Telp/ WA</td>
            <td>Material</td><td>Merek</td><td>Jumlah</td><td>Pesan</td></tr>";
    while($isi=fgets($fp,10000)){
        $pisah=explode("|",$isi);
        echo "<tr>";
        echo "<td>$pisah[0] </td>";
        echo "<td>$pisah[1] </td>";
        echo "<td>$pisah[2] </td>";
        echo "<td>$pisah[3] </td>";
        echo "<td>$pisah[4] </td>";
        echo "<td>$pisah[5] </td>";
        echo "<td>$pisah[6] </td>";
        echo "<td>$pisah[7] </td>";
        echo "</tr>";
    }

    echo "</table>";
    echo "<br>Kembali ke halaman utama<a href=index.html>Klik Disini </a></div></div>";
    }
    else{
        echo("<div align=center><h2>Login gagal, mohon ulangi lagi</h2></div>");
    }
}
?>