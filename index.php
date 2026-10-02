<?php
$title = 'Inicio | Ódami del Norte';
$pageDescription = 'Sitio cultural sobre la historia, lengua, organización social y cosmovisión de los Ódami del Norte.';
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
include 'data/contenido.php';
?>
<div class="pattern-strip"></div>
<main>
  <section class="bg-hero-odami text-white overflow-hidden">
    <div class="hero-pattern">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-20 lg:py-24 grid lg:grid-cols-2 gap-10 lg:gap-14 items-center">
        <div>
          <span class="inline-flex items-center gap-2 bg-white/15 border border-white/15 rounded-full px-4 py-2 text-sm mb-5">
            ✨ Patrimonio cultural y lingüístico
          </span>
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">
            <?= e($siteData['hero']['title']); ?>
          </h1>
          <p class="text-base sm:text-lg md:text-xl text-white/90 mb-8 max-w-2xl leading-relaxed">
            <?= e($siteData['hero']['subtitle']); ?>
          </p>

          <div class="flex flex-wrap gap-4 mb-8">
            <a href="traductor.php" class="bg-white text-textil font-bold w-full sm:w-auto text-center px-6 py-3.5 rounded-full hover:scale-105 transition">
              Usar traductor
            </a>
            <a href="lengua.php" class="border border-white w-full sm:w-auto text-center px-6 py-3.5 rounded-full hover:bg-white hover:text-textil transition">
              Explorar la lengua
            </a>
          </div>

          <div class="grid sm:grid-cols-3 gap-3 text-sm">
            <div class="bg-white/10 rounded-2xl px-4 py-4 border border-white/10">
              <p class="font-semibold">🗣️ Lengua viva</p>
              <p class="text-white/80 mt-1">Memoria oral, identidad y transmisión familiar.</p>
            </div>
            <div class="bg-white/10 rounded-2xl px-4 py-4 border border-white/10">
              <p class="font-semibold">⛰️ Territorio</p>
              <p class="text-white/80 mt-1">Sierra, comunidad y relación con la naturaleza.</p>
            </div>
            <div class="bg-white/10 rounded-2xl px-4 py-4 border border-white/10">
              <p class="font-semibold">💻 Futuro digital</p>
              <p class="text-white/80 mt-1">Herramientas para aprender y preservar.</p>
            </div>
          </div>
        </div>

        <div class="bg-white/10 border border-white/15 rounded-[2rem] p-4 sm:p-5 shadow-suave backdrop-blur-sm">
          <div class="aspect-[4/3] rounded-[1.5rem] overflow-hidden">
            <img 
              src="assets/img/index-hero.jpg" 
              alt="Mujeres de la cultura Ódami del norte exhibiendo artesanías tradicionales tejidas en un paisaje montañoso de la Sierra Madre, rodeadas de canastas y textiles elaborados a mano."
              class="w-full h-full object-cover"
            >
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-14 lg:py-16">
    <div class="grid lg:grid-cols-[1.15fr_0.85fr] gap-6 lg:gap-8 items-stretch">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-textil bg-tierra rounded-full px-4 py-2 mb-5">🌿 Sobre este pueblo</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Una cultura que conserva memoria, territorio y comunidad</h2>
        <p class="text-base sm:text-lg leading-relaxed mb-4">
          Los Ódami del Norte forman parte de una tradición histórica y lingüística profundamente vinculada a la Sierra Tarahumara. Su cultura expresa una relación viva con la lengua, la naturaleza, la organización comunitaria y la transmisión intergeneracional del conocimiento.
        </p>
        <p class="text-base sm:text-lg leading-relaxed text-cafe/80">
          Este sitio propone una experiencia clara, visual y accesible para acercarse a su historia, su cosmovisión, su vida cotidiana y las posibilidades que hoy ofrecen las herramientas digitales para fortalecer la preservación cultural.
        </p>
      </article>

      <aside class="bg-gradient-to-br from-sierra to-cafe text-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10 flex flex-col justify-between">
        <div>
          <span class="inline-flex items-center gap-2 text-sm font-semibold bg-white/10 rounded-full px-4 py-2 mb-5">🧭 Navegación destacada</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold mb-4">Explora cada dimensión de la cultura Ódami</h2>
          <p class="text-white/85 leading-relaxed mb-6">
            Recorre secciones enfocadas en historia, lengua, cosmovisión, comunidad, educación, economía y una herramienta de traducción pensada para crecer con el proyecto.
          </p>
        </div>
        <div class="flex flex-wrap gap-3">
          <a href="historia.php" class="bg-white text-sierra font-semibold px-4 py-3 rounded-full">Ver historia</a>
          <a href="cultura.php" class="border border-white/25 px-4 py-3 rounded-full font-semibold hover:bg-white hover:text-sierra transition">Ver cultura</a>
        </div>
      </aside>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10 lg:mb-12">
      <span class="inline-flex items-center gap-2 text-sm font-semibold text-textil bg-white rounded-full px-4 py-2 shadow-suave mb-4">📚 Secciones principales</span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-textil mb-4">Un recorrido por la cultura Ódami del Norte</h2>
      <p class="text-base sm:text-lg leading-relaxed">
        Cada sección reúne información esencial para entender la continuidad histórica, la riqueza lingüística y la vida comunitaria de este pueblo.
      </p>
    </div>

    <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5 sm:gap-6">
      <a href="historia.php" class="section-card bg-white rounded-[2rem] p-6 shadow-suave hover:-translate-y-1 transition">
        <div class="text-3xl mb-4">🏔️</div>
        <h3 class="text-xl font-bold text-textil mb-3">Historia</h3>
        <p class="text-cafe/85">Origen, territorio, resistencia y continuidad cultural en la Sierra Tarahumara.</p>
      </a>
      <a href="lengua.php" class="section-card bg-white rounded-[2rem] p-6 shadow-suave hover:-translate-y-1 transition">
        <div class="text-3xl mb-4">🗣️</div>
        <h3 class="text-xl font-bold text-textil mb-3">Lengua</h3>
        <p class="text-cafe/85">Una aproximación al idioma ódami, su valor identitario y su preservación.</p>
      </a>
      <a href="cultura.php" class="section-card bg-white rounded-[2rem] p-6 shadow-suave hover:-translate-y-1 transition">
        <div class="text-3xl mb-4">🌞</div>
        <h3 class="text-xl font-bold text-textil mb-3">Cultura</h3>
        <p class="text-cafe/85">Cosmovisión, espiritualidad, rituales y relación con los elementos de la naturaleza.</p>
      </a>
      <a href="comunidad.php" class="section-card bg-white rounded-[2rem] p-6 shadow-suave hover:-translate-y-1 transition">
        <div class="text-3xl mb-4">👥</div>
        <h3 class="text-xl font-bold text-textil mb-3">Comunidad</h3>
        <p class="text-cafe/85">Familia extensa, autoridades tradicionales y papel central de los ancianos.</p>
      </a>
      <a href="educacion.php" class="section-card bg-white rounded-[2rem] p-6 shadow-suave hover:-translate-y-1 transition">
        <div class="text-3xl mb-4">📘</div>
        <h3 class="text-xl font-bold text-textil mb-3">Educación</h3>
        <p class="text-cafe/85">Educación bilingüe, desafíos estructurales y posibilidades tecnológicas.</p>
      </a>
      <a href="economia.php" class="section-card bg-white rounded-[2rem] p-6 shadow-suave hover:-translate-y-1 transition">
        <div class="text-3xl mb-4">🌽</div>
        <h3 class="text-xl font-bold text-textil mb-3">Economía</h3>
        <p class="text-cafe/85">Agricultura, ganadería, milpa y vínculo cotidiano con la tierra.</p>
      </a>
      <a href="vt-distribuidores.php" class="section-card bg-white rounded-[2rem] p-6 shadow-suave hover:-translate-y-1 transition">
        <div class="text-3xl mb-4">🍯</div>
        <h3 class="text-xl font-bold text-textil mb-3">VT Distribuidores Alimenticios</h3>
        <p class="text-cafe/85">Conoce una iniciativa local que conecta productos chihuahuenses con consumidores responsables.</p>
      </a>
      <a href="bikiya-sopori.php" class="section-card bg-white rounded-[2rem] p-6 shadow-suave hover:-translate-y-1 transition">
        <div class="text-3xl mb-4">👗</div>
        <h3 class="text-xl font-bold text-textil mb-3">Bikiyá Sopory</h3>
        <p class="text-cafe/85">Moda y artesanía rarámuri: prendas con identidad, color y diseño creadas en Chihuahua.</p>
      </a>
      <a href="traductor.php" class="section-card bg-white rounded-[2rem] p-6 shadow-suave hover:-translate-y-1 transition">
        <div class="text-3xl mb-4">🔁</div>
        <h3 class="text-xl font-bold text-textil mb-3">Traductor</h3>
        <p class="text-cafe/85">Un módulo digital para traducir entre español y ódami y apoyar el aprendizaje.</p>
      </a>
      <a href="acerca.php" class="section-card bg-white rounded-[2rem] p-6 shadow-suave hover:-translate-y-1 transition">
        <div class="text-3xl mb-4">✨</div>
        <h3 class="text-xl font-bold text-textil mb-3">Acerca</h3>
        <p class="text-cafe/85">Objetivos, alcance del proyecto y visión de crecimiento del sitio cultural.</p>
      </a>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 lg:pb-16">
    <div class="grid lg:grid-cols-2 gap-6 lg:gap-8 items-stretch">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-sierra bg-tierra rounded-full px-4 py-2 mb-5">🧠 Lengua y memoria</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-sierra mb-4">Nombrar el mundo también es una forma de preservarlo</h2>
        <p class="leading-relaxed text-base sm:text-lg mb-4">
          La lengua ódami no solo comunica: también guarda formas de entender el territorio, la familia, la ritualidad y la vida cotidiana. Su preservación fortalece la memoria colectiva y el sentido de pertenencia.
        </p>
        <a href="lengua.php" class="inline-flex items-center text-textil font-semibold hover:underline">Ver sección de lengua</a>
      </article>

      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-sierra bg-tierra rounded-full px-4 py-2 mb-5">💻 Tecnología con sentido cultural</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-sierra mb-4">Una herramienta digital al servicio del aprendizaje</h2>
        <p class="leading-relaxed text-base sm:text-lg mb-4">
          El traductor abre una puerta para explorar vocabulario, expresiones y equivalencias entre español y ódami.
        </p>
        <a href="traductor.php" class="inline-flex items-center text-textil font-semibold hover:underline">Ir al traductor</a>
      </article>
    </div>
  </section>

  <!-- SE DESACTIVO DEBIDO A LA FALTA DE IMAGENES
  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-14 sm:pb-16 lg:pb-20">
    <div class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10 grid lg:grid-cols-[0.95fr_1.05fr] gap-8 lg:gap-10 items-center">
      <div>
        <span class="inline-flex items-center gap-2 text-sm font-semibold text-textil bg-tierra rounded-full px-4 py-2 mb-5">🖼️ Galería principal</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Una narrativa visual</h2>
        <p class="text-base sm:text-lg leading-relaxed mb-4">
          Aqui se pueden agregar mas imagenes.
        </p>
        <p class="text-cafe/80 leading-relaxed">
          Aqui se pueden agregar mas imagenes.
        </p>
      </div>
      <div class="grid sm:grid-cols-2 gap-4">
        <div class="aspect-[4/3] rounded-[1.5rem] bg-tierra border-2 border-dashed border-textil/20 flex items-center justify-center text-center p-5">
          <div>
            <p class="text-xs uppercase tracking-[0.2em] text-textil/70 mb-2">Imagen</p>
          </div>
        </div>
        <div class="aspect-[4/3] rounded-[1.5rem] bg-tierra border-2 border-dashed border-textil/20 flex items-center justify-center text-center p-5">
          <div>
            <p class="text-xs uppercase tracking-[0.2em] text-textil/70 mb-2">Imagen</p>
          </div>
        </div>
        <div class="aspect-[4/3] rounded-[1.5rem] bg-tierra border-2 border-dashed border-textil/20 flex items-center justify-center text-center p-5">
          <div>
            <p class="text-xs uppercase tracking-[0.2em] text-textil/70 mb-2">Imagen</p>
          </div>
        </div>
        <div class="aspect-[4/3] rounded-[1.5rem] bg-tierra border-2 border-dashed border-textil/20 flex items-center justify-center text-center p-5">
          <div>
            <p class="text-xs uppercase tracking-[0.2em] text-textil/70 mb-2">Imagen</p>
          </div>
        </div>
      </div>
    </div>
  </section>
-->
</main>
<?php include 'includes/footer.php'; ?>
