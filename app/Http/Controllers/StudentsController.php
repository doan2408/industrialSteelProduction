<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tblStudents;
use Validator;
use Illuminate\Pagination\Paginator;

class StudentsController extends Controller
{
    // Function to return student data (for DataTables)
    public function data(Request $request)
    {
        // get 10 records per page, default is 10
        $p_pages = $request->get('length', 10);

        // Get draw count for DataTables
        $draw = $request->get('draw', 1);

        // Get sorting information from request
        $sort = $request->get('order', []); // order array from dataTables
        $columns = $request->get('columns', []); // columns array from dataTables
        $columnIndex = $sort[0]['column'] ?? 0; // column index being sorted
        $columnName = $columns[$columnIndex]['data'] ?? 'id'; // column name being sorted
        $columnSortOrder = $sort[0]['dir'] ?? 'asc'; // sort direction 'asc' or 'desc'

        // Calculate current page based on start and length
        $cur_page = round($request->start / $request->length) + 1;

        // force laravel paginator to resolve to the correct page
        Paginator::currentPageResolver(function () use ($cur_page) {
            return $cur_page;
        });

        // Build the query to fetch student data
        $sql_data = tblStudents::select('tbl_students.*');

        // handle search filter
        if ($request->has('search')) { // if "search" exists in request
            $r_query = $request->search;
            if (is_array($r_query) && isset($r_query['value'])) { // if "search" is an array and has "value"
                $q_search = $r_query['value'];
                $sql_data->where(function ($query) use ($q_search) {
                    $query->where('tbl_students.full_name', 'LIKE', '%' . $q_search . '%')
                        ->orWhere('tbl_students.email', 'LIKE', '%' . $q_search . '%')
                        ->orWhere('tbl_students.class_name', 'LIKE', '%' . $q_search . '%');
                });
            }
        }

        // Xử lý filter theo trạng thái (status) từ dropdown filter
        if($request->has('filter_status') && $request->filter_status != 'all') {
            $sql_data->where('tbl_students.status', $request->filter_status);
        }

        // fetch data with ordering and pagination
        $data = $sql_data->orderBy($columnName, $columnSortOrder)->paginate($p_pages);

        // total records after filtering
        $recordsFiltered = $data->total();
        
        // Lấy tổng số record trước khi filter
        $recordsTotal = tblStudents::count();

        // Array to store result list
        $list = [];
        $number = $request->start + 1; // Row numbering starts from 1

        // add student data into the list
        foreach ($data as $item) {
            $list[] = [
                'id' => $item->id,
                'full_name' => $item->full_name,
                'age' => $item->age,
                'class_name' => $item->class_name,
                'email' => $item->email,
                'created_at' => date('d-m-Y H:i:s', strtotime($item->created_at)),
                'tstatus' => $item->status, 
                'url_view' => '',
                'url_edit' => route('edit-student', $item->id),
                'url_create' => route('post-add-student'), 
                'url_delete' => route('post-delete-student', $item->id),
                'url_active' => route('post-active-student', $item->id), 
            ];
            $number++;
        }

        // Return Json response to dataTables
        return response()->json([
            "draw" => intval($draw), // synchronous draw counter
            "recordsTotal" => $recordsTotal, // FIX: total records before filtering
            "recordsFiltered" => $recordsFiltered, // total after filtering
            "data" => $list // main data array
        ]);
    }

    public function index()
    {
        return view('admin.students.view');
    }

    public function create()
    {
        return view('admin.students.add');
    }

    public function store(Request $request)
    {
        $rules = [
            'full_name' => 'required',
            'age' => 'required|integer',
            'class_name' => 'required',
            'email' => 'required|email|unique:tbl_students,email',
        ];

        $messages = [
            'full_name.required' => 'full name is required.',
            'age.required' => 'Age is required.',
            'age.integer' => 'Age must be an integer.',
            'class_name.required' => 'class name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'Email already exists.',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $student = new tblStudents();
        $student->full_name = $request->full_name;
        $student->age = $request->age;
        $student->class_name = $request->class_name;
        $student->email = $request->email;
        $student->status = '1'; // default status
        $student->save();
        \Session::flash('admin_notify_success', 'Student added successfully.');
        return redirect()->back();
    }

    public function edit($id)
    {
        $student = tblStudents::find($id);
        if ($student) {
            return view('admin.students.edit')->with('data', $student);
        } else {
             abort(404);
        }
    }

    public function update(Request $request)
    {
        $rules = [
            'full_name' => 'required',
            'age' => 'required|integer',
            'class_name' => 'required',
            'email' => 'required|email|unique:tbl_students,email,' . $request->id, // unique except for current record
        ];

        $messages = [
            'full_name.required' => 'full_name is required.',
            'age.required' => 'Age is required.',
            'age.integer' => 'Age must be an integer.',
            'class_name.required' => 'class_name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Email must be a valid email address.',
            'email.unique' => 'Email already exists.',
        ];
        $input_all = $request->all(); // get all data from request (post or get)
        $validator = Validator::make($input_all, $rules, $messages);
        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        
        $data = tblStudents::find($request->id);
        if ($data) {
            $data->full_name = $request->full_name;
            $data->age = $request->age;
            $data->class_name = $request->class_name;
            $data->email = $request->email;
            $data->status = $request->status;
            $data->save();
            \Session::flash('admin_notify_success', 'Student updated successfully.');
            return redirect()->back();
        } else {
            abort(404);
        }
    }

    public function destroy($id)
    {
        $student = tblStudents::find($id);
        if ($student) {
            $student->delete();
            return response()->json(['success' => true, 'message' => 'Student deleted successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Student not found.'], 404);
        }
    }

    public function active($id)
    {
        $student = tblStudents::find($id);
        if ($student) {
            $student->status = 1; // Set status to active
            $student->save();
            return response()->json(['success' => true, 'message' => 'Student activated successfully.']);
        } else {
            return response()->json(['success' => false, 'message' => 'Student not found.'], 404);
        }
    }
}