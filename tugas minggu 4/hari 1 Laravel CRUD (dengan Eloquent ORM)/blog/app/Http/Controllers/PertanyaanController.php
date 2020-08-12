<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Question;

class PertanyaanController extends Controller
{
    public function index() {
        $page = 'Questions';
        // cara mengunakan query builder
        // $questions = DB::table('questions')->get();

        // cara memanggil data mengunakan model / eloquent ORM
        $questions = Question::all();

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

        // $query = DB::table('questions')->insert([
        //     'judul' => $request['judul'],
        //     'isi' => $request['isi']
        // ]);
        
        // mengunakan cara default insert mengunakan model / eloquent ORM
        // $question = new Question;
        // $question->judul = $request['judul'];
        // $question->isi = $request['isi'];
        // $question->save();

        // mengunakan cara mass assigment dengan modal / eloquent ORM
        $question = Question::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);

        return redirect('/pertanyaan')->with('success', 'Question Berhasil Di Simpan!');
    }

    public function show($pertanyaan_id) {
        $page = 'Show';
        // cara mengunakan query builder
        // $question = DB::table('questions')->where('id', $pertanyaan_id)->first();

        // cara menunjuk data mengunakan model / eloquent ORM
        $question = Question::find($pertanyaan_id);

        return view('questions.show', compact('question'), ['page' => $page]);
    }

    public function edit($pertanyaan_id) {
        $page = 'Edit';
        // cara mengunakan query builder
        // $question = DB::table('questions')->where('id', $pertanyaan_id)->first();

        // cara menunjuk data mengunakan model / eloquent ORM
        $question = Question::find($pertanyaan_id);

        return view('questions.edit', compact('question'), ['page' => $page]);
    }

    public function update($pertanyaan_id, Request $request) {
        $request->validate([
            'judul' => 'required|unique:questions',
            // 'judul' => ['required', Rule::unique('questions')->ignore($pertanyaan_id)],
            'isi' => 'required'
        ]);

        // cara mengunakan query builder
        // $query = DB::table('questions')->where('id', $pertanyaan_id)->update([
        //     'judul' => $request['judul'],
        //     'isi' => $request['isi']
        // ]);

        // cara update mengunakan cara mass assigment dengan modal / eloquent ORM
        $query = Question::where('id', $pertanyaan_id)->update([
            'judul' => $request['judul'],
            'isi' => $request['isi']
        ]);

        return redirect('/pertanyaan')->with('success', 'Berhasil Update Questions!');
    }

    public function destroy($pertanyaan_id) {
        // cara mengunakan query builder
        // $query = DB::table('questions')->where('id', $pertanyaan_id)->delete();

        // cara delete dengan modal / eloquent ORM
        Question::destroy($pertanyaan_id);
        return redirect('/pertanyaan')->with('success', 'Question Berhail Di Delete!');
    }
}
