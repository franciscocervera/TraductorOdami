<?php
$title = 'Traductor | Ódami del Norte';
$pageDescription = 'Traduce palabras y frases entre español y ódami mediante un traductor de consulta lingüística y educativa.';
include 'includes/config.php';
include 'includes/header.php';
include 'includes/navbar.php';
?>
<main>
  <section class="max-w-7xl mx-auto px-4 sm:px-6 pt-6 sm:pt-9 pb-10 sm:pb-12">
    <article class="bg-white rounded-[2rem] shadow-suave p-5 sm:p-7 lg:p-9">
      <div class="mb-6 sm:mb-8">
        <h1 class="text-3xl sm:text-4xl font-extrabold text-textil">Traductor español ↔ ódami</h1>
        <p class="text-cafe/75 mt-3 max-w-3xl">Escribe una palabra o frase, selecciona el idioma de origen y consulta su traducción.</p>
      </div>

      <div class="grid md:grid-cols-2 gap-5 sm:gap-6 mb-6">
        <div>
          <label for="inputText" class="block font-semibold mb-2 text-cafe">Texto de entrada</label>
          <textarea
            id="inputText"
            class="w-full border border-cafe/15 rounded-[1.5rem] p-4 h-52 sm:h-60 focus:outline-none focus:ring-2 focus:ring-textil/40 focus:border-textil resize-none"
            placeholder="Escribe aquí la palabra, frase o idea que quieres traducir..."
          ></textarea>
        </div>

        <div>
          <label for="outputText" class="block font-semibold mb-2 text-cafe">Resultado</label>
          <textarea
            id="outputText"
            class="w-full border border-cafe/15 rounded-[1.5rem] p-4 h-52 sm:h-60 bg-[#faf8f4] resize-none"
            readonly
            placeholder="Aquí aparecerá la traducción..."
          ></textarea>
        </div>
      </div>

      <div class="flex flex-col xl:flex-row xl:items-center gap-3 xl:gap-4 mb-5">
        <select id="direction" class="w-full xl:w-auto border border-cafe/15 rounded-2xl px-4 py-3 bg-white">
          <option value="es-odami">Español → Ódami</option>
          <option value="odami-es">Ódami → Español</option>
        </select>

        <div class="grid sm:grid-cols-2 xl:flex gap-3 w-full xl:w-auto">
          <button id="translateBtn" class="w-full xl:w-auto bg-textil text-white px-6 py-3 rounded-2xl font-bold hover:bg-terracota transition">
            Traducir
          </button>

          <button id="swapBtn" class="w-full xl:w-auto bg-maiz text-cafe px-6 py-3 rounded-2xl font-bold hover:opacity-90 transition">
            Intercambiar dirección
          </button>
        </div>
      </div>

      <div class="rounded-2xl bg-arena p-4 sm:p-5">
        <p id="statusMessage" class="text-sm text-cafe/80 leading-relaxed">
          Esta herramienta puede servir como apoyo inicial para la consulta lingüística. Para usos educativos, comunitarios o de preservación, es recomendable contrastar las traducciones con materiales confiables y con hablantes conocedores de la lengua.
        </p>
      </div>
    </article>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-10 sm:pb-16">
    <div class="mb-6 sm:mb-8">
      <span class="inline-block bg-sierra/10 text-sierra rounded-full px-4 py-2 text-sm mb-4">Explora con ejemplos</span>
      <h2 class="text-2xl sm:text-3xl font-extrabold text-textil mb-3">Frases de inicio</h2>
      <p class="text-base sm:text-lg max-w-3xl">
        Estas frases permiten probar la herramienta de manera inmediata y explorar distintos tipos de consulta.
      </p>
    </div>

    <div class="grid md:grid-cols-3 gap-5 sm:gap-6">
      <article class="bg-white rounded-[2rem] shadow-suave p-6">
        <div class="text-3xl mb-3">🌞</div>
        <h3 class="text-xl font-bold text-sierra mb-3">Saludo cotidiano</h3>
        <button class="example-btn text-left hover:text-textil transition font-medium" data-text="Buenos días" data-direction="es-odami">
          Buenos días
        </button>
      </article>

      <article class="bg-white rounded-[2rem] shadow-suave p-6">
        <div class="text-3xl mb-3">💬</div>
        <h3 class="text-xl font-bold text-sierra mb-3">Conversación básica</h3>
        <button class="example-btn text-left hover:text-textil transition font-medium" data-text="¿Cómo estás?" data-direction="es-odami">
          ¿Cómo estás?
        </button>
      </article>

      <article class="bg-white rounded-[2rem] shadow-suave p-6">
        <div class="text-3xl mb-3">🌎</div>
        <h3 class="text-xl font-bold text-sierra mb-3">Relación con la naturaleza</h3>
        <button class="example-btn text-left hover:text-textil transition font-medium" data-text="La tierra y el agua son importantes." data-direction="es-odami">
          La tierra y el agua son importantes.
        </button>
      </article>
    </div>
  </section>

  <section class="max-w-7xl mx-auto px-4 sm:px-6 pb-14 sm:pb-20">
    <div class="bg-gradient-to-r from-sierra to-cielo text-white rounded-[2rem] p-6 sm:p-8 lg:p-10">
      <div class="grid lg:grid-cols-2 gap-6 lg:gap-10 items-center">
        <div>
          <span class="inline-block bg-white/15 rounded-full px-4 py-2 text-sm mb-4">Lengua, memoria y futuro</span>
          <h2 class="text-2xl sm:text-3xl font-extrabold mb-4">Una herramienta para acercarse a la lengua ódami</h2>
          <p class="text-white/90 text-base sm:text-lg">
            Más que una función técnica, este traductor puede formar parte de una experiencia digital más amplia orientada a la valoración cultural, la curiosidad lingüística y el fortalecimiento de la memoria colectiva.
          </p>
        </div>

        <div class="bg-white/10 border border-white/15 rounded-[1.5rem] p-5 sm:p-6">
          <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
            <a href="lengua.php" class="bg-white/10 rounded-2xl p-4 hover:bg-white/15 transition">
              <div class="text-2xl mb-2">📚</div>
              <h3 class="font-bold mb-1">Lengua</h3>
              <p class="text-sm text-white/85">Profundiza en la historia y preservación del idioma.</p>
            </a>
            <a href="cultura.php" class="bg-white/10 rounded-2xl p-4 hover:bg-white/15 transition">
              <div class="text-2xl mb-2">🌿</div>
              <h3 class="font-bold mb-1">Cultura</h3>
              <p class="text-sm text-white/85">Explora cosmovisión, ritualidad y naturaleza.</p>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<script src="js/traductor.js"></script>
<?php include 'includes/footer.php'; ?>
