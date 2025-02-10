@props(['type'])

@php
    switch ($type) {
        case 'Info':
            $class='text-blue-800 rounded-lg bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;

        case 'Danger':
            $class='text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;

        case 'Success':
            $class='text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;

        case 'Warning':
            $class='text-yellow-800 rounded-lg bg-yellow-50 dark:bg-gray-800 dark:text-yellow-300';
            break;

        case 'Dark':
            $class='text-gray-800 rounded-lg bg-gray-50 dark:bg-gray-800 dark:text-gray-300';
            break;

        default:
            $class = 'text-gray-500 bg-gray-200'; // Valor por defecto
            break;
    }
@endphp


<div class="p-4 mb-4 text-sm rounded-lg {{$class}}" role="alert">
    <span class="font-medium"> {{$title ?? 'si esto aaparece es por que title no esta definido en html'}}</span> {{$slot}}
</div> 