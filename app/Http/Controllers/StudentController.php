<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Student\StudentRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Image;
use Validator;
use Storage;

class StudentController extends Controller
{
     /**
     * @var _modelInterface|\App\Repositories\RepositoryInterface
     */
    protected $_model;


    public function __construct(StudentRepositoryInterface $_model)
    {
        $this->_model = $_model;
    }

     /**
     * Show all post
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = $this->_model->getAll();
        return view('admin.views.student.list', 
            compact('student'));
    }

    /**
     * Show form
     * 
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $student = new \App\InfoStudent();

        return view('admin.views.student.add', 
            compact('student'));
    }
    /**
     * Create single post
     *
     * @param $request \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->input('id') != '' || $request->input('id') != null){
            $data = \App\InfoStudent::findOrfail($request->input('id'));
            $flag = 0;
        }else{
            $data = new \App\InfoStudent();
            $flag = 1;
        }
        $data->fill($request->all());
        $data->birthday = date("Y-m-d", strtotime($data->birthday));
        $data = $data->toArray();
        

        if($flag == 1){
            // if($errors->fails()){
            //     $request->session()->flash('alert-danger', 'Lỗi!');

            //     return redirect()->back()->withErrors($errors);
            // } else {
                $this->_model->create($data);
                $request->session()->flash('alert-success', 'Thành công!');
                return redirect(route("admin.student.list"));
            // }
        } else {
            // if($errors->fails()){
            //     $request->session()->flash('alert-danger', 'Lỗi!');

            //     return redirect(route("admin.class.update", 
            //         ['id' => $request->id]))->withErrors($errors);
            // } else {
                $field = 'mlh_id';
                $this->_model->update($data['id'], $data);
                $request->session()->flash('alert-success', 'Thành công!');

                return redirect(route("admin.student.list"));
            // }
        }
    }

    /**
     * Update single post
     *
     * @param $request \Illuminate\Http\Request
     * @param $id int Post ID
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $student  = \App\InfoStudent::find($id);
        return view('admin.views.student.add', 
            compact('student'));
    }

    /**
     * Delete single post
     *
     * @param $id int Post ID
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        try{
            if($post = $this->_model->delete($id)){
                $request->session()->flash('alert-success', 'Thành công!');
                return redirect(route("admin.student.list"));
            }

            return "error!";

        }catch (\Exception $error){
            $request->session()->flash('alert-danger', 'Lỗi!');
            
            return redirect()->back();
        }
    }
}
