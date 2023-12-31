<?php 

namespace App\Filters;

use EloquentFilter\ModelFilter;

class PersonalFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];
    public function search($search): PersonalFilter
    {
        return $this->where('nombre', 'LIKE', '%'.$search.'%')
            ->orWhere('correo', 'LIKE', '%'.$search.'%');
    }
}
