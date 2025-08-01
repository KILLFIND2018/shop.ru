@include('layouts.head')
@include('layouts.mainmenu')

<div class="contacts-header">
    <h1>{{ $title}}</h1>
</div>
<div class="contacts-phone-items">
    <h1>Наши контактные телефоны</h1>
    <div class="contacts-phone-item">
        <p>По Москве</p>
    <button type="button" class="phonebtn">8-495-123-45-56</button>
    </div>
    <div class="contacts-phone-item">
        <p>По России</p>
    <button type="button" class="phonebtn">8-800-123-45-56</button>
    </div>
</div>

<div class="contacts-email-items">

</div>

@include('layouts.footer')
