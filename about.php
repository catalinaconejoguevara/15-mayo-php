<?php include('cabeza.php');?>
<section>
<?php
$datos = array_map('str_getcsv', file('portafolio-academico.csv'));
// pero debo hacer un pequeño ajuste, para eliminar del arreglo el encabezado del imdb-movies.csv
array_walk($datos, function(&$a) use ($datos) {$a = array_combine($datos[0], $a);});
array_shift($datos);
?>
<h2>Sobre el proyecto</h2>
<p><strong>Tema</strong></p>

<p>Propongo acabar un proyecto ya trabajado con anterioridad en el ramo de Metodología de la investigación, en donde el tema fue la relación que se estrecha entre la memoria y los objetos. En este caso se investiga cómo es que un objeto comun se logra convertir en un objeto de memoria, lo cual se propone como proceso análogo a la sacrilización de algo. En este caso, me gustaría tomar un caso de estudio concreto para evidenciar dicho proceso, y a la vez ir reguiando el curso de la investigación, acotándolo.</p>

<strong>Mi motivación</strong>

<p>Esta idea nace al visitar la casa de un señor en una isla el sur de chile. Este señor había construido un museo en su casa, puesto que él era la última persona viva en toda su familia. Caso un tanto similar ocurre en mi familia, donde existe un archivo de fotos análogas guardado en un cajón en la biblioteca de mi abuela, que nadie toca, cual santo en un pedestal.

</p>

</section>
<?php include('pie.php');?>
