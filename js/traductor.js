const inputText = document.getElementById('inputText');
const outputText = document.getElementById('outputText');
const direction = document.getElementById('direction');
const translateBtn = document.getElementById('translateBtn');
const swapBtn = document.getElementById('swapBtn');
const statusMessage = document.getElementById('statusMessage');
const dictationBtn = document.getElementById('dictationBtn');
const dictationStatus = document.getElementById('dictationStatus');

const SpeechRecognitionClass = window.SpeechRecognition || window.webkitSpeechRecognition;
const MAX_DICTATION_MS = 45000;
const WAIT_FOR_SPEECH_MS = 12000;
const SILENCE_MS = 3500;
let activeSession = null;

async function translateText() {
  if (activeSession) {
    statusMessage.textContent = 'Detén el dictado antes de traducir.';
    return;
  }

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

function clearDictationTimers(session) {
  clearTimeout(session.maxTimer);
  clearTimeout(session.waitTimer);
  clearTimeout(session.silenceTimer);
}

function setDictationAppearance(listening) {
  dictationBtn.classList.toggle('is-listening', listening);
  dictationBtn.setAttribute('aria-pressed', String(listening));
  dictationBtn.setAttribute('aria-label', listening ? 'Detener dictado en español' : 'Iniciar dictado en español');
  dictationBtn.title = listening ? 'Detener dictado' : 'Dictar en español';
  dictationBtn.disabled = false;
  translateBtn.disabled = listening;
  translateBtn.classList.toggle('opacity-60', listening);
  translateBtn.classList.toggle('cursor-not-allowed', listening);
}

function dictationErrorMessage(error) {
  switch (error) {
    case 'not-allowed':
    case 'service-not-allowed':
      return 'No se pudo acceder al micrófono. Revisa los permisos de Chrome.';
    case 'audio-capture':
      return 'No se encontró un micrófono disponible.';
    case 'network':
      return 'No se pudo conectar al servicio de reconocimiento de voz. Revisa tu conexión.';
    case 'no-speech':
      return 'No se detectó voz. Presiona el micrófono para intentarlo de nuevo.';
    case 'language-not-supported':
      return 'El reconocimiento de español no está disponible en este navegador.';
    default:
      return 'No se pudo completar el dictado. Inténtalo de nuevo.';
  }
}

function finishDictation(session) {
  if (activeSession !== session) return;

  clearDictationTimers(session);
  activeSession = null;
  setDictationAppearance(false);

  if (direction.value !== 'es-odami') return;
  if (session.cancelled) {
    dictationStatus.textContent = session.reason === 'edited'
      ? 'Dictado detenido al editar el texto.'
      : 'Presiona el micrófono para dictar en español.';
  } else if (session.error) {
    dictationStatus.textContent = dictationErrorMessage(session.error);
  } else if (session.hasTranscript) {
    dictationStatus.textContent = 'Dictado finalizado. Revisa el texto antes de traducir.';
  } else {
    dictationStatus.textContent = 'No se detectó voz. Presiona el micrófono para intentarlo de nuevo.';
  }
}

function stopDictation(reason = 'manual', cancel = false) {
  const session = activeSession;
  if (!session || session.reason) return;

  session.reason = reason;
  session.cancelled = cancel;
  clearDictationTimers(session);
  dictationBtn.disabled = true;
  if (!cancel) dictationStatus.textContent = 'Finalizando dictado...';

  try {
    if (cancel) {
      session.recognition.abort();
      finishDictation(session);
    } else {
      session.recognition.stop();
    }
  } catch (error) {
    finishDictation(session);
  }
}

function startDictation() {
  if (activeSession || !SpeechRecognitionClass || direction.value !== 'es-odami') return;

  if (!window.isSecureContext) {
    dictationStatus.textContent = 'El micrófono requiere una conexión HTTPS o localhost.';
    return;
  }

  const recognition = new SpeechRecognitionClass();
  recognition.lang = 'es-MX';
  recognition.continuous = false;
  recognition.interimResults = true;
  recognition.maxAlternatives = 1;

  const session = {
    recognition,
    baseText: inputText.value.trim(),
    hasTranscript: false,
    cancelled: false,
    reason: null,
    error: null,
    maxTimer: null,
    waitTimer: null,
    silenceTimer: null
  };

  activeSession = session;
  setDictationAppearance(true);
  dictationStatus.textContent = 'Activando micrófono...';

  recognition.onstart = () => {
    if (activeSession !== session || session.reason) return;
    dictationStatus.textContent = 'Escuchando... Habla en español.';
    session.maxTimer = setTimeout(() => stopDictation('limit'), MAX_DICTATION_MS);
    session.waitTimer = setTimeout(() => stopDictation('no-speech'), WAIT_FOR_SPEECH_MS);
  };

  recognition.onspeechstart = () => {
    if (activeSession !== session || session.reason) return;
    clearTimeout(session.waitTimer);
    clearTimeout(session.silenceTimer);
  };

  recognition.onspeechend = () => {
    if (activeSession !== session || session.reason) return;
    clearTimeout(session.silenceTimer);
    session.silenceTimer = setTimeout(() => stopDictation('silence'), SILENCE_MS);
  };

  recognition.onresult = (event) => {
    if (activeSession !== session || session.cancelled || direction.value !== 'es-odami') return;

    const transcript = Array.from(event.results)
      .map((result) => result[0]?.transcript?.trim() || '')
      .filter(Boolean)
      .join(' ');

    if (!transcript) return;
    clearTimeout(session.waitTimer);
    session.hasTranscript = true;
    inputText.value = [session.baseText, transcript].filter(Boolean).join(' ');
    dictationStatus.textContent = 'Transcribiendo...';
  };

  recognition.onerror = (event) => {
    if (activeSession !== session || session.cancelled) return;
    if (event.error !== 'aborted') session.error = event.error;
  };

  recognition.onend = () => finishDictation(session);

  try {
    recognition.start();
  } catch (error) {
    session.error = 'start-failed';
    finishDictation(session);
  }
}

function updateDictationAvailability() {
  const spanishInput = direction.value === 'es-odami';
  if (!spanishInput && activeSession) stopDictation('direction-change', true);

  dictationBtn.hidden = !spanishInput || !SpeechRecognitionClass;
  dictationStatus.hidden = !spanishInput;

  if (spanishInput && !SpeechRecognitionClass) {
    dictationStatus.textContent = 'El dictado por voz no está disponible en este navegador.';
  } else if (spanishInput && !activeSession) {
    dictationStatus.textContent = 'Presiona el micrófono para dictar en español.';
  }
}

translateBtn.addEventListener('click', translateText);

dictationBtn.addEventListener('click', () => {
  if (activeSession) {
    stopDictation();
  } else {
    startDictation();
  }
});

inputText.addEventListener('input', () => {
  if (activeSession) stopDictation('edited', true);
});

direction.addEventListener('change', updateDictationAvailability);

swapBtn.addEventListener('click', () => {
  direction.value = direction.value === 'es-odami' ? 'odami-es' : 'es-odami';
  updateDictationAvailability();
});

document.querySelectorAll('.example-btn').forEach((button) => {
  button.addEventListener('click', () => {
    if (activeSession) stopDictation('example', true);
    inputText.value = button.dataset.text || '';
    direction.value = button.dataset.direction || 'es-odami';
    updateDictationAvailability();
    translateText();
  });
});

updateDictationAvailability();
