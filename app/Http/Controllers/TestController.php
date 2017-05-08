<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Repositories\Test\TestRepositoryInterface;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    /**
     * @var _modelInterface|\App\Repositories\RepositoryInterface
     */
    protected $_model;


    public function __construct(TestRepositoryInterface $_model)
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
        $test = $this->_model->getAll();
        return view('admin.views.lichthi.list', 
            compact('test'));
    }

    /**
     * Search for field
     *
     * @param request
     * @return \Illuminate\Http\Response
     */
    public function searchClient(Request $request)
    {
        $search = $request->input('search-client');
        $result = $this->_model->searchId($search)->get();
        foreach ($result as $key => $value) {
            // Lấy ra array product_type dựa vào belongsTo
            $name = $this->_model->showStudent($value['sv_id']);
            // Chỉ lấy ra tên của array vừa lấy
            foreach ($name as $k => $v) {
                $nameStudent = $v->fullname;
                $birthdayStudent = $v->birthday;
                $classStudent = $v->info_class;
            }
            $value['nameStudent'] = $nameStudent;
            $value['birthdayStudent'] = $birthdayStudent;
            $value['classStudent'] = $classStudent;
        }

        foreach ($result as $key => $value) {
            // Lấy ra array product_type dựa vào belongsTo
            $name = $this->_model->showClass($value['mlh_id']);
            // Chỉ lấy ra tên của array vừa lấy
            foreach ($name as $k => $v) {
                $nameClass = $v->name_class;
                $dateTest = $v->date_test;
                $timeTest = $v->time_test;
                $placeTest = $v->place_test;
                $realPlace = $v->real_place;
            }
            $value['nameClass'] = $nameClass;
            $value['dateTest'] = $dateTest;
            $value['timeTest'] = $timeTest;
            $value['placeTest'] = $placeTest;
            $value['realPlace'] = $realPlace;
        }
        return view('client.views.test.search', compact('result'));
    }

    /**
     * Show form
     * 
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $test = new \App\TestSchedule();
        $student = $this->_model->showAllStudent();
        $class = $this->_model->showAllClass();
        return view('admin.views.lichthi.add', 
            compact('test', 'student', 'class'));
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
            $data = \App\TestSchedule::findOrfail($request->input('id'));
            $flag = 0;
        }else{
            $data = new \App\TestSchedule();
            $flag = 1;
        }
        $data->fill($request->all());
        // dd($data);
        $data = $data->toArray();
        

        if($flag == 1){
            // if($errors->fails()){
            //     $request->session()->flash('alert-danger', 'Lỗi!');

            //     return redirect()->back()->withErrors($errors);
            // } else {
                $this->_model->create($data);
                $request->session()->flash('alert-success', 'Thành công!');
                return redirect(route("admin.test.list"));
            // }
        } else {
            // if($errors->fails()){
            //     $request->session()->flash('alert-danger', 'Lỗi!');

            //     return redirect(route("admin.class.update", 
            //         ['id' => $request->id]))->withErrors($errors);
            // } else {
                $this->_model->update($data['id'], $data);
                $request->session()->flash('alert-success', 'Thành công!');

                return redirect(route("admin.test.list"));
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

        $test  = \App\TestSchedule::find($id);
        $student = $this->_model->showAllStudent();
        $class = $this->_model->showAllClass();
        return view('admin.views.lichthi.add', 
            compact('test', 'student', 'class'));
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
                return redirect(route("admin.test.list"));
            }

            return "error!";

        }catch (\Exception $error){
            $request->session()->flash('alert-danger', 'Lỗi!');
            
            return redirect()->back();
        }
    }
}
