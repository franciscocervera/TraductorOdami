const inputText = document.getElementById('inputText');
const outputText = document.getElementById('outputText');
const direction = document.getElementById('direction');
const translateBtn = document.getElementById('translateBtn');
const swapBtn = document.getElementById('swapBtn');
const statusMessage = document.getElementById('statusMessage');

async function translateText() {
  const text = inputText.value.trim();
  const selectedDirection = direction.value;

  if (!text) {
    outputText.value = '';
    statusMessage.textContent = 'Escribe un texto para traducir.';
    return;
  }

  outputText.value = 'Traduciendo...';
  statusMessage.textContent = 'Consultando la API...';

  try {
    const response = await fetch('api/traducir.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/json'
      },
      body: JSON.stringify({
        text,
        direction: selectedDirection
      })
    });

    const data = await response.json();

    if (!response.ok) {
      throw new Error(data.translation || 'No se pudo completar la traducción.');
    }

    outputText.value = data.translation || '';
    statusMessage.textContent = 'Traducción completada.';
  } catch (error) {
    outputText.value = '';
    statusMessage.textContent = error.message || 'Ocurrió un error al traducir.';
  }
}

if (translateBtn) {
  translateBtn.addEventListener('click', translateText);
}

if (swapBtn) {
  swapBtn.addEventListener('click', () => {
    direction.value = direction.value === 'es-odami' ? 'odami-es' : 'es-odami';
  });
}

document.querySelectorAll('.example-btn').forEach((button) => {
  button.addEventListener('click', () => {
    inputText.value = button.dataset.text || '';
    direction.value = button.dataset.direction || 'es-odami';
    translateText();
  });
});
