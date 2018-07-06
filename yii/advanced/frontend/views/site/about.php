<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
$data =  date("d.m.y h:i:s");
?>
<div class="site-about">
   
    <p>This is the About page. You may modify the following file to customize its content:</p><br>
    <p>Dia e hora atual: <?php echo $data ?></p>

     
    <code><?= __FILE__ ?></code>
</div>
