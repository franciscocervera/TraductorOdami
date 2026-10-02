# TraductorOdami

Sitio web en PHP dedicado a la difusión de la cultura Ódami del Norte. Incluye secciones sobre historia, lengua, cultura, comunidad, educación y economía, además de un traductor español ↔ ódami apoyado en un corpus local y la API de OpenAI.

## Requisitos

- PHP 8.0 o superior
- Composer
- Extensión cURL de PHP
- Conexión a internet para recursos CDN y funciones que utilizan la API

## Instalación

```bash
git clone <URL_DEL_REPOSITORIO>
cd TraductorOdami
composer install
cp .env.example .env
```

Configura tu clave en `.env`:

```env
OPENAI_API_KEY=tu_clave_api_aqui
```

Para ejecutar el proyecto localmente:

```bash
php -S localhost:8000
```

Después abre `http://localhost:8000` en el navegador.

## Estructura principal

- `api/`: endpoint del traductor y corpus local.
- `assets/`: estilos e imágenes.
- `data/`: contenido estructurado del sitio.
- `includes/`: componentes PHP compartidos.
- `js/`: lógica del traductor en el navegador.
