<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Товары</h1>
        </div>
    </div>
    <div class="row">
        <?if(count($items) == 0):?>
            <div class="col-6">
                <div class="alert alert-danger">Товар не найден.</div>
            </div>
        <?endif;?>
        <?php foreach($items as $item): ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?=base_url('uploads/'.$item->image)?>" alt="<?=$item->title?>">
                    <div class="caption">
                        <h3><?=$item->title?></h3>
                        <p><?=$item->price?> руб.</p>
                        <p><a href="<?=base_url('add/' . $item->id)?>" class="btn btn-primary" role="button">В корзину</a></p>
                    </div>
                </div>
            </div>
        <?endforeach;?>
    </div>
    <div class="row col-sm-6">
        <?=$pagination?>
    </div>
</div>