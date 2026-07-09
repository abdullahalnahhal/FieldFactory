<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::text([
        'name'=> 'text',
        'id'=> 'Text',
        'placeholder' => 'Text',
        'label' => 'Text',
        'classes' => 'form-control',
        'labelClasses' => 'form-label',
        'required' => true,
        'disabled' => false,
        'attributes' => [
            'data-custom' => 'custom-value',
            'data-another' => 'another-value',
        ],
    ]) !!}
</div>
<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::password([
        'name'=> 'password',
        'id'=> 'password',
        'placeholder' => 'password',
        'label' => 'password',
        'classes' => 'form-control',
        'labelClasses' => 'form-label',
        'required' => true,
        'disabled' => false,
        'attributes' => [
            'data-custom' => 'custom-value',
            'data-another' => 'another-value',
        ],
    ]) !!}
</div>
<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::number([
        'name'=> 'Number',
        'id'=> 'Number',
        'placeholder' => 'Number',
        'label' => 'Number',
        'classes' => 'form-control',
        'labelClasses' => 'form-label',
        'required' => true,
        'disabled' => false,
        'extraAttribs' => [
            'step' => '000.05',
        ],
    ]) !!}
</div>

<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::tel([
        'name'=> 'Telephone',
        'id'=> 'Telephone',
        'placeholder' => 'Telephone',
        'label' => 'Telephone',
    ]) !!}
</div>

<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::date([
        'name'=> 'Date',
        'id'=> 'Date',
        'placeholder' => 'Date',
        'label' => 'Date',
    ]) !!}
</div>

<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::time([
        'name'=> 'Time',
        'id'=> 'Time',
        'placeholder' => 'Time',
        'label' => 'Time',
    ]) !!}
</div>

<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::dateTimeLocal([
        'name'=> 'Date Time Local',
        'id'=> 'Date Time Local',
        'placeholder' => 'Date Time Local',
        'label' => 'Date Time Local',
    ]) !!}
</div>

<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::checkbox([
        'name'=> 'checkbox',
        'id'=> 'checkbox',
        'placeholder' => 'Check Box',
        'label' => 'Check Box',
    ]) !!}
</div>

<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::radio([
        'name'=> 'radio',
        'id'=> 'radio',
        'placeholder' => 'radio',
        'label' => 'radio',
    ]) !!}
</div>

<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::file([
        'name'=> 'file',
        'id'=> 'file',
        'placeholder' => 'file',
        'label' => 'file',
    ]) !!}
</div>

<div>
    {!! \FormFactory\Fieldfactory\FieldFactory::textarea([
        'name'=> 'textarea',
        'id'=> 'textarea',
        'placeholder' => 'TextArea',
        'label' => 'TextArea',
    ]) !!}
</div>
