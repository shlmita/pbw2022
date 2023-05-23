<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Shop</title>
    <link rel="icon" href="img/logo.png" type="image/png">

    <!-- css -->
    <link rel="stylesheet" href="style.css">

    <!-- box icon -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>
    <!-- navbar -->
    <header>
        <a href="#home" class="logo">
            <img src="img/logo.png" alt="">
        </a>
        <!-- menu-icon -->
        <i class='bx bx-menu' id="menu-icon"></i>
        <!-- links -->
        <ul class="navbar">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#products">Products</a></li>
            <li><a href="#customers">Customers</a></li>
        </ul>
        <!-- icon -->
        <div class="header-icon">
            <i class='bx bx-search' id="search-icon"></i>
        </div>
        <!-- search box -->
        <div class="search-box">
            <input type="search" name="" id="" placeholder="Search Here">
        </div>
    </header>

    <!-- home -->
    <section class="home" id="home">
        <div class="home-text">
            <h1>Start your day <br> with coffee</h1>
            <p>Mulai hari anda dengan segelas kopi. Karena kopi meminum kopi dapat memperbaiki suasana hati dan membuat perasaan anda jadi lebih bahagia, tenang, dan nyaman</p>
            <a href="#products" class="btn">Shop Now</a>
        </div>
        <div class="home-img">
            <img src="img/main.png" alt="">
        </div>
    </section>

    <!-- about -->
    <section class="about" id="about">
        <div class="about-img">
            <img src="img/about.jpg" alt="">
        </div>
        <div class="about-text">
            <h2>Our History</h2>
            <p>Coffee Shop Adalah Sebuah Website Yang Menjual Berbagai Macam Kopi. Di Website Ini Kita Dapat Menjumpai Kopi Mulai Dari Luar Negeri Sampai Kopi Lokal.</p>
            <p>Coffee Shop adalah tempat dimana jika anda mencari brand kopi lokal maupun kopi luar negeri, karena disini kami menyediakan berbagai macam dan jenis kopi-kopian yang dapat dikirim langsung ke alaamt anda.</p>
            <p>Ayo tunggu apa lagi order kopimu di Coffee Shop sekarang juga!!</p>
            <a href="#products" class="btn">Shop Now</a>
        </div>
    </section>

    <!-- products -->
    <section class="products" id="products">
        <div class="heading">
            <h2>Our Products</h2>
        </div>
        <!-- container -->
        <div class="products-container">
            <div class="box">
                <img src="img/p1.png" alt="">
                <h3 style="text-align: center;">Arabica Coffee</h3>
                <div class="content">
                    <span style="text-align: center;">Rp 150.000</span>
                </div>
            </div>
            <div class="box">
                <img src="img/p2.png" alt="">
                <h3 style="text-align: center;">Colombiand Coffee</h3>
                <div class="content">
                    <span style="text-align: center;">Rp 120.000</span>
                </div>
            </div>
            <div class="box">
                <img src="img/p3.png" alt="">
                <h3 style="text-align: center;">Patch Roast</h3>
                <div class="content">
                    <span style="text-align: center;">Rp 150.000</span>
                </div>
            </div>
            <div class="box">
                <img src="img/p4.png" alt="">
                <h3 style="text-align: center;">Robusta Coffee</h3>
                <div class="content">
                    <span style="text-align: center;">Rp 130.000</span>
                </div>
            </div>
            <div class="box">
                <img src="img/p5.png" alt="">
                <h3 style="text-align: center;">Soul Coffee</h3>
                <div class="content">
                    <span style="text-align: center;">Rp 120.000</span>
                </div>
            </div>
            <div class="box">
                <img src="img/p6.png" alt="">
                <h3 style="text-align: center;">Italian Coffee</h3>
                <div class="content" style="text-align: center;">
                    <span>Rp 150.000</span>
                </div>
            </div>
        </div>
    </section>

    <!-- form pemesanan -->
    <section class="forum" id="forum">
      <div class="heading">
          <h2>Forum Pemesanan</h2>
      </div>

      <form action="proses.php" method="POST">
          <div class="form-group">
              <label for="nama">Nama Anda :</label>
              <input type="text" name="nama" id="nama" placeholder="Masukan nama anda" class="box" required>
          </div>
          <div class="form-group">
              <label for="email">Email anda :</label>
              <input type="email" name="email" class="box" id="email" placeholder="xxxxxx@gmail.com" required>
          </div>
          <div class="form-group">
              <label for="telpon">Nomor Telpon :</label>
              <input type="number" name="telpon" id="telpon" class="box" placeholder="08xxxxxxxxxx" required>
          </div>
          <div class="form-group">
              <label for="pesanan">Pesanan :</label>

              <input type="checkbox" name="pesanan[]" id="Arabica" value="Arabica Coffee"> Arabica Coffee <br>
              <input type="checkbox" name="pesanan[]" id="Colombiand" value="Colombiand Coffee"> Colombiand Coffee <br>
              <input type="checkbox" name="pesanan[]" id="Patch" value="Patch Roast"> Patch Roast <br>
              <input type="checkbox" name="pesanan[]" id="Robusta" value="Robusta Coffee"> Robusta Coffee <br>
              <input type="checkbox" name="pesanan[]" id="Soul" value="Soul Coffee"> Soul Coffee <br>
              <input type="checkbox" name="pesanan[]" id="Italian" value="Italian Coffee"> Italian Coffee <br>
          </div>
          <div class="form-group">
              <label for="alamat">Alamat :</label>
              <input type="text" name="alamat" id="alamat" cols="22" rows="1" required>
          </div>
          <div class="form-group">
              <label for="catatan">Catatan Pemesanan :</label>
              <input type="text" name="catatan" id="catatan" cols="22" rows="1" required>
          </div>
          <div class="form-group">
              <label for="jasa">Jasa Pengiriman :</label>
              <select name="jasa" id="jasa">
                  <option></option>
                  <option value="JNT" required>JNT</option>
                  <option value="JNE" required>JNE</option>
                  <option value="Ninja Expres" required>Ninja Expres</option>
                  <option value="Pos Kilat" required>Pos Kilat</option>
                  <option value="Si Cepat" required>Si Cepat</option>
              </select>
          </div>
          <div class="heading" style="margin-top: 2rem; margin-bottom: -4rem;">
            <button class="btn" style="border:none; font-size:1rem" type="submit" name="submit">Submit</button>
          </div>
      </form>
    </section>

    <!-- customers -->
    <section class="customers" id="customers">
        <div class="heading">
            <h2>Our Customer's</h2>
        </div>
        <div class="heading" style="margin-top: 2rem; margin-bottom: -4rem;">
            <a href="create.php" class="btn" style="border:none; font-size:1rem; margin-bottom: 10rem;" type="submit" name="submit">Kirim Pendapatmu</a>
        </div>

        <div>
            <table style="margin-top: 7rem;" class="table-content">
                <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Komentar</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        include "koneksi.php";
                        $sql = "SELECT * FROM `penilaian`";
                        $no = 1;
                        $result = mysqli_query($conn, $sql);
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['komentar'] ?></td>
                            <td><?php echo $row['tanggal'] ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $row['id'] ?>" style="color: black;"><i class='bx bx-edit-alt'></i></a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" style="color: black;"><i class='bx bx-trash'></i></a>
                            </td>
                        </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </section>

    <!-- footer -->
    <section class="footer">
        <div class="footer-box">
            <h3>Coffee Shop</h3>
            <p>Coffee Shop Adalah Sebuah Website Yang Menjual Berbagai Macam Kopi.</p>
            <div class="social">
                <a href="https://www.facebook.com/shelomita.fitriyani?mibextid=ZbWKwL"><i class='bx bxl-facebook' ></i></a>
                <a href="https://twitter.com/Mit_a4?t=JA4uG9K5vZNfyFxVR-UOxw&s=35"><i class='bx bxl-twitter' ></i></a>
                <a href="https://instagram.com/coffee_shop0122?igshid=ZDdkNTZiNTM="><i class='bx bxl-instagram' ></i></a>
                <a href="https://t.me/shlmiita"><i class='bx bxl-telegram' ></i></a>
            </div>
        </div>
        <div class="footer-box">
            <h3>Support</h3>
            <li><a href="#">Products</a></li>
            <li><a href="#">Help & Support</a></li>
            <li><a href="#">Return Policy</a></li>
            <li><a href="#">Terms of Use</a></li>
        </div>
        <div class="footer-box">
            <h3>View Guides</h3>
            <li><a href="#">Features</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Blog Post</a></li>
            <li><a href="#">Our Branches</a></li>
        </div>
        <div class="footer-box">
            <h3>Contact</h3>
            <div class="contact">
                <span><i class='bx bxs-map' ></i>Semarang , Jawa Tengah, Indonesia</span>
                <span><i class='bx bxs-phone' ></i>+62 89669914450</span>
                <span><i class='bx bxs-envelope' ></i>Coffee.shop@gmail.com</span>
            </div>
        </div>
    </section>

    <!-- copyright -->
    <div class="copyright">
        <p>Copyright &#169; 14319 || ShelomitaFitriyani</p>
    </div>

    <script src="java.js"></script>
</body>
</html>