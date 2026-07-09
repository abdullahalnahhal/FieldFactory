<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FieldTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Common HTML input types and form elements
        $fieldTypes = [
            ['name' => 'Input', 'slug' => 'text'],
            ['name' => 'Email', 'slug' => 'email'],
            ['name' => 'Password', 'slug' => 'password'],
            ['name' => 'Number', 'slug' => 'number'],
            ['name' => 'Counter', 'slug' => 'counter'],
            ['name' => 'Telephone', 'slug' => 'tel'],
            ['name' => 'URL', 'slug' => 'url'],
            ['name' => 'Date', 'slug' => 'date'],
            ['name' => 'Datetime-local', 'slug' => 'datetime-local'],
            ['name' => 'Time', 'slug' => 'time'],
            ['name' => 'Color', 'slug' => 'color'],
            ['name' => 'Range', 'slug' => 'range'],
            ['name' => 'File', 'slug' => 'file'],
            ['name' => 'Hidden', 'slug' => 'hidden'],
            ['name' => 'Checkbox', 'slug' => 'checkbox'],
            ['name' => 'Radio', 'slug' => 'radio'],
            ['name' => 'Select', 'slug' => 'select'],
            ['name' => 'Textarea', 'slug' => 'textarea'],
            ['name' => 'Button', 'slug' => 'button'],
            ['name' => 'Submit', 'slug' => 'submit'],
            ['name' => 'Reset', 'slug' => 'reset'],
            ['name' => 'Image', 'slug' => 'image'],
            ['name' => 'Country', 'slug' => 'country'],
            // Add any custom or additional field types here
            // 'destination' can be set to a default value or left null
        ];

        $now = now();

        $data = array_map(function ($type) use ($now) {
            return [
                'name'       => $type['name'],
                'slug'       => $type['slug'],
                'destination'=> null, // or set a default mapping if needed
                'created_at' => $now,
                'updated_at' => $now,
            ];
        }, $fieldTypes);

        DB::table('field_types')->insert($data);
    }
}
