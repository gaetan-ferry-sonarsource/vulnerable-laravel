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
        $fp = fopen($request->file('avatar'), 'r'); // Compliant: FP S2083
        eval($fp);
        $content = fread($fp, 4096);
        eval($content); // Noncompliant: FN
    }
}