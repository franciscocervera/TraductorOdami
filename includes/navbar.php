<?php
$currentPage = basename($_SERVER['PHP_SELF'] ?? '');

function isCurrentPage(string $href, string $currentPage): bool {
    return $currentPage === $href;
}

function isCurrentGroup(array $items, string $currentPage): bool {
    foreach ($items as $item) {
        if (isCurrentPage($item['href'], $currentPage)) {
            return true;
        }
    }

    return false;
}

function directNavLink(string $href, string $label, string $currentPage, bool $mobile = false): string {
    $isActive = isCurrentPage($href, $currentPage);
    $base = $mobile
        ? 'block rounded-xl px-3 py-2.5 transition hover:bg-white/10 hover:text-maiz'
        : 'block rounded-xl px-3 py-2 transition hover:bg-white/10 hover:text-maiz';
    $state = $isActive ? ' text-maiz font-semibold bg-white/5' : ' text-white/90';
    $ariaCurrent = $isActive ? ' aria-current="page"' : '';

    return '<a href="' . htmlspecialchars($href) . '" class="' . $base . $state . '"' . $ariaCurrent . '>'
        . htmlspecialchars($label)
        . '</a>';
}

function submenuLink(string $href, string $label, string $currentPage, bool $mobile = false): string {
    $isActive = isCurrentPage($href, $currentPage);
    $base = $mobile
        ? 'block rounded-xl px-3 py-2.5 transition hover:bg-white/10 hover:text-maiz'
        : 'block rounded-xl px-3 py-2.5 text-sm transition hover:bg-tierra hover:text-textil';
    $state = $isActive
        ? ($mobile ? ' text-maiz font-semibold bg-white/5' : ' text-textil font-semibold bg-tierra')
        : ($mobile ? ' text-white/80' : ' text-cafe');
    $ariaCurrent = $isActive ? ' aria-current="page"' : '';

    return '<a href="' . htmlspecialchars($href) . '" class="' . $base . $state . '"' . $ariaCurrent . '>'
        . htmlspecialchars($label)
        . '</a>';
}

$identityItems = [
    ['href' => 'historia.php', 'label' => 'Historia'],
    ['href' => 'lengua.php', 'label' => 'Lengua'],
    ['href' => 'cultura.php', 'label' => 'Cultura'],
];

$communityItems = [
    ['href' => 'comunidad.php', 'label' => 'Comunidad'],
    ['href' => 'educacion.php', 'label' => 'Educación'],
    ['href' => 'economia.php', 'label' => 'Economía'],
];

