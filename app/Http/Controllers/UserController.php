<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
  /**
   *
   * Return all users view
   *
   */
  public function allUsers()
  {
    $users = User::orderBy('updated_at', 'desc')->paginate(5);

    return view('pages.all-users', compact('users'));
  }
}
