<?php
		include "navbar.php";
        include "functions.php"; // Sertakan file dengan fungsi cekLogin
        cekLogin();
?>
	<div class="container">
        <h2>Latihan Soal Kerucut</h2>
        <form action="proses_kuis.php" id="quizForm" method="post">
            <div alt="soal1">
                <h4>No. 1</h4>
                <p>
                Ibu Ani ingin membuat tumpeng berbentuk kerucut, dengan ukuran diameter alasnya 21 cm dan tingginya 42 cm. Volume tumpeng yang Ibu Ani buat yaitu ...
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="a" required>
                    <label class="form-check-label">
                        (A) 4851  cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="b" required>
                    <label class="form-check-label">
                        (B) 4581  cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="c" required>
                    <label class="form-check-label">
                        (C) 4185  cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="d" required>
                    <label class="form-check-label">
                        (D) 4815  cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="e" required>
                    <label class="form-check-label">
                        (E) 4518  cm<sup>3</sup>
                    </label>
                </div>
                <p>
                  <button class="btn btn-dark font-weight-bold text-black" type="button" data-toggle="collapse" data-target="#soal1" aria-expanded="false" aria-controls="collapseExample">
                      Lihat Pembahasan :
                  </button>
                </p>
                <div class="collapse" id="soal1">
                    <div class="card card-body">
                        <p>
                          <strong>Diketahui :</strong> <br>
                          Diameter tumpeng 21 cm maka jari-jari tumpeng yaitu 21/2 cm <br>
                          Tinggi tumpeng 42 cm <br>
                          <strong>Ditanya :</strong> <br>
                          Volume tumpeng yang Ibu Ani buat  <br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>volume tumpeng=1/3 πr² t</span>
                        <table class="w-50">
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>1/3 (22/7) (21/2)² (42)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>4851 cm<sup>3</sup></td>
                            </tr>
                        </table>
                        <p>
                        Jadi, volume tumpeng yang Ibu Ani buat yaitu  (A) 4851  cm<sup>3</sup>
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal2">
                <h4>No. 2</h4>
                <p>
                Nita sedang membuat coklat yang mana coklat itu akan dimasukkan ke dalam kemasan yang berbentuk kerucut seperti pada gambar. Nita berniat akan membuat coklat sebanyak 8 kemasan. Apabila kemasan tersebut memiliki diameter 3cm dan tinggi 7 cm. Banyaknya cokelat yang dibutuhkan Nita yaitu ...
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="a" required>
                    <label class="form-check-label">
                        (A) 123  cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="b" required>
                    <label class="form-check-label">
                        (B) 321  cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="c" required>
                    <label class="form-check-label">
                        (C) 132 cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="d" required>
                    <label class="form-check-label">
                        (D) 213 cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="d" required>
                    <label class="form-check-label">
                        (E) 312 cm<sup>3</sup>
                    </label>
                </div>
                <p>
                  <button class="btn btn-dark font-weight-bold text-black" type="button" data-toggle="collapse" data-target="#soal2" aria-expanded="false" aria-controls="collapseExample">
                      Lihat Pembahasan :
                  </button>
                </p>
                <div class="collapse" id="soal2">
                    <div class="card card-body">
                        <p>
                          <strong>Diketahui :</strong> <br>
                          Diameter kemasan 3 cm maka jari-jari kemasan yaitu 3/2  cm<br>
                          Tinggi kemasan yaitu 7 cm<br>
                          <strong>Ditanya :</strong> <br>
                          Banyaknya cokelat yang dibutuhkan Nita jika membuat sebanyak 8 kemasan?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>volume 1 kemasan cokelat=1/3 πr²t</span>
                        <table class="w-50">
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>1/3 (22/7)(3/2)²(7)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>33/2 cm<sup>3</sup>/td>
                            </tr>
                        </table>
                        <span>Banyaknya cokelat yang dibutuhkan</span>
                        <table class="w-50">
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>8 x volume 1 kemasan cokelat</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>8 x 33/2 = 132 cm<sup>3</sup></td>
                            </tr>
                        </table>
                        <p>
                        Jadi, banyaknya cokelat yang dibutuhkan Nita yaitu (C) 132 cm<sup>3</sup>
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal3">
                <h4>No. 3</h4>
                <p>
                Paman memiliki caping yang terbuat dari anyaman bambu. Caping tersebut memiliki diameter 28 cm dan tinggi 30 cm. Luas dari caping tersebut adalah .... cm²
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="a" required>
                    <label class="form-check-label">
                        (A) 88√274 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="b" required>
                    <label class="form-check-label">
                        (B) 88√247 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="c" required>
                    <label class="form-check-label">
                        (C) 77√247 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="d" required>
                    <label class="form-check-label">
                        (D) 88√427 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="e" required>
                    <label class="form-check-label">
                        (E) 77√427 cm²
                    </label>
                </div>
                <p>
                  <button class="btn btn-dark font-weight-bold text-black" type="button" data-toggle="collapse" data-target="#soal3" aria-expanded="false" aria-controls="collapseExample">
                      Lihat Pembahasan :
                  </button>
                </p>
                <div class="collapse" id="soal3">
                    <div class="card card-body">
                        <p>
                          <strong>Diketahui :</strong> <br>
                          Diameter 28 cm maka jari-jari caping yaitu 14 cm<br>
                          Tinggi caping 30 cm<br>
                          <strong>Ditanya :</strong> <br>
                          Luas permukaan caping?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>Mencari garis pelukis terlebih dahulu</span>
                        <span>s = √(14^2+30^2 ) = 2√274</span>
                        <table class="w-50">
                            <tr>
                                <td>luas selimut tabung</td>
                                <td>=</td>
                                <td>πrs</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>(22/7)(14)(2√274)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>88√274  cm<sup>2</sup></td>
                            </tr>
                        </table>
                        <p>
                        Jadi, luas permukaan caping paman yaitu (A) 88√274 cm²
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal4">
                <h4>No. 4</h4>
                <p>
                Sebuah kerucut luas alasnya 154 cm². Jika volumenya 770 cm³, maka tinggi kerucut tersebut .... cm
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="a" required>
                    <label class="form-check-label">
                        (A) 12
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="b" required>
                    <label class="form-check-label">
                        (B) 14
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="c" required>
                    <label class="form-check-label">
                        (C) 15
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="d" required>
                    <label class="form-check-label">
                        (D) 16
                    </label>
                </div>
                <p>
                  <button class="btn btn-dark font-weight-bold text-black" type="button" data-toggle="collapse" data-target="#soal4" aria-expanded="false" aria-controls="collapseExample">
                      Lihat Pembahasan :
                  </button>
                </p>
                <div class="collapse" id="soal4">
                    <div class="card card-body">
                        <p>
                          <strong>Diketahui :</strong> <br>
                          Luas alas 154 cm²,<br>
                          Volume kerucut 770 cm^3<br>
                          <strong>Ditanya :</strong> <br>
                          Tinggi kerucut?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>Volume kerucut = 1/3 x Luas Alas x tinggi kerucut</span>
                        <table class="w-25">
                            <tr>
                                <td>volume aquarium</td>
                                <td>=</td>
                                <td>πr²t</td>
                            </tr>
                            <tr>
                                <td>770</td>
                                <td>=</td>
                                <td>1/3(154)t</td>
                            </tr>
                            <tr>
                                <td>t</td>
                                <td>=</td>
                                <td>(770(3))/154</td>
                            </tr>
                            <tr>
                                <td>t</td>
                                <td>=</td>
                                <td>15 cm</td>
                            </tr>
                        </table>
                        <p>
                        Jadi, tinggi dari kerucut tersebut yaitu (C) 15 cm
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal5">
                <h4>No. 5</h4>
                <p>
                Luas permukaan kerucut dengan diameter 40 cm dan tinggi 15 cm adalah ….
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="a" required>
                    <label class="form-check-label">
                        (A) 750 π cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="b" required>
                    <label class="form-check-label">
                        (B) 800 π cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="c" required>
                    <label class="form-check-label">
                        (C) 850 π cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="d" required>
                    <label class="form-check-label">
                        (D) 900 π cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="e" required>
                    <label class="form-check-label">
                        (D) 950 π cm²
                    </label>
                </div>
                <p>
                  <button class="btn btn-dark font-weight-bold text-black" type="button" data-toggle="collapse" data-target="#soal5" aria-expanded="false" aria-controls="collapseExample">
                      Lihat Pembahasan :
                  </button>
                </p>
                <div class="collapse" id="soal5">
                    <div class="card card-body">
                        <p>
                          <strong>Diketahui :</strong> <br>
                          diameter  40 cm maka jari-jarinya 20 cm tinggi kerucut 15 cm<br>
                          <strong>Ditanya :</strong> <br>
                          Luas permukaan topi ?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>Karena topi adalah bangun kerucut tanpa alas maka kita gunakan rumus luas selimut.</span>
                        <span>Luas selimut kerucut = πrs</span>
                        <span>Untuk mengetahui luas selimut, kita harus mencari nilai s (garis pelukis) atau sisi miring terlebih dahulu.</span>
                        <table class="w-25">
                            <tr>
                                <td>s</td>
                                <td>=</td>
                                <td>√(r² + t²)</td>
                            </tr>
                            <tr>
                                <td>s</td>
                                <td>=</td>
                                <td>√(202 + 152)</td>
                            </tr>
                            <tr>
                                <td>s</td>
                                <td>=</td>
                                <td>√(400 + 225)</td>
                            </tr>
                            <tr>
                                <td>s</td>
                                <td>=</td>
                                <td>√625</td>
                            </tr>
                            <tr>
                                <td>s</td>
                                <td>=</td>
                                <td>25 cm</td>
                            </tr>
                        </table>
                        <table class="w-25">
                            <tr>
                                <td>L</td>
                                <td>=</td>
                                <td>πr x (r+s)</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>=</td>
                                <td>π × 20 × (20 + 25)</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>=</td>
                                <td>20π × 45</td>
                            </tr>
                            <tr>
                                <td>L</td>
                                <td>=</td>
                                <td>900π cm²</td>
                            </tr>
                        </table>
                        <p>
                        Jadi, luas permukaan kerucut yaitu (D) 900 π cm² 
                        </p>
                    </div>
                </div>
            </div>
        </form>
	</div>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

