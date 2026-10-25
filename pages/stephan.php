<!doctype html>
<html lang="nl">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="author" content="Stephan Groen">
<meta name="description" content="Stephan Groen, ondernemer en medeoprichter van Picqer.">
<link rel="canonical" href="https://stephangroen.nl">
<title>Stephan Groen</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&amp;display=swap">
<style>
* { box-sizing: border-box; }
body { margin: 0; background: #F6F6F3; color: #1B1B19; font-family: 'Inter', system-ui, sans-serif; }
a { color: #1B1B19; text-decoration: none; }
a.inline { text-decoration: underline; text-decoration-color: #9A9A92; text-underline-offset: 3px; }
a.inline:hover { text-decoration-color: #1B1B19; }
.nav { font-size: 17px; font-weight: 500; border-bottom: 1px solid #9A9A92; padding-bottom: 2px; }
.nav:hover { border-bottom-color: #1B1B19; }
.nav:focus-visible, a.inline:focus-visible { outline: 2px solid #1B1B19; outline-offset: 4px; }
.page { min-height: 100vh; padding: 48px 32px; display: flex; flex-direction: column; justify-content: space-between; }
.brand { display: flex; align-items: center; gap: 10px; font-size: 15px; font-weight: 500; color: #55554F; }
.dot { width: 10px; height: 10px; border-radius: 50%; background: #2F6B4F; }
main { display: flex; flex-direction: column; gap: 40px; padding: 64px 0; }
h1 { margin: 0 0 0 -0.055em; font-size: clamp(56px, 12vw, 168px); line-height: 0.92; font-weight: 700; letter-spacing: -0.05em; }
/* "Groen" kleurt van links naar rechts groen bij hover, als een blad dat uitloopt. */
.groen { display: inline-block; padding: 0.02em 0.06em 0.08em 0; margin: -0.02em -0.06em -0.08em 0;
  background: linear-gradient(90deg, #2F6B4F 50%, #1B1B19 50%) 100% 0 / 200% 100%;
  -webkit-background-clip: text; background-clip: text; -webkit-text-fill-color: transparent; color: transparent;
  transition: background-position 0.9s cubic-bezier(0.22, 0.61, 0.36, 1); }
.groen:hover { background-position: 0 0; }
@media (prefers-reduced-motion: reduce) { .groen { transition: none; } }
.intro { margin: 0; font-size: 22px; line-height: 1.5; color: #3A3A36; max-width: 520px; }
footer { display: flex; flex-wrap: wrap; justify-content: space-between; align-items: center; gap: 16px 32px; }
footer nav { display: flex; flex-wrap: wrap; gap: 16px 32px; }
.holding { font-size: 14px; color: #55554F; }
</style>
</head>
<body>
<div class="page">
  <div class="brand"><span class="dot"></span><span>stephangroen.nl</span></div>

  <main>
    <h1>Stephan<br><span class="groen">Groen</span></h1>
    <p class="intro">Ondernemer en medeoprichter van <a class="inline" href="https://picqer.com">Picqer</a>, software waarmee webwinkels hun magazijn eenvoudig organiseren.</p>
  </main>

  <footer>
    <nav aria-label="Links">
      <a class="nav" href="https://www.linkedin.com/in/stephangroen/">LinkedIn</a>
      <a class="nav" href="https://github.com/stephangroen">GitHub</a>
      <a class="nav" href="https://x.com/stephangroen" aria-label="X">𝕏</a>
    </nav>
    <a class="inline holding" href="https://boquila.nl">Boquila B.V.</a>
  </footer>
</div>
</body>
</html>
