@component('mail::message')
    <h4>Cash Bonus</h4>

    Hello {{$info['name']}}, you have recieve a cash bonus of {{$info['amount']}}
    for a total of group {{$info['sales']}}

    Majestic Cares Community (MCC)
@endcomponent
