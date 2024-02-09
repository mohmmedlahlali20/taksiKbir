<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::orderBy('created_at', 'ASC')->paginate(10); 
        return view('admin.index', compact('users'));
    }
    
    public function destroy($id)
{
    // $user = User::findOrFail($id);
    // $user->delete();
    // return redirect()->back()->with('success', 'User has been deleted successfully.');
}


}
