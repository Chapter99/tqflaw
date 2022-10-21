<?php

namespace App\Http\Controllers;

use App\Model\Tqf;
use App\Model\Course;
use App\Model\Tqfcourse;
use Illuminate\Http\Request;
use Validator;

class TqfController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tqfs = Tqf::latest()->paginate(10);
        // dd($categorys);
        return view('backend.pages.tqfs.index', compact('tqfs'))->with('i', (request()->input('page', 1) -1 ) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('backend.pages.tqfs.create');
        $coures = Course::all();        
        return view('backend.pages.tqfs.create')
            ->with(compact('coures'));
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
        $rules = [
            'course_id' => 'required|digits:7',
            
            
        ];

        $messages = [
            'required' => 'นี้จำเป็นใส่ข้อมูล',
            'integer' => 'ฟิลด์นี้ต้องเป็นตัวเลขเท่านั้น',
            'digits' => 'ฟิลด์ :attribute ต้องมีความยาว :digits หลัก',
            'unique' => 'รายการนี้มีอยู่แล้วในตาราง (ห้ามซ้ำ)'
        ];

        $validator = Validator::make($request->all(), $rules,$messages);

        if($validator->fails()){ // ตรวจสอบไม่ผ่าน
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $tqf_data = array(
                'course_id' => $request->course_id,
                'teacher_name' => $request->teacher_name,      
                'level' => $request->level,
                'term' => $request->term,
                'nyear' => $request->nyear,                
                'status' => 0,
                'created_at' => NOW(),
                'updated_at' => NOW()
            );

            // Upload File Tqf3 PDF/Docx
            try{
                $file = $request->file('link_tqf3');
                // เช็คว่ามีการเลือกไฟล์ภาพเข้ามาหรือไม่
                if(!empty($file)){
                    $file_name = "law_tqf3_".$request->course_id.".".$file->getClientOriginalExtension();
                    if($file->getClientOriginalExtension() == "pdf" or $file->getClientOriginalExtension() == "docx"){

                        $path = "assets/images/tqf3s";

                        // ฟังก์ชันอัพโหลดไฟล์
                        $file->move($path,$file_name);
                      
                        $tqf_data['link_tqf3'] = $file_name;
                    }else{
                        return redirect()->route('tqfs.create')->withErrors($validator)->withInput()->with('status','<div class="alert alert-danger">ไฟล์ไม่รองรับ อนุญาติเฉพาะ .pdf และ .docx</div>');
                    }
                }
            }catch(Exception $e){
                print_r($e);
                return false;
            }

            // Upload File Tqf5 PDF/Docx
            try{
                $file = $request->file('link_tqf5');
                // เช็คว่ามีการเลือกไฟล์ภาพเข้ามาหรือไม่
                if(!empty($file)){
                    $file_name = "law_tqf5_".$request->course_id.".".$file->getClientOriginalExtension();
                    if($file->getClientOriginalExtension() == "pdf" or $file->getClientOriginalExtension() == "docx"){

                        $path = "assets/images/tqf5s";

                        // ฟังก์ชันอัพโหลดไฟล์
                        $file->move($path,$file_name);
                      
                        $tqf_data['link_tqf5'] = $file_name;
                    }else{
                        return redirect()->route('tqfs.create')->withErrors($validator)->withInput()->with('status','<div class="alert alert-danger">ไฟล์ไม่รองรับ อนุญาติเฉพาะ .pdf และ .docx</div>');
                    }
                }
            }catch(Exception $e){
                print_r($e);
                return false;
            }

            $status = Tqf::create($tqf_data);
            // print_r($status);
            return redirect()->route('tqfs.create')->with('success','บันทึกหมวดหมู่ใหม่เรียบร้อย');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\Tqf  $tqf
     * @return \Illuminate\Http\Response
     */
    public function show(Tqf $tqf)
    {
        //
        return "This is show";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\Tqf  $tqf
     * @return \Illuminate\Http\Response
     */
    public function edit(Tqf $tqf)
    {
        //
        $coures = Course::all();        
        return view('backend.pages.tqfs.edit', compact('tqf'))
        ->with(compact('coures'));
            
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\Tqf  $tqf
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tqf $tqf)
    {
        //
        $rules = [
            'course_id' => 'required|digits:7',
            
            
        ];

        $messages = [
            'required' => 'นี้จำเป็นใส่ข้อมูล',
            'integer' => 'ฟิลด์นี้ต้องเป็นตัวเลขเท่านั้น',
            'digits' => 'ฟิลด์ :attribute ต้องมีความยาว :digits หลัก',
            'unique' => 'รายการนี้มีอยู่แล้วในตาราง (ห้ามซ้ำ)'
        ];

        $validator = Validator::make($request->all(), $rules,$messages);

        if($validator->fails()){ // ตรวจสอบไม่ผ่าน
            return redirect()->back()->withErrors($validator)->withInput();
        }else{

            $tqf_data = array(
                'course_id' => $request->course_id,                    
                'level' => $request->level,
                'term' => $request->term,
                'nyear' => $request->nyear,
                'updated_at' => NOW()
            );

            // Upload File Tqf3 PDF/Docx
            try{
                $file = $request->file('link_tqf3');
                // เช็คว่ามีการเลือกไฟล์ภาพเข้ามาหรือไม่
                if(!empty($file)){
                    $file_name = "law_tqf3_".$request->course_id.".".$file->getClientOriginalExtension();
                    if($file->getClientOriginalExtension() == "pdf" or $file->getClientOriginalExtension() == "docx"){

                        $path = "assets/images/tqf3s";

                        // ฟังก์ชันอัพโหลดไฟล์
                        $file->move($path,$file_name);
                      
                        $tqf_data['link_tqf3'] = $file_name;
                    }else{
                        return redirect()->route('tqfs.create')->withErrors($validator)->withInput()->with('status','<div class="alert alert-danger">ไฟล์ไม่รองรับ อนุญาติเฉพาะ .pdf และ .docx</div>');
                    }
                }
            }catch(Exception $e){
                print_r($e);
                return false;
            }

            // Upload File Tqf5 PDF/Docx
            try{
                $file = $request->file('link_tqf5');
                // เช็คว่ามีการเลือกไฟล์ภาพเข้ามาหรือไม่
                if(!empty($file)){
                    $file_name = "law_tqf5_".$request->course_id.".".$file->getClientOriginalExtension();
                    if($file->getClientOriginalExtension() == "pdf" or $file->getClientOriginalExtension() == "docx"){

                        $path = "assets/images/tqf5s";

                        // ฟังก์ชันอัพโหลดไฟล์
                        $file->move($path,$file_name);
                      
                        $tqf_data['link_tqf5'] = $file_name;
                    }else{
                        return redirect()->route('tqfs.create')->withErrors($validator)->withInput()->with('status','<div class="alert alert-danger">ไฟล์ไม่รองรับ อนุญาติเฉพาะ .pdf และ .docx</div>');
                    }
                }
            }catch(Exception $e){
                print_r($e);
                return false;
            }
            $tqf->update($tqf_data);
        return redirect()->route('tqfs.index')->with('success','<div class="text-center alert alert-warning" role="alert">รายวิชา มคอ. ถูกถูกแก้ไขแล้ว</div>');
    }
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\Tqf  $tqf
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tqf $tqf)
    {
        // การลบข้อมูล
        //return "destroy";
        $tqf->delete();
        return redirect()->route('tqfs.index')->with('success','<div class="text-center alert alert-danger" role="alert">ลบรายการนี้แล้ว</div>');
    }
}
