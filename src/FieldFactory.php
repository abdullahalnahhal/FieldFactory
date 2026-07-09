<?php

namespace FormFactory\Fieldfactory;

use Blade;
use Exception;
use FormFactory\Fieldfactory\Models\FieldType;
use FormFactory\Fieldfactory\View\Components\Input;
use Illuminate\Support\Collection;

class FieldFactory
{
    private $type;
    public function __construct(array|string $data )
    {
        if(is_string($data) ){
            if(json_validate($data)){
                $data = json_decode($data,true);
            }else{
                throw new Exception('Data is not valid JSON ... !');
            }
        }

        $this->parseData($data);
    }

    private function listTypes(): Collection
    {
        return FieldType::all();
    }
    private function getType(string $type): ?FieldType
    {
        return FieldType::where('type', $type)->firstOrFail();
    }

    private function parseData(array $data): void
    {
        if(is_array($data)){
            $this->parseData($data);
        }
    }

    public function __get(string $name )
    {
        return $this?->{$name};
    }

    public static function __callStatic(string $fieldType , array $arguments)
    {
        $component = new Input($fieldType, $arguments[0]);

        return Blade::renderComponent($component);
    }
}
