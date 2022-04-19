<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Каталог<a class="btn btn-primary" href="<?=base_url('manager/add_category')?>">Добавить новую категорию</a></h1>
        </div>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Название</th>
                    <th>Настройка</th>
                </tr>
            </thead>
            <tbody>
                <?foreach($items as $item):?>
                    <tr>
                        <td><?=$item->title?></td>
                        <td>
                            <a class="btn btn-danger delete" href="<?=base_url('manager/delete_category/' . $item->id)?>"><span class="glyphicon glyphicon-trash"></span></a>
                            <a class="btn btn-warning" href="<?=base_url('manager/edit_category/' . $item->id )?>"><span class="glyphicon glyphicon-pencil"></span></a>
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