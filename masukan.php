<?php
		include "navbar.php";
    include "functions.php"; // Sertakan file dengan fungsi cekLogin
    cekLogin();
    if (isset($_POST['submit'])) {
        $nama = ($_POST['nama'] != '') ? $_POST['nama'] : 'Anonymous'; // Mengatasi nama kosong
        $komentar = $_POST['komentar'];
      
        // Memeriksa kolom komentar agar tidak kosong
        if (empty($komentar)) {
          // Jika kolom komentar kosong, beri pesan kesalahan dan redirect kembali ke halaman masukan
          $_SESSION['error'] = 'Kolom komentar tidak boleh kosong';
          header("Location: masukan.php");
          exit;
        }
      
        // Masukkan komentar ke database
        $query = "INSERT INTO komentar (nama, komentar, waktu) VALUES ('$nama','$komentar',CURRENT_TIMESTAMP)";
    
        $conn->query($query);
      
        // Redirect kembali ke halaman masukan setelah submit
        header("Location: masukan.php");
        exit;
      }
      
      // Ambil komentar dari database (10 komentar per halaman)
      $limit = 10; // Jumlah komentar per halaman
      $page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;
      $start = ($page - 1) * $limit;
      
      $query = "SELECT * FROM komentar ORDER BY waktu DESC LIMIT $start, $limit";
      $result = $conn->query($query);
?>
	<div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-8 col-md-10 col-sm-12">
          <div class="bg-light p-4 rounded">
            <h2 class="py-3">Feedback</h2>
            <?php
            // Ambil komentar dari database (10 komentar per halaman)
            $limit = 10; // Jumlah komentar per halaman
            $page = (isset($_GET['page']) && is_numeric($_GET['page'])) ? $_GET['page'] : 1;
            $start = ($page - 1) * $limit;

            $query = "SELECT * FROM komentar ORDER BY waktu DESC LIMIT $start, $limit";
            $result = $conn->query($query);
            ?>

            <!-- Tampilan Komentar -->
            <ol class="list-unstyled d-grid gap-4">
              <?php while ($row = $result->fetch_assoc()) : ?>
                <li>
                  <div class="row mb-5">
                    <div class="col-md-1"><img src="https://randomuser.me/api/portraits/men/<?= rand(1, 99) ?>.jpg" class="rounded me-2 h-auto w-100"></div>
                    <div class="col-md-11">
                      <div class="ps-2">
                        <h6><?= htmlspecialchars($row['nama']) ?></h6>
                        <small><?= $row['waktu'] ?></small>
                      </div>
                      <span class="ps-2"><?= htmlspecialchars($row['komentar']) ?></span>
                    </div>
                  </div>
                </li>
              <?php endwhile; ?>
            </ol>
            <div class="pagination">
              <?php
              // Hitung total jumlah komentar
              $queryTotalComments = mysqli_query($conn, "SELECT COUNT(*) as total FROM komentar");
              $rowTotalComments = mysqli_fetch_assoc($queryTotalComments);
              $totalComments = $rowTotalComments['total'];

              // Hitung total halaman yang tersedia
              $totalPages = ceil($totalComments / $limit);

              // Jika hanya ada satu halaman, sembunyikan nomor halaman
              if ($totalPages > 1) {
                // Tampilkan link ke halaman sebelumnya (jika ada)
                if ($page > 1) {
                  echo '<a href="?page=' . ($page - 1) . '">Prev</a>';
                }

                // Tampilkan nomor halaman
                for ($i = 1; $i <= $totalPages; $i++) {
                  echo '<a href="?page=' . $i . '">' . $i . '</a>';
                }

                // Tampilkan link ke halaman berikutnya (jika ada)
                if ($page < $totalPages) {
                  echo '<a href="?page=' . ($page + 1) . '">Next</a>';
                }
              }
              ?>
            </div>            
          </div>
        </div>
    <div class="col-xl-8 col-md-10 col-sm-12">
      <div class="bg-light p-4 rounded">
        <h2 class="py-3">Formulir Masukan</h2>
        <form method="POST" action="<?php $_SERVER['PHP_SELF'] ?>">
          <label class="form-label">Nama</label>
          <input type="text" name="nama" class="w-100 mb-3 form-control">
          <label class="form-label">Masukan</label>
          <textarea name="komentar" class="w-100 mb-3 form-control" required></textarea>
          <button type="submit" name="submit" class="btn btn-dark brand-bg-color">Submit</button>
        </form>
      </div>
    </div>
  </div>
	</div>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

