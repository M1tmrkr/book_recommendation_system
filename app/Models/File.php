<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends DM_BaseModel
{
    use HasFactory;
    //protected $fillable = ['document_id','account_document_id','title','file_path'];

    public function document() {
        return $this->belongsTo('App\Models\ApplicationDocument', 'document_id');
    }
}
