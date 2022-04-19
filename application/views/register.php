<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3 text-center">
                <h1>Регистрация</h1>
                <?if(isset($success) && $success):?>
                    <div class="row">
                        <div class="text-center">
                            <div class="alert alert-success">
                                Вы были успешно зарегистрированы.<br>
                                <a href="<?=base_url()?>">Home.</a>
                            </div>
                        </div>
                    </div>
                <?else:?>
                    <?=validation_errors()?>
                    <?=form_open(base_url('home/register'))?>
                        <div class="form-group">
                            <input type="text" class="form-control" required name="email" placeholder="Почта" value="<?=set_value('email')?>" >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required name="first_name" placeholder="Имя" value="<?=set_value('first_name')?>" >
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" required name="last_name" placeholder="Фамилия" value="<?=set_value('last_name')?>" >
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" required name="password" placeholder="Пароль" value="<?=set_value('password')?>" >
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" required name="passconf" placeholder="Подтвердить пароль" value="<?=set_value('passconf')?>" >
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Зарегистрироваться</button>
                    <?=form_close()?>
                    <a class="text-success" href="<?=base_url('home/login')?>">У вас уже есть аккаунт? Войти.</a>
                <?endif;?>
            </div>    
        </div>
    </div>