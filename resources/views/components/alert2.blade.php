<div {{$attributes -> merge(['class' => 'p-4 mb-4 text-sm rounded-lg' . $class]) }} role="alert">
    <span class="font-medium"> {{$title ?? 'si esto aaparece es por que title no esta definido en html'}}</span> {{$slot}}

</div> 