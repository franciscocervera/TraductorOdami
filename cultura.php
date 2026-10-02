<?php
$title = 'Cultura y cosmovisión | Ódami del Norte';
$pageDescription = 'Cosmovisión, ritualidad y relación con la naturaleza en la cultura Ódami del Norte.';
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
          <span class="inline-flex items-center gap-2 bg-white/15 rounded-full px-4 py-2 text-sm mb-5">🌿 Cultura, cosmovisión y espiritualidad</span>
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">Cosmovisión y cultura</h1>
          <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-2xl mb-8">
            <?= e($siteData['cultura']['intro']); ?> La relación con la naturaleza, la ritualidad y la vida comunitaria forman parte de una presencia cultural profundamente viva.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="#ritualidad" class="bg-white text-textil font-bold w-full sm:w-auto text-center px-6 py-3 rounded-full hover:scale-105 transition">Explorar secciones</a>
            <a href="comunidad.php" class="border border-white w-full sm:w-auto text-center px-6 py-3 rounded-full hover:bg-white hover:text-textil transition">Ir a comunidad</a>
          </div>
        </div>

        <div class="grid gap-4 sm:gap-5">
          <div class="bg-white/10 border border-white/15 rounded-[2rem] p-4 sm:p-6 shadow-suave backdrop-blur-sm">
            <div class="aspect-[4/3] rounded-[1.5rem] overflow-hidden">
              <img 
                src="assets/img/cultura-hero.jpg" 
                alt="Persona de la comunidad Ódami del norte trabajando junto a un lago rodeado de bosque nevado en la Sierra Madre durante el invierno."
                class="w-full h-full object-cover"
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="ritualidad" class="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-14">
    <div class="grid lg:grid-cols-2 gap-5 sm:gap-6 lg:gap-8">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 text-sm text-sierra font-semibold mb-4">🌎 Cosmovisión indígena</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Naturaleza sagrada y relación con el mundo</h2>
        <p class="text-base sm:text-lg leading-relaxed mb-4">
          La cosmovisión ódami entiende la naturaleza como una entidad viva. El territorio no es únicamente paisaje, sino una red de fuerzas y presencias que influyen en la vida comunitaria, la salud y los ciclos productivos.
        </p>
        <p class="leading-relaxed text-cafe/90">
          Esta visión se expresa en actos de respeto hacia la tierra, en agradecimientos por las cosechas y en la búsqueda constante de equilibrio con el entorno. La espiritualidad, en este sentido, está profundamente unida a la vida diaria.
        </p>
      </article>

      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 text-sm text-sierra font-semibold mb-4">⛪ Encuentro de tradiciones</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Sincretismo religioso</h2>
        <p class="text-base sm:text-lg leading-relaxed mb-4">
          La cultura ódami integró elementos del catolicismo sin abandonar su propia visión del mundo. Santos, celebraciones y ceremonias fueron reinterpretados desde una lógica indígena que mantuvo el vínculo con la naturaleza y con los ritmos comunitarios.
        </p>
        <p class="leading-relaxed text-cafe/90">
          El resultado es una expresión religiosa viva e híbrida, donde lo heredado y lo adoptado conviven dentro de una misma identidad cultural.
        </p>
      </article>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14">
    <div class="bg-white rounded-[2rem] sm:rounded-[2.5rem] shadow-suave overflow-hidden">
      <div class="grid xl:grid-cols-[0.95fr_1.05fr] gap-0">
        <div class="p-6 sm:p-8 lg:p-10 border-b xl:border-b-0 xl:border-r border-cafe/10">
          <span class="inline-flex items-center gap-2 text-sm text-textil font-semibold mb-4">📷 Memoria visual</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold text-cafe mb-4">Presencias, símbolos y ceremonias</h2>
          <p class="leading-relaxed mb-6 text-cafe/90">
            La dimensión espiritual de la cultura ódami también se expresa a través de símbolos, gestos, música, vestimenta y espacios compartidos. En conjunto, estos elementos fortalecen la continuidad cultural y la cohesión comunitaria.
          </p>

          <div class="rounded-[1.5rem] border-2 border-dashed border-cafe/15 bg-tierra/60 min-h-[230px] sm:min-h-[280px] overflow-hidden">
            <img 
              src="assets/img/cultura-ceremonias.jpg" 
              alt="Integrantes de la comunidad Ódami del norte realizando una danza tradicional ceremonial con vestimenta colorida frente a viviendas rurales."
              class="w-full h-full object-cover"
            >
          </div>
        </div>

        <div class="p-6 sm:p-8 lg:p-10">
          <div class="grid sm:grid-cols-2 xl:grid-cols-1 gap-5 sm:gap-6">
            <article class="rounded-[1.75rem] bg-tierra/55 border border-cafe/10 p-5 sm:p-6">
              <div class="text-2xl mb-3">🌽</div>
              <h3 class="text-xl font-bold text-textil mb-3">Rituales agrícolas</h3>
              <p class="leading-relaxed text-cafe/90">
                Las ceremonias ligadas a la siembra, la lluvia y la cosecha acompañan el calendario comunitario y expresan gratitud hacia la tierra y los alimentos.
              </p>
            </article>

            <article class="rounded-[1.75rem] bg-tierra/55 border border-cafe/10 p-5 sm:p-6">
              <div class="text-2xl mb-3">🥁</div>
              <h3 class="text-xl font-bold text-textil mb-3">Ceremonias comunitarias</h3>
              <p class="leading-relaxed text-cafe/90">
                Música, danza, vestimenta y participación colectiva forman parte de celebraciones que reafirman la pertenencia y la memoria compartida.
              </p>
            </article>

            <article class="rounded-[1.75rem] bg-tierra/55 border border-cafe/10 p-5 sm:p-6">
              <div class="text-2xl mb-3">🕊️</div>
              <h3 class="text-xl font-bold text-textil mb-3">Ritos de paso</h3>
              <p class="leading-relaxed text-cafe/90">
                Nacimiento, matrimonio y muerte son momentos acompañados por prácticas que reflejan continuidad espiritual, respeto y acompañamiento comunitario.
              </p>
            </article>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-16">
    <div class="grid lg:grid-cols-[1fr_0.85fr] gap-5 sm:gap-6 lg:gap-8 items-stretch">
      <article class="bg-gradient-to-r from-sierra to-cafe text-white rounded-[2rem] sm:rounded-[2.5rem] p-6 sm:p-8 lg:p-10 shadow-suave">
        <span class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 text-sm mb-4">🔥 Persistencia cultural</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-4">Una herencia que sigue presente</h2>
        <p class="text-white/90 leading-relaxed text-base sm:text-lg mb-6">
          A pesar de los cambios históricos y de la influencia de la modernidad, muchas comunidades mantienen prácticas, símbolos y formas de organización espiritual que continúan dando sentido a la vida colectiva.
        </p>
        <div class="flex flex-wrap gap-3">
          <a href="comunidad.php" class="bg-white text-sierra font-bold px-5 py-3 rounded-full hover:scale-105 transition">Ver comunidad</a>
          <a href="lengua.php" class="border border-white/40 text-white px-5 py-3 rounded-full hover:bg-white hover:text-sierra transition">Explorar lengua</a>
        </div>
      </article>

      <aside class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8">
        <span class="inline-flex items-center gap-2 text-sm text-textil font-semibold mb-4">🌙 Mirada cultural</span>
        <p class="leading-relaxed text-cafe/90 mb-4">
          La cultura ódami no puede entenderse solo como un conjunto de costumbres. Es una forma de comprender el tiempo, la naturaleza, la comunidad y la continuidad entre generaciones.
        </p>
        <p class="leading-relaxed text-cafe/90">
          Cada ceremonia, cada gesto de respeto hacia la tierra y cada celebración comunitaria forma parte de una memoria que sigue viva y se transforma sin desaparecer.
        </p>
      </aside>
    </div>
  </section>
</main>
<?php include 'includes/footer.php'; ?>
