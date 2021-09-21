<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producer;
use App\Models\Course;
use App\Models\Subscription;
use App\Models\Students_producer;
use App\Models\Message;
use App\Models\Student;


class MainProducerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $producer = Producer::where('id', 1)->get();

        $courses = Course::where('id_producers', 1)->get();
        $number_courses = count($courses);

        $price = Course::select('Courses.price')
                ->join('Course_students', 'Courses.id', '=', 'Course_students.id_course')
                ->join('Payments', 'Course_students.id', '=', 'Payments.id_Course_students')
                ->where('Courses.id_producers', '=', 1)
                ->sum('price');
        
        $ventas = Course::select('Courses.*', 'Students.*')
                ->join('Course_students', 'Courses.id', '=', 'Course_students.id_course')
                ->join('Payments', 'Course_students.id', '=', 'Payments.id_Course_students')
                ->join('Students', 'Course_students.id_students', '=', 'Students.id')
                ->where('Courses.id_producers', '=', 1)
                ->orderby('Payments.id', 'DESC')
                ->get();

        $subscriptions = Subscription::select('Subscriptions.type')
                ->join('Students_producers', 'Students_producers.id', '=', 'Subscriptions.id_students_producers')
                ->where('Students_producers.id_producers', '=', 1)
                ->distinct()
                ->get();

        if($subscriptions->isEmpty()){
            $subscriptions[] =  (['type'=>'ninguno']);
        }
        
        
        $affiliates = Students_producer::where('id_producers', 1)->get();
        $number_affiliates = count($affiliates);

        $student = Student::select('Students.name')
                ->where('Students.id', '=', 1)
                ->get();

        $messages = Message::select('Messages.text', 'Producers.name AS name_producers', 'Students.name AS name_students')
                ->join('Students_producers', 'Students_producers.id', '=', 'Messages.id_students_producers')
                ->join('Students', 'Students.id', '=', 'Students_producers.id_students')
                ->join('Producers', 'Producers.id', '=', 'Students_producers.id_producers')
                ->where('Students_producers.id_producers', '=', 1)
                ->orderby('Messages.id', 'DESC')
                ->limit(2)
                ->get();
        

<<<<<<< HEAD
<<<<<<< HEAD
        return view('producer.dashboard', compact('number_courses', 'courses', 'price', 'subscriptions', 'number_affiliates', 'producer', 'ventas', 'message', 'student'));
=======
        return view('prueba.productor.inicio.index', compact('number_courses', 'courses', 'price', 'subscriptions', 'number_affiliates', 'producer', 'ventas', 'message', 'student'));
>>>>>>> dc4e006a8a7dba1aa19103af66e740bc1a2541b3
=======
        return view('producer.dashboard', compact('number_courses', 'courses', 'price', 'subscriptions', 'number_affiliates', 'producer', 'ventas', 'messages', 'student'));
        // return view('prueba.productor.inicio.index', compact('number_courses', 'courses', 'price', 'subscriptions', 'number_affiliates', 'producer', 'ventas', 'messages', 'student'));
>>>>>>> 1a76b53923282dd54070d446e9b6412c14d1d1cc
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
