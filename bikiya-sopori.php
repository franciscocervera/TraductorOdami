<?php
$title = 'Bikiyá Sopory | Tres Estrellas · Moda rarámuri';
$pageDescription = 'Conoce Bikiyá Sopory y la trayectoria de su fundadora, Bertha Vega Cruz: diseño rarámuri, talleres textiles, transmisión de saberes y participación en pasarelas.';
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';

$modaDestacada = [
  [
    'imagen' => 'assets/img/bikiya/moda-vestido-blanco.jpg',
    'alt' => 'Mujer modelando un vestido blanco con aplicaciones geométricas negras y rosas de inspiración rarámuri.',
    'titulo' => 'Vestidos con identidad',
    'texto' => 'Siluetas contemporáneas que incorporan contrastes, picos y detalles textiles inspirados en la indumentaria rarámuri.',
  ],
  [
    'imagen' => 'assets/img/bikiya/moda-conjunto-rojo.jpg',
    'alt' => 'Mujer con conjunto tradicional rojo de blusa amplia y falda, decorado con aplicaciones geométricas negras.',
    'titulo' => 'Indumentaria tradicional',
    'texto' => 'Prendas de gran movimiento, color y presencia que mantienen visible la memoria textil en celebraciones y vida cotidiana.',
  ],
  [
    'imagen' => 'assets/img/bikiya/moda-camisa-negra.jpg',
    'alt' => 'Hombre modelando una camisa negra con franjas textiles geométricas en el frente y los puños.',
    'titulo' => 'Camisas y prendas para hombre',
    'texto' => 'Diseños sobrios con acentos geométricos que llevan la identidad rarámuri a propuestas de uso diario y eventos especiales.',
  ],
  [
    'imagen' => 'assets/img/bikiya/moda-blusa-floral-rosa.jpg',
    'alt' => 'Mujer con blusa floral rosa y accesorios textiles tejidos en tonos morados.',
    'titulo' => 'Blusas llenas de color',
    'texto' => 'Combinaciones florales, mangas amplias y acabados contrastantes que convierten cada prenda en una expresión personal.',
  ],
];

$galeriaModa = [
  [
    'imagen' => 'assets/img/bikiya/moda-blusa-morada.jpg',
    'alt' => 'Mujer con blusa morada de mangas amplias, detalles amarillos y faja tejida.',
    'pie' => 'Blusa morada con contraste amarillo',
  ],
  [
    'imagen' => 'assets/img/bikiya/moda-blusa-blanca-morada.jpg',
    'alt' => 'Mujer con blusa blanca, aplicaciones moradas y banda para el cabello a juego.',
    'pie' => 'Blusa blanca con aplicaciones moradas',
  ],
  [
    'imagen' => 'assets/img/bikiya/moda-prenda-floral.jpg',
    'alt' => 'Mujer mostrando una prenda amplia de estampado floral con borde geométrico rojo y negro.',
    'pie' => 'Prenda floral de silueta amplia',
  ],
  [
    'imagen' => 'assets/img/bikiya/moda-conjunto-azul-floral.jpg',
    'alt' => 'Mujer con blusa azul floral y falda tradicional en tonos azul y rosa.',
    'pie' => 'Conjunto floral azul y rosa',
  ],
  [
    'imagen' => 'assets/img/bikiya/moda-poncho-azul.jpg',
    'alt' => 'Mujer con poncho azul turquesa y aplicaciones geométricas rojas.',
    'pie' => 'Poncho azul con detalles rojos',
  ],
  [
    'imagen' => 'assets/img/bikiya/moda-camisa-azul.jpg',
    'alt' => 'Hombre con camisa azul de cuello abierto y franja geométrica naranja y gris.',
    'pie' => 'Camisa azul con detalle geométrico',
  ],
  [
    'imagen' => 'assets/img/bikiya/moda-vestido-estampado.jpg',
    'alt' => 'Mujer modelando un vestido estampado con líneas verticales y aplicaciones rosas y negras.',
    'pie' => 'Vestido estampado de corte contemporáneo',
  ],
  [
    'imagen' => 'assets/img/bikiya/moda-tunica-azul.jpg',
    'alt' => 'Hombre con túnica azul marino y aplicaciones geométricas rojas en el frente, cuello y puños.',
    'pie' => 'Túnica azul marino con acentos rojos',
  ],
];

