   
   <?php  ?>
        <!-- DIVIDER #2 -->
        <div class="p-5 mb-4 bg-body-tertiary rounded-3">
            <div class="container py-5 text-center">
                <style>
                               /* styles.css */
                .sponsor-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 20px;
                }

                .sponsor-item {
                flex: 0 0 100px; /* Set lebar elemen sponsor */
                margin: 10px; /* Tambahkan margin untuk jarak antar elemen */
                }

                .sponsor-item img {
                max-width: 100%; /* Atur ukuran gambar sponsor agar sesuai dengan lebar elemen */
                height: auto;
                }

                /* Gunakan media query untuk tampilan layar lebih kecil */
                @media screen and (max-width: 768px) {
                .sponsor-container {
                    flex-wrap: wrap; /* Wrap elemen sponsor saat layar kecil */
                    justify-content: center; /* Pusatkan elemen sponsor saat layar kecil */
                }

                .sponsor-item {
                    flex: 0 0 calc(50% - 20px); /* Set lebar elemen sponsor menjadi 50% dari layar saat layar kecil */
                    margin: 10px; /* Tambahkan margin untuk jarak antar elemen */
                }
                }


                </style>
                <div class="sponsor-container">
                    <div class="sponsor-item">
                        <a href="https://www.asya.co.id/"><img src="<?= base_url('asset/image/sponsor (1).jpg')?>" alt="Sponsor 1"></a>
                    </div>
                    <div class="sponsor-item">
                        <a href="https://metropolitanland.com/id"><img src="<?= base_url('asset/image/sponsor (2).jpg') ?>" alt="Sponsor 2"></a>
                    </div>
                    <div class="sponsor-item">
                        <a href="https://www.instagram.com/meetnwork.id/"><img src="<?= base_url('asset/image/sponsor (3).jpg') ?>" alt="Sponsor 3"></a>
                    </div>
                    <div class="sponsor-item">
                        <a href="https://www.masalalu.id/"><img src="<?= base_url('asset/image/sponsor (4).jpg') ?>" alt="Sponsor 4"></a>
                    </div>
                    <div class="sponsor-item">
                        <a href="https://grandmetropolitan.co.id/?p=5602"><img src="<?= base_url('asset/image/sponsor (5).jpg') ?>" alt="Sponsor 5"></a>
                    </div>
                    <div class="sponsor-item">
                        <a href="https://www.instagram.com/waterplayid/"><img src="<?= base_url('asset/image/sponsor (6).jpg') ?>" alt="Sponsor 6"></a>
                    </div>
                </div>
            </div>
                <hr>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="facebook" viewBox="0 0 16 16">
            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
        </symbol>
        <symbol id="instagram" viewBox="0 0 16 16">
            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/>
        </symbol>
        <symbol id="twitter" viewBox="0 0 16 16">
            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
        </symbol>
        <symbol id="github" viewBox="0 0 16 16">
            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 496 512"><!--! Font Awesome Free 6.4.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z"/></svg>
        </symbol>
        </svg>

        <!-- Footer -->
        <div class="container">
        <footer class="py-5">
            <div class="row">
                <div class="col-6 col-md-3 mb-3">
                    <h5>About Us The Kiddos </h5>
                    <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                        <p>sebuah lembaga Pendidikan Anak Usia Dini Informal
                        dalam bentuk Playschool atau sekolah bermain. The Kiddos Project telah berdiri sejak
                        tahun 2019 dengan program playdate dan pop-up school untuk anak usia dini.</p>
                </div>
            </div>


            <div class="col-6 col-md-3 mb-3">
                <h5>Contact information</h5>
                <ul class="nav flex-column">
                <li class="nav-item mb-2">Head Office<p><i class="ri-home-3-line" style="color: #FDA8F8;font-size: 20px;"></i> Grand PGRI Residence 1 Tarumajaya Bekasi</p></li>
                
                <li class="nav-item mb-2"><p><i class="ri-smartphone-line" style="color: #FDA8F8;font-size: 20px;"></i> <a href="telp:081284844535a">081284844535</a></p></li>
                </ul>
            </div>

            <div class="col-6 col-md-3 mb-3">
                <h5>Menu Link</h5>
                <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="<?= base_url('')?>" class="nav-link p-0 text-muted">Beranda</a></li>
                <li class="nav-item mb-2"><a href="<?= base_url('home/aboutus')?>" class="nav-link p-0 text-muted">About Us</a></li>
                <li class="nav-item mb-2"><a href="<?= base_url('home/aboutus')?>" class="nav-link p-0 text-muted">Visit Us</a></li>
                <li class="nav-item mb-2"><a href="<?= base_url('auth')?>" class="nav-link p-0 text-muted">Login</a></li>
                </ul>
            </div>

            <div class="col-md-3 mb-3">
                <form>
                <h5>Subscribe to our newsletter</h5>
                <p>Jika ingin mendapatkan info terbaru dari website kami.</p>
                <div class="d-flex flex-column flex-sm-row w-100 gap-2">
                    <label for="newsletter1" class="visually-hidden">Email address</label>
                    <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                    <button class="btn btn-info" type="button">Subscribe</button>
                </div>
                </form>
            </div>
            </div>

            <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
                <p>&copy; 2019 – <?php echo date('Y'); ?> The Kiddos Project. All right reserved &middot; <a href="<?= base_url('home/privacy')?>">Privacy</a> &middot; <a href="#">Terms</a></p>
                <ul class="list-unstyled d-flex"> Sosial Media Kami 
                    <li class="ms-3"><a class="link-dark" href="https://www.tiktok.com/@thekiddosproject"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tiktok" viewBox="0 0 16 16">
                    <path d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z"/>
                    </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="https://www.instagram.com/the.kiddosofc/"><svg class="bi" width="24" height="24"><use xlink:href="#instagram"/></svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="mailto:thekiddosofc@gmail.com"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                    </svg></a></li>
                </ul>
            </div>
            <a href="https://wa.me/6281284844535" target="_blank" id="whatsappButton">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                </svg>
            </a>
        </footer>
        </div>

        <!-- JS -->
        <!-- <script type="text/javascript" src="<?= base_url('asset/js/whatsapp.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('asset/js/bootstrap.js') ?>"></script>
        <script type="text/javascript" src="<?= base_url('asset/js/bootstrap.min.js')?>"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    </body>
</html>
