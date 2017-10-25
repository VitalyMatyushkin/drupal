<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 20.10.17
 * Time: 16:42
 */

$form['name']['#title'] = 'Email address';
$form['name']['#description'] = '';
$form['name']['#size'] = '';

$form['pass']['#size'] = '';
$form['pass']['#description'] = '';
?>
<div class="isa_theme-user-login-form-wrapper">

    <img class="isa_theme-user-login-logo" src="<?php print render($login_logo); ?>" alt="ISA Sport"/>
    <h4 class="isa_theme-user-login-intro"><?php print render($intro_text); ?></h4>

    <label for="choose_final" class="isa_theme-user-login-label">Choose final:</label>
    <select id="choose_final" class="isa_theme-user-login-select" name="Choose final">
        <option selected value="ISA’s National Swimming Finals, London Olympic Park, 20.01.2018">
            ISA’s National Swimming Finals, London Olympic Park, 20.01.2018
        </option>
    </select>
        <?php print drupal_render_children($form) ?>
</div>