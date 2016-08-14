<?php
$config =array(
	'login' => array(
        array(
                'field' => 'nick',
                'label' => 'Nick',
                'rules' => 'trim|required|strip_tags'
        ),
        array(
                'field' => 'password',
                'label' => 'Contraseña',
                'rules' => 'trim|required|strip_tags|alpha_dash'
        )
	));

?>
