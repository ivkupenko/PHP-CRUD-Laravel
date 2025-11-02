<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attribute;
use App\Models\AttributeValue;

class AttributeValuesSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            'color' => ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'],
            'material' => ['cotton', 'leather', 'wool', 'silk', 'polyester'],
            'size' => ['xs', 's', 'm', 'l', 'xl', 'xxl'],
        ];

        foreach ($data as $attributeName => $values) {
            $attribute = Attribute::where('name', $attributeName)->firstOrFail();

            foreach ($values as $value) {
                AttributeValue::firstOrCreate([
                    'attribute_id' => $attribute->id,
                    'value' => strtolower($value),
                ]);
            }
        }
    }
}
