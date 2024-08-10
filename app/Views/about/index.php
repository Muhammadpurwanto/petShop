<?= $this->extend('layout/template_active'); ?>

<?= $this->section('content'); ?>
  <!-- About Section -->
  <section class="about-section py-5" style="min-height: 100vh">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
          <h2 class="text-center text-lg-start mb-4">About App</h2>
          <p class="lead text-center text-lg-start">Di PetShop, kami memahami betapa pentingnya hewan peliharaan bagi hidup Anda. Kami berkomitmen untuk memberikan layanan terbaik untuk memenuhi kebutuhan dan kebahagiaan peliharaan Anda.</p>
          <p class="lead text-center text-lg-start">Kami menawarkan layanan grooming profesional, fasilitas pengasuhan yang nyaman, serta berbagai kebutuhan dan perlengkapan hewan peliharaan berkualitas tinggi. Staf kami yang ramah dan berpengetahuan luas tentang hewan siap membantu Anda memberikan perawatan terbaik untuk hewan kesayangan Anda.</p>
          <p class="lead text-center text-lg-start">Selain itu, kami juga memahami pentingnya makanan dan gizi yang tepat untuk kesehatan hewan peliharaan Anda. Oleh karena itu, kami menyediakan berbagai pilihan makanan dan camilan khusus yang dirancang untuk memenuhi kebutuhan nutrisi hewan kesayangan anda.</p>
        </div>
        <div class="col-12 col-lg-6">
          <img src="/img/about.jpg" class="img-fluid rounded-circle" alt="About Image">
        </div>
      </div>
    </div>
  </section>


<?= $this->endSection(); ?>
