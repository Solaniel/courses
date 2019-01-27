<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Lecturer extends Model
{
    protected $fillable = [
        'firstName','lastName','organisation'
    ];

    public function getSpecificSelectData()
    {
        $mappedData = [];
        $result = DB::select("SELECT concat(`firstName`, ' ', `lastName`) as `lecturerName`, `id`
          FROM coursesdatabase.lecturers;");
        if (!empty($result)) {
            foreach ($result as $key => $value) {
                $mappedData[$value->id] = $value->lecturerName;
            }
        }
        return $mappedData;
    }
    public function names() {
        return $this->belongsTo('App\Lecturer');
    }
}
