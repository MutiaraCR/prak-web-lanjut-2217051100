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

    // public function store(Request $request)
    // {
    //     $user = $this->userModel->create([
    //         'nama' => $request->input('nama'),
    //         'npm' => $request->input('npm'),
    //         'kelas_id' => $request->input('kelas_id'),
    //     ]);

    //     return redirect()->to('/user');
    // }

        public function store(Request $request)
        {
            // Validasi input
            $request->validate([
            'nama' => 'required|string|max:255',
            'npm' => 'required|string|max:255',
            'kelas_id' => 'required|integer',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', // Validasi untuk foto
            ]);

            // Meng-handle upload foto
            if ($request->hasFile('foto')) {
                $foto = $request->file('foto');

                // Menghasilkan nama file yang di-hash beserta ekstensinya
                $foto_name = $foto->hashName(); 
                
                // Memindahkan file ke folder public/upload/img menggunakan forward slash
                $foto->move(public_path('upload/img'), $foto_name);

                // Simpan hanya nama file di database, bukan path lengkap
                $fotoPath = $foto_name;
            } else {
                // Jika tidak ada file yang diupload, set fotoPath menjadi null atau default
                $fotoPath = null;
            }

            // Menyimpan data ke database termasuk path foto
            $this->userModel->create([
                'nama' => $request->input('nama'),
                'npm' => $request->input('npm'),
                'kelas_id' => $request->input('kelas_id'),
                'foto' => $fotoPath, // Menyimpan path foto
            ]);

            return redirect()->to('/user')->with('success', 'User berhasil ditambahkan');
        }

        public function show($id) {
            $user = $this->userModel->getUser($id); // Mengambil user berdasarkan ID
            $data = [
                'title' => 'Profile',
                'user' => $user,
            ];
    
            return view('profile', $data);
        }    

}
