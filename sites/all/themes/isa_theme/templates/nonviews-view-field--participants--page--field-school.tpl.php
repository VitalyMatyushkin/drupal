<?php
/**
 * Created by PhpStorm.
 * User: vitaly
 * Date: 23.10.17
 * Time: 13:50
 */

$tid = $row->field_field_school[0]['raw']['tid'];
$school = taxonomy_term_load($tid);
$schoolName = $school->name;
$image = '';
if (isset($school->field_emblem['und'])) {
    $uri = $school->field_emblem['und'][0]['uri'];
    $image = theme('image_style', array(
        'style_name' => 'thumbnail',
        'path'       => $uri
    ));
}
?>

<span><?= $schoolName; ?></span>
<?php if ($image != ''): ?>
    <span><?= $image; ?></span>
<?php endif; ?>

