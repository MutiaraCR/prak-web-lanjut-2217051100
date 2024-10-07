<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $guarded = ['id'];
    protected $fillable = [
        'nama',
        'npm',
        'kelas_id',
        'foto',
    ];

    // PRAKTIKUM 6
    public function getUser($id = null){
        $query = $this->with('kelas')
                    ->join('kelas', 'kelas.id', '=', 'user.kelas_id')
                     ->select('user.*', 'kelas.nama_kelas');
                     
        if ($id != null){
            return $query->where('user.id', $id)->first();
        }
    
        // Jika $id tidak diberikan, kembalikan semua user
        return $query->get();
    }    

    // PRAKTIKUM 5
    // public function getUser(){
    //     return $this->join('kelas', 'kelas.id', "=", 'user.kelas_id')
    //                 ->select('user.*', 'kelas.nama_kelas as nama_kelas')
    //                 ->get();
    // }

    public function kelas(){
        return $this->belongsTo(Kelas::class, 'kelas_id'); 
    }
}
