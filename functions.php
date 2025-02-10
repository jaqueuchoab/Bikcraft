<?php
// Os nomes das funções devem ser nomes únicos e mais detalhados para se diferenciar das funções do próprio wordpress.

function loading_scripts_cmb2() {
    wp_enqueue_media(); // Envia o script do WordPress para upload de arquivos
}

add_action('admin_enqueue_scripts', 'loading_scripts_cmb2');

// Função padrão para pegar campos do wordpress;
function get_field_cmb2($key, $page_id = 0) {
    $id = $page_id !== 0 ? $page_id : get_the_ID();

    return get_post_meta($id, $key, true);
}

function the_field_cmb2($key, $page_id = 0) {
    echo get_field_cmb2($key, $page_id);
}

?>
