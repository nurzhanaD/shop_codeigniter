<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <h1>Добавить категорию</h1>
                <?=validation_errors()?>
                <?=form_open(base_url('manager/add_category'))?>
                    <div class="form-group">
                        <label for="title">Категория</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Название категории" value="<?=set_value('title')?>" >
                    </div>
                    <button type="submit" class="btn btn-success">Добавить</button>
                <?=form_close()?>
            </div>    
        </div>
    </div> 