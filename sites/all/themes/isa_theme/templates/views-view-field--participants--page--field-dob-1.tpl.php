<?php
/**
 * Created by PhpStorm.
 * User: vitaly
 * Date: 22.10.17
 * Time: 21:31
 */
$dob = $row->field_field_dob[0]['raw']['value'];
$vid = taxonomy_vocabulary_machine_name_load('year_group')->vid;
$terms = taxonomy_get_tree($vid);
?>
<?php foreach ($terms as $term): ?>
    <?php $date_to = taxonomy_term_load($term->tid)->field_to_date['und'][0]['value']; ?>
    <?php $date_from = taxonomy_term_load($term->tid)->field_from_date['und'][0]['value']; ?>
    <?php if ($dob >= $date_from AND $dob <= $date_to):?>
        <?= $term->name ?>
    <?php endif; ?>
<?php endforeach; ?>