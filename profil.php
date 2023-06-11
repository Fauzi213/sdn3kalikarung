<?php
include "pondasi/kepala.php";
include "admin/config/koneksi.php";
$sql = mysqli_query($conn, "SELECT * FROM profil");
$b = mysqli_fetch_assoc($sql);

?>

<body>

    <!-- MAIN WRAPPER START
        ============================================= -->
    <!-- HEADER END -->

    <!-- CONTENT START
            ============================================= -->
    <section id="content" class="single-wrapper">
        <!-- Page Title -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h4><strong>Profil Sekolah</strong></h4>
                </div>
            </div>
        </div>

        <!-- SINGLE CLASS START
                ============================================= -->
        <div class="single-classes clearfix">
            <div class="container">
                <div class="row">
                    <!-- Class Gallery Start -->
                    <div class="class-gallery wow fadeIn col-md-6 clearfix">
                        <div class="class-flexslider">
                            <ul class="slides">
                                <li data-thumb="image/KM51.jpg">
                                    <img src="image/KM51.jpg" alt="" />
                                </li>
                                <li data-thumb="image/Guru1.jpg">
                                    <img src="image/Guru1.jpg" alt="" />
                                </li>
                                <li data-thumb="image/upacara1.jpg">
                                    <img src="image/upacara1.jpg" alt="" />
                                </li>
                                <li data-thumb="image/pramuka1.png">
                                    <img src="image/pramuka1.png" alt="" />
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- Class Gallery End -->

                    <!-- Class Content Start -->
                    <div class="class-content wow fadeIn col-md-6 clearfix">
                        <h5><strong>Profil SDN 3 Kalikarung</strong></h5>
                        <p>SD Negeri 3 Kalikarung adalah sebuah sekolah dasar negeri yang terletak di desa Kalikarung, Kabupaten Wonosobo, Jawa Tengah, Indonesia. Sekolah ini berperan dalam memberikan pendidikan dasar kepada anak-anak di wilayah tersebut. Sebagai sekolah dasar, SD Negeri 3 Kalikarung memiliki misi untuk menyediakan pendidikan yang berkualitas dan mempersiapkan siswa untuk melanjutkan ke jenjang pendidikan yang lebih tinggi. Sekolah ini juga berkomitmen untuk membantu siswa mengembangkan potensi mereka secara holistik, baik dari segi akademik maupun karakter. Fasilitas yang tersedia di SD Negeri 3 Kalikarung biasanya mencakup ruang kelas, perpustakaan, ruang guru, ruang kepala sekolah, dan fasilitas olahraga seperti lapangan. Selain itu, sekolah ini juga mungkin menawarkan program ekstrakurikuler yang beragam, seperti seni, olahraga, dan kegiatan kesenian. Tenaga pengajar di SD Negeri 3 Kalikarung adalah guru-guru yang terlatih dan berpengalaman dalam mendidik anak-anak di tingkat sekolah dasar. Mereka berkomitmen untuk memberikan pengajaran yang bermutu dan membantu siswa meraih potensi terbaik mereka</p>




                    </div>
                    <!-- Class Content End -->

                    <!-- CLASS COUNTDOWN START
                            ============================================= -->

                    <!-- CLASS COUNTDOWN END -->
                </div>
            </div>
        </div>

        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                <h1>Strategi</h1>
                </div>
            </div>
        </div>
        <div class="class-feature grey-background clearfix">
            <div class="container">
                <div class="row">


                    <?php
                    include "admin/config/koneksi.php";
                    $sql = mysqli_query($conn, "SELECT * FROM strategi");
                    while ($b = mysqli_fetch_assoc($sql)) {

                        ?>
                        <div class="feature-item col-md-4 wow fadeInUp">
                            <div class="feature-with-bg" style="background-color: #59bec9;">
                                <div class="feature-icon">
                                    <div class="icon icon-bars2"></div>
                                </div>
                                <div class="feature-desc">

                                    <p><?php echo $b['strategi'] ?>.</p>
                                    <br /> <br /> <br />
                                    <p></p>
                                </div>
                            </div>
                        </div><?php } ?>
                </div>
            </div>
        </div>
        <!-- CLASS FEATURE END -->
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Tujuan</h1>
                </div>
            </div>
        </div>
        <div class="class-feature grey-background clearfix">
            <div class="container">
                <div class="row">


                    <?php
                    include "admin/config/koneksi.php";
                    $sql = mysqli_query($conn, "SELECT * FROM tujuan");
                    while ($b = mysqli_fetch_assoc($sql)) {

                        ?>
                        <div class="feature-item col-md-4 wow fadeInUp">
                            <div class="feature-with-bg" style="background-color: #e57978;">
                                <div class="feature-icon">
                                    <div class="icon icon-favorite21"></div>
                                </div>
                                <div class="feature-desc">

                                    <p><?php echo $b['tujuan'] ?></p>
                                    <br /> <br /> <br /> <br />
                                </div>
                            </div>
                        </div><?php } ?>
                </div>
            </div>
        </div>
        <div class="grey-background wow fadeIn">
            <div class="container">
                <div class="heading-block page-title wow fadeInUp">
                    <h1>Data Guru</h1>
                </div>
            </div>
        </div>
        <div class="class-course">
            <div class="container">
                <div class="row">
                    <!-- Nav Tabs -->
                    <div class="teacher-nav wow fadeInUp" role="tablist" id="planTabs">
                        <ul class="no-margin no-padding">
                            <?php
                            include "admin/config/koneksi.php";
                            $sql = mysqli_query($conn, "SELECT * FROM guru");
                            while ($b = mysqli_fetch_assoc($sql)) {

                                ?>
                                <li role="presentation" class="col-md-3 active">
                                    <a href="#stelarobson" aria-controls="stelarobson" role="tab" data-toggle="tab">
                                        <img src="admin/foto/guru/<?php echo $b['foto'] ?>" alt="" />

                                    </a> <a class="btn btn-primary"><i class="fa fa-user"></i> <?php echo $b['nama'] ?></a>
                                </li>
                            <?php } ?>

                        </ul>
                    </div>
                    <!-- Nav Tabs End -->
                </div>

                <!-- Tab panes -->




                <!-- Tab Panes End -->

            </div>
        </div>
        <script type="text/javascript">
            jQuery(window).load(function() {
                var classDetailsHeight = jQuery('.class-item img').height();
                jQuery(".class-details").css("height", classDetailsHeight);
            });
        </script>
        <!-- RELATED CLASSES SCRIPT END -->

    </section>
    <!-- CONTENT END -->

    <!-- FOOTER START
            ============================================= -->
    <footer id="footer">
        <div class="container">

        </div>
    </footer>
    <!-- FOOTER END -->

    <!-- COPYRIGHT START
            ============================================= -->

    <?php
    include "pondasi/kaki.php";
    ?>
    <!-- COPYRIGHT END -->

    </div>
    <!-- MAIN WRAPPER END -->

    <!-- Footer Scripts
        ============================================= -->
    <!-- External -->
    <script type="text/javascript" src="js/plugin.js"></script>
    <script type="text/javascript" src="js/main.js"></script>

</body>

</html>