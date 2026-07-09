<?php

namespace FormFactory\Fieldfactory\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $type;

    /**
     * Create a new component instance.
     */
    public function __construct(string $type, array $arguments = [])
    {
        $this->type = $type;
        $this->arguments = $arguments;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        switch ($this->type) {
            case 'textarea':
                $view = 'components.textarea';
                break;
            case 'button':
            case 'submit':
            case 'reset':
                $view = 'components.button';
                break;
            case 'select':
            case 'multiselect':
                $view = 'components.select';
                break;
            default :
                $view = 'components.text';
                break;
        }
        return view($view, $this->arguments);
    }
}
