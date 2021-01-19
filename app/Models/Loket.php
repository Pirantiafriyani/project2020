<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loket extends Model
{
    protected $guarded = [''];
    protected $appends = ['status_label', 'status_warna', 'status_spinner'];


    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // StatusLabel = status_label

    public function getStatusLabelAttribute()
    {
        if($this->status == 1)
            return 'Request';
        else if($this->status == 2)
            return 'Diproses';
        else
            return 'Tersedia';

    }

    public function getStatusWarnaAttribute()
    {
        if($this->status == 1)
            return 'btn btn-sm btn-warning';
                
        else if($this->status == 2)
            return 'btn btn-sm btn-info';
        else
            return 'btn btn-sm btn-success';
    }

    public function getStatusSpinnerAttribute()
    {
        if ($this->status == 1)
            return 'spinner-grow spinner-grow-sm';
    }

}