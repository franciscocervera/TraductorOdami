<?php
$title = 'Economía y vida cotidiana | Ódami del Norte';
$pageDescription = 'Agricultura, ganadería y formas de vida cotidiana en la cultura Ódami del Norte.';
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
          <span class="inline-flex items-center gap-2 bg-white/15 rounded-full px-4 py-2 text-sm mb-5">🌽 Trabajo, territorio y vida cotidiana</span>
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">Economía y vida cotidiana</h1>
          <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-2xl mb-8">
            <?= e($siteData['economia']['intro']); ?> El trabajo con la tierra, la milpa y la ganadería forman parte de una economía ligada al autoconsumo, la experiencia y el territorio.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="#caracteristicas" class="bg-white text-textil font-bold w-full sm:w-auto text-center px-6 py-3 rounded-full hover:scale-105 transition">Ver características</a>
            <a href="cultura.php" class="border border-white w-full sm:w-auto text-center px-6 py-3 rounded-full hover:bg-white hover:text-textil transition">Ir a cultura</a>
          </div>
        </div>

        <div class="grid gap-4 sm:gap-5">
          <div class="bg-white/10 border border-white/15 rounded-[2rem] p-4 sm:p-6 shadow-suave backdrop-blur-sm">
            <div class="aspect-[4/3] rounded-[1.5rem] overflow-hidden">
              <img 
                src="assets/img/economia-hero.jpg" 
                alt="Personas de la cultura Odami en vestimenta tradicional"
                class="w-full h-full object-cover"
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="caracteristicas" class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-16">
    <div class="grid lg:grid-cols-[1.1fr_.9fr] gap-6 sm:gap-8 items-stretch">
      <article class="bg-white rounded-[2rem] shadow-suave p-7 sm:p-9">
        <span class="inline-flex items-center gap-2 bg-sierra/10 text-sierra rounded-full px-4 py-2 text-sm mb-5">🌱 Una economía ligada al territorio</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-textil mb-5">La vida cotidiana nace del vínculo con la tierra</h2>
        <p class="text-lg leading-8 mb-4 text-cafe/90">
          En las comunidades Ódami del Norte, el trabajo cotidiano mantiene una relación profunda con el entorno. Sembrar, cuidar animales, organizar el esfuerzo familiar y aprovechar los ciclos naturales forman parte de una vida comunitaria donde el sustento material también expresa continuidad cultural.
        </p>
        <p class="text-lg leading-8 text-cafe/80">
          La economía no se entiende solo desde la producción, sino desde la permanencia en el territorio, la cooperación entre generaciones y el conocimiento acumulado sobre la sierra, las lluvias y los tiempos de cultivo.
        </p>
      </article>

      <aside class="bg-gradient-to-br from-maiz/30 to-terracota/20 rounded-[2rem] p-7 sm:p-9 border border-maiz/20">
        <h3 class="text-2xl font-bold text-textil mb-5">Aspectos clave</h3>
        <div class="space-y-4">
          <div class="bg-white/80 rounded-2xl p-4">
            <p class="font-semibold text-sierra mb-1">🌾 Producción para el hogar</p>
            <p class="text-sm text-cafe/80">Buena parte del trabajo agrícola responde primero a las necesidades familiares y comunitarias.</p>
          </div>
          <div class="bg-white/80 rounded-2xl p-4">
            <p class="font-semibold text-sierra mb-1">🌧️ Dependencia del temporal</p>
            <p class="text-sm text-cafe/80">Las lluvias siguen marcando el ritmo productivo y las posibilidades de cada ciclo agrícola.</p>
          </div>
          <div class="bg-white/80 rounded-2xl p-4">
            <p class="font-semibold text-sierra mb-1">🧺 Trabajo compartido</p>
            <p class="text-sm text-cafe/80">Las tareas diarias suelen sostenerse en la colaboración familiar y en los vínculos comunitarios.</p>
          </div>
        </div>
      </aside>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-12 sm:pb-16">
    <article class="bg-white rounded-[2rem] shadow-suave p-7 sm:p-9">
      <div class="grid lg:grid-cols-2 gap-6 sm:gap-8 items-center">
        <div class="order-1 lg:order-2 bg-white/60 rounded-[2rem] p-3 sm:p-4">
          <div class="aspect-[4/3] rounded-[1.5rem] overflow-hidden">
            <img 
              src="assets/img/economia-agricultura.jpg" 
              alt="Agricultura en la comunidad Ódami"
              class="w-full h-full object-cover"
            >
          </div>
        </div>
        <div class="order-2 lg:order-1">
          <div class="flex items-start gap-4 mb-5">
            <div class="w-14 h-14 rounded-2xl bg-sierra/15 flex items-center justify-center text-2xl shrink-0">🌽</div>
            <div>
              <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-2">
                Agricultura de subsistencia
              </h2>
              <p class="text-cafe/75">
                La milpa tradicional sostiene parte importante de la alimentación y de la memoria agrícola.
              </p>
            </div>
          </div>
          <p class="text-lg leading-8 text-cafe/90 mb-4">
            El maíz, el frijol, la calabaza y el chile ocupan un lugar central en una economía orientada al autoconsumo. Su cultivo refleja saberes heredados, adaptación al entorno serrano y una lógica de aprovechamiento integral del suelo.
          </p>
          <p class="text-lg leading-8 text-cafe/80">
            La milpa tradicional permite combinar cultivos, reducir riesgos ante pérdidas y conservar prácticas agrícolas que siguen siendo parte esencial de la vida cotidiana.
          </p>
        </div>
      </div>
    </article>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-12 sm:pb-16">
    <article class="bg-white rounded-[2rem] shadow-suave p-7 sm:p-9">
      <div class="grid lg:grid-cols-2 gap-6 sm:gap-8 items-center">
        <div class="order-2 lg:order-1 bg-white/60 rounded-[2rem] p-3 sm:p-4">
          <div class="aspect-[4/3] rounded-[1.5rem] overflow-hidden">
            <img 
              src="assets/img/economia-ganaderia.jpg" 
              alt="Ganadería en la comunidad Ódami"
              class="w-full h-full object-cover"
            >
          </div>
        </div>
        <div class="order-1 lg:order-2">
          <div class="flex items-start gap-4 mb-5">
            <div class="w-14 h-14 rounded-2xl bg-sierra/15 flex items-center justify-center text-2xl shrink-0">🐄</div>
            <div>
              <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-2">Ganadería</h2>
              <p class="text-cafe/75">Una actividad complementaria que fortalece la economía familiar.</p>
            </div>
          </div>
          <p class="text-lg leading-8 text-cafe/90 mb-4">
            La cría de ganado bovino, caprino y ovino funciona como complemento del trabajo agrícola y como un recurso valioso en momentos de necesidad. También se relaciona con el consumo propio y con posibles intercambios o ventas en ámbitos locales.
          </p>
          <p class="text-lg leading-8 text-cafe/80">
            Más allá de su dimensión productiva, la ganadería se integra al ritmo cotidiano de las familias y a un manejo del entorno basado en experiencia, observación y continuidad generacional.
          </p>
        </div>
      </div>
    </article>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-12 sm:pb-16">
    <div class="bg-white rounded-[2rem] shadow-suave p-7 sm:p-9">
      <div class="max-w-3xl mb-8">
        <span class="inline-flex items-center gap-2 bg-textil/10 text-textil rounded-full px-4 py-2 text-sm mb-4">📌 Rasgos generales</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-textil mb-4">Características de la economía cotidiana</h2>
        <p class="text-lg text-cafe/80 leading-8">Estas dinámicas económicas están atravesadas por la relación con la naturaleza, el conocimiento comunitario y la búsqueda constante de equilibrio entre subsistencia, cuidado del territorio y continuidad cultural.</p>
      </div>

      <div class="grid sm:grid-cols-2 xl:grid-cols-4 gap-5 sm:gap-6">
        <article class="rounded-3xl bg-arena p-6 border border-cafe/5">
          <div class="text-3xl mb-4">🏡</div>
          <h3 class="text-xl font-bold text-sierra mb-3">Autoconsumo</h3>
          <p class="text-cafe/80">La producción alimentaria se orienta primero al hogar y al bienestar de la familia.</p>
        </article>
        <article class="rounded-3xl bg-arena p-6 border border-cafe/5">
          <div class="text-3xl mb-4">🌧️</div>
          <h3 class="text-xl font-bold text-sierra mb-3">Temporal</h3>
          <p class="text-cafe/80">Las lluvias condicionan el rendimiento de los cultivos y el ritmo del trabajo agrícola.</p>
        </article>
        <article class="rounded-3xl bg-arena p-6 border border-cafe/5">
          <div class="text-3xl mb-4">🛠️</div>
          <h3 class="text-xl font-bold text-sierra mb-3">Baja mecanización</h3>
          <p class="text-cafe/80">Predominan técnicas tradicionales, herramientas sencillas y recursos limitados.</p>
        </article>
        <article class="rounded-3xl bg-arena p-6 border border-cafe/5">
          <div class="text-3xl mb-4">⛰️</div>
          <h3 class="text-xl font-bold text-sierra mb-3">Relación con la tierra</h3>
          <p class="text-cafe/80">El trabajo productivo se conecta con el territorio, la memoria y el saber ecológico local.</p>
        </article>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-14 sm:pb-20">
    <div class="bg-gradient-to-r from-textil via-terracota to-maiz rounded-[2rem] p-8 sm:p-10 text-white">
      <div class="grid lg:grid-cols-[1.2fr_.8fr] gap-8 items-center">
        <div>
          <span class="inline-flex items-center gap-2 bg-white/10 rounded-full px-4 py-2 text-sm mb-5">🌿 Continuidad cultural</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold mb-4">Trabajar la tierra también es preservar conocimiento</h2>
          <p class="text-white/90 text-lg leading-8 max-w-3xl">
            En la economía cotidiana de los Ódami del Norte, producir alimentos, cuidar animales y adaptarse al entorno forman parte de una experiencia más amplia: vivir el territorio, sostener a la comunidad y transmitir formas de conocimiento que siguen presentes en la vida diaria.
          </p>
        </div>
        <div class="flex flex-col sm:flex-row lg:flex-col gap-4">
          <a href="comunidad.php" class="bg-white text-textil font-bold px-6 py-4 rounded-2xl text-center hover:scale-[1.02] transition">Ver comunidad</a>
          <a href="cultura.php" class="border border-white/35 font-bold px-6 py-4 rounded-2xl text-center hover:bg-white hover:text-textil transition">Explorar cultura</a>
        </div>
      </div>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
