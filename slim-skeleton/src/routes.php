<?php
// Routes

$app->get('/teste/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

$app->get('/users', function ($request, $response, $args) {

    $table = $this->db->table('usuarios');

    $users = $table->get();

    // Render index view
    return $this->renderer->render($response, 'users/index.phtml', ['users' => $users]);

});

