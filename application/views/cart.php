<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Корзина</h1>
        </div>
        <div class="col-12">
            <?if(!isset($items) || count($items) == 0):?>
                <div class="alert alert-warning">Ваша корзина пуста.</div>
            <?else:?>
            <?foreach($items as  $id => $item):?>
                <div class="row">
                    <div class="col-md-3">
                        <img src="<?=base_url('uploads/' . $item->image)?>" alt="" class="img-thumbnail">
                    </div>
                    <div class="col-md-3">
                        <h3><?=$item->title?></h3>
                    </div>
                    <div class="col-md-3">
                        <h3><?=$item->price?></h3>
                    </div>
                    <div class="col-md-3">
                        <a class="btn btn-danger delete" href="<?=base_url() . 'cart?del=' . ($id+1)?>">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>
                    </div>
                </div>
            <?endforeach;?>
            <hr>
            <div class="row">
                <div class="col-md-8"><h2>Итого:</h2></div>
                <div class="col-md-4"><h2><?=$total?> руб.</h2>
            </div>
            <div class="row">
                <div class="col-md-3 col-md-offset-8">
                    <a class="btn btn-success btn-block" href="<?=base_url('checkout')?>">Оформить заказ</a>
                </div>
            </div>
            <?endif;?>
        </div>
    </div>
</div>