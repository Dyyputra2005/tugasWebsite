<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titik Temu Cofeeshop</title>

    <!-- Fonts -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Lobster&family=Lobster+Two:ital,wght@0,400;0,700;1,400;1,700&family=Lora:ital,wght@0,400..700;1,400..700&family=Satisfy&display=swap" rel="stylesheet">
     <!-- My Style -->
      <link rel="stylesheet" href="css/style.css">

      <!-- Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<script src="https://unpkg.com/feather-icons"></script>

<!-- aplpine JS -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

<!-- alpine -->
<script src="src/app.js"></script>

</head>
<body>
    <!-- Navbar start -->
     <nav class="navbar" x-data>
        <a href="#" class="navbar-logo">Titik<span> Temu</span>.</a>

        <div class="navbar-nav">
            <a href="#home">Home</a>
            <a href="#about">Tentang kami</a>
            <a href="#menu">Menu</a>
            <a href="#products">Produk</a>
            <a href="#contact">Kontak</a>
        </div>

        <div class="navbar-extra">
            <a href="#" id="search-button"><i class="bi bi-search"></i></a>
            <a href="#" id="shopping-card-button">
                <i class="bi bi-cart"></i>
                <span class="quantity-badge" x-show="$store.cart.quantity" x-text="$store.cart.quantity"></span>
            </a>
            <a href="#" id="tombolmenu"><i class="bi bi-list"></i></a>
        </div>
         
      <!-- Search Form Start -->
       <div class="search-form">
        <input type="Search" id="search-box" placeholder="search here...">
        <label for="search-box"><i class="bi bi-search"></i></label>
       </div>
      <!-- search Form End -->

 <!-- shopping card -->
      <div class="shopping-card"> 
        <template x-for="(item, index in $store.cart.items" :key="index">
            <div class="card-item">
               <img 
                :src="item.id >= 101 ? `img/${item.img}` : `img/products/${item.img}`" 
                :alt="item.name">
                <div class="item-detail">
                    <h3 x-item="item.name"></h3>
                    <div class="item-price" x-text="item.name"></div>
                    <span x-text="rupiah(item.price)"></span>&times;
                    <button id="remove" @click="$store.cart.remove(item.id)">&minus;</button>
                    <span x-text="item.quantity"></span>
                    <button id="add" @click="$store.cart.add(item)">&plus;</button>&equals;
                    <span x-text="rupiah(item.total)"></span>
                </div>
            </div>
        </template>
        <h4 x-show="!$store.cart.items.length" style="margin-top: 1rem;">Cart is Empty</h4>
        <h4 x-show="$store.cart.items.length">Total : <span x-text="rupiah($store.cart.total)"></span></h4>

        <div class="form-container" x-show="$store.cart.items.length">
            <form action="" id=checkoutForm>
                <h5>Customer Detail</h5>

                <label for="name">
                    <span>Name</span>
                    <input type="text" name="name" id="name">
                </label>
                <label for="Email">
                    <span>Email</span>
                    <input type="text" name="email" id="email">
                </label>
                <label for="Phone">
                    <span>Phone</span>
                    <input type="number" name="phone" id="phone" autocapitalize="off">
                </label>

                <button class="checkout-button" type="submit" id="checkout-button" value="checkout">Checkout</button>
            </form>
        </div>
      </div>
     <!-- shopping card end -->

     </nav>

    

     <!-- navbar end -->
    

     <!-- hero section start -->
      <section class="hero" id="home">
          <div class="mask-container">
            <main class="content">
                <h1>Ruang Nyaman,<span>Kopi Istimewa</span></h1>
                <p>Lebih dari sekadar tempat singgah, 
                    kami menghadirkan secangkir semangat untuk mengawali harimu dan ruang hangat untuk berbagi cerita. 
                    Temukan rasa favoritmu yang diracik khusus oleh barista kami.</p>    
            </main>
        </div>
      </section>
      <!-- Hero section end -->

      <!-- about section start -->
       <section id="about" class="about">
        <h2>Tentang <span>Kami</span></h2>
        <div class="row">
            <div class="about-img">
                <img src="img/Tentang Kami.jpg" alt="Tentang Kami">
            </div>
            <div class="content">
                <h3>Kenapa memilih kopi kami?</h3>
                <p>Di Titik Temu , kami percaya bahwa setiap cangkir kopi adalah awal dari sebuah cerita.
                 Terinspirasi dari budaya coffee shop modern yang mengutamakan kualitas, kenyamanan, dan koneksi, 
                 kami hadir untuk menciptakan ruang di mana setiap orang bisa berhenti sejenak, menikmati momen, dan menemukan inspirasi.
                 Dengan biji kopi pilihan terbaik, proses pemanggangan yang terjaga, dan racikan barista yang penuh dedikasi,
                 kami menghadirkan cita rasa autentik yang konsisten di setiap sajian. Mulai dari espresso yang kuat hingga latte yang lembut, 
                 setiap menu dibuat untuk menemani harimu—baik saat bekerja, berbagi cerita, maupun sekadar menikmati waktu sendiri.
                 Lebih dari sekedar tempat minum kopi, Titik Temu adalah tempat di mana ide bertemu, persahabatan tumbuh, dan kenangan tercipta. 
                 Karena bagi kami, kopi bukan hanya tentang rasa, tetapi tentang pengalaman yang membawa orang lebih dekat dengan satu sama lain.</p>
            </div>
        </div>
       </section>
       <!-- about section end -->

      <!-- menu section start -->
        <section id="menu" class="menu" x-data="menu">
            <h2><span>Menu</span>Kami</h2>
            <p>Cita rasa otentik yang menghangatkan jiwa dan menyegarkan hari anda</p>
            <div class="row">
                  <template x-for="item in items" :key="item.id">
            <div class="menu-card">
                <img 
                    :src="`img/${item.img}`"
                    :alt="item.name"
                    class="menu-card-img"
                    @click="$store.cart.add(item)"
                >
                <h3 x-text="item.name"></h3>
                <p x-text="rupiah(item.price)"></p>
            </div>
        </template>
                
           </div>     
        </section>
        <!-- menu section end -->

        <!-- products section start -->
         <section class="products" id="products" x-data="products">
            <h2><span>Produk Unggulan </span>Kami</h2>
            <p>Dari perkebunan terbaik dunia langsung ke cangkir Anda.
               Kami menghabiskan dan memanggang biji kopi pilihan dengan
               standar internasional demi menghadirkan cita rasa konsistensi
               yang dicintai di seluruh dunia. Jelajahi menu unggulan kami
               dan temukan semangat baru di setiap tegukan.</p>
             
                 <div class="row">
                    <template x-for="(item, index) in items" :key="index">
                    <div class="product-card">
                        <div class="product-icons">
                            <a href="#" @click.prevent="$store.cart.add(item)"><i class="bi bi-cart"></i></a>
                            <a href="#" class="item-detail-button"><i class="bi bi-eye"></i></a>
                        </div>
                        <div class="product-image">
                            <img :src="`img/products/${item.img}`" :alt="item.name">
                            <div class="product-content">
                                <h3 x-text=item.name></h3>
                            <div class="product-stars">
                                <svg
                                width="24"
                                height="24"
                                fill="currentColor"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                                        <use href="img/feather-sprite.svg#star" /> 
                                                    </svg>
                                <svg
                                width="24"
                                height="24"
                                fill="currentcolor"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                                        <use href="img/feather-sprite.svg#star" /> 
                                                    </svg>
                                <svg
                                width="24"
                                height="24"
                                fill="currentcolor"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                                        <use href="img/feather-sprite.svg#star" /> 
                                                    </svg>
                                <svg
                                width="24"
                                height="24"
                                fill="currentcolor"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                                        <use href="img/feather-sprite.svg#star" /> 
                                                    </svg>
                                <svg
                                width="24"
                                height="24"
                                fill="currentcolor"
                                stroke="currentColor"
                                stroke-width="2"
                                stroke-linecap="round"
                                stroke-linejoin="round">
                                                        <use href="img/feather-sprite.svg#star" /> 
                                                    </svg>
                            </div>
                            <div class="product-price"><span x-text="rupiah(item.price)"></span>
                            </div>
                            </div>
                        </div>
                    </div>
                    </template>
                 </div>
         </section>
         <!-- products section end -->

        <!-- contact start -->
         <section id="contact" class="contact">
            <h2><span>Kontak</span>Kami</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, voluptatem?</p>

            <div class="row">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7978.056135587166!2d104.00628427770997!3d1.1403842000000055!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31d989825a6f4d29%3A0x5ebdc09b9a666942!2sUniversitas%20Putera%20Batam%20-%20Kampus%20B%20(Nagoya)!5e0!3m2!1sid!2sid!4v1781429003322!5m2!1sid!2sid" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

                <form action="">
                    <div class="input-group">
                        <i class="bi bi-person"></i>
                        <input type="text" placeholder="nama">
                    </div>
                    <div class="input-group">
                        <i class="bi bi-envelope"></i>
                        <input type="text" placeholder="email">
                    </div>
                    <div class="input-group">
                        <i class="bi bi-telephone"></i>
                        <input type="text" placeholder="No HP">
                    </div>
                    <button type="submit" class="btn">kirim pesan</button>
                </form>
            </div>
         </section>
        <!-- contact end -->

        <!-- Footer Start -->
        <footer>
            <div class="social">
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-whatsapp"></i></a>
                <a href="#"><i class="bi bi-facebook"></i></a>
            </div>

            <div class="links">
                <a href="#home">Home</a>
                <a href="#about">Tentang Kami</a>
                <a href="#menu">Menu</a>
                <a href="#contact">Kontak</a>
            </div>

            <div class="credit">
                <p>Created by <a href="">Ady - William - Charles</a> | &copy; 2026.</p>
            </div>
        </footer>
        <!-- Footer End -->

    
     <!-- Modal Box Item Detail start -->
  <div class="modal" id="item-detail-modal">
    <div class="modal-container">
      <a href="#" class="close-icon"><i data-feather="x"></i></a>
      <div class="modal-content">
        <img src="img/products/1.jpg" alt="Product 1">
        <div class="product-content">
          <h3>Product 1</h3>
          <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident, tenetur cupiditate facilis obcaecati
            ullam maiores minima quos perspiciatis similique itaque, esse rerum eius repellendus voluptatibus!</p>
          <div class="product-stars">
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star" class="star-full"></i>
            <i data-feather="star"></i>
          </div>
          <div class="product-price">IDR 30K <span>IDR 55K</span></div>
          <a href="#"><i data-feather="shopping-cart"></i> <span>add to cart</span></a>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal Box Item Detail end -->
</section>
<!-- products section end -->

     <!-- Javascript -->
      <script src="js/script.js"></script>
      <script>
      feather.replace();
    </script>
</body>
</html>
