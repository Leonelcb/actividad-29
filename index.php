<?php
// Verificar si ya se ha ejecutado el script para evitar duplicados
if (!isset($agenda)) {
    // Definición de la agenda de meses y eventos
    $agenda = array(
        'enero' => array(
            15 => 'Cumpleaños de mi tio',
            25 => 'Reunión familiar'
        ),
        'febrero' => array(
            3 => 'cumpleaños de mi abuelo',
            14 => 'Día de San Valentín'
        ),
        'septiembre' => array(
        3 => 'mi cumpleaños',
        14 => 'dia de la independencia'
            ),
            'diciembre' => array(
            3 => 'Navidad',
            14 => 'año nuevo'
                ),
    );

    // Función para mostrar la agenda de meses y eventos
    function mostrarAgenda($agenda) {
        echo "<h2>Agenda de Meses:</h2>";
        echo "<ul>";
        foreach ($agenda as $mes => $eventos) {
            echo "<li><strong>$mes:</strong>";
            echo "<ul>";
            foreach ($eventos as $dia => $evento) {
                echo "<li>$dia: $evento</li>";
            }
            echo "</ul></li>";
        }
        echo "</ul>";
    }

    // Función para agregar un evento a la agenda
    function agregarEvento(&$agenda, $mes, $dia, $evento) {
        $agenda[$mes][$dia] = $evento;
        echo "Evento añadido correctamente.";
    }

    // Ejemplos de uso:

    // Mostrar la agenda actual
    mostrarAgenda($agenda);

    // Agregar un nuevo evento
    agregarEvento($agenda, 'marzo', 10, 'Presentación importante');

}
?>