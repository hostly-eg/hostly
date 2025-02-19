<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\AffilateField;
class affilate extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'price', 'description', 'fields'];
    protected $casts = [
        'fields' => 'array',
    ];
    public function getFieldsRenderedAttribute()
    {
        $fields = json_decode($this->fields, true);
        $renderedFields = [];

        foreach ($fields as $fieldId => $fieldValue) {
            $field = AffilateField::find($fieldId);
            $renderedFields[$fieldId] = [
                'id' => $fieldId,
                'name' => $field->name,
                'value' => $fieldValue,
            ];
        }
        return $renderedFields;
    }
}
