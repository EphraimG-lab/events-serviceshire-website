{{-- The Merge method help you to add more classes in your div
    so whenever you used <x-blog></x-blog> you can add more  class e.g.
    <x-blog class="-bottom-32"></x-blog> without modifying the one stated below  --}}

<div {{$attributes->merge(['class' =>'blog'])}}>

    {{$slot}}

</div>