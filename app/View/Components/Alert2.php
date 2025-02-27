<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert2 extends Component
{
    public $class;
    /**
     * Create a new component instance.
     */
    public function __construct($type = 'info')
    {
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
        $this -> class = $class;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert2');
    }
}
