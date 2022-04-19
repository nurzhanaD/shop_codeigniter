<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                <h1>Войти</h1>
                <?if(isset($error)):?>
                     <div class="alert alert-danger"><?=$error?></div>
                <?endif;?>
                <?=validation_errors()?>
                <?=form_open(base_url('home/login'))?>
                    <div class="form-group">
                        <input type="text" class="form-control" required name="email" placeholder="Почта" value="<?=set_value('email')?>" >
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" required name="password" placeholder="Пароль" value="<?=set_value('password')?>" >
                    </div>
                    <button type="submit" class="btn btn-block btn-primary">Войти</button>
                <?=form_close()?>
                <a class="text-success" href="<?=base_url('home/register')?>">У вас нет аккаунта? Зарегистрироваться.</a>
            </div>    
        </div>
    </div>