<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use App\Models\UserModel;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    // public function create(){
    //     return view('create_user', [
    //         'kelas' => Kelas::all(),
    //     ]);
    // }

    public $userModel;
    public $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_user', $data);
    }

    public function create(){
        // $kelasModel = new Kelas();
        
        // Mengambil data kelas menggunakan method getKelas
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,
        ];

        return view ('create_user', $data);
    }

    // public function store(){
    //     return view('profile');
    // }

    // public function store(Request $request){
    //     $data = $request->all();
    //     dd($data);
    // }

    // public function store(Request $request){
    //     $data = [
    //         'nama' => $request->input('nama'),
    //         'kelas' => $request->input('kelas'),
    //         'npm' => $request->input('npm')
    //     ];
    //     return view('profile', $data);
    // }

    // public function store(UserRequest $request)
    // {
    //     $validatedData = $request->validate([
    //         'nama' => 'string|max:255',
    //         'npm' => 'string|max:255',
    //         'kelas_id' => 'exists:kelas,id',
    //     ]);

    //     $user = UserModel::create($validatedData);

    //     $user->load('kelas');

    //     return view('profile', [
    //         'nama' => $user->nama,
    //         'npm' => $user->npm,
    //         'nama_kelas' => $user->kelas->nama_kelas ?? 'Kelas tidak ditemukan',
    //     ]);
    // }

    public function store(Request $request)
    {
        $user = $this->userModel->create([
            'nama' => $request->input('nama'),
            'npm' => $request->input('npm'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user');
    }

}
