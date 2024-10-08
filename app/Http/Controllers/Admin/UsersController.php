<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UsersController extends Controller
{
    private $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function index(request $request)
    {
        if($request->search){

            $all_users = $this->user->withTrashed()->orderBy('name')
                                                ->where('name', 'LIKE', '%'.$request->search.'%')
                                                ->peginate(10);

        }else{

            $all_users = $this->user->withTrashed()->orderBy('name')->paginate(10);

        }
        return view('admin.users.index')->with('all_users', $all_users)
                                          ->with('search', $request->search);
    }

    public function deactivate($id){
        $this->user->destroy($id);

        return redirect()->back();
    }

    public function activate($id){
        $this->user->onlyTrashed()->findOrFail($id)->restore();
        //onlyTrashed() -- only have soft-deleted records

        return redirect()->back();
    }
}