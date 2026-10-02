<?php
$title = 'Acerca del proyecto | Ódami del Norte';
$pageDescription = 'Conoce el propósito del sitio, su visión cultural y el valor de preservar la lengua y la memoria del pueblo Ódami del Norte.';
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
          <span class="inline-flex items-center gap-2 bg-white/15 rounded-full px-4 py-2 text-sm mb-5">✨ Proyecto cultural y plataforma digital</span>
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">Acerca de este sitio</h1>
          <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-2xl mb-8">
            Este proyecto propone una web cultural e informativa centrada en el pueblo Ódami del Norte, articulando contenido visual, memoria lingüística y una herramienta tecnológica para la consulta básica.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="traductor.php" class="bg-white text-textil font-bold w-full sm:w-auto text-center px-6 py-3 rounded-full hover:scale-105 transition">Ir al traductor</a>
            <a href="index.php" class="border border-white w-full sm:w-auto text-center px-6 py-3 rounded-full hover:bg-white hover:text-textil transition">Volver al inicio</a>
          </div>
        </div>

        <div class="grid gap-4 sm:gap-5">
          <div class="bg-white/10 border border-white/15 rounded-[2rem] p-4 sm:p-6 shadow-suave backdrop-blur-sm">
            <div class="aspect-[4/3] rounded-[1.5rem] overflow-hidden">
              <img 
                src="assets/img/acerca-hero.jpg" 
                alt="Integrantes de la comunidad Ódami del norte realizando una danza ceremonial frente a una iglesia durante una festividad tradicional."
                class="w-full h-full object-cover"
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-14 md:py-16">
    <div class="grid grid-cols-1 gap-6 sm:gap-8 items-stretch">
      <article class="bg-white rounded-3xl shadow-suave p-6 sm:p-8 md:p-10">
        <span class="inline-flex items-center gap-2 bg-sierra/10 text-sierra rounded-full px-4 py-2 text-sm mb-5">
          <span>✨</span>
          <span>Una web pensada para perdurar</span>
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Una plataforma que une memoria, identidad y tecnología</h2>
        <p class="text-base sm:text-lg mb-4">
          Más que un sitio informativo, este proyecto busca convertirse en un punto de encuentro entre la memoria comunitaria, la enseñanza intercultural y las herramientas digitales contemporáneas.
        </p>
        <p class="text-base sm:text-lg mb-4">
          La estructura del sitio permite recorrer distintos temas esenciales, desde la historia y la lengua hasta la cosmovisión, la organización social, la educación y la vida cotidiana. Cada sección aporta una mirada complementaria sobre la continuidad cultural del pueblo Ódami del Norte.
        </p>
        <p class="text-base sm:text-lg text-cafe/80">
          El traductor incluido en la web amplía esa experiencia al ofrecer una puerta de entrada práctica para la consulta y el aprendizaje, integrando tecnología con un enfoque sensible al valor cultural de la lengua.
        </p>
      </article>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-14 md:pb-16">
    <div class="text-center max-w-3xl mx-auto mb-8 sm:mb-10">
      <span class="inline-flex items-center gap-2 bg-textil/10 text-textil rounded-full px-4 py-2 text-sm mb-4">
        <span>🧩</span>
        <span>Ejes del proyecto</span>
      </span>
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-textil mb-4">Un sitio construido desde varias dimensiones culturales</h2>
      <p class="text-base sm:text-lg text-cafe/80">
        Cada apartado contribuye a mostrar una visión amplia y conectada del pueblo Ódami del Norte, integrando conocimiento histórico, lengua, vida comunitaria y herramientas contemporáneas.
      </p>
    </div>

    <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5 sm:gap-6">
      <article class="bg-white rounded-3xl shadow-suave p-6">
        <div class="text-3xl mb-4">📜</div>
        <h3 class="text-xl font-bold text-textil mb-3">Historia y territorio</h3>
        <p class="text-cafe/80">La memoria histórica permite comprender la permanencia cultural y la relación profunda con la Sierra Tarahumara.</p>
      </article>

      <article class="bg-white rounded-3xl shadow-suave p-6">
        <div class="text-3xl mb-4">🗣️</div>
        <h3 class="text-xl font-bold text-textil mb-3">Lengua e identidad</h3>
        <p class="text-cafe/80">La lengua ódami expresa conocimientos, vínculos familiares y formas propias de nombrar y entender el mundo.</p>
      </article>

      <article class="bg-white rounded-3xl shadow-suave p-6">
        <div class="text-3xl mb-4">🌿</div>
        <h3 class="text-xl font-bold text-textil mb-3">Cultura y cosmovisión</h3>
        <p class="text-cafe/80">La espiritualidad, los rituales y la relación con la naturaleza forman parte esencial de la vida comunitaria.</p>
      </article>

      <article class="bg-white rounded-3xl shadow-suave p-6">
        <div class="text-3xl mb-4">💻</div>
        <h3 class="text-xl font-bold text-textil mb-3">Tecnología y proyección</h3>
        <p class="text-cafe/80">Las herramientas digitales pueden apoyar procesos de difusión, aprendizaje y consulta con una mirada respetuosa y útil.</p>
      </article>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-16">
    <div class="bg-gradient-to-br from-cafe to-sierra text-white rounded-3xl shadow-suave p-6 sm:p-8 md:p-10">
      <div class="max-w-3xl">
        <span class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 text-sm mb-5">
          <span>🤝</span>
          <span>Compromiso cultural</span>
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold mb-4">
          Un proyecto que valora el conocimiento comunitario
        </h2>
        <p class="text-white/85 text-base sm:text-lg mb-6">
          La presencia digital de una cultura no solo depende de la tecnología, sino también del respeto por su lengua, su historia y las voces que la sostienen en la vida cotidiana.
        </p>
        <div class="flex flex-wrap gap-3 sm:gap-4">
          <a href="historia.php" class="bg-white text-sierra font-bold px-5 py-3 rounded-full hover:scale-105 transition w-full sm:w-auto text-center">
            Ver historia
          </a>
          <a href="comunidad.php" class="border border-white/30 text-white font-semibold px-5 py-3 rounded-full hover:bg-white hover:text-sierra transition w-full sm:w-auto text-center">
            Ver comunidad
          </a>
        </div>
      </div>

    </div>

  </section>
</main>

<?php include 'includes/footer.php'; ?>
