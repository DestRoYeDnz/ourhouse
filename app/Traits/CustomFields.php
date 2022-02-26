<?php

namespace App\Traits;


trait CustomFields
{
    public function getCustomFieldsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function setCustomFieldsAttribute($value)
    {
        $this->attributes['custom_fields'] = json_encode($value);
    }

    public function getCustomFields($key)
    {
        return $this->custom_fields[$key] ?? null;
    }

    public function updateCustomFields($key, $value)
    {
        $custom_fields = $this->custom_fields;
        $custom_fields[$key] = $value;

        return $this->update([
            'custom_fields' => $custom_fields
        ]);
    }

    public function deleteCustomFields($key)
    {
        $custom_fields = $this->custom_fields;
        unset($custom_fields[$key]);

        return $this->update([
            'custom_fields' => $custom_fields
        ]);
    }
}
