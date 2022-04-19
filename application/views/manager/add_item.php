<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="row">
        <div class="col-lg-6">
            <h1>Добавить товар</h1>
            <?=isset($error) ? $error : ''?>
            <?=validation_errors()?>
            <?=form_open_multipart(base_url('manager/add_item'))?>
                <div class="form-group">
                    <label for="title">Название</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Название" value="<?=set_value('title')?>" >
                </div>
                <div class="form-group">
                    <label for="price">Цена</label>
                    <input type="number" class="form-control" min="0" step="0.01" id="price" name="price" placeholder="Цена" value="<?=set_value('price')?>">
                </div>
                <div class="form-group">
                    <label for="image">Изображение</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>
                <div class="form-group">
                    <label for="description">Описание</label>
                    <textarea class="form-control" id="description" name="description" <?=set_value('description')?>></textarea>
                </div>
                <button type="submit" class="btn btn-success">Добавить</button>
            <?=form_close()?>
        </div>    
    </div>
</div>