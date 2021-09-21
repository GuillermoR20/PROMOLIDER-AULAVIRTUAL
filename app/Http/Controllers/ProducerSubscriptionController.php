<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Payment;

class ProducerSubscriptionController extends Controller
{
    public function index(request $request){
        
        $id_students = $request->get('id');

        $students_subscriptions = Subscription::select('Students.*')
        ->join('Students_producers', 'Subscriptions.id_students_producers', '=', 'Students_producers.id')
        ->join('Students', 'Students_producers.id_students', '=', 'Students.id')
        ->where('Students_producers.id_producers', '=', 1)
        ->get();

        $students_courses = Payment::select('Courses.*', 'Students.*')
        ->join('Course_students', 'Payments.id_course_students', '=', 'Course_students.id')
        ->join('Courses', 'Course_students.id_course', '=', 'Courses.id')
        ->join('Students', 'Course_students.id_students', '=', 'Students.id')
        ->where('Course_students.id_students', '=', $id_students)
        ->distinct()
        ->get();


        return view('prueba.productor.inicio.producerSubscripcion', compact('students_subscriptions', 'students_courses'));
    }
}
