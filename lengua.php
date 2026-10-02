<?php
$title = 'Lengua | Ódami del Norte';
$pageDescription = 'La lengua ódami como memoria viva, identidad comunitaria y herencia cultural del norte de la Sierra Tarahumara.';
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
          <span class="inline-flex items-center gap-2 bg-white/15 rounded-full px-4 py-2 text-sm mb-5">🗣️ Lengua, identidad y memoria</span>
          <h1 class="text-3xl sm:text-5xl md:text-6xl font-extrabold leading-tight mb-6">Lengua Ódami</h1>
          <p class="text-base sm:text-lg md:text-xl text-white/90 max-w-2xl mb-8">
            <?= e($siteData['lengua']['intro']); ?> La lengua ódami guarda formas de nombrar el territorio, la familia, la naturaleza y la vida comunitaria.
          </p>
          <div class="flex flex-wrap gap-4">
            <a href="traductor.php" class="bg-white text-textil font-bold w-full sm:w-auto text-center px-6 py-3 rounded-full hover:scale-105 transition">Probar traductor</a>
            <a href="#vocabulario" class="border border-white w-full sm:w-auto text-center px-6 py-3 rounded-full hover:bg-white hover:text-textil transition">Ver vocabulario</a>
          </div>
        </div>

        <div class="grid gap-4 sm:gap-5">
          <div class="bg-white/10 border border-white/15 rounded-[2rem] p-4 sm:p-6 shadow-suave backdrop-blur-sm">
            
            <img 
              src="assets/img/lengua-hero.jpg" 
              alt="Letrero en lengua Ódami del norte colocado frente a una escuela rural, con niños y paisaje comunitario al fondo."
              class="aspect-[4/3] w-full object-cover rounded-[1.5rem] border border-white/30"
            >

          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 py-10 sm:py-16">
    <div class="grid lg:grid-cols-[1.1fr_0.9fr] gap-6 sm:gap-8 items-stretch">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8">
        <span class="inline-flex items-center gap-2 bg-sierra/10 text-sierra rounded-full px-4 py-2 text-sm mb-4">🌿 Herencia lingüística</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">Una forma de habitar y nombrar el mundo</h2>
        <p class="mb-4 text-base sm:text-lg">
          La lengua ódami forma parte de la familia yutoazteca y posee rasgos fonéticos, gramaticales y léxicos propios. Su riqueza no se limita al vocabulario: en ella viven maneras particulares de comprender el territorio, la comunidad y la naturaleza.
        </p>
        <p class="text-base sm:text-lg">
          Cada palabra conserva memoria cultural. Por eso, hablar ódami es también sostener una relación viva con la historia, con los mayores y con los saberes que circulan en la vida cotidiana.
        </p>
      </article>

      <article class="bg-gradient-to-br from-maiz/30 to-terracota/20 rounded-[2rem] shadow-suave min-h-[320px] border border-white/40 overflow-hidden">
        <img 
          src="assets/img/lengua-herencia.jpg" 
          alt="Mujeres y niñas de la comunidad Ódami del norte reunidas frente a una escuela rural con dibujos escolares expuestos en la pared."
          class="w-full h-full object-cover"
        >
      </article>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-16">
    <div class="grid md:grid-cols-2 xl:grid-cols-4 gap-5 sm:gap-6">
      <article class="bg-white rounded-3xl shadow-suave p-6 sm:p-7">
        <div class="text-3xl mb-4">🧬</div>
        <h3 class="text-xl font-bold text-textil mb-3">Familia lingüística</h3>
        <p>El ódami pertenece a la familia yutoazteca y se distingue por rasgos propios que le dan una identidad lingüística particular dentro del norte de México.</p>
      </article>

      <article class="bg-white rounded-3xl shadow-suave p-6 sm:p-7">
        <div class="text-3xl mb-4">👵</div>
        <h3 class="text-xl font-bold text-textil mb-3">Transmisión oral</h3>
        <p>Madres, padres, abuelos y ancianos tienen un papel decisivo en la enseñanza cotidiana del idioma, especialmente a través de la convivencia y la palabra compartida.</p>
      </article>

      <article class="bg-white rounded-3xl shadow-suave p-6 sm:p-7">
        <div class="text-3xl mb-4">📚</div>
        <h3 class="text-xl font-bold text-textil mb-3">Aprendizaje y escuela</h3>
        <p>La educación bilingüe puede fortalecer la lengua cuando se acompaña de materiales pertinentes, docentes capacitados y una presencia real del idioma en el aula.</p>
      </article>

      <article class="bg-white rounded-3xl shadow-suave p-6 sm:p-7">
        <div class="text-3xl mb-4">✨</div>
        <h3 class="text-xl font-bold text-textil mb-3">Preservación</h3>
        <p>Frente al desplazamiento del español y los cambios generacionales, preservar el ódami implica crear espacios de uso, registro, escucha y difusión.</p>
      </article>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-16">
    <div class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8 lg:p-10">
      <div>
        <span class="inline-flex items-center gap-2 bg-textil/10 text-textil rounded-full px-4 py-2 text-sm mb-4">
          🫶 Comunidad y continuidad
        </span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-4">
          La lengua se fortalece cuando se usa
        </h2>
        <p class="text-base sm:text-lg mb-4">
          La continuidad del ódami depende de mucho más que un registro escrito. Requiere conversación, escucha, memoria familiar, presencia comunitaria y herramientas que acompañen su aprendizaje sin desligarla de su contexto cultural.
        </p>
        <p class="text-base sm:text-lg mb-4">
          Los proyectos digitales pueden aportar nuevas formas de acceso, pero su valor crece cuando se articulan con hablantes, materiales confiables y procesos comunitarios de validación.
        </p>
        <a href="traductor.php" class="inline-flex items-center gap-2 text-textil font-semibold hover:underline">
          Ir al traductor <span>→</span>
        </a>
      </div>
    </div>
  </section>

  <section id="vocabulario" class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-16">
    <div class="bg-white rounded-[2rem] shadow-suave overflow-hidden">
      <div class="px-6 sm:px-8 pt-6 sm:pt-8 pb-4 border-b border-cafe/10">
        <span class="inline-flex items-center gap-2 bg-maiz/20 text-cafe rounded-full px-4 py-2 text-sm mb-4">📝 Vocabulario base</span>
        <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-3">Primer acercamiento al idioma</h2>
        <p class="text-base sm:text-lg max-w-3xl">Una selección inicial para presentar la lengua de forma clara y visual.</p>
      </div>

      <div class="overflow-x-auto">
        <table class="min-w-full text-left">
          <thead class="bg-tierra/70">
            <tr class="border-b border-cafe/10">
              <th class="py-4 px-6 sm:px-8 font-bold text-cafe">Categoría</th>
              <th class="py-4 px-6 sm:px-8 font-bold text-cafe">Español</th>
              <th class="py-4 px-6 sm:px-8 font-bold text-cafe">Ódami</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($siteData['lengua']['vocabulario'] as $item): ?>
              <tr class="border-b border-cafe/10 hover:bg-tierra/30 transition-colors">
                <td class="py-4 px-6 sm:px-8 font-medium"><?= e($item['categoria']); ?></td>
                <td class="py-4 px-6 sm:px-8"><?= e($item['es']); ?></td>
                <td class="py-4 px-6 sm:px-8 text-textil font-semibold"><?= e($item['odami']); ?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-12 sm:pb-20">
    <div class="grid lg:grid-cols-2 gap-5 sm:gap-6">
      <article class="bg-white rounded-[2rem] shadow-suave p-6 sm:p-8">
        <span class="text-3xl mb-4 block">🌱</span>
        <h2 class="text-2xl font-extrabold text-sierra mb-4">Una lengua que mira al futuro</h2>
        <p class="mb-4">El uso de recursos digitales puede facilitar nuevas experiencias de aprendizaje, consulta y difusión para niñas, niños, jóvenes y personas interesadas en la cultura ódami.</p>
        <a href="educacion.php" class="inline-flex items-center gap-2 text-textil font-semibold hover:underline">Ver educación y tecnología <span>→</span></a>
      </article>

      <article class="bg-gradient-to-r from-textil to-terracota text-white rounded-[2rem] shadow-suave p-6 sm:p-8">
        <span class="text-3xl mb-4 block">🔁</span>
        <h2 class="text-2xl font-extrabold mb-4">Explora y sigue aprendiendo</h2>
        <p class="text-white/90 mb-4">Comprende mejor el valor cultural del idioma y su vínculo con la historia, la comunidad y el territorio.</p>
        <div class="flex flex-wrap gap-3">
          <a href="historia.php" class="bg-white text-textil font-semibold px-5 py-3 rounded-full hover:scale-105 transition">Ver historia</a>
          <a href="cultura.php" class="border border-white px-5 py-3 rounded-full hover:bg-white hover:text-textil transition">Ver cultura</a>
        </div>
      </article>
    </div>
  </section>
</main>

<?php include 'includes/footer.php'; ?>
