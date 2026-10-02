<?php
$title = 'Educación y tecnología | Ódami del Norte';
$pageDescription = 'Educación bilingüe, transmisión familiar del idioma y herramientas digitales para fortalecer la lengua y la memoria cultural.';
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
          <span class="inline-flex items-center gap-2 bg-white/15 rounded-full px-4 py-2 text-sm mb-5">📚 Educación, lengua y herramientas digitales</span>
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">Educación y tecnología</h1>
          <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-2xl mb-8">
            <?= e($siteData['educacion']['intro']); ?> Entre la enseñanza formal, la transmisión familiar y las nuevas herramientas digitales, la educación abre caminos para fortalecer la lengua y la cultura.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="traductor.php" class="bg-white text-textil font-bold w-full sm:w-auto text-center px-6 py-3 rounded-full hover:scale-105 transition">Ver traductor</a>
            <a href="#aprendizaje" class="border border-white w-full sm:w-auto text-center px-6 py-3 rounded-full hover:bg-white hover:text-textil transition">Explorar contenido</a>
          </div>
        </div>

        <div class="grid gap-4 sm:gap-5">
          <div class="bg-white/10 border border-white/15 rounded-[2rem] p-4 sm:p-6 shadow-suave backdrop-blur-sm">
            
            <div class="aspect-[4/3] rounded-[1.5rem] overflow-hidden">
              <img 
                src="assets/img/educacion-hero.jpg" 
                alt="Niñas de la cultura Odami del norte en un salon de clases"
                class="w-full h-full object-cover"
              >
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="aprendizaje" class="max-w-7xl mx-auto px-4 sm:px-6 py-12 sm:py-16">
    <div class="grid lg:grid-cols-2 gap-6 lg:gap-8 mb-12">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8">
        <div class="flex items-start gap-4 mb-4">
          <div class="w-14 h-14 rounded-2xl bg-cielo/15 flex items-center justify-center text-2xl shrink-0">🏫</div>
          <div>
            <h2 class="text-2xl font-bold text-textil mb-2">Educación bilingüe intercultural</h2>
            <p class="text-cafe/85 leading-relaxed">
              En distintas comunidades se han impulsado modelos que buscan integrar español y ódami en el proceso de enseñanza. Este enfoque representa un paso importante para reconocer la diversidad lingüística, fortalecer la identidad cultural y acercar la educación formal a la realidad comunitaria.
            </p>
          </div>
        </div>
        <p class="text-cafe/80 leading-relaxed">
          Sin embargo, en la práctica el español suele ocupar el lugar principal dentro del aula. Por ello, el reto no es solo incluir la lengua indígena como contenido, sino convertirla en una presencia cotidiana, activa y significativa dentro de la experiencia educativa.
        </p>
      </article>

      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8">
        <div class="flex items-start gap-4 mb-4">
          <div class="w-14 h-14 rounded-2xl bg-maiz/20 flex items-center justify-center text-2xl shrink-0">⚠️</div>
          <div>
            <h2 class="text-2xl font-bold text-textil mb-2">Desafíos estructurales</h2>
            <p class="text-cafe/85 leading-relaxed">
              El acceso desigual a infraestructura, materiales actualizados, conectividad y docentes bilingües condiciona el alcance de la educación en muchas comunidades. Estas brechas no solo afectan el aprendizaje escolar, sino también las posibilidades de desarrollar recursos propios en lengua ódami.
            </p>
          </div>
        </div>
        <div class="grid sm:grid-cols-2 gap-3 mt-5">
          <div class="rounded-2xl bg-tierra p-4">
            <p class="font-semibold text-sierra">🔌 Infraestructura</p>
            <p class="text-sm text-cafe/80 mt-1">Escuelas con recursos limitados y acceso irregular a servicios básicos.</p>
          </div>
          <div class="rounded-2xl bg-tierra p-4">
            <p class="font-semibold text-sierra">👩‍🏫 Recursos humanos</p>
            <p class="text-sm text-cafe/80 mt-1">Escasez de docentes bilingües y capacitación especializada.</p>
          </div>
        </div>
      </article>
    </div>

    <div class="grid xl:grid-cols-[1.2fr_.8fr] gap-6 lg:gap-8 items-stretch mb-12">
      <section class="bg-gradient-to-br from-textil to-terracota text-white rounded-[2rem] p-6 sm:p-8 shadow-suave">
        <div class="max-w-3xl">
          <span class="inline-flex items-center gap-2 bg-white/15 rounded-full px-4 py-2 text-sm mb-4">👨‍👩‍👧‍👦 Transmisión familiar</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold mb-4">La lengua también se aprende en casa</h2>
          <p class="text-white/90 leading-relaxed mb-5">
            En el contexto Ódami, la educación va más allá de la escuela. La familia y la convivencia cotidiana siguen siendo espacios decisivos para escuchar, practicar y conservar la lengua. Padres, madres, abuelos y ancianos participan en una transmisión oral que mantiene un vínculo directo con la memoria, las costumbres y la vida comunitaria.
          </p>
          <p class="text-white/85 leading-relaxed">
            Cuando la lengua se comparte en casa, no solo se enseñan palabras: también se transmiten maneras de nombrar el territorio, de entender la comunidad y de relacionarse con el mundo.
          </p>
        </div>
      </section>

      <aside class="bg-white rounded-[2rem] shadow-suave p-5 sm:p-6">
        <div class="aspect-[4/3] rounded-[1.5rem] overflow-hidden">
          <img 
            src="assets/img/educacion-lengua.jpg" 
            alt="Niños de la cultura Odami en un salon de clases"
            class="w-full h-full object-cover"
          >
        </div>
      </aside>
    </div>

    <section class="mb-12">
      <div class="text-center max-w-3xl mx-auto mb-8">
        <span class="inline-flex items-center gap-2 bg-sierra/10 text-sierra rounded-full px-4 py-2 text-sm mb-4">🌱 Caminos posibles</span>
        <h2 class="text-3xl sm:text-4xl font-extrabold text-textil mb-4">Tecnología con sentido cultural</h2>
        <p class="text-cafe/85 leading-relaxed">
          Las herramientas digitales pueden convertirse en aliadas cuando se diseñan con respeto, contexto y propósito. Más que sustituir el aprendizaje comunitario, pueden amplificarlo.
        </p>
      </div>

      <div class="grid md:grid-cols-3 gap-5 sm:gap-6">
        <article class="bg-white rounded-3xl shadow-suave p-6 sm:p-7">
          <p class="text-3xl mb-3">📱</p>
          <h3 class="text-xl font-bold text-textil mb-3">Acceso y consulta</h3>
          <p class="text-cafe/80 leading-relaxed">
            Recursos digitales, glosarios y traductores pueden abrir nuevas formas de acercarse a la lengua desde distintos contextos.
          </p>
        </article>
        <article class="bg-white rounded-3xl shadow-suave p-6 sm:p-7">
          <p class="text-3xl mb-3">🧠</p>
          <h3 class="text-xl font-bold text-textil mb-3">Aprendizaje autónomo</h3>
          <p class="text-cafe/80 leading-relaxed">
            Plataformas y materiales interactivos pueden apoyar procesos personales de práctica, repaso y descubrimiento.
          </p>
        </article>
        <article class="bg-white rounded-3xl shadow-suave p-6 sm:p-7">
          <p class="text-3xl mb-3">🤝</p>
          <h3 class="text-xl font-bold text-textil mb-3">Fortalecimiento lingüístico</h3>
          <p class="text-cafe/80 leading-relaxed">
            Su mayor valor aparece cuando se acompañan de validación comunitaria y del conocimiento de hablantes y mayores.
          </p>
        </article>
      </div>
    </section>

    <section class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
      <div class="grid lg:grid-cols-[1.15fr_.85fr] gap-8 items-center">
        <div>
          <span class="inline-flex items-center gap-2 bg-textil/10 text-textil rounded-full px-4 py-2 text-sm mb-4">🔎 Recurso del sitio</span>
          <h2 class="text-3xl sm:text-4xl font-extrabold text-textil mb-4">Un traductor como punto de entrada</h2>
          <p class="text-cafe/85 leading-relaxed mb-4">
            El traductor del sitio puede funcionar como una herramienta inicial de consulta y acercamiento. Bien utilizado, puede despertar curiosidad, facilitar primeras búsquedas y apoyar el aprendizaje cotidiano.
          </p>
          <p class="text-cafe/80 leading-relaxed mb-6">
            Su valor crece cuando se entiende como parte de un ecosistema más amplio: materiales educativos, memoria familiar, acompañamiento lingüístico y participación comunitaria.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="traductor.php" class="bg-textil text-white font-semibold px-6 py-3 rounded-full hover:scale-105 transition">Ir al traductor</a>
            <a href="comunidad.php" class="border border-sierra text-sierra font-semibold px-6 py-3 rounded-full hover:bg-sierra hover:text-white transition">Ver comunidad</a>
          </div>
        </div>

        <div class="rounded-[1.75rem] bg-gradient-to-br from-maiz/15 via-white to-cielo/15 p-5 sm:p-6 border border-cafe/10">
          <div class="space-y-4">
            <div class="bg-white rounded-2xl p-4 shadow-sm">
              <p class="font-semibold text-sierra">✨ Educación formal</p>
              <p class="text-sm text-cafe/75 mt-1">Aporta estructura, continuidad y acceso a materiales.</p>
            </div>
            <div class="bg-white rounded-2xl p-4 shadow-sm">
              <p class="font-semibold text-sierra">🗣️ Educación cotidiana</p>
              <p class="text-sm text-cafe/75 mt-1">Mantiene viva la lengua en la práctica y la convivencia.</p>
            </div>
            <div class="bg-white rounded-2xl p-4 shadow-sm">
              <p class="font-semibold text-sierra">💻 Tecnología</p>
              <p class="text-sm text-cafe/75 mt-1">Amplía posibilidades de consulta, difusión y aprendizaje.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