$allianceItems = [
    ['href' => 'vt-distribuidores.php', 'label' => 'VT Distribuidores Alimenticios'],
    ['href' => 'bikiya-sopori.php', 'label' => 'Bikiyá Sopory'],
];
?>
<header class="bg-textil text-white shadow-lg sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-3 sm:py-4">
    <div class="flex items-center justify-between gap-4">
      <div class="min-w-0 shrink-0">
        <a href="index.php" class="block text-xl sm:text-2xl font-extrabold tracking-wide leading-tight">Ódami del Norte</a>
        <span class="hidden sm:inline-block text-sm text-white/70">Cultura, lengua y memoria viva</span>
      </div>

      <button
        type="button"
        id="mobileMenuButton"
        class="lg:hidden inline-flex items-center justify-center rounded-xl border border-white/20 px-3 py-2 text-sm font-semibold hover:bg-white/10"
        aria-expanded="false"
        aria-controls="mobileMenu"
      >
        Menú
      </button>

      <nav class="hidden lg:flex items-center gap-1 text-sm xl:text-base" aria-label="Navegación principal" data-desktop-nav>
        <details class="nav-dropdown relative" data-nav-dropdown>
          <summary class="nav-dropdown-trigger flex cursor-pointer list-none items-center gap-1 rounded-xl px-3 py-2 transition hover:bg-white/10 hover:text-maiz <?= isCurrentGroup($identityItems, $currentPage) ? 'text-maiz font-semibold bg-white/5' : 'text-white/90'; ?>">
            <span>Cultura e identidad</span>
            <svg class="nav-dropdown-chevron h-4 w-4 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </summary>
          <div class="nav-dropdown-menu absolute left-1/2 top-full z-50 mt-2 w-60 -translate-x-1/2 rounded-2xl bg-white p-2 shadow-2xl ring-1 ring-cafe/10">
            <?php foreach ($identityItems as $item): ?>
              <?= submenuLink($item['href'], $item['label'], $currentPage); ?>
            <?php endforeach; ?>
          </div>
        </details>

        <details class="nav-dropdown relative" data-nav-dropdown>
          <summary class="nav-dropdown-trigger flex cursor-pointer list-none items-center gap-1 rounded-xl px-3 py-2 transition hover:bg-white/10 hover:text-maiz <?= isCurrentGroup($communityItems, $currentPage) ? 'text-maiz font-semibold bg-white/5' : 'text-white/90'; ?>">
            <span>Comunidad y desarrollo</span>
            <svg class="nav-dropdown-chevron h-4 w-4 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </summary>
          <div class="nav-dropdown-menu absolute left-1/2 top-full z-50 mt-2 w-64 -translate-x-1/2 rounded-2xl bg-white p-2 shadow-2xl ring-1 ring-cafe/10">
            <?php foreach ($communityItems as $item): ?>
              <?= submenuLink($item['href'], $item['label'], $currentPage); ?>
            <?php endforeach; ?>
          </div>
        </details>

        <details class="nav-dropdown relative" data-nav-dropdown>
          <summary class="nav-dropdown-trigger flex cursor-pointer list-none items-center gap-1 rounded-xl px-3 py-2 transition hover:bg-white/10 hover:text-maiz <?= isCurrentGroup($allianceItems, $currentPage) ? 'text-maiz font-semibold bg-white/5' : 'text-white/90'; ?>">
            <span>Alianzas</span>
            <svg class="nav-dropdown-chevron h-4 w-4 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </summary>
          <div class="nav-dropdown-menu absolute right-0 top-full z-50 mt-2 w-72 rounded-2xl bg-white p-2 shadow-2xl ring-1 ring-cafe/10">
            <?php foreach ($allianceItems as $item): ?>
              <?= submenuLink($item['href'], $item['label'], $currentPage); ?>
            <?php endforeach; ?>
          </div>
        </details>

        <?= directNavLink('traductor.php', 'Traductor', $currentPage); ?>
        <?= directNavLink('acerca.php', 'Acerca', $currentPage); ?>
      </nav>
    </div>

    <nav id="mobileMenu" class="lg:hidden hidden pt-3 border-t border-white/10 mt-3" aria-label="Navegación móvil">
      <div class="space-y-1 text-sm">
        <details class="mobile-nav-group rounded-xl" data-nav-dropdown>
          <summary class="nav-dropdown-trigger flex cursor-pointer list-none items-center justify-between rounded-xl px-3 py-2.5 transition hover:bg-white/10 hover:text-maiz <?= isCurrentGroup($identityItems, $currentPage) ? 'text-maiz font-semibold bg-white/5' : 'text-white/90'; ?>">
            <span>Cultura e identidad</span>
            <svg class="nav-dropdown-chevron h-4 w-4 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </summary>
          <div class="ml-3 mt-1 space-y-1 border-l border-white/15 pl-2">
            <?php foreach ($identityItems as $item): ?>
              <?= submenuLink($item['href'], $item['label'], $currentPage, true); ?>
            <?php endforeach; ?>
          </div>
        </details>

        <details class="mobile-nav-group rounded-xl" data-nav-dropdown>
          <summary class="nav-dropdown-trigger flex cursor-pointer list-none items-center justify-between rounded-xl px-3 py-2.5 transition hover:bg-white/10 hover:text-maiz <?= isCurrentGroup($communityItems, $currentPage) ? 'text-maiz font-semibold bg-white/5' : 'text-white/90'; ?>">
            <span>Comunidad y desarrollo</span>
            <svg class="nav-dropdown-chevron h-4 w-4 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </summary>
          <div class="ml-3 mt-1 space-y-1 border-l border-white/15 pl-2">
            <?php foreach ($communityItems as $item): ?>
              <?= submenuLink($item['href'], $item['label'], $currentPage, true); ?>
            <?php endforeach; ?>
          </div>
        </details>

        <details class="mobile-nav-group rounded-xl" data-nav-dropdown>
          <summary class="nav-dropdown-trigger flex cursor-pointer list-none items-center justify-between rounded-xl px-3 py-2.5 transition hover:bg-white/10 hover:text-maiz <?= isCurrentGroup($allianceItems, $currentPage) ? 'text-maiz font-semibold bg-white/5' : 'text-white/90'; ?>">
            <span>Alianzas</span>
            <svg class="nav-dropdown-chevron h-4 w-4 shrink-0" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </summary>
          <div class="ml-3 mt-1 space-y-1 border-l border-white/15 pl-2">
            <?php foreach ($allianceItems as $item): ?>
              <?= submenuLink($item['href'], $item['label'], $currentPage, true); ?>
            <?php endforeach; ?>
          </div>
        </details>

        <?= directNavLink('traductor.php', 'Traductor', $currentPage, true); ?>
        <?= directNavLink('acerca.php', 'Acerca', $currentPage, true); ?>
      </div>
    </nav>
  </div>
</header>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const button = document.getElementById('mobileMenuButton');
    const menu = document.getElementById('mobileMenu');
    const dropdowns = Array.from(document.querySelectorAll('[data-nav-dropdown]'));

    if (button && menu) {
      button.addEventListener('click', function () {
        const willOpen = menu.classList.contains('hidden');
        menu.classList.toggle('hidden');
        button.setAttribute('aria-expanded', String(willOpen));
      });
    }

    dropdowns.forEach(function (dropdown) {
      dropdown.addEventListener('toggle', function () {
        if (!dropdown.open) return;

        dropdowns.forEach(function (otherDropdown) {
          if (otherDropdown !== dropdown && otherDropdown.closest('nav') === dropdown.closest('nav')) {
            otherDropdown.removeAttribute('open');
          }
        });
      });
    });

    document.addEventListener('click', function (event) {
      dropdowns.forEach(function (dropdown) {
        const isDesktopDropdown = dropdown.closest('[data-desktop-nav]');
        if (isDesktopDropdown && dropdown.open && !dropdown.contains(event.target)) {
          dropdown.removeAttribute('open');
        }
      });
    });

    document.addEventListener('keydown', function (event) {
      if (event.key !== 'Escape') return;

      dropdowns.forEach(function (dropdown) {
        dropdown.removeAttribute('open');
      });

      if (button && menu && window.innerWidth < 1024) {
        menu.classList.add('hidden');
        button.setAttribute('aria-expanded', 'false');
        button.focus();
      }
    });

    window.addEventListener('resize', function () {
      if (!button || !menu || window.innerWidth < 1024) return;

      menu.classList.add('hidden');
      button.setAttribute('aria-expanded', 'false');
    });
  });
</script>
