<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20.10.17
 * Time: 16:42
 */

$form['name']['#title'] = 'Email address';
$form['name']['#description'] = 'Enter your email address.';
?>
<p><?php print render($intro_text); ?></p>
<div class="isa_theme-user-login-form-wrapper">
        <?php print drupal_render_children($form) ?>
</div>