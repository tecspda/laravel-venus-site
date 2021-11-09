<div class="p-2 text-center">
    <p>
        Used <span class="p-1 px-2 rounded" style="background-color: #e2e2e2">@@inject</span> service of Laravel.
        Data from model Currency (my custom)
    </p>
</div>


<div class="p-2 pt-0 mx-auto " style="width: 150px;">
    <h5 class="mb-3 text-left"><b>Currency today</b></h5>

    <div class="text-right" style="display: flex;">
        <div class="text-left" style="flex-grow: 2;">USD</div>
        <div style="flex-grow: 1;">{{ $winget_online->RUB_USD }}</div>
    </div>

    <div class="text-right" style="display: flex;">
        <div class="text-left" style="flex-grow: 2;">EUR</div>
        <div style="flex-grow: 1;">{{ $winget_online->RUB_EUR }}</div>
    </div>

    <div class="text-right" style="display: flex;">
        <div class="text-left" style="flex-grow: 2;">TRY</div>
        <div style="flex-grow: 1;">{{ $winget_online->RUB_TRY }}</div>
    </div>
</div>
