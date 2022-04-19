<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="container">
    <div class="text-center">
        <h2>Оформить заказ</h2>
    </div>
    <div class="row">
        <div class="col-md-8">
            <h4>Адрес доставки</h4>
            <div class="row">
                <div class="col-md-6">
                    <label for="firstname">Имя</label>
                    <input type="text" class="form-control" id="firstname" required name="firstname">
                </div>
                <div class="col-md-6">
                    <label for="lastname">Фамилия</label>
                    <input type="text" class="form-control" id="lastname" required name="lastname">
                </div>
                <div class="col-md-12">
                    <label for="address">Адрес</label>
                    <input type="text" class="form-control" id="address" required name="address" placeholder="Улица">
                </div>
                <div class="col-md-12">
                    <label for="address_e">Адрес 2</label>
                    <input type="text" class="form-control" id="address_e" name="address_e" placeholder="Квартира, подъезд">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <label for="country">Страна</label>
                    <select name="country" id="country" class="form-control">
                        <option value="">Выберите страну...</option>
                        <option value="">Россия</option>
                    </select>
                </div>
                <div class="col-md-4">
                    <label for="state">Город</label>
                    <input type="text" class="form-control" required name="state" id="state">
                </div>
                <div class="col-md-3">
                        <label for="zip">Индекс</label>
                    <input type="text" class="form-control" required name="zip" id="zip">
                </div>
            </div>
            <hr>
            <h4>Способ оплаты</h4>
            <div class="payment-radio-box">
                <input type="radio" id="cash" name="paymentmethod" required>
                <label for="cash">Наличными курьеру</label>
            </div>
            <hr>
            <button class="btn btn-primary col-md-12" type="submit">Оформить</button>
        </div>
    </div>
</div>