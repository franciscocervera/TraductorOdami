<?php
$title = 'Comunidad | Ódami del Norte';
$pageDescription = 'Vida comunitaria, familia extensa y organización social del pueblo Ódami del Norte.';
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'data/contenido.php';
?>

<div class="pattern-strip"></div>
<main>
  <section class="bg-gradient-to-br from-textil via-terracota to-maiz text-white overflow-hidden">
    <div class="hero-pattern">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-20 grid lg:grid-cols-2 gap-8 sm:gap-10 items-center">
        <div>
          <span class="inline-flex items-center gap-2 bg-white/15 rounded-full px-4 py-2 text-sm mb-5">👥 Vida comunitaria y organización social</span>
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">Comunidad y organización social</h1>
          <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-2xl mb-8">
            <?= e($siteData['comunidad']['intro']); ?> La familia extensa, las autoridades tradicionales y el papel de los mayores sostienen una vida colectiva profundamente articulada.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="#ancianos" class="bg-white text-textil font-bold w-full sm:w-auto text-center px-6 py-3 rounded-full hover:scale-105 transition">Ver organización social</a>
            <a href="educacion.php" class="border border-white w-full sm:w-auto text-center px-6 py-3 rounded-full hover:bg-white hover:text-textil transition">Ir a educación</a>
          </div>
        </div>

        <div class="grid gap-4 sm:gap-5">
          <div class="bg-white/10 border border-white/15 rounded-[2rem] p-4 sm:p-6 shadow-suave backdrop-blur-sm">
            
            <div class="aspect-[4/3] rounded-[1.5rem] overflow-hidden">
              <img 
                src="assets/img/comunidad-hero.jpg" 
                alt="Mujeres, hombres y niñas de la comunidad Ódami del norte reunidos en un acto comunitario con vestimenta tradicional y una manta de representación indígena."
                class="w-full h-full object-cover"
              >
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-16 lg:py-20">
    <div class="grid lg:grid-cols-[1fr_.95fr] gap-6 lg:gap-8 items-stretch">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 bg-textil/10 text-textil rounded-full px-4 py-2 text-sm mb-5">
          <span>🏡</span>
          <span>Familia extensa</span>
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">La vida cotidiana se construye en red</h2>
        <p class="text-base sm:text-lg leading-relaxed mb-5">
          En la organización social Ódami, la familia extensa constituye una base fundamental. No se trata únicamente del núcleo inmediato, sino de un entramado más amplio de abuelos, tíos, primos y otros parientes cercanos que comparten responsabilidades y fortalecen la cohesión comunitaria.
        </p>
        <p class="leading-relaxed text-cafe/90 mb-6">
          Desde este espacio familiar se transmiten la lengua, los conocimientos cotidianos, la relación con la tierra, las formas de ayuda mutua y la participación en las actividades colectivas. La comunidad se sostiene, en gran medida, por estos lazos de parentesco y reciprocidad.
        </p>

        <div class="grid sm:grid-cols-2 gap-4">
          <div class="rounded-2xl bg-arena p-5">
            <h3 class="font-bold text-sierra mb-2">🗣️ Transmisión cultural</h3>
            <p class="text-sm leading-relaxed">La familia es un espacio central para aprender la lengua, las costumbres y el sentido de pertenencia.</p>
          </div>
          <div class="rounded-2xl bg-arena p-5">
            <h3 class="font-bold text-sierra mb-2">🌽 Trabajo compartido</h3>
            <p class="text-sm leading-relaxed">Las tareas vinculadas a la vida doméstica, agrícola y comunitaria suelen sostenerse en cooperación.</p>
          </div>
        </div>
      </article>

      <aside class="bg-gradient-to-br from-maiz/25 via-white to-tierra rounded-[2rem] shadow-suave p-5 sm:p-6 lg:p-8 flex flex-col">
        <span class="inline-flex items-center gap-2 bg-white text-sierra rounded-full px-4 py-2 text-sm mb-5 self-start shadow-sm">
          <span>🖼️</span>
          <span>Mirada visual</span>
        </span>
        <div class="rounded-[1.5rem] overflow-hidden aspect-[16/11] mb-5">
          <img 
            src="assets/img/comunidad-vida.jpg" 
            alt="Mujer y hombre de la comunidad Ódami del norte sentados en una plaza pública con vestimenta tradicional y herramientas de trabajo artesanal."
            class="w-full h-full object-cover"
          >
        </div>
        <p class="text-cafe/85 leading-relaxed">
          En esta dimensión comunitaria, el parentesco no solo organiza la convivencia: también orienta la manera de aprender, cuidar y compartir. Esa estructura social permite sostener la identidad incluso en contextos de cambio.
        </p>
      </aside>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-12 sm:pb-16 lg:pb-20">
    <div class="grid lg:grid-cols-2 gap-6 lg:gap-8">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 bg-sierra/10 text-sierra rounded-full px-4 py-2 text-sm mb-5">
          <span>⚖️</span>
          <span>Autoridades tradicionales</span>
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Decidir desde la experiencia y el reconocimiento</h2>
        <p class="leading-relaxed mb-5">
          La vida comunitaria combina formas tradicionales de autoridad con estructuras institucionales más recientes. En ese equilibrio, la legitimidad de muchas figuras comunitarias nace del prestigio, la experiencia y la confianza que depositan en ellas los propios integrantes de la comunidad.
        </p>
        <div class="space-y-4">
          <div class="rounded-2xl border border-cafe/10 p-4">
            <h3 class="font-bold text-sierra mb-1">🪶 Reconocimiento comunitario</h3>
            <p class="text-sm text-cafe/85">La autoridad no se entiende solo como cargo, sino como responsabilidad y servicio hacia el colectivo.</p>
          </div>
          <div class="rounded-2xl border border-cafe/10 p-4">
            <h3 class="font-bold text-sierra mb-1">🧭 Resolución y organización</h3>
            <p class="text-sm text-cafe/85">Las decisiones ayudan a ordenar actividades, resolver tensiones y sostener prácticas ceremoniales y sociales.</p>
          </div>
          <div class="rounded-2xl border border-cafe/10 p-4">
            <h3 class="font-bold text-sierra mb-1">🌿 Convivencia de sistemas</h3>
            <p class="text-sm text-cafe/85">Las autoridades tradicionales conviven con figuras institucionales, formando un sistema social mixto.</p>
          </div>
        </div>
      </article>

      <article id="ancianos" class="bg-gradient-to-br from-textil via-terracota to-maiz text-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10 overflow-hidden relative">
        <div class="absolute inset-0 opacity-10" style="background-image: linear-gradient(135deg, rgba(255,255,255,.35) 0, transparent 45%, rgba(255,255,255,.2) 100%);"></div>
        <div class="relative">
          <span class="inline-flex items-center gap-2 bg-white/15 border border-white/15 rounded-full px-4 py-2 text-sm mb-5">
            <span>🧓</span>
            <span>Papel de los ancianos</span>
          </span>
          <h2 class="text-2xl sm:text-3xl font-extrabold mb-4">Consejo, memoria y continuidad</h2>
          <p class="text-white/90 leading-relaxed mb-6">
            Los ancianos ocupan un lugar central en la organización social. Son memoria viva, guías morales y referentes en la transmisión del conocimiento ancestral, de la lengua y de los valores que sostienen la vida colectiva.
          </p>

          <div class="grid sm:grid-cols-3 gap-4">
            <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
              <p class="text-2xl mb-2">📜</p>
              <h3 class="font-bold mb-1">Memoria histórica</h3>
              <p class="text-sm text-white/80">Resguardan relatos, experiencias y referencias compartidas.</p>
            </div>
            <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
              <p class="text-2xl mb-2">🗣️</p>
              <h3 class="font-bold mb-1">Consejo y palabra</h3>
              <p class="text-sm text-white/80">Orientan decisiones y acompañan la resolución de conflictos.</p>
            </div>
            <div class="rounded-2xl bg-white/10 border border-white/10 p-4">
              <p class="text-2xl mb-2">🌾</p>
              <h3 class="font-bold mb-1">Transmisión cultural</h3>
              <p class="text-sm text-white/80">Sostienen la lengua, la cosmovisión y las prácticas tradicionales.</p>
            </div>
          </div>
        </div>
      </article>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-14 sm:pb-20">
    <div class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">

      <div>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">
          Una organización social que da continuidad a la cultura
        </h2>

        <p class="leading-relaxed text-cafe/90 mb-4">
          La comunidad Ódami del Norte no puede entenderse solo desde su estructura social, sino desde la red de relaciones que enlaza territorio, parentesco, autoridad, memoria y transmisión cultural.
        </p>

        <p class="leading-relaxed text-cafe/90 mb-6">
          En esa articulación se sostiene una forma de vida donde la convivencia colectiva tiene un papel central y donde cada generación participa en la continuidad de la identidad comunitaria.
        </p>

        <div class="flex flex-wrap gap-4">
          <a href="cultura.php" class="inline-flex items-center justify-center rounded-full bg-textil text-white px-6 py-3 font-semibold hover:scale-[1.02] transition">
            Explorar cultura
          </a>

          <a href="educacion.php" class="inline-flex items-center justify-center rounded-full border border-textil text-textil px-6 py-3 font-semibold hover:bg-textil hover:text-white transition">
            Ver educación
          </a>
        </div>
      </div>

    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
