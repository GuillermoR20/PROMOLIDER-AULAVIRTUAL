<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Producer;
use App\Models\Student;
use Illuminate\Http\Request;

class ProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $producer = Producer::select('Producers.name')
                ->where('Producers.id', '=', 1)
                ->get();

        $student = Student::select('Students.name')
                ->where('Students.id', '=', 1)
                ->get();

        $message = Message::select('Messages.text')
                ->join('Students_producers', 'Students_producers.id', '=', 'Messages.id_students_producers')
                ->where('Students_producers.id_producers', '=', 1)
                ->get();

    
        return view('prueba.productor.inicio.mensaje', compact('producer', 'student', 'message'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
