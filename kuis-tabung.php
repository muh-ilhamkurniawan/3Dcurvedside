<?php
		include "navbar.php";
        include "functions.php"; // Sertakan file dengan fungsi cekLogin
        cekLogin();
?>
	<div class="container">
        <h2>Latihan Soal Tabung</h2>
        <form action="proses_kuis.php" id="quizForm" method="post">
            <div alt="soal1">
                <h4>No. 1</h4>
                <img src="kuis-tabung1.png" alt="">
                <p>
                Ani memiliki celengan bentuknya seperti pada gambar. Rencananya Ani ingin melapisi celengan tersebut menggunakan kain flanel. Jika tinggi celengan 21 cm dan diameter celengan yaitu 14 cm. Ukuran kain flanel yang dibutuhkan Ani yaitu ...
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="a" required>
                    <label class="form-check-label">
                        (A) 923 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="b" required>
                    <label class="form-check-label">
                        (B) 924 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="c" required>
                    <label class="form-check-label">
                        (C) 6468 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="d" required>
                    <label class="form-check-label">
                        (D) 928 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="e" required>
                    <label class="form-check-label">
                        (E) 920 cm²
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
                          Celengan berbentuk tabung, <br>
                          Tinggi celengan 21 cm <br>
                          Diameter celengan 14 cm maka jari-jari celengan 7 cm <br>
                          <strong>Ditanya :</strong> <br>
                          Berapa ukuran kain flanel yang dibutuhkan? <br>
                          <strong>Jawab :</strong>
                        </p>
                        <table class="w-50">
                            <tr>
                                <td>Luas selimut celengan</td>
                                <td>=</td>
                                <td>2πrt</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>2(22/7)(7)(21)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>924 cm²</td>
                            </tr>
                        </table>
                        <p>
                        Jadi, ukuran kain flanel yang dibutuhkan yaitu  (B) 924 cm²
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal2">
                <h4>No. 2</h4>
                <img src="kuis-tabung2.png" alt="">
                <p>
                Putri memiliki kaleng bekas seperti pada gambar. Kaleng berkas tersebut berdiameter 28 cm dan tingginya 10 cm. Jika Putri ingin memasukkan cat ke dalam kaleng tersebut. Cat yang dibutuhkan Putri yaitu sebanyak ....
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="a" required>
                    <label class="form-check-label">
                        (A) 6160 cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="b" required>
                    <label class="form-check-label">
                        (B) 6180 cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="c" required>
                    <label class="form-check-label">
                        (C) 6210 cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="d" required>
                    <label class="form-check-label">
                        (D) 6260 cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="d" required>
                    <label class="form-check-label">
                        (E) 6820 cm<sup>3</sup>
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
                          Diameter kaleng 28 cm maka jari-jari 14 cm<br>
                          Tinggi kaleng 10 cm<br>
                          <strong>Ditanya :</strong> <br>
                          Volume cat? <br>
                          <strong>Jawab :</strong>
                        </p>
                        <table class="w-50">
                            <tr>
                                <td>volume kaleng bekas</td>
                                <td>=</td>
                                <td>πr²t</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>(22/7)(14)²(10)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>6160 cm<sup>3</sup></td>
                            </tr>
                        </table>
                        <p>
                        Jadi, volume cat yang dibutuhkan Putri yaitu sebanyak 6160 cm<sup>3</sup>
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal3">
                <h4>No. 3</h4>
                <p>
                Sebuah drum minyak memiliki kapasitas 3465 liter. Jika tingginya 1 m, maka ukuran diameter drum minyak tersebut adalah .... m
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="a" required>
                    <label class="form-check-label">
                        (A) 2
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="b" required>
                    <label class="form-check-label">
                        (B) 2,1
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="c" required>
                    <label class="form-check-label">
                        (C) 2,3
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="d" required>
                    <label class="form-check-label">
                        (D) 2,5
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="e" required>
                    <label class="form-check-label">
                        (E) 2,6
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
                          Volume drum minyak 3465 liter = 3.465 m<sup>3</sup><br>
                          Tinggi drum minyak 1 meter<br>
                          <strong>Ditanya :</strong> <br>
                          Ukuran diameter drum minyak?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>volume drum minyak = πr²t</span>
                        <table class="w-25">
                            <tr>
                                <td>3.465</td>
                                <td>=</td>
                                <td>(22/7)r²(1)</td>
                            </tr>
                            <tr>
                                <td>r²</td>
                                <td>=</td>
                                <td>3.465(7/22)</td>
                            </tr>
                            <tr>
                                <td>r</td>
                                <td>=</td>
                                <td>√1.1025</td>
                            </tr>
                            <tr>
                                <td>r</td>
                                <td>=</td>
                                <td>1.05</td>
                            </tr>
                        </table>
                        <table class="w-25">
                            <tr>
                                <td>Diameter </td>
                                <td>=</td>
                                <td>2 x jari-jari</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>2 x 1.05</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>2.1 cm</td>
                            </tr>
                        </table>
                        <p>
                        Jadi, diameter dari drum minyak tersebut yaitu 2.1 cm
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal4">
                <h4>No. 4</h4>
                <p>
                Adit memiliki aquarium ikan. Jika sebuah aquarium yang berbentuk tabung memiliki diameter 70 cm dan volumenya 231 liter, maka tinggi aquarium tersebut adalah .... cm
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="a" required>
                    <label class="form-check-label">
                        (A) 50
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="b" required>
                    <label class="form-check-label">
                        (B) 55
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="c" required>
                    <label class="form-check-label">
                        (C) 60
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="d" required>
                    <label class="form-check-label">
                        (D) 65
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="e" required>
                    <label class="form-check-label">
                        (E) 70
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
                          Diameter aquarium 70 cm maka jari-jari aquarium 35 cm<br>
                          Volume aquarium 231 liter = 231000 cm^3<br>
                          <strong>Ditanya :</strong> <br>
                          Tinggi aquarium?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <table class="w-50">
                            <tr>
                                <td>volume aquarium</td>
                                <td>=</td>
                                <td>πr²t</td>
                            </tr>
                            <tr>
                                <td>231000</td>
                                <td>=</td>
                                <td>(22/7)(35)²t</td>
                            </tr>
                            <tr>
                                <td>t</td>
                                <td>=</td>
                                <td>((231000)(7/22))/35² </td>
                            </tr>
                            <tr>
                                <td>t</td>
                                <td>=</td>
                                <td>60 cm</td>
                            </tr>
                        </table>
                        <p>
                        Jadi, tinggi dari aquarium Adit yaitu 60 cm
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal5">
                <h4>No. 5</h4>
                <p>
                Ayah Aulia memiliki tangki minyak berbentuk tabung berdiameter 2 m dengan tinggi 1,4 meter. Mula-mula tangki diisi minyak hingga penuh, namun karena bocor, isinya tinggal 4/5 nya saja. Minyak yang mengalir karena bocor sebanyak .... liter
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="a" required>
                    <label class="form-check-label">
                        (A) 780
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="b" required>
                    <label class="form-check-label">
                        (B) 800
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="c" required>
                    <label class="form-check-label">
                        (C) 850
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="d" required>
                    <label class="form-check-label">
                        (D) 880
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
                          Diameter tangki 2 m maka jari-jari tangki 1 m Tinggi tangki 1,4 m<br>
                          <strong>Ditanya :</strong> <br>
                          Berapa minyak yang mengalir ?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>Volume tangki jika penuh = πr²t</span>
                        <table class="w-50">
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>(22/7)(1)²(1,4)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>4,4 m<sup>3</sup> </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>4.400 liter</td>
                            </tr>
                        </table>
                        <span>Volume tangki = 4/5 x 4.400 = 3.520 liter</span>
                        <span>Minyak yang mengali= 4.400 - 3.520 = 880 liter</span>
                        <p>
                        Jadi, banyak minyak yang mengalir karena bocor yaitu 880 liter
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

