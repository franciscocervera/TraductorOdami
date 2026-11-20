# TraductorOdami

Sitio web PHP para la difusión de la cultura ódami del norte, con un traductor español ↔ ódami basado prioritariamente en un corpus CSV local y, cuando es necesario, en OpenRouter.

## Requisitos

- PHP 8.0 o superior con extensiones `curl` y `mbstring`. La extensión `intl` es recomendable para normalización Unicode.
- Composer.
- Acceso HTTPS a `openrouter.ai` para traducciones no presentes en el corpus.
- El dictado en español requiere un navegador con Web Speech API y un contexto seguro (HTTPS o localhost). No utiliza OpenRouter. La aplicación no implementa TTS.

## Instalación

```bash
composer install
cp .env.example .env
```

Configura tu clave en `.env` (no se debe publicar ni subir a Git):

```dotenv
OPENROUTER_API_KEY=sk-or-v1-tu_clave_real
OPENROUTER_MODEL=google/gemini-2.5-flash-lite
TRANSLATOR_RATE_LIMIT=20
TRANSLATOR_RATE_WINDOW=60
```

También puedes utilizar `openai/gpt-5.4-nano` mediante OpenRouter modificando únicamente `OPENROUTER_MODEL`. La calidad en ódami debe contrastarse con hablantes y con el corpus.

Para iniciar con el servidor integrado de PHP:

```bash
php -S localhost:8000 router.php
```

Abre `http://localhost:8000/traductor.php`. El archivo `router.php` protege los archivos privados al utilizar el servidor integrado; `.htaccess` aplica las restricciones equivalentes en Apache. En otros servidores configura también estas restricciones. No publiques directorios `.git` ni archivos de secretos.

## Funcionamiento

1. Se intenta primero una coincidencia exacta, normalizada o aproximada de la frase completa en `api/odami_corpus.csv`.
2. Si no existe, se reutilizan traducciones locales solo cuando **todos** los fragmentos pueden resolverse mediante el corpus.
3. En los demás casos, se envía **una única solicitud** a OpenRouter con el texto completo y referencias del corpus. No se devuelve el original como traducción si falla la API.
4. Los errores se presentan al usuario con un código HTTP apropiado, sin exponer claves ni respuestas privadas del proveedor.

El endpoint `api/traducir.php` admite hasta **1800 caracteres de texto** por petición. Las llamadas a OpenRouter se limitan por IP mediante un contador de ventana temporal almacenado en el directorio temporal del servidor (20 llamadas cada 60 segundos por defecto). En despliegues con múltiples instancias se requiere almacenamiento compartido para un límite global. Las coincidencias resueltas exclusivamente con el corpus no consumen llamadas externas.

## Estructura

- `api/traducir.php`: traducción y conexión a OpenRouter.
- `api/odami_corpus.csv`: referencias lingüísticas locales, sin cambios.
- `js/traductor.js`: interfaz, errores y dictado del navegador.
- `.env.example`: variables configurables.
- `assets/`, `data/`, `includes/`: recursos, contenido y componentes del sitio.
