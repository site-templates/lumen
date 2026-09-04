/*
    Lumen — header state and current-page marking.

    Everything here is a progressive enhancement: with JavaScript off, the
    header simply keeps its resting size and the page stays fully usable.

    Pages change in place: instant navigation swaps <main> and keeps the
    header, so everything below binds once; after `instant:navigated` the
    header re-evaluates its scrolled state, the current-page mark moves, and
    a mobile menu used to get here is folded. Nothing inside <main> is
    script-driven (the entrance animations are CSS and play on their own).
*/

const header = stickyHeader();
markCurrentMenuItem();
closeMobileMenuOnNavigate();

document.addEventListener('instant:navigated', function () {
    document.querySelectorAll('details.menu[open]').forEach(function (details) {
        details.removeAttribute('open');
    });
    if (header) {
        header.evaluate();
    }
    markCurrentMenuItem();
});

/*
    The header is roomy and flush while the page is at the top. Once content
    starts passing underneath it, data-scrolled trims the padding and fades in
    the hairline + shadow — the transitions live in the markup and site.css.
*/
function stickyHeader() {
    const header = document.getElementById('header');

    if (!header) {
        return null;
    }

    function evaluate() {
        header.toggleAttribute('data-scrolled', window.scrollY > 0);
    }

    evaluate();
    window.addEventListener('scroll', evaluate, { passive: true });

    return { evaluate: evaluate };
}

/*
    aria-current tells screen readers which page you are on, and styles the
    active link. Section pages like /writings/some-post light up /writings too.
    Recomputed after every page change, so the previous mark is cleared first.
*/
function markCurrentMenuItem() {
    document.querySelectorAll('header nav a').forEach(function (link) {
        const path = window.location.pathname;

        if (link.pathname !== '/' && (path === link.pathname || path.startsWith(link.pathname + '/'))) {
            link.setAttribute('aria-current', 'page');
        } else {
            link.removeAttribute('aria-current');
        }
    });
}

/*
    The mobile menu is a <details>; close it after tapping a link so in-page
    anchors like /#services don't leave the panel hanging open.
*/
function closeMobileMenuOnNavigate() {
    document.querySelectorAll('details.menu a').forEach(function (link) {
        link.addEventListener('click', function () {
            link.closest('details').removeAttribute('open');
        });
    });
}
