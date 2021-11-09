@php
use App\Models\Currency;

// Currency is a class.
// return  
//  ->RUB_USD
//  ->RUB_EUR
//  ->RUB_TRY
//  ->etc

$curr = new Currency(4);

@endphp

<div class="p-2 mx-auto " style="width: 150px;">
    <h5 class="mb-3 text-left"><b>Currency today</b></h5>

    <div class="text-right" style="display: flex;">
        <div class="text-left" style="flex-grow: 2;">USD</div>
        <div style="flex-grow: 1;">{{ $curr->RUB_USD }}</div>
    </div>

    <div class="text-right" style="display: flex;">
        <div class="text-left" style="flex-grow: 2;">EUR</div>
        <div style="flex-grow: 1;">{{ $curr->RUB_EUR }}</div>
    </div>

    <div class="text-right" style="display: flex;">
        <div class="text-left" style="flex-grow: 2;">TRY</div>
        <div style="flex-grow: 1;">{{ $curr->RUB_TRY }}</div>
    </div>
</div>

