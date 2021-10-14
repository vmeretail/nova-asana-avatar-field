<?php

namespace Vmeretail\NovaAsanaAvatarField;

use Laravel\Nova\Fields\Avatar;

class NovaAsanaAvatarField extends Avatar
{
    /**
     * Create a new field.
     *
     * @param  string  $name
     * @param  string|null  $attribute
     * @param  mixed|null  $resolveCallback
     * @return void
     */
    public function __construct($name = 'Avatar', $attribute = 'avatar_url', $resolveCallback = null)
    {
        parent::__construct($name, $attribute ?? 'avatar_url', $resolveCallback);

        $this->exceptOnForms();

        $this->withMeta(['indexName' => '']);
    }

    /**
     * Resolve the given attribute from the given resource.
     *
     * @param  mixed  $resource
     * @param  string  $attribute
     * @return mixed
     */
    protected function resolveAttribute($resource, $attribute)
    {
        $callback = function () use ($resource, $attribute) {
            return parent::resolveAttribute($resource, $attribute);
        };

        $this->preview($callback)->thumbnail($callback);
    }
}
