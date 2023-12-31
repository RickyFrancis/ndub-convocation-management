<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GraduateList extends Model{
    use HasFactory;

    public function departmentInfo(){
        return $this->belongsTo('App\Models\Department','department_id','department_id');
    }

    public function programInfo(){
        return $this->belongsTo('App\Models\Program','program_id','program_id');
    }

    public function batchInfo(){
        return $this->belongsTo('App\Models\Batch','batch_id','batch_id');
    }

    public function secondProgramInfo(){
        return $this->belongsTo('App\Models\GraduateList','second_program_grad_list_id','id')
        ->with(['departmentInfo', 'programInfo', 'batchInfo']);
    }
}
