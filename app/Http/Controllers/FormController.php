<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Form::all();
        return view('form-index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form-biodata');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $form = new Form([
            'nama' => $request->input('form-nama'),
            'nim' => $request->input('form-nim'),
            'telp' => $request->input('form-telp'),
            'email' => $request->input('form-email'),
            'gender' => $request->input('gender'),
            'agama' => $request->input('options'),
            'prodi' => $request->input('form-prodi'),
            'tgl_lahir' => $request->input('datepicker'),
        ]);
    
        $form->save();
    
        return redirect('/form');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = Form::find($id);
        
        if ($data) {
            return view('form-show', compact('data'));
        } else {
            return abort(404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Form::find($id);
        
        if ($data) {
            return view('form-edit', compact('data'));
        } else {
            return abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Temukan data berdasarkan ID
        $data = Form::find($id);
    
        if (!$data) {
            return abort(404); // Jika data tidak ditemukan, kembalikan respons 404
        }
    
        // Perbarui data berdasarkan input tanpa validasi
        $data->nama = $request->input('form-nama');
        $data->nim = $request->input('form-nim');
        $data->telp = $request->input('form-telp');
        $data->email = $request->input('form-email');
        $data->gender = $request->input('gender');
        $data->agama = $request->input('options');
        $data->prodi = $request->input('form-prodi');
        $data->tgl_lahir = $request->input('datepicker');
        $data->save();
    
        return redirect()->route('form.show', ['form' => $data->id]);
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Temukan data berdasarkan ID
        $data = Form::find($id);
    
        if (!$data) {
            return abort(404); // Jika data tidak ditemukan, kembalikan respons 404
        }
    
        // Hapus data
        $data->delete();
    
        return redirect()->route('form.index');
    }
    
}
