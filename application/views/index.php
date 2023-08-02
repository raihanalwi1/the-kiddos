<!-- DIVIDER #2 -->
      <?= $this->session->flashdata('pesan'); ?>
        
        <div id="carouselExampleIndicators" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('asset/image/Slide_1.png')?>" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('asset/image/Slide_2.png')?>" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('asset/image/Slide_3.png')?>" class="d-block w-100" alt="..." />
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('asset/image/Slide_4.png')?>" class="d-block w-100" alt="..." />
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <div class="p-1 mb-4 bg-body-tertiary rounded-3">
            <div class="container py-5 text-center">
            <h4>Selamat Datang </h4>
            </div>
        </div>

        <!-- DIVIDER -->
        <div style="margin: 150px;"></div>

        <section class="tentang-kami">
          <div class="container">
              <div class="row">
                  <div class="col-md-6 mt-3">
                      <img src="<?= base_url('asset/image/about.png')?>" class="img-fluid" alt="..." />
                  </div>
                  <div class="col-md-6 mt-3">
                    <h3>The Kiddos Project</h3>
                      <p style="text-align: justify;">
                      sebuah lembaga Pendidikan Anak Usia Dini Informal
                        dalam bentuk Playschool atau sekolah bermain. The Kiddos Project telah berdiri sejak
                        tahun 2019 dengan program playdate dan pop-up school untuk anak usia dini. Dalam
                        programnya, anak – anak dapat mengikuti program belajar dan bermain bersama
                        pendamping atau orangtuanya sambil bermain dengan teman sebaya. Tidak hanya itu,
                        program-program ini dibuat juga untuk menstimulasi perkembangan anak mulai dari
                        sensorik, motorik, dan keterampilan lain termasuk sosial.
                      </p>
                      <a class="btn-utama" href="<?= base_url('home/form_registrasi')?>">Tertarik untuk mendaftar? Klik disini</a>
                  </div>
              </div>
          </div>
        </section>

        <!-- DIVIDER -->
        <div style="margin: 80px;"></div>

        
