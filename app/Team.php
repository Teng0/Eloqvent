<?php

namespace App;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class Team extends Pivot
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table="project_user";


}
