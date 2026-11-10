<?php
require_once __DIR__ . '/config/db.php';
$pageTitle = 'PWATAREA3 | Programación Web Avanzada';
$exercises = [
 ['01','Menú desplegable','Navegación interactiva','ejercicio01/index.php'],
 ['02','Formulario de contacto','Validación de datos','ejercicio02/index.php'],
 ['03','Contador de visitas','Registro de visitas con PHP y MySQL','ejercicio03/index.php'],
 ['04','Juego de adivinanzas','Número aleatorio y pistas','ejercicio04/index.php'],
 ['05','Galería de imágenes','Carga dinámica desde una carpeta','ejercicio05/index.php'],
 ['06','Sistema de login','Autenticación con PHP y MySQL','ejercicio06/login.php'],
];
?>
<!doctype html><html lang="es"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width, initial-scale=1">
<title><?= htmlspecialchars($pageTitle) ?></title><link rel="stylesheet" href="assets/css/style.css"></head>
<body>
<header class="topbar"><a class="brand" href="index.php"><span class="brand-mark">P</span> PWATAREA3</a><nav><a href="#ejercicios">Ejercicios</a><a href="README.md">Documentación</a></nav></header>
<main>
<section class="hero"><div class="hero-copy"><span class="eyebrow">UNIDAD 2 · BACKEND Y FRONTEND</span><h1>Programación web<br><em>en práctica.</em></h1><p>Seis ejercicios prácticos que integran HTML, CSS, JavaScript, PHP y MySQL en un solo proyecto.</p><a class="btn btn-red" href="#ejercicios">Explorar ejercicios <span>↘</span></a></div><div class="hero-art"><div class="orbit orbit-one"></div><div class="orbit orbit-two"></div><div class="code-card"><div class="dots"><i></i><i></i><i></i></div><code><b>&lt;?php</b><br><span>$web</span> = "creativa";<br><span class="pink">echo</span> "Hola mundo";<br><b>?&gt;</b></code><div class="code-foot">HTML · CSS · JS · PHP · MYSQL</div></div><div class="hero-number">06<span>EJERCICIOS</span></div></div></section>
<section class="section" id="ejercicios"><div class="section-head"><div><span class="eyebrow">CONTENIDO DEL PROYECTO</span><h2>Explora los ejercicios</h2></div><p>Selecciona una tarjeta para abrir el ejercicio correspondiente.</p></div>
<div class="exercise-grid"><?php foreach($exercises as $e): ?><a class="exercise-card" href="<?= htmlspecialchars($e[3]) ?>"><div class="card-top"><span class="exercise-num"><?= $e[0] ?></span><span class="arrow">↗</span></div><h3><?= htmlspecialchars($e[1]) ?></h3><p><?= htmlspecialchars($e[2]) ?></p><span class="card-link">Abrir ejercicio <b>→</b></span></a><?php endforeach; ?></div></section>
<section class="tech-strip"><span>TECNOLOGÍAS UTILIZADAS</span><strong>HTML5</strong><strong>CSS3</strong><strong>JavaScript</strong><strong>PHP 8</strong><strong>MySQL</strong></section>
</main><footer><span>PWATAREA3 · Programación Web Avanzada</span><span>Unidad 2 · 2026</span></footer>
</body></html>