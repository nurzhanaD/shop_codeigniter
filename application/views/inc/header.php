<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="zxx">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="<?=base_url()?>">Cake Shop</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="<?=base_url()?>">Главная</a></li>
        <li><a href="#">Контакты</a></li>
        <li><a href="#">О нас</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Каталог <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <?foreach($categories as $category):?>
            <li><a href="<?=base_url('category/'.$category -> id)?>"><?=$category->title?></a></li>
            <?endforeach;?>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
          <input type="search" class="form-control" name="search" placeholder="Поиск">
        </div>
        <button type="submit" class="btn btn-default">Поиск</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
        <?if(isset($user['logged']) && $user['logged']):?>
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-user"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?=base_url('home/profile')?>"><?=$user['first_name']?></a></li>
            <li><a href="<?=base_url('cart')?>">Cart</a></li>
            <?if($user['level'] >= 1):?>
              <li role="separator" class="divider"></li>
              <li><a href="<?=base_url('manager/items')?>">Товары</a></li>
              <li><a href="<?=base_url('manager/categories')?>">Каталог</a></li>
            <?endif;?>
            <?if($user['level'] == 2):?>
              <li><a href="<?=base_url('manager/users')?>">Пользователи</a></li>
            <?endif;?>
            <li role="separator" class="divider"></li>
            <li><a href="<?=base_url('home/logout')?>">Выйти</a></li>
        <?else:?>
            <li><a href="<?=base_url('home/login')?>">Войти</a></li>
        <?endif;?>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?if(isset($alert) && is_array($alert)):?>
  <div class="container">
    <div class="row">
      <div class="col-6">
        <div class="alert alert-<?=$alert['type']?>"><?=$alert['message']?></div>
      </div>
    </div>
  </div>
<?endif;?>