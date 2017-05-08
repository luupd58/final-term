<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\InfoClass\InfoClassRepositoryInterface;
use Illuminate\Support\Facades\DB;
use Image;
use Validator;
use Storage;

class ClassController extends Controller
{
     /**
     * @var _modelInterface|\App\Repositories\RepositoryInterface
     */
    protected $_model;


    public function __construct(InfoClassRepositoryInterface $_model)
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
        $class = $this->_model->getAll();
        return view('admin.views.class.list', 
            compact('class'));
    }

    /**
     * Show form
     * 
     * @return \Illuminate\Http\Response
     */
    public function add()
    {
        $class = new \App\InfoClass();

        return view('admin.views.class.add', 
            compact('class'));
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
            $data = \App\InfoClass::findOrfail($request->input('id'));
            $flag = 0;
        }else{
            $data = new \App\InfoClass();
            $flag = 1;
        }
        $data->fill($request->all());
        $data->date_test = date("Y-m-d", strtotime($data->date_test));
        $data = $data->toArray();
        

        if($flag == 1){
            // if($errors->fails()){
            //     $request->session()->flash('alert-danger', 'Lỗi!');

            //     return redirect()->back()->withErrors($errors);
            // } else {
                $this->_model->create($data);
                $request->session()->flash('alert-success', 'Thành công!');
                return redirect(route("admin.class.list"));
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

                return redirect(route("admin.class.list"));
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

        $class  = \App\InfoClass::find($id);
        return view('admin.views.class.add', 
            compact('class'));
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
                return redirect(route("admin.class.list"));
            }

            return "error!";

        }catch (\Exception $error){
            $request->session()->flash('alert-danger', 'Lỗi!');
            
            return redirect()->back();
        }
    }
}
