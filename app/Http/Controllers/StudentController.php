<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student.index');
    }
    public function store(Request $request){
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $unique_name = md5(time().rand()).$file->getClientOriginalExtension();
            $file->move(public_path('assets/media/img'),$unique_name);
        }


        Student::create([
           'name' => $request->name,
           'email' => $request->email,
           'cell' => $request->cell,
           'username' => $request->username,
           'gender' => $request->gender,
           'photo' => $unique_name,
        ]);
        return redirect()->back()->with('success','data insert successfully');
    }
    public function all(){
       $all_stu = Student::latest()->get();
       $content='';
       $i =1;
       foreach ($all_stu as $stu){
           $content .='<tr>';
           $content .='<td>'.$i;$i++.'</td>';
           $content .='<td>'.$stu->name.'</td>';
           $content .='<td>'.$stu->email.'</td>';
           $content .='<td>'.$stu->cell.'</td>';
           $content .='<td>'.$stu->username.'</td>';
           $content .='<td>'.$stu->gender.'</td>';
           $content .='<td><img src="assets/media/img/'.$stu->photo.'" alt=""></td>';
           $content .='<td>
            <a id="view_btn" view_data="'.$stu->id.'" class="btn btn-sm btn-info" href="#">View</a>
            <a id="edit_btn" edit_data="'.$stu->id.'" class="btn btn-sm btn-warning" href="#">Edit</a>
            <a class="btn btn-sm btn-danger" href="#">Delete</a>
            </td>';
           $content.='<tr>';
       }
        echo $content;
    }
    public function show($id){
      return $show_data = Student::find($id);
    }
    public function edit($id){
        return $edit_data = Student::find($id);
    }
    public function update(Request $request,$id){
        $update_data = Student::find($id);
        $update_data->name = $request->name;
        $update_data->email = $request->email;
        $update_data->cell = $request->cell;
        $update_data->username = $request->username;
        $update_data->gender = $request->gender;
        $update_data->photo = '';
        $update_data->update();


    }


}
