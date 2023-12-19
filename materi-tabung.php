<?php
		include "navbar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin();
?>
	<div class="container">
        <h2>Tabung</h2>
        <ol type='a'>
            <li>
              <h4>Pengertian</h4>
              <p>
              Tabung adalah sebuah bangun ruang tiga dimensi yang memiliki tutup dan alas yang berbentuk sebuah lingkaran dengan ukuran yang sama dengan di selimuti oleh persegi panjang. Tabung juga disebut dengan silinder. Berikut ini gambar tabung:
              </p>
              <img src="materi-tabung1.jpg" alt="">
            </li>
            <li>
              <h4>Sifat Tabung:</h4>
              <p>
              Sifat tabung diantaranya yaitu :
              </p>
              <ol>
                <li>Memiliki 2 (dua) buah rusuk lengkung.</li>
                <li>Memiliki alas dan tutup berbentuk lingkaran yang masing-masing sama besar.</li>
                <li>Memiliki 3 (tiga) buah sisi diantaranya dua buah sisi berbentuk lingkaran dan satu sisi selimut berbentuk persegi panjang.</li>
                <li>Tidak memiliki titik sudut</li>
              </ol>
            </li>
            <li>
              <h4>Luas Permukaan Tabung</h4>
              <p>
              Luas permukaan tabung adalah jumlah seluruh permukaan (datar atau lengkung) yang membentuk tabung. Luas permukaan ini merupakan penjumlahan sisi alas, sisi atas, dan selimut tabung.
              </p>
              <img src="materi-tabung2.png" alt=""> <br>
              <span>Misalkan terdapat tabung dengan jari-jari r dan tinggi t,	maka :</span> <br>
              <table>
                <tr>
                  <td>L</td>
                  <td>=</td>
                  <td>Luas jaring-jaring tabung</td>
                </tr>
                <tr>
                  <td></td>
                  <td>=</td>
                  <td>2 x Luas lingkaran + Luas persegi panjang ABCD</td>
                </tr>
                <tr>
                  <td></td>
                  <td>=</td>
                  <td>(2 x πr<sup>2</sup>) + (AB x BC)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>=</td>
                  <td>2πr<sup>2</sup>+(2πr x t)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>=</td>
                  <td>2πr<sup>2</sup>+ 2πrt</td>
                </tr>
                <tr>
                  <td></td>
                  <td>=</td>
                  <td>2πr(r+t)</td>
                </tr>
              </table>
              <span> Jadi rumus luas permukaan tabung adalah L= 2πr(r+t)</span>
            </li>
            <li>
            <h4>Volume Tabung</h4>
              <p>
              Pada dasarnya bangun ruang tabung juga merupakan sebuah prisma dengan bidang alas dan bidang atas yang sejajar dan kongruen. Rumus volume untuk bangun ini sema dengan rumus volume untuk prisma yakni perkalian antara luas alasnya dengan tinggi.
              </p>
              <img src="materi-tabung3.png" alt="">
              <table>
                <tr>
                  <td>V</td>
                  <td>=</td>
                  <td>Luas alas x tinggi</td>
                </tr>
                <tr>
                  <td></td>
                  <td>=</td>
                  <td>πr<sup>2</sup> x t</td>
                </tr>
              </table>
              <span>Jadi rumus volume tabung adalah V = πr<sup>2</sup> x t	</span>
            </li>
        </ol>
	</div>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

