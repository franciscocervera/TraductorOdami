<?php
$title = 'VT Distribuidores Alimenticios | Ódami del Norte';
$pageDescription = 'Página sobre VT Distribuidores Alimenticios, emprendimiento de Ciudad Juárez que conecta productores locales de Chihuahua con consumidores responsables.';
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';

$productos = [
  'Ates de manzana',
  'Miel de abeja',
  'Crema de cacahuate',
  'Jugo y vinagre de manzana menonita',
  'Mazapanes de cacahuate y nuez',
  'Pinole de 9 granos',
];

$clientes = [
  'Restaurantes',
  'Maquilas',
  'Tiendas de abarrotes',
  'Tiendas artesanales',
  'Negocios naturistas',
  'Escuelas',
];
?>

<div class="pattern-strip"></div>
<main>
  <section class="bg-gradient-to-br from-textil via-terracota to-maiz text-white overflow-hidden">
    <div class="hero-pattern">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-20 grid lg:grid-cols-[1.05fr_.95fr] gap-8 sm:gap-10 items-center">
        <div>
          <span class="inline-flex items-center gap-2 bg-white/15 border border-white/15 rounded-full px-4 py-2 text-sm mb-5">
            🌾 De productores locales para consumidores responsables
          </span>
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">
            VT Distribuidores Alimenticios
          </h1>
          <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-2xl mb-6 leading-relaxed">
            Nacimos con el anhelo de traer a Ciudad Juárez la esencia de Chihuahua: sus sabores, sus artesanías y sus tradiciones.
          </p>

          <div class="flex flex-wrap gap-4 mb-8">
            <a href="#productos" class="bg-white text-textil font-bold w-full sm:w-auto text-center px-6 py-3.5 rounded-full hover:scale-105 transition">
              Ver productos
            </a>
            <a href="#contacto" class="border border-white w-full sm:w-auto text-center px-6 py-3.5 rounded-full hover:bg-white hover:text-textil transition">
              Contactar
            </a>
          </div>

          <div class="grid sm:grid-cols-2 gap-2 text-sm">
            <div class="bg-white/10 rounded-2xl px-4 py-4 border border-white/10">
              <p class="font-semibold text-xl mb-1">8</p>
              <p class="text-white/85">Productores activos</p>
            </div>
            <div class="bg-white/10 rounded-2xl px-4 py-4 border border-white/10">
              <p class="font-semibold text-xl mb-1">60%</p>
              <p class="text-white/85">De la Sierra</p>
            </div>
          </div>
        </div>

        <div class="flex justify-center items-center">
          <img
            src="assets/img/logo_vt.png"
            alt="Logo de VT Distribuidores Alimenticios"
            class="w-full max-w-[400px] sm:max-w-[400px] md:max-w-[400px] h-auto object-contain drop-shadow-xl"
          >
        </div>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-14 lg:py-16">
    <div class="grid lg:grid-cols-[1.15fr_.85fr] gap-6 lg:gap-8 items-stretch">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-sierra bg-tierra rounded-full px-4 py-2 mb-5">🤝 Qué hacemos</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Conectamos el campo chihuahuense con consumidores de Ciudad Juárez</h2>
        <p class="text-base sm:text-lg leading-relaxed mb-4 text-cafe/90">
          Contactamos productores solo de Chihuahua, especialmente de la Sierra; les compramos directamente, fortalecemos su economía, evitamos que migren a otras ciudades y comercializamos sus productos en Cd. Juárez.
        </p>
        <p class="text-base sm:text-lg leading-relaxed text-cafe/80">
          Estos productos no solo alimentan: cuentan historias y transmiten identidad cultural en cada hogar donde se consumen.
        </p>
      </article>

      <aside class="bg-gradient-to-br from-maiz/35 to-terracota/20 rounded-[2rem] p-6 sm:p-8 lg:p-10 border border-maiz/20">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-textil bg-white/80 rounded-full px-4 py-2 mb-5">🌿 A quiénes ayudamos</span>
        <div class="space-y-4">
          <div class="bg-white/80 rounded-2xl p-4">
            <h3 class="font-bold text-sierra mb-1">Productores de Chihuahua</h3>
            <p class="text-sm text-cafe/80">Especialmente comunidades de la Sierra y productores regionales con técnicas tradicionales.</p>
          </div>
          <div class="bg-white/80 rounded-2xl p-4">
            <h3 class="font-bold text-sierra mb-1">Consumidores responsables</h3>
            <p class="text-sm text-cafe/80">Personas y negocios de Cd. Juárez que buscan productos con origen, historia y valor local.</p>
          </div>
          <div class="bg-white/80 rounded-2xl p-4">
            <h3 class="font-bold text-sierra mb-1">Emprendedores</h3>
            <p class="text-sm text-cafe/80">Aliados que desean sumar productos artesanales, nutritivos y naturales a su oferta.</p>
          </div>
        </div>
      </aside>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <div class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
      <div class="max-w-3xl mb-8">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-textil bg-tierra rounded-full px-4 py-2 mb-4">🧭 Cómo lo hacemos</span>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-textil mb-4">Un puente directo entre productor y consumidor</h2>
        <p class="text-base sm:text-lg leading-relaxed text-cafe/80">
          La propuesta comercial mantiene una relación cercana con el origen de los productos y promueve un consumo consciente, local y con identidad.
        </p>
      </div>

      <div class="grid md:grid-cols-3 gap-5 sm:gap-6">
        <article class="section-card rounded-3xl bg-arena p-6 border border-cafe/5">
          <div class="text-3xl mb-4">🧺</div>
          <h3 class="text-xl font-bold text-sierra mb-3">Compra directa</h3>
          <p class="text-cafe/80">Compramos directamente a productores para apoyar su economía y reconocer su trabajo.</p>
        </article>
        <article class="section-card rounded-3xl bg-arena p-6 border border-cafe/5">
          <div class="text-3xl mb-4">📍</div>
          <h3 class="text-xl font-bold text-sierra mb-3">Puntos de venta</h3>
          <p class="text-cafe/80">Comercializamos sus productos en una red de puntos de venta en Ciudad Juárez.</p>
        </article>
        <article class="section-card rounded-3xl bg-arena p-6 border border-cafe/5">
          <div class="text-3xl mb-4">💛</div>
          <h3 class="text-xl font-bold text-sierra mb-3">Vínculo emocional</h3>
          <p class="text-cafe/80">Creamos un vínculo entre productor y consumidor: un pedacito de Chihuahua en cada hogar.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <div class="grid lg:grid-cols-1 gap-6 lg:gap-8 items-stretch">
      <article class="bg-gradient-to-br from-sierra to-cafe text-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 text-sm mb-5">📈 Impacto</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-5">Resultados que fortalecen la economía local</h2>
        <div class="grid sm:grid-cols-2 gap-4">
          <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
            <p class="font-bold text-lg mb-1">8 productores activos</p>
            <p class="text-sm text-white/80">El 60% proviene de la Sierra.</p>
          </div>
          <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
            <p class="font-bold text-lg mb-1">Más rutas de venta</p>
            <p class="text-sm text-white/80">Mayor presencia de productos regionales.</p>
          </div>
          <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
            <p class="font-bold text-lg mb-1">Menos migración</p>
            <p class="text-sm text-white/80">Apoyo a productores para permanecer en sus comunidades.</p>
          </div>
          <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
            <p class="font-bold text-lg mb-1">Consumo local</p>
            <p class="text-sm text-white/80">Mayor conciencia en el municipio de Juárez.</p>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
      <div class="grid lg:grid-cols-2 gap-8 lg:gap-10 items-center">
        <div class="bg-arena rounded-[2rem] p-3 sm:p-4 border border-cafe/5">
          <div class="rounded-[1.5rem] overflow-hidden bg-cafe/10">
            <img
              src="assets/img/vt-origen-mision.jpg"
              alt="Origen de VT Distribuidores Alimenticios, reflexión de septiembre de 2021 y misión del emprendimiento."
              class="w-full max-h-[760px] object-contain mx-auto"
            >
          </div>
        </div>
        <div>
          <span class="inline-flex items-center gap-2 bg-sierra/10 text-sierra rounded-full px-4 py-2 text-sm mb-5">🌱 Surgimiento y misión</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Una respuesta emprendedora ante tiempos difíciles</h2>
          <p class="text-base sm:text-lg leading-relaxed text-cafe/90 mb-4">
            El emprendimiento surge como respuesta a las dificultades generadas por la pandemia. Ante la carga laboral y la incertidumbre, nació la idea de construir un plan alternativo que aportara sustento y bienestar a largo plazo.
          </p>
          <div class="rounded-[1.5rem] bg-tierra p-6 border-l-4 border-maiz mb-6">
            <p class="font-bold text-textil mb-2">Misión</p>
            <p class="text-cafe/85 leading-relaxed">
              Apoyar a los productores del estado de Chihuahua y promover el consumo consciente al ofrecer productos artesanales, nutritivos y naturales.
            </p>
          </div>
          <p class="text-cafe/80 leading-relaxed">
            El proyecto busca sostener una relación comercial más humana, donde el producto conserva su historia y el consumidor reconoce el valor de las comunidades que lo hacen posible.
          </p>
        </div>
      </div>
    </article>
  </section>

  <section id="productos" class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <div class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
      <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-textil bg-tierra rounded-full px-4 py-2 mb-4">🍯 Productos que manejamos</span>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-textil mb-4">Sabores artesanales de Chihuahua</h2>
        <p class="text-base sm:text-lg leading-relaxed text-cafe/80">
          Los productos provienen de comunidades selectas como Guachochi, Cuauhtémoc y Juárez, donde se cultivan y elaboran con técnicas tradicionales y materias primas de alta calidad.
        </p>
      </div>

      <div class="grid lg:grid-cols-[.9fr_1.1fr] gap-8 lg:gap-10 items-center">
        <div class="grid sm:grid-cols-2 gap-4">
          <?php foreach ($productos as $producto): ?>
            <div class="rounded-2xl bg-arena border border-cafe/5 p-5">
              <div class="text-2xl mb-3">🌰</div>
              <h3 class="font-bold text-sierra"><?= e($producto); ?></h3>
            </div>
          <?php endforeach; ?>
        </div>

        <div class="bg-arena rounded-[2rem] p-3 sm:p-4 border border-cafe/5">
          <div class="rounded-[1.5rem] overflow-hidden bg-cafe/10">
            <img
              src="assets/img/vt-productos.jpg"
              alt="Catálogo visual de productos de VT Distribuidores Alimenticios: ate de manzana, miel, crema de cacahuate, jugo y vinagre de manzana, mazapanes y pinole."
              class="w-full max-h-[760px] object-contain mx-auto"
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <div class="grid lg:grid-cols-[1.05fr_.95fr] gap-6 lg:gap-8 items-stretch">
      <article class="bg-gradient-to-br from-cafe to-sierra text-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 text-sm mb-5">👥 Perfil del cliente</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-6">Clientes con interés por calidad, origen y vida saludable</h2>
        <div class="grid sm:grid-cols-2 gap-3 mb-8">
          <?php foreach ($clientes as $cliente): ?>
            <div class="rounded-2xl bg-white/10 border border-white/10 px-4 py-3 font-semibold">
              <?= e($cliente); ?>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="space-y-4">
          <div class="rounded-2xl bg-white/10 border border-white/10 p-5">
            <h3 class="font-bold text-lg mb-2">Amplitud de clientes</h3>
            <p class="text-white/80">Productos dirigidos a hombres, mujeres, niños, familias y personas de cualquier edad.</p>
          </div>
          <div class="rounded-2xl bg-white/10 border border-white/10 p-5">
            <h3 class="font-bold text-lg mb-2">Nivel socioeconómico medio alto</h3>
            <p class="text-white/80">Mercado comprometido con la calidad y dispuesto a invertir en productos que mejoren su calidad de vida.</p>
          </div>
          <div class="rounded-2xl bg-white/10 border border-white/10 p-5">
            <h3 class="font-bold text-lg mb-2">Estilo de vida saludable</h3>
            <p class="text-white/80">Clientes que buscan productos alineados con sus hábitos y valores.</p>
          </div>
        </div>
      </article>

      <aside class="bg-white rounded-[2rem] shadow-suave p-4 sm:p-5">
        <div class="rounded-[1.5rem] overflow-hidden bg-cafe/10">
          <img
            src="assets/img/vt-clientes.jpg"
            alt="Perfil del cliente de VT Distribuidores Alimenticios: restaurantes, maquilas, tiendas, negocios naturistas y escuelas."
            class="w-full max-h-[860px] object-contain mx-auto"
          >
        </div>
      </aside>
    </div>
  </section>

  <section id="contacto" class="max-w-7xl mx-auto px-4 sm:px-6 pb-14 sm:pb-20">
    <div class="bg-gradient-to-r from-textil via-terracota to-maiz rounded-[2rem] p-8 sm:p-10 text-white overflow-hidden relative">
      <div class="relative z-10 grid lg:grid-cols-[1.2fr_.8fr] gap-8 items-center">
        <div>
          <span class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 text-sm mb-5">📞 Contacto</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Lleva un pedacito de Chihuahua a tu negocio u hogar</h2>
          <p class="text-white/90 text-lg leading-8 max-w-3xl">
            VT Distribuidores Alimenticios promueve productos regionales, consumo responsable y apoyo directo a productores locales.
          </p>
        </div>
        <div class="grid gap-4">
          <a href="tel:+526563463141" class="bg-white text-textil font-bold px-6 py-4 rounded-2xl text-center hover:scale-[1.02] transition">
            📱 (656) 346 3141
          </a>
          <a href="https://www.facebook.com/vt.distribuidoresalim/" target="_blank" rel="noopener noreferrer" class="border border-white/35 font-bold px-6 py-4 rounded-2xl text-center hover:bg-white hover:text-textil transition">
            Facebook: VT Dist Alimenticios
          </a>
          <a href="https://www.instagram.com/vt_distribuidores" target="_blank" rel="noopener noreferrer" class="border border-white/35 font-bold px-6 py-4 rounded-2xl text-center hover:bg-white hover:text-textil transition">
            Instagram: @vt_distribuidores
          </a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
