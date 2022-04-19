<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Товары<a class="btn btn-primary" href="<?=base_url('manager/add_item')?>">Добавить новый товар</a></h1>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Цена</th>
                    <th>Настройка</th>
                </tr>
            </thead>
            <tbody>
                <?foreach($items as $item):?>
                    <tr>
                        <td><?=$item->title?></td>
                        <td><?=$item->price?></td>
                        <td>
                            <a class="btn btn-danger delete" href="<?=base_url('manager/delete_item/' . $item->id)?>"><span class="glyphicon glyphicon-trash"></span></a>
                            <a class="btn btn-warning" href="<?=base_url('manager/edit_item/' . $item->id )?>"><span class="glyphicon glyphicon-pencil"></span></a>
                        </td>
                    </tr>
                <?endforeach;?>
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-12">
            <?=$pagination?>
        </div>
    </div>
</div>