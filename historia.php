<?php
$title = 'Historia | Ódami del Norte';
$pageDescription = 'Recorrido histórico por la memoria, el territorio y la continuidad cultural del pueblo Ódami del Norte.';
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
          <span class="inline-flex items-center gap-2 bg-white/15 rounded-full px-4 py-2 text-sm mb-5">🗺️ Memoria, territorio y continuidad</span>
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">Historia de los Ódami del Norte</h1>
          <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-2xl mb-8">
            <?= e($siteData['historia']['intro']); ?>
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="#linea-tiempo" class="bg-white text-textil font-bold w-full sm:w-auto text-center px-6 py-3 rounded-full hover:scale-105 transition">Ver línea del tiempo</a>
            <a href="lengua.php" class="border border-white w-full sm:w-auto text-center px-6 py-3 rounded-full hover:bg-white hover:text-textil transition">Continuar a lengua</a>
          </div>
        </div>

        <div class="grid gap-4 sm:gap-5">
          <div class="bg-white/10 border border-white/15 rounded-[2rem] p-4 sm:p-6 shadow-suave backdrop-blur-sm">
            
            <div class="aspect-[4/3] rounded-[1.5rem] overflow-hidden">
              <img 
                src="assets/img/historia-hero.jpg" 
                alt="Retrato histórico en blanco y negro de integrantes de la cultura Ódami del norte, de pie frente a un muro de piedra, vistiendo ropa tradicional y cobijas tejidas.e"
                class="w-full h-full object-cover"
              >
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-16">
    <div class="grid lg:grid-cols-[1.15fr_0.85fr] gap-6 sm:gap-8 items-stretch">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 bg-sierra/10 text-sierra rounded-full px-4 py-2 text-sm mb-4">⛰️ Territorio y origen</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Una historia ligada a la Sierra Tarahumara</h2>
        <p class="text-base sm:text-lg leading-8 mb-5">
          El pueblo Ódami del Norte habita principalmente en la Sierra Tarahumara, una región que ha modelado profundamente su vida cotidiana, sus formas de organización, su relación con la naturaleza y la transmisión de su memoria colectiva.
        </p>
        <p class="leading-8 text-cafe/90">
          Más que un dato geográfico, el territorio es una referencia vital: en él convergen la historia comunitaria, la resistencia, el trabajo, los vínculos familiares y las prácticas que han dado continuidad a su identidad a lo largo del tiempo.
        </p>
      </article>

      <aside class="bg-gradient-to-br from-maiz/20 to-textil/10 rounded-[2rem] p-5 sm:p-6 border border-textil/10">
        <div class="aspect-[1/1] rounded-[1.5rem] overflow-hidden mb-5">
          <img 
            src="assets/img/historia-territorio.jpg" 
            alt="Vista aérea de una comunidad Ódami del norte rodeada de campos de cultivo, caminos rurales y montañas de la Sierra Madre bajo un cielo despejado."
            class="w-full h-full object-cover"
          >
        </div>
      </aside>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-16">
    <div class="grid md:grid-cols-2 gap-5 sm:gap-6">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 h-full">
        <span class="inline-flex items-center gap-2 bg-textil/10 text-textil rounded-full px-4 py-2 text-sm mb-4">🛡️ Resistencia cultural</span>
        <h2 class="text-2xl font-bold text-sierra mb-4">Persistencia frente al cambio</h2>
        <p class="leading-8 text-cafe/90">
          A lo largo de distintos periodos históricos, los Ódami del Norte atravesaron procesos de contacto, presión externa e integración forzada. Sin embargo, supieron preservar estructuras comunitarias, saberes propios y formas de convivencia que siguen dando sentido a su identidad.
        </p>
      </article>

      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 h-full">
        <span class="inline-flex items-center gap-2 bg-maiz/20 text-cafe rounded-full px-4 py-2 text-sm mb-4">🌿 Continuidad</span>
        <h2 class="text-2xl font-bold text-sierra mb-4">La historia sigue viva</h2>
        <p class="leading-8 text-cafe/90">
          La historia Ódami no pertenece únicamente al pasado. Permanece en la lengua, en las prácticas comunitarias, en la relación con el territorio y en las nuevas iniciativas que buscan fortalecer su presencia cultural en el ámbito digital y educativo.
        </p>
      </article>
    </div>
  </section>

  <section id="linea-tiempo" class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-16">
    <div class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10 overflow-hidden">
      <div class="flex flex-col lg:flex-row lg:items-end lg:justify-between gap-4 mb-8 sm:mb-10">
        <div>
          <span class="inline-flex items-center gap-2 bg-textil/10 text-textil rounded-full px-4 py-2 text-sm mb-4">📜 Recorrido histórico</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-textil">Línea del tiempo</h2>
        </div>
        <p class="max-w-2xl text-cafe/80 leading-7">
          Un vistazo general a algunos momentos clave para comprender la trayectoria histórica y cultural del pueblo Ódami del Norte.
        </p>
      </div>

      <div class="grid lg:grid-cols-[1fr_320px] gap-8 lg:gap-10 items-start">
        <div class="relative">
          <div class="hidden md:block absolute left-[8.8rem] top-2 bottom-2 w-px bg-maiz/40"></div>

          <div class="space-y-6 sm:space-y-8">
            <?php foreach ($siteData['historia']['timeline'] as $item): ?>
              <div class="grid grid-cols-1 md:grid-cols-[140px_32px_1fr] gap-3 sm:gap-4 items-start group">
                <div class="md:pt-1 font-bold text-sierra text-lg"><?= e($item['periodo']); ?></div>
                <div class="hidden md:flex justify-center pt-2">
                  <span class="w-4 h-4 rounded-full bg-maiz ring-8 ring-maiz/15 inline-block"></span>
                </div>
                <article class="bg-tierra/55 rounded-3xl p-5 sm:p-6 border border-maiz/20 group-hover:-translate-y-0.5 transition">
                  <div class="md:hidden mb-3 inline-flex items-center gap-2 bg-maiz/20 text-cafe rounded-full px-3 py-1.5 text-sm font-semibold">
                    🕰️ <?= e($item['periodo']); ?>
                  </div>
                  <p class="leading-7 text-cafe/90"><?= e($item['detalle']); ?></p>
                </article>
              </div>
            <?php endforeach; ?>
          </div>
        </div>

        <aside class="space-y-5">
          <div class="aspect-[4/3] rounded-[1.75rem] overflow-hidden">
            <img 
              src="assets/img/historia-linea.jpg" 
              alt="Fotografía histórica en blanco y negro de una familia Ódami del norte junto a una vivienda de madera, vistiendo ropa tradicional en un entorno rural boscoso."
              class="w-full h-full object-cover"
            >
          </div>
          <div class="bg-tierra rounded-[1.75rem] p-6 border border-maiz/20">
            <h3 class="text-xl font-bold text-sierra mb-3">🧭 Un proceso histórico continuo</h3>
            <p class="leading-7 text-cafe/90">
              La línea del tiempo resume cambios importantes, pero también muestra algo más profundo: la capacidad de adaptación del pueblo Ódami sin romper el hilo de su memoria cultural.
            </p>
          </div>
        </aside>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-14 sm:pb-20">
    <div class="bg-gradient-to-br from-sierra to-cafe text-white rounded-[2rem] p-6 sm:p-8 lg:p-10 shadow-suave">
      
      <span class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 text-sm mb-4">
        ✨ Mirar el pasado para comprender el presente
      </span>

      <h2 class="text-2xl sm:text-3xl font-extrabold mb-4">
        La historia también vive en la lengua y la comunidad
      </h2>

      <p class="text-white/90 leading-8 mb-6">
        Comprender la historia Ódami permite leer con más profundidad sus formas de organización, la importancia de la lengua y el valor de las prácticas comunitarias que siguen presentes en la actualidad.
      </p>

      <div class="flex flex-wrap gap-4">
        <a href="lengua.php" class="bg-white text-sierra font-bold w-full sm:w-auto text-center px-6 py-3 rounded-full hover:scale-105 transition">
          Ir a lengua
        </a>
        <a href="comunidad.php" class="border border-white w-full sm:w-auto text-center px-6 py-3 rounded-full hover:bg-white hover:text-sierra transition">
          Ver comunidad
        </a>
      </div>

    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
