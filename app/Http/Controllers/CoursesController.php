<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Producer;
use App\Models\Students_producer;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index(request $request)
    {   
        $producer = Producer::where('id', 1)->get();

        $search = $request->get('search');

        $coursesLast = Course::select('Courses.title', 'Courses.price', 'Courses.description', 'Courses.status', 'Producers.name')
            ->join('Producers','Courses.id_producers', '=', 'Producers.id')
            ->where('id_producers', 1)
            ->orderby('Courses.id','DESC')
            ->limit(3)
            ->get();

        $coursesAll = Course::select('Courses.title', 'Courses.price', 'Courses.description', 'Courses.status', 'Producers.name')
            ->join('Producers','Courses.id_producers', '=', 'Producers.id')
            ->where('id_producers', 1)
            ->where('Courses.title', 'like', '%'.$search.'%')
            ->orderby('Courses.id','DESC')
            ->get();
        
        return view('producer.courses', compact('producer','coursesLast', 'coursesAll'));
    }

    /*public function index()
    {
        $affiliates = Students_producer::where('id_producers', 1)->get();
        $number_affiliates = count($affiliates);
        return view('dashboard', compact('number_courses', 'courses', 'price', 'subscriptions', 'number_affiliates', 'producer'));

        // return view('prueba.productor.inicio.courses', compact('producer','coursesLast', 'coursesAll'));

    }*/
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $id)
    {
        $new_course = New Course;

        $new_course->id_producers = $id;
        $new_course->id_categories = $request->id_categories;
        $new_course->title = $request->title;
        $new_course->area = $request->area;
        $new_course->description = $request->description;
        $new_course->image = $request->image;
        $new_course->currency = $request->currency;
        $new_course->price = $request->price;
        $new_course->ranking_by_user = $request->ranking_by_user;
        $new_course->status = 0;

        $new_course->save();

        return $new_course->with('new_course','course created successfully');

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
