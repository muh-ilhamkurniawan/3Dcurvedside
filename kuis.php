<?php
		include "navbar.php";
        include "functions.php"; // Sertakan file dengan fungsi cekLogin
        cekLogin();
?>
<?php
// Ambil hasil skor dari parameter query
$resultMessage = isset($_GET['resultMessage']) ? $_GET['resultMessage'] : '';
?>

	<div class="container">
        <h2>QUIZ BANGUN RUANG SISI LENGKUNG</h2>
        <form action="proses_kuis.php" id="quizForm" method="post">
            <div alt="soal1">
                <h4>No. 1</h4>
                <p>
                Sebuah kerucut memiliki jari-jari alas 10 cm dan panjang garis pelukis 16 cm.Luas selimut kerucut tersebut adalah …
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="a" required>
                    <label class="form-check-label">
                        (A) 502,4 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="b" required>
                    <label class="form-check-label">
                        (B) 402,4 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="c" required>
                    <label class="form-check-label">
                        (C) 324 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q1" value="d" required>
                    <label class="form-check-label">
                        (D) 314 cm²
                    </label>
                </div>
            </div>
            <div alt="soal2">
                <h4>No. 2</h4>
                <p>
                Luas permukaan suatu kerucut 1.056 cm² dan memiliki jari-jari alas 12 cm, panjang garis pelukis kerucut tersebut adalah ...
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="a" required>
                    <label class="form-check-label">
                        (A) 8,03 cm
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="b" required>
                    <label class="form-check-label">
                        (B) 18,42 cm
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="c" required>
                    <label class="form-check-label">
                        (C) 16,03 cm
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q2" value="d" required>
                    <label class="form-check-label">
                        (D) 14,37 cm
                    </label>
                </div>
            </div>
            <div alt="soal3">
                <h4>No. 3</h4>
                <p>
                Sebuah tabung berdiameter 28 cm dengan tinggi 26 cm.Luas seluruh permukaan tabung adalah... (π=22/7)
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="a" required>
                    <label class="form-check-label">
                        (A) 880 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="b" required>
                    <label class="form-check-label">
                        (B) 1.760 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="c" required>
                    <label class="form-check-label">
                        (C) 3.520 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q3" value="d" required>
                    <label class="form-check-label">
                        (D) 4.928  cm²
                    </label>
                </div>
            </div>
            <div alt="soal4">
                <h4>No. 4</h4>
                <p>
                Sebuah kaleng susu mempunyai tinggi 15 cm dan jari-jari 5 cm. Selimut kaleng itu ditutup dengan kertas. Luas kertas yang digunakan sebagai selimut itu ... cm².
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="a" required>
                    <label class="form-check-label">
                        (A) 374
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="b" required>
                    <label class="form-check-label">
                        (B) 471
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="c" required>
                    <label class="form-check-label">
                        (C) 547
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q4" value="d" required>
                    <label class="form-check-label">
                        (D) 637
                    </label>
                </div>
            </div>
            <div alt="soal5">
                <h4>No. 5</h4>
                <p>
                Luas bangun pada gambar dibawah ini adalah …. (π=3,14)
                </p>
                <img src="soal5.jpg" alt="">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="a" required>
                    <label class="form-check-label">
                        (A) 533,8 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="b" required>
                    <label class="form-check-label">
                        (B) 647,8 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="c" required>
                    <label class="form-check-label">
                        (C) 1.067,6 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q5" value="d" required>
                    <label class="form-check-label">
                        (D) 7,694,6 cm²
                    </label>
                </div>
            </div>
            <div alt="soal6">
                <h4>No. 6</h4>
                <p>
                Seorang siswa SMP mempunya 10 bola plastik dengan jari-jari yang sama, yaitu 7 cm. Bola itu akan dicat untuk pertunjukkan seni di sekolahnya. Cat yang tersedia cukup untuk bidang seluas 4.928 cm². Banyaknya bola yang dapat dicat seluruh permukaannya adalah...
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" value="a" required>
                    <label class="form-check-label">
                        (A) 7
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" value="b" required>
                    <label class="form-check-label">
                        (B) 8
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" value="c" required>
                    <label class="form-check-label">
                        (C) 9
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q6" value="d" required>
                    <label class="form-check-label">
                        (D) 10
                    </label>
                </div>
            </div>
            <div alt="soal7">
                <h4>No. 7</h4>
                <p>
                Volume sebuah tabung yang berisi minyak adalah 785 liter dan memiliki jari-jari alasnya 50 cm. Luas sisi tabung tanpa tutupnya adalah...
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" value="a" required>
                    <label class="form-check-label">
                        (A) 39.440  cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" value="b" required>
                    <label class="form-check-label">
                        (B) 39.250  cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" value="c" required>
                    <label class="form-check-label">
                        (C) 32.950  cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q7" value="d" required>
                    <label class="form-check-label">
                        (D) 29.430   cm²
                    </label>
                </div>
            </div>
            <div alt="soal8">
                <h4>No. 8</h4>
                <p>
                Luas kulit bola yang berdiameter 18 cm adalah... (π = 3,14)
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" value="a" required>
                    <label class="form-check-label">
                        (A) 254,34 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" value="b" required>
                    <label class="form-check-label">
                        (B) 508,68 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" value="c" required>
                    <label class="form-check-label">
                        (C) 763,02 cm²
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q8" value="d" required>
                    <label class="form-check-label">
                        (D) 1.017,36 cm²
                    </label>
                </div>
            </div>
            <div alt="soal9">
                <h4>No. 9</h4>
                <p>
                Sebuah bola dimasukkan ke dalam tabung. Diameter bola sama dengandiameter tabung, yaitu 12 cm, tinggi tabung 20 cm, dan π = 3,14. Volume tabung di luar bola adalah .... cm³
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" value="a" required>
                    <label class="form-check-label">
                        (A) 523,33
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" value="b" required>
                    <label class="form-check-label">
                        (B) 657,17
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" value="c" required>
                    <label class="form-check-label">
                        (C) 1.226,08
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q9" value="d" required>
                    <label class="form-check-label">
                        (D) 1.356,48
                    </label>
                </div>
            </div>
            <div alt="soal10">
                <h4>No. 10</h4>
                <p>
                Sebuah kerucut diameternya 18cm dan tingginya 10cm (π=3,14). Volume kerucut = ... cm³
                </p>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q10" value="a" required>
                    <label class="form-check-label">
                        (A) 384
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q10" value="b" required>
                    <label class="form-check-label">
                        (B) 643,8
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q10" value="c" required>
                    <label class="form-check-label">
                        (C) 791,4
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="q10" value="d" required>
                    <label class="form-check-label">
                        (D) 847,8
                    </label>
                </div>
            </div>
            <input type="submit" value="Submit" class="btn btn-dark font-weight-bold text-black">
            <br>
            <br>
            <br>
        </form>
        <script>
    document.getElementById("quizForm").addEventListener("submit", function(event) {
        event.preventDefault(); // Mencegah formulir dikirim secara otomatis

        // Menampilkan alert dengan hasil
        var hasilKuis = confirm("Apakah Anda yakin ingin mengirim jawaban?");
        if (hasilKuis) {
            // Jika pengguna mengonfirmasi, formulir dikirim
            this.submit();
        } else {
            // Jika pengguna membatalkan, tidak ada tindakan tambahan yang diambil
        }
    });
</script>
<?php if ($resultMessage): ?>
        <script>
            alert("<?php echo $resultMessage; ?>");
        </script>
    <?php endif; ?>
	</div>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

