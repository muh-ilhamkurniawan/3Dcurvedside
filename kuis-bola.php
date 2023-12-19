<?php
		include "navbar.php";
        include "functions.php"; // Sertakan file dengan fungsi cekLogin
        cekLogin();
?>
	<div class="container">
        <h2>Latihan Soal Bola</h2>
        <form action="proses_kuis.php" id="quizForm" method="post">
            <div alt="soal1">
                <h4>No. 1</h4>
                <p>
                Volume sebuah bola adalah 38808 cm<sup>3</sup>. Panjang diameternya adalah .... cm
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="a" required>
                    <label class="form-check-label">
                        (A) 40
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="b" required>
                    <label class="form-check-label">
                        (B) 42
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="c" required>
                    <label class="form-check-label">
                        (C) 44
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="d" required>
                    <label class="form-check-label">
                        (D) 46
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="e" required>
                    <label class="form-check-label">
                        (E) 47
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
                          V = 38.808 cm<sup>3</sup> <br>
                          <strong>Ditanya :</strong> <br>
                          Diameter bola?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>Volume bola = 4/3 πr<sup>3</sup></span>
                        <table class="w-50">
                            <tr>
                                <td>38808 </td>
                                <td>=</td>
                                <td>4/3 (22/7) r<sup>3</sup></td>
                            </tr>
                            <tr>
                                <td>38808 </td>
                                <td>=</td>
                                <td>88/21 r<sup>3</sup></td>
                            </tr>
                            <tr>
                                <td>r<sup>3</sup></td>
                                <td>=</td>
                                <td>(38808)21/88</td>
                            </tr>
                            <tr>
                                <td>r<sup>3</sup> </td>
                                <td>=</td>
                                <td>9261</td>
                            </tr>
                            <tr>
                                <td>r </td>
                                <td>=</td>
                                <td>21 cm</td>
                            </tr>
                            <tr>
                                <td>d</td>
                                <td>=</td>
                                <td>2r</td>
                            </tr>
                            <tr>
                                <td>d</td>
                                <td>=</td>
                                <td>2 x 21 cm = 42 cm</td>
                            </tr>
                        </table>
                        <p>
                        Jadi, panjang diameter bola yaitu  (B) 42
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal2">
                <h4>No. 2</h4>
                <p>
                Sebuah bola diameternya 28 cm. Luas permukaannya adalah .... cm²
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="a" required>
                    <label class="form-check-label">
                        (A) 2.464
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="b" required>
                    <label class="form-check-label">
                        (B) 2.466
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="c" required>
                    <label class="form-check-label">
                        (C) 2.474
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="d" required>
                    <label class="form-check-label">
                        (D) 2.478
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
                          Diameter bola 28 cm maka jari-jarinya  14 cm<br>
                          <strong>Ditanya :</strong> <br>
                          Luas permukaan bola?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>Luas permukaan bola= 4πr²</span>
                        <table class="w-50">
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>(4)(22/7)(142)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>2.464 cm²</td>
                            </tr>
                        </table>
                        <p>
                        Jadi, luas permukaan bola yaitu (A) 2.464 cm<sup>2</sup>
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal3">
                <h4>No. 3</h4>
                <p>
                Andi membeli bola basket di toko olahraga. Bola basket tersebut memiliki diameter 28 cm. Volume dari bola basket yang dimiliki Andi yaitu ...
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="a" required>
                    <label class="form-check-label">
                        (A) 11489,6 cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="b" required>
                    <label class="form-check-label">
                        (B) 11498,6 cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="c" required>
                    <label class="form-check-label">
                        (C) 11469,8 cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="d" required>
                    <label class="form-check-label">
                        (D) 11496,8 cm<sup>3</sup>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="e" required>
                    <label class="form-check-label">
                        (E) 11486,9 cm<sup>3</sup>
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
                          Diameter bola 28 cm maka jari-jari bola yaitu 14 cm<br>
                          <strong>Ditanya :</strong> <br>
                          Berapa volume bola basket?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>Volume bola = 4/3 πr<sup>3</sup></span>
                        <table class="w-50">
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>(4/3)(22/7)(14)<sup>3</sup></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>11498,6 cm<sup>3</sup></td>
                            </tr>
                        </table>
                        <p>
                        Jadi, volume bola basket yang dimiliki Andi yaitu (B) 11498,6 cm<sup>3</sup>
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal4">
                <h4>No. 4</h4>
                <p>
                Terdapat bola didalam kubus dengan panjang sisinya yaitu 14 cm. Dimana kondisi bola yaitu menyentuh semua sisi kubus. Luas permukaan bola didalam kubus yaitu ...
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="a" required>
                    <label class="form-check-label">
                        (A) 616 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="b" required>
                    <label class="form-check-label">
                        (B) 614 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="c" required>
                    <label class="form-check-label">
                        (C) 612 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="d" required>
                    <label class="form-check-label">
                        (D) 611 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="e" required>
                    <label class="form-check-label">
                        (E) 617 cm²
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
                          Panjang sisi kubus 14 cm, dimana bola menyentuh semua sisi kubus. Maka panjang diameter dari bola yaitu 14 cm. Sehingga jari-jari bola yaitu 7 cm.<br>
                          <strong>Ditanya :</strong> <br>
                          Luas permukaan bola didalam kubus?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>luas permukaan bola = 4πr²</span>
                        <table class="w-25">
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>(4)(22/7)(7)²</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>616 cm²</td>
                            </tr>
                        </table>
                        <p>
                        Jadi, luas permukaan bola didalam kubus yaitu (A) 616 cm²
                        </p>
                    </div>
                </div>
            </div>
            <div alt="soal5">
                <h4>No. 5</h4>
                <p>
                Putri memiliki miniatur setengah bola di rumah. Miniatur tersebut memiliki diameter 14 cm. Miniatur tersebut seluruh permukaannya akan dicat dengan warna hijau, warna cat sendiri 8000/100cm². Berapa uang yang harus dikeluarkan Putri untuk mengecat miniatur tersebut?
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="a" required>
                    <label class="form-check-label">
                        (A) Rp 36,960
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="b" required>
                    <label class="form-check-label">
                        (B) Rp 36,690
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="c" required>
                    <label class="form-check-label">
                        (C) Rp 36,906
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="d" required>
                    <label class="form-check-label">
                        (D) Rp 36,609
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="e" required>
                    <label class="form-check-label">
                        (E) Rp 36,069
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
                          Diameter 14 cm maka jari-jari dari miniatur tersebut 7 cm<br>
                          Harga cat 8000/10cm² <br>
                          <strong>Ditanya :</strong> <br>
                          Uang yang harus dikeluarkan Putri untuk mengecat miniatur tersebut?<br>
                          <strong>Jawab :</strong>
                        </p>
                        <span>Luas permukaan  1/2  bola = 3πr²</span>
                        <table class="w-25">
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>3(22/7)(7)²</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>462 cm²</td>
                            </tr>
                        </table>
                        <span>Biaya yang dibutuhkan = (462/100)(8000)</span>
                        <table class="w-25">
                            <tr>
                                <td></td>
                                <td>=</td>
                                <td>=Rp 36,960</td>
                            </tr>
                        </table>
                        <p>
                        Jadi, uang yang harus dikeluarkan Putri untuk mengecat miniatur tersebut yaitu (A) Rp 36,960
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