$artesanias = [
  [
    'imagen' => 'assets/img/bikiya/artesania-canasta.jpg',
    'alt' => 'Canasta tejida en fibras verdes y naturales con tapa y cierre de madera.',
    'titulo' => 'Cestería',
    'texto' => 'Piezas tejidas que aprovechan patrones, texturas y fibras para crear objetos funcionales con carácter propio.',
  ],
  [
    'imagen' => 'assets/img/bikiya/artesania-munecas.jpg',
    'alt' => 'Artesana sosteniendo dos muñecas de tela vestidas con prendas de colores y estampados vivos.',
    'titulo' => 'Muñecas textiles',
    'texto' => 'Figuras de tela que celebran la indumentaria, los colores y la creatividad de las mujeres rarámuri.',
  ],
  [
    'imagen' => 'assets/img/bikiya/artesania-fajas.jpg',
    'alt' => 'Artesana mostrando varias fajas tejidas con diseños geométricos en rojo, negro, naranja y otros colores.',
    'titulo' => 'Fajas y tejidos',
    'texto' => 'Accesorios tejidos con composiciones geométricas que complementan la ropa y conservan saberes textiles.',
  ],
];
?>

<div class="pattern-strip"></div>
<main>
  <section class="bg-gradient-to-br from-textil via-terracota to-maiz text-white overflow-hidden">
    <div class="hero-pattern">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-16 lg:py-20 grid lg:grid-cols-[1.05fr_.95fr] gap-9 lg:gap-12 items-center">
        <div>
          <span class="inline-flex items-center gap-2 bg-white/10 border border-white/15 rounded-full px-4 py-2 text-sm mb-5">
            🧵 San Ignacio de Arareko, Chihuahua · Desde 2018
          </span>
          <h1 class="text-4xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-3">
            Bikiyá Sopory
          </h1>
          <p class="text-xl sm:text-2xl font-semibold text-white/95 mb-4">
            Tres Estrellas
          </p>
          <p class="text-base sm:text-lg md:text-xl text-white/85 max-w-2xl mb-7 leading-relaxed">
            Ropa tradicional rarámuri que fusiona tradición y modernidad. Una iniciativa creada, dirigida y coordinada por mujeres rarámuri que transforma técnicas ancestrales, iconografía y memoria cultural en prendas contemporáneas.
          </p>

          <div class="flex flex-wrap gap-4 mb-8">
            <a href="#historia" class="bg-white text-[#594061] font-bold w-full sm:w-auto text-center px-6 py-3.5 rounded-full hover:scale-105 transition">
              Conocer su historia
            </a>
            <a href="#moda" class="border border-white/80 w-full sm:w-auto text-center px-6 py-3.5 rounded-full hover:bg-white hover:text-[#594061] transition">
              Explorar la colección
            </a>
          </div>

          <div class="grid sm:grid-cols-2 gap-3 text-sm max-w-2xl">
            <div class="bg-white/10 rounded-2xl px-4 py-4 border border-white/10">
              <p class="font-semibold mb-1">⛰️ Iconografía rarámuri</p>
              <p class="text-white/75">Triángulos y líneas rectas evocan las montañas de la Sierra Tarahumara y los senderos del caminar.</p>
            </div>
            <div class="bg-white/10 rounded-2xl px-4 py-4 border border-white/10">
              <p class="font-semibold mb-1">✨ Pasado y presente</p>
              <p class="text-white/75">Cada prenda conecta saberes heredados con una sensibilidad contemporánea.</p>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-[2rem] p-4 sm:p-5 shadow-2xl">
          <div class="px-3 sm:px-6 py-4 sm:py-5">
            <img
              src="assets/img/bikiya/bikiya-logo.jpg"
              alt="Logotipo de Bikiyá Sopory, colección rarámuri Tres Estrellas."
              class="w-full h-auto object-contain"
            >
          </div>
          <div class="aspect-[4/5] rounded-[1.5rem] overflow-hidden bg-[#eee8f2]">
            <img
              src="assets/img/bikiya/moda-vestido-estampado.jpg"
              alt="Mujer modelando un vestido de Bikiyá Sopory con estampado vertical y aplicaciones geométricas rosas y negras."
              class="w-full h-full object-cover object-top"
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="historia" class="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-14 lg:py-16 scroll-mt-28">
    <div class="grid lg:grid-cols-[1.15fr_.85fr] gap-6 lg:gap-8 items-stretch">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-[#684887] bg-[#f1ebf5] rounded-full px-4 py-2 mb-5">✨ La creadora</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Bertha Vega Cruz: tradición, familia e innovación</h2>
        <p class="text-base sm:text-lg leading-relaxed mb-4 text-cafe/90">
          Bertha Vega Cruz es una artesana rarámuri nacida en San Ignacio de Arareko, en el corazón de la Sierra Tarahumara. Desde muy joven aprendió de sus antepasados las técnicas tradicionales de bordado y costura, conocimientos que ha perfeccionado durante más de una década de dedicación a las artesanías regionales.
        </p>
        <p class="text-base sm:text-lg leading-relaxed mb-4 text-cafe/85">
          Su amor por la cultura rarámuri y su deseo de innovar la llevaron a crear Bikiyá Sopory. El nombre significa “Tres Estrellas” y la marca nació como un homenaje a su familia, especialmente a sus dos hijos, así como a las oportunidades que buscó para ellos fuera de la sierra.
        </p>
        <p class="text-base sm:text-lg leading-relaxed mb-4 text-cafe/80">
          Cada prenda cuenta una historia de resistencia, identidad y belleza. A través del diseño, Bertha y las mujeres que participan en la iniciativa preservan saberes ancestrales mientras abren nuevos caminos para el arte indígena dentro de la moda.
        </p>
        <p class="text-base sm:text-lg leading-relaxed text-cafe/80">
          Como parte de su labor de transmisión cultural, Bertha también ha impartido talleres de telar de cintura y talleres textiles enfocados en la elaboración de blusas y faldas. Además, ha colaborado en pasarelas de moda en Chihuahua, llevando el diseño rarámuri a nuevos públicos y espacios de difusión.
        </p>
      </article>

      <aside class="bg-gradient-to-br from-[#f2ebf6] to-white rounded-[2rem] p-6 sm:p-8 lg:p-10 border border-[#7653a6]/15">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-textil bg-white rounded-full px-4 py-2 mb-5">🪡 El lenguaje de las prendas</span>
        <div class="space-y-4">
          <div class="bg-white rounded-2xl p-5 shadow-sm">
            <h3 class="font-bold text-[#684887] mb-1">Pliegues minuciosos</h3>
            <p class="text-sm text-cafe/80">La confección retoma el detalle y el volumen característicos del trabajo textil rarámuri.</p>
          </div>
          <div class="bg-white rounded-2xl p-5 shadow-sm">
            <h3 class="font-bold text-[#684887] mb-1">Bies en mangas y cuellos</h3>
            <p class="text-sm text-cafe/80">Los acabados delimitan formas, crean contraste y dan ritmo visual a cada diseño.</p>
          </div>
          <div class="bg-white rounded-2xl p-5 shadow-sm">
            <h3 class="font-bold text-[#684887] mb-1">Patrones con significado</h3>
            <p class="text-sm text-cafe/80">El color, los triángulos y las líneas rectas representan el territorio, las montañas y los caminos.</p>
          </div>
        </div>
      </aside>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <div class="bg-gradient-to-br from-[#684887] via-[#7653a6] to-textil text-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
      <div class="max-w-3xl mb-8 sm:mb-10">
        <span class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 text-sm mb-5">🌟 Raíces y visión</span>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold mb-4">Una marca que revalora la identidad cultural</h2>
        <p class="text-base sm:text-lg leading-relaxed text-white/85">
          Bikiyá Sopory hace de la indumentaria un espacio de continuidad cultural, creación colectiva y diálogo entre generaciones.
        </p>
      </div>

      <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-4 sm:gap-5">
        <article class="rounded-3xl bg-white/10 border border-white/10 p-6">
          <div class="text-3xl mb-4">🧶</div>
          <h3 class="text-xl font-bold mb-3">Ancestral y contemporáneo</h3>
          <p class="text-white/75">Combina técnicas tradicionales de bordado y costura con tendencias actuales de la moda.</p>
        </article>
        <article class="rounded-3xl bg-white/10 border border-white/10 p-6">
          <div class="text-3xl mb-4">🔺</div>
          <h3 class="text-xl font-bold mb-3">Iconografía viva</h3>
          <p class="text-white/75">Integra símbolos rarámuri que comunican territorio, movimiento y pertenencia.</p>
        </article>
        <article class="rounded-3xl bg-white/10 border border-white/10 p-6">
          <div class="text-3xl mb-4">💜</div>
          <h3 class="text-xl font-bold mb-3">Identidad revalorada</h3>
          <p class="text-white/75">Cada diseño respeta la memoria cultural y la presenta con orgullo en nuevos espacios.</p>
        </article>
        <article class="rounded-3xl bg-white/10 border border-white/10 p-6">
          <div class="text-3xl mb-4">🛤️</div>
          <h3 class="text-xl font-bold mb-3">Pasado y presente</h3>
          <p class="text-white/75">Las prendas conectan los saberes de las antepasadas con las generaciones actuales.</p>
        </article>
      </div>
    </div>
  </section>

  <section id="moda" class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16 scroll-mt-28">
    <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
      <span class="inline-flex items-center gap-2 text-sm font-semibold text-[#684887] bg-white rounded-full px-4 py-2 shadow-suave mb-4">👗 Moda Bikiyá Sopory</span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-textil mb-4">La ropa como expresión de identidad</h2>
      <p class="text-base sm:text-lg leading-relaxed text-cafe/80">
        Diseños para mujeres, hombres, niñas y niños que conservan el color, la geometría y el movimiento de la indumentaria rarámuri.
      </p>
    </div>

    <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5 sm:gap-6">
      <?php foreach ($modaDestacada as $prenda): ?>
        <article class="bg-white rounded-[2rem] shadow-suave overflow-hidden flex flex-col">
          <div class="aspect-[4/5] overflow-hidden bg-cafe/5">
            <img
              src="<?= e($prenda['imagen']); ?>"
              alt="<?= e($prenda['alt']); ?>"
              class="w-full h-full object-cover object-top hover:scale-[1.03] transition duration-300"
              loading="lazy"
            >
          </div>
          <div class="p-5 sm:p-6 flex-1">
            <h3 class="text-xl font-bold text-[#684887] mb-3"><?= e($prenda['titulo']); ?></h3>
            <p class="text-sm sm:text-base leading-relaxed text-cafe/80"><?= e($prenda['texto']); ?></p>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <details class="group bg-white rounded-[2rem] shadow-suave overflow-hidden">
      <summary class="cursor-pointer list-none p-6 sm:p-8 lg:p-10 flex flex-col sm:flex-row gap-5 sm:items-center sm:justify-between hover:bg-arena/50 transition">
        <div>
          <span class="inline-flex items-center gap-2 text-sm font-semibold text-sierra bg-tierra rounded-full px-4 py-2 mb-4">🖼️ Galería de moda</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-2">Descubre más modelos de la colección</h2>
          <p class="text-cafe/75">Abre la galería para ver otras combinaciones de blusas, vestidos, camisas, conjuntos y prendas amplias.</p>
        </div>
        <span class="shrink-0 inline-flex items-center justify-center rounded-full bg-[#684887] text-white font-bold px-5 py-3 group-open:bg-textil transition">
          <span class="group-open:hidden">Ver galería</span>
          <span class="hidden group-open:inline">Cerrar galería</span>
        </span>
      </summary>

      <div class="border-t border-cafe/10 p-4 sm:p-6 lg:p-8 bg-arena/60">
        <div class="columns-2 md:columns-3 lg:columns-4 gap-4 sm:gap-5">
          <?php foreach ($galeriaModa as $foto): ?>
            <figure class="break-inside-avoid mb-4 sm:mb-5 rounded-3xl overflow-hidden bg-white shadow-sm">
              <img
                src="<?= e($foto['imagen']); ?>"
                alt="<?= e($foto['alt']); ?>"
                class="w-full h-auto object-cover"
                loading="lazy"
              >
              <figcaption class="px-4 py-3 text-xs sm:text-sm text-cafe/75"><?= e($foto['pie']); ?></figcaption>
            </figure>
          <?php endforeach; ?>
        </div>
      </div>
    </details>
  </section>

  <section id="artesanias" class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16 scroll-mt-28">
    <div class="grid lg:grid-cols-[.72fr_1.28fr] gap-7 lg:gap-10 items-start">
      <div class="lg:sticky lg:top-28">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-textil bg-white rounded-full px-4 py-2 shadow-suave mb-5">🧺 Artesanías</span>
        <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-textil mb-4">Piezas que complementan la colección</h2>
        <p class="text-base sm:text-lg leading-relaxed text-cafe/80 mb-5">
          Además de la moda, la iniciativa reúne objetos textiles y artesanales que transmiten color, oficio y memoria en formatos distintos a la ropa.
        </p>
        <p class="text-cafe/70 leading-relaxed">
          La disponibilidad puede variar porque cada pieza responde al trabajo y a los tiempos de elaboración de sus creadoras.
        </p>
      </div>

      <div class="grid md:grid-cols-3 gap-5 sm:gap-6">
        <?php foreach ($artesanias as $artesania): ?>
          <article class="bg-white rounded-[2rem] shadow-suave overflow-hidden flex flex-col">
            <div class="aspect-[4/5] overflow-hidden bg-cafe/5">
              <img
                src="<?= e($artesania['imagen']); ?>"
                alt="<?= e($artesania['alt']); ?>"
                class="w-full h-full object-cover hover:scale-[1.03] transition duration-300"
                loading="lazy"
              >
            </div>
            <div class="p-5 sm:p-6">
              <h3 class="text-xl font-bold text-sierra mb-3"><?= e($artesania['titulo']); ?></h3>
              <p class="text-sm sm:text-base leading-relaxed text-cafe/80"><?= e($artesania['texto']); ?></p>
            </div>
          </article>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="trayectoria" class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16 scroll-mt-28">
    <div class="grid lg:grid-cols-[.82fr_1.18fr] gap-6 lg:gap-8 items-start">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10 lg:sticky lg:top-28">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-sierra bg-tierra rounded-full px-4 py-2 mb-5">🏛️ Trayectoria</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Diseño, enseñanza y presencia en pasarelas</h2>
        <p class="text-base sm:text-lg leading-relaxed text-cafe/85 mb-5">
          La trayectoria de Bertha Vega Cruz reúne creación de moda, transmisión de saberes textiles y participación en espacios que visibilizan el arte rarámuri dentro y fuera de Chihuahua.
        </p>
        <div class="space-y-3">
          <div class="rounded-2xl bg-arena p-5 border border-cafe/10">
            <p class="font-bold text-[#684887] mb-2">Formación comunitaria</p>
            <p class="text-sm sm:text-base text-cafe/80">Ha impartido talleres de telar de cintura y de elaboración textil de blusas y faldas, compartiendo técnicas y conocimientos con nuevas generaciones.</p>
          </div>
          <div class="rounded-2xl bg-[#f2ebf6] p-5 border border-[#7653a6]/15">
            <p class="font-bold text-[#684887] mb-2">Moda con identidad</p>
            <p class="text-sm sm:text-base text-cafe/80">Sus colecciones incluyen prendas para hombres, mujeres, niñas y niños, inspiradas en la simbología y la indumentaria rarámuri.</p>
          </div>
          <div class="rounded-2xl bg-white p-5 border border-cafe/10 shadow-sm">
            <p class="font-bold text-[#684887] mb-2">Pasarelas y difusión</p>
            <p class="text-sm sm:text-base text-cafe/80">Ha colaborado en pasarelas de moda en Chihuahua y ha participado en encuentros nacionales dedicados al arte textil de los pueblos originarios.</p>
          </div>
        </div>
      </article>

      <div class="space-y-4">
        <article class="bg-gradient-to-r from-[#f2ebf6] to-white rounded-[2rem] border border-[#7653a6]/15 p-6 sm:p-7 shadow-sm">
          <div class="flex flex-col sm:flex-row gap-4 sm:items-start">
            <span class="shrink-0 inline-flex items-center justify-center min-w-20 rounded-full bg-[#684887] text-white font-extrabold px-4 py-2">2018</span>
            <div>
              <h3 class="text-xl font-bold text-textil mb-2">Nace Bikiyá Sopory</h3>
              <p class="text-cafe/80 leading-relaxed">La colección surge en la Sierra Tarahumara como una iniciativa creada, dirigida y coordinada por mujeres rarámuri, con Bertha Vega Cruz al frente.</p>
            </div>
          </div>
        </article>

        <article class="bg-gradient-to-r from-[#f2ebf6] to-white rounded-[2rem] border border-[#7653a6]/15 p-6 sm:p-7 shadow-sm">
          <div class="flex flex-col sm:flex-row gap-4 sm:items-start">
            <span class="shrink-0 inline-flex items-center justify-center min-w-20 rounded-full bg-[#684887] text-white font-extrabold px-4 py-2">2019</span>
            <div>
              <h3 class="text-xl font-bold text-textil mb-2">Colaboración y primera colección completa</h3>
              <p class="text-cafe/80 leading-relaxed">Elaboró para la chef Mónica Lazcano un traje tradicional presentado en el Festival Gastronómico Internacional del Cacao y el Café. Ese mismo año presentó en el Centro Cultural de las Fronteras una colección para hombres, mujeres, niñas y niños.</p>
            </div>
          </div>
        </article>

        <article class="bg-gradient-to-r from-[#f2ebf6] to-white rounded-[2rem] border border-[#7653a6]/15 p-6 sm:p-7 shadow-sm">
          <div class="flex flex-col sm:flex-row gap-4 sm:items-start">
            <span class="shrink-0 inline-flex items-center justify-center min-w-20 rounded-full bg-[#684887] text-white font-extrabold px-4 py-2">2021</span>
            <div>
              <h3 class="text-xl font-bold text-textil mb-2">Pasarela en el encuentro Original</h3>
              <p class="text-cafe/80 leading-relaxed">Participó en Original, encuentro nacional realizado en el Complejo Cultural Los Pinos para reunir y visibilizar el talento de los pueblos originarios.</p>
            </div>
          </div>
        </article>

        <article class="bg-gradient-to-r from-[#f2ebf6] to-white rounded-[2rem] border border-[#7653a6]/15 p-6 sm:p-7 shadow-sm">
          <div class="flex flex-col sm:flex-row gap-4 sm:items-start">
            <span class="shrink-0 inline-flex items-center justify-center min-w-20 rounded-full bg-[#684887] text-white font-extrabold px-4 py-2">2022</span>
            <div>
              <h3 class="text-xl font-bold text-textil mb-2">Taller de telar para mujeres y jóvenes</h3>
              <p class="text-cafe/80 leading-relaxed">Junto con su hija Teresa Ramírez, impartió un taller de telar de madera para elaborar la púla o faja y transmitir conocimientos textiles a niñas, jóvenes y mujeres de comunidades indígenas.</p>
            </div>
          </div>
        </article>

        <article class="bg-gradient-to-r from-[#f2ebf6] to-white rounded-[2rem] border border-[#7653a6]/15 p-6 sm:p-7 shadow-sm">
          <div class="flex flex-col sm:flex-row gap-4 sm:items-start">
            <span class="shrink-0 inline-flex items-center justify-center min-w-20 rounded-full bg-[#684887] text-white font-extrabold px-4 py-2">2021–2025</span>
            <div>
              <h3 class="text-xl font-bold text-textil mb-2">Participación continua en Original</h3>
              <p class="text-cafe/80 leading-relaxed">Bertha Vega Cruz ha participado en las ediciones 2021, 2022, 2023 y 2025 de Original, consolidando la presencia de Bikiyá Sopory en espacios nacionales de arte textil.</p>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <div class="bg-[#33273a] text-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
      <div class="max-w-3xl mb-7">
        <span class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 text-sm mb-4">🔎 Fuentes consultadas</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-3">Conoce más sobre Bertha Vega Cruz</h2>
        <p class="text-white/75 leading-relaxed">Estos artículos y perfiles documentan su especialidad textil, la historia de Bikiyá Sopory, sus talleres y su participación en pasarelas.</p>
      </div>

      <div class="grid md:grid-cols-3 gap-4 sm:gap-5">
        <a href="https://original.cultura.gob.mx/artesanos/67-2/" target="_blank" rel="noopener noreferrer" class="group rounded-3xl bg-white/10 border border-white/10 p-6 hover:bg-white hover:text-[#33273a] transition">
          <p class="text-xs font-bold uppercase tracking-[.16em] text-white/55 group-hover:text-[#684887] mb-3">Perfil oficial</p>
          <h3 class="text-xl font-bold mb-3">Original · Secretaría de Cultura</h3>
          <p class="text-sm text-white/70 group-hover:text-cafe/80 leading-relaxed mb-4">Especialidad textil, técnica artesanal, datos de la marca e historial de participaciones.</p>
          <span class="font-bold text-sm">Ver más ↗</span>
        </a>

        <a href="https://noro.mx/cultura/bertha-vega-disenadora-ropa-raramuri-tradicion-chihuahua/" target="_blank" rel="noopener noreferrer" class="group rounded-3xl bg-white/10 border border-white/10 p-6 hover:bg-white hover:text-[#33273a] transition">
          <p class="text-xs font-bold uppercase tracking-[.16em] text-white/55 group-hover:text-[#684887] mb-3">Semblanza</p>
          <h3 class="text-xl font-bold mb-3">Noro · Tradición y moda</h3>
          <p class="text-sm text-white/70 group-hover:text-cafe/80 leading-relaxed mb-4">Historia de la marca, formación, primera colección y colaboración realizada en 2019.</p>
          <span class="font-bold text-sm">Ver más ↗</span>
        </a>

        <a href="https://www.chihuahua.gob.mx/prensa/aprenden-uso-del-telar-de-madera-ninas-jovenes-y-mujeres-de-comunidades-indigenas" target="_blank" rel="noopener noreferrer" class="group rounded-3xl bg-white/10 border border-white/10 p-6 hover:bg-white hover:text-[#33273a] transition">
          <p class="text-xs font-bold uppercase tracking-[.16em] text-white/55 group-hover:text-[#684887] mb-3">Formación comunitaria</p>
          <h3 class="text-xl font-bold mb-3">Gobierno de Chihuahua · Taller de telar</h3>
          <p class="text-sm text-white/70 group-hover:text-cafe/80 leading-relaxed mb-4">Taller impartido en 2022, transmisión de saberes y participación en pasarelas y desfiles.</p>
          <span class="font-bold text-sm">Ver más ↗</span>
        </a>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <div class="grid lg:grid-cols-3 gap-5 sm:gap-6">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8">
        <div class="text-3xl mb-4">🌱</div>
        <h3 class="text-xl font-bold text-[#684887] mb-3">Preserva saberes</h3>
        <p class="text-cafe/80 leading-relaxed">Mantiene vivas técnicas heredadas de bordado, costura y composición textil.</p>
      </article>
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8">
        <div class="text-3xl mb-4">🪡</div>
        <h3 class="text-xl font-bold text-[#684887] mb-3">Abre nuevos caminos</h3>
        <p class="text-cafe/80 leading-relaxed">Lleva el arte rarámuri a espacios de moda, difusión cultural y colaboración creativa.</p>
      </article>
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8">
        <div class="text-3xl mb-4">🤝</div>
        <h3 class="text-xl font-bold text-[#684887] mb-3">Fortalece a la comunidad</h3>
        <p class="text-cafe/80 leading-relaxed">Visibiliza el talento de mujeres rarámuri y el valor de una identidad cultural viva.</p>
      </article>
    </div>
  </section>

  <section id="contacto" class="max-w-7xl mx-auto px-4 sm:px-6 pb-14 sm:pb-20 scroll-mt-28">
    <div class="bg-gradient-to-r from-[#33273a] via-[#684887] to-[#8b5caf] rounded-[2rem] p-7 sm:p-10 text-white overflow-hidden relative">
      <div class="relative z-10 grid lg:grid-cols-[1.08fr_.92fr] gap-8 lg:gap-10 items-center">
        <div>
          <span class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 text-sm mb-5">📍 Visita Bikiyá Sopory</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Encuentra una prenda que conecte historia y presente</h2>
          <p class="text-white/85 text-base sm:text-lg leading-8 mb-6 max-w-3xl">
            Consulta las redes de la marca para conocer disponibilidad, tallas, nuevos diseños, piezas artesanales y opciones de pedido.
          </p>

          <div class="grid sm:grid-cols-2 gap-3 text-sm">
            <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
              <p class="font-bold mb-1">Dirección publicada</p>
              <p class="text-white/75">C. Morelos y Av. Independencia #1000, Zona Centro, Chihuahua, Chih.</p>
            </div>
            <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
              <p class="font-bold mb-1">Horario publicado</p>
              <p class="text-white/75">10:00 a 17:00 h. Se recomienda confirmar en redes antes de visitar.</p>
            </div>
          </div>
        </div>

        <div class="grid gap-4">
          <a href="tel:+526143697243" class="bg-white text-[#594061] font-bold px-6 py-4 rounded-2xl text-center hover:scale-[1.02] transition">
            📱 (614) 369 7243
          </a>
          <a href="https://www.facebook.com/artebikiya" target="_blank" rel="noopener noreferrer" class="border border-white/35 font-bold px-6 py-4 rounded-2xl text-center hover:bg-white hover:text-[#594061] transition">
            Facebook: Bikiyá Sopory
          </a>
          <a href="https://www.instagram.com/bikiyasopory3" target="_blank" rel="noopener noreferrer" class="border border-white/35 font-bold px-6 py-4 rounded-2xl text-center hover:bg-white hover:text-[#594061] transition">
            Instagram: @bikiyasopory3
          </a>
          <p class="text-xs text-white/60 text-center px-3">
            Los horarios, tallas y existencias pueden cambiar; confirma la información directamente con la marca.
          </p>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
