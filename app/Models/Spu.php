<?php

namespace App\Models;

use Dcat\Admin\Traits\HasDateTimeFormatter;

use Illuminate\Database\Eloquent\Model;

class Spu extends Model
{
	use HasDateTimeFormatter;
    protected $table = 'pms_spu';
    
}
