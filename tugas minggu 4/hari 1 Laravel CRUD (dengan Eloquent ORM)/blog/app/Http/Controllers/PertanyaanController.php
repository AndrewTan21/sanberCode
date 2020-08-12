<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index() {
        $page = 'Questions';
        $questions = DB::table('questions')->get();
        return view('questions.question', ['page' => $page], compact('questions'));
    }

    public function create() {
        $page = 'Create Question';
        return view('questions.create', ['page' => $page]);
    }

    public function store(Request $request) {
        $request->validate([
            'judul' => 'required|unique:questions',
            'isi' => 'required'
        ]);

        $query = DB::table('questions')->insert([
                'judul' => $request['judul'],
                'isi' => $request['isi']
            ]);

        return redirect('/pertanyaan')->with('success', 'Question Berhasil Di Simpan!');
    }

    public function show($pertanyaan_id) {
        $page = 'Show';
        $question = DB::table('questions')->where('id', $pertanyaan_id)->first();
        return view('questions.show', compact('question'), ['page' => $page]);
    }

    public function edit($pertanyaan_id) {
        $page = 'Edit';
        $question = DB::table('questions')->where('id', $pertanyaan_id)->first();
        return view('questions.edit', compact('question'), ['page' => $page]);
    }

    public function update($pertanyaan_id, Request $request) {
        $request->validate([
            'judul' => 'required|unique:questions',
            // 'judul' => ['required', Rule::unique('questions')->ignore($pertanyaan_id)],
            'isi' => 'required'
        ]);

        $query = DB::table('questions')->where('id', $pertanyaan_id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);
        return redirect('/pertanyaan')->with('success', 'Berhasil Update Questions!');
    }

    public function destroy($pertanyaan_id) {
        $query = DB::table('questions')->where('id', $pertanyaan_id)->delete();
        return redirect('/pertanyaan')->with('success', 'Question Berhail Di Delete!');
    }
}
