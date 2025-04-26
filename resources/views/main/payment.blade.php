@include('layouts.head')
@include('layouts.mainmenu')

<div class="payment-header">
    <h1>{{ $title}}</h1>
</div>
<div class="sector-text">
   <h3> Оплата заказов производиться одним из нижеперечисленных способов</h3>
</div>
<div class="payment-items">
    <div class="payment-item">
        <img src="/img/payment/pay-cash-lg.svg" class="card-img-top">
        <div class="card-body">
          <p class="card-text">Наличными курьеру, после получения вашего заказа</p>
        </div>
    </div>
    <div class="payment-item">
        <img src="/img/payment/pay-card-lg.svg" class="card-img-top">
        <div class="card-body">
          <p class="card-text">Банковской картой: VISA, Mastercard, МИР</p>
        </div>
    </div>
    <div class="payment-item">
        <img src="/img/payment/pay-sbp-lg.svg" class="card-img-top">
        <div class="card-body">
          <p class="card-text">Приложение интернет-банка, подключённого к СБП</p>
        </div>
    </div>
    <div class="payment-item">
        <img src="/img/payment/pay-podeli-lg.svg" class="card-img-top">
        <div class="card-body">
          <p class="card-text">Подели. Оплата четырьмя равными частями без переплат</p>
        </div>
    </div>
    <div class="payment-item">
        <img src="/img/payment/pay-chastyami-lg.svg" class="card-img-top">
        <div class="card-body">
          <p class="card-text">Плати частями. Оплата четырьмя равными частями без переплат</p>
        </div>
    </div>
    <div class="payment-item">
        <img src="/img/payment/pay-dolyami-lg.svg" class="card-img-top">
        <div class="card-body">
          <p class="card-text">Долями. Оплата четырьмя равными частями без переплат</p>
        </div>
    </div>
    <div class="payment-item">
        <img src="/img/payment/pay-sber-lg.svg" class="card-img-top">
        <div class="card-body">
          <p class="card-text">Оплата производится в любом отделении Сбербанка</p>
        </div>
    </div>
</div>



</div>

@include('layouts.footer')
