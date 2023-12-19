<?php
		include "navbar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin();
?>
	<div class="container">
        <h2>Kerucut</h2>
        <ol type='a'>
            <li>
              <h4>Pengertian</h4>
              <p>
              Kerucut adalah salah satu bangun ruang yang mempunyai sebuah alas yang berbentuk lingkaran dengan selimut yang memiliki irisan dari lingkaran. Sisi tegak pada kerucut berupa bidang miring yang disebut selimut kerucut. Sisi lainnya disebut alas kerucut. Maka dapat disimpulkan, bahwa kerucut hanya memiliki 2 sisi, dan satu rusuk. Berikut ini gambar kerucut :
              </p>
              <img src="materi-kerucut1.png" alt="">
            </li>
            <li>
              <h4>Sifat Kerucut:</h4>
              <p>
              Berikut ini sifat-sifat kerucut, diantaranya yaitu:
              </p>
              <ol>
                <li>Kerucut merupakan bangun ruang berbentuk limas yang alasnya berbentuk lingkaran.</li>
                <li>Kerucut memiliki 2 sisi (1 sisi merupakan alas yang berbentuk lingkaran dan 1 sisinya lagi berupa sisi lengkung atau selimut kerucut).</li>
                <li>Kerucut memiliki 1 rusuk lengkung</li>
                <li>Kerucut tidak memiliki rumus titik sudut.</li>
                <li>Kerucut memiliki 1 buah titik puncak.</li>
              </ol>
            </li>
            <li>
              <h4>Luas Permukaan Kerucut</h4>
              <img src="materi-kerucut2.png" alt=""> <br>
              <p>
              Luas permukaan tabung adalah jumlah seluruh permukaan (datar atau lengkung) yang membentuk tabung. Luas permukaan ini merupakan penjumlahan sisi alas, sisi atas, dan selimut tabung.
              </p>
              <table>
                <tr>
                  <td>L</td>
                  <td>=</td>
                  <td>Luas lingkaran + Luas juring ABC</td>
                </tr>
                <tr>
                  <td></td>
                  <td>=</td>
                  <td>πr<sup>2</sup> + πrs</td>
                </tr>
                <tr>
                  <td></td>
                  <td>=</td>
                  <td>πr(r+s)</td>
                </tr>
                <tr>
                  <td></td>
                  <td>=</td>
                  <td>πr(r+√(r<sup>2</sup>+t<sup>s</sup> )), dengan s=√(r<sup>2</sup>+t<sup>s</sup> )</td>
                </tr>
              </table>
              <span>Jadi rumus luas permukaan kerucut adalah L = πr(r+√(r<sup>2</sup>+t<sup>s</sup> ))</span>
            </li>
            <li>
            <h4>Volume Kerucut</h4>
              <img src="materi-kerucut3.png" alt="">
              <table>
                <tr>
                  <td>V</td>
                  <td>=</td>
                  <td>1/3 L.alas x t</td>
                </tr>
                <tr>
                  <td></td>
                  <td>=</td>
                  <td>1/3 πr<sup>2</sup>  x t</td>
                </tr>
              </table>
              <span>Jadi rumus volume kerucut adalah V = 1/3 πr<sup>2</sup>  x t</span>
            </li>
        </ol>
	</div>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

