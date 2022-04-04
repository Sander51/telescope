<?php

namespace Laravel\Telescope;

use Illuminate\Support\Arr;

class FormatModel
{
    /**
     * Format the given model to a readable string.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @return string
     */
    public static function given($model)
    {
        $key = method_exists($model, 'getReadableKey')
                            ? $model->getReadableKey()
                            : $model->getKey();
        return get_class($model).':'.implode('_', Arr::wrap($key));
    }
}
