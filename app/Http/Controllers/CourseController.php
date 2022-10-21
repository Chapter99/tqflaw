<?php

namespace App\Http\Controllers;

use App\Model\Course;
use Illuminate\Http\Request;
use Validator; 


class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        //return view('backend.pages.courses.index');
        $courses = Course::latest()->paginate(10);
        // dd($categorys);
        return view('backend.pages.courses.index', compact('courses'))->with('i', (request()->input('page', 1) -1 ) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('backend.pages.courses.create');
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
        // echo"<pre>";
        // print_r($request->all());
        // echo"</pre>";

        $rules = [
            'course_id' => 'required|digits:7|unique:courses',
            'course_name' => 'required',
            'name_eng' => 'required',
            'degree' => 'required|integer' 
        ]; 

        $messages = [
            'required' => 'ฟิลด์ :attribute นี้จำเป็น',
            'integer' => 'ฟิลด์นี้ต้องเป็นตัวเลขเท่านั้น',
            'digits' => 'ฟิลด์ :attribute ต้องเป็นตัวเลขความยาว :digits หลัก',
            'unique' => 'รายการนี้มีอยู่แล้วในตาราง (ห้ามซ้ำ)'
        ];

        $validator = Validator::make($request->all(), $rules,$messages);

        if($validator->fails()){ // ตรวจสอบไม่ผ่าน
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $course_data = array(
            'course_id' => $request->course_id,
            'course_name' => $request->course_name,
            'name_eng' => $request->name_eng,
            'degree' => $request->degree,
            'created_at' => NOW(),
            'updated_at' => NOW()
            );

            //Course::created($request->all());
            $status = Course::create($course_data);
            // print_r($status);
            return redirect()->route('courses.create')->with('success','บันทึกรายวิชาใหม่เรียบร้อย');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
        return "This is show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Course $course)
    {
        //
        return view('backend.pages.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
        $rules = [
            'course_id' => 'required|digits:7',
            'course_name' => 'required',
            'name_eng' => 'required',
            'degree' => 'required|integer'    
        ]; 

        $messages = [
            'required' => 'ฟิลด์ :attribute นี้จำเป็น',
            'integer' => 'ฟิลด์นี้ต้องเป็นตัวเลขเท่านั้น',
            'digits' => 'ฟิลด์ :attribute ต้องเป็นตัวเลขความยาว :digits หลัก',
            'unique' => 'รายการนี้มีอยู่แล้วในตาราง (ห้ามซ้ำ)'
        ];

        $validator = Validator::make($request->all(), $rules,$messages);

        if($validator->fails()){ // ตรวจสอบไม่ผ่าน
            return redirect()->back()->withErrors($validator)->withInput();
        }else{
        $course_data = array(
        'course_id' => $request->course_id,
        'course_name' => $request->course_name,
        'name_eng' => $request->name_eng,
        'degree' => $request->degree,
        'created_at' => NOW(),
        'updated_at' => NOW()
        );
        //
        $course->update($course_data);
        return redirect()->route('courses.index')->with('success','<div class="text-center alert alert-warning" role="alert">รายวิชาถูกแก้ไขแล้ว</div>');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(Course $course)
    {
        //
        //return "destroy";
        $course->delete();
        return redirect()->route('courses.index')->with('success','<div class="text-center alert alert-danger" role="alert">ลบรายการนี้แล้ว</div>');
    }
}
