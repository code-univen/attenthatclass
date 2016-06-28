<?php namespace App\Http\Controllers;

use Redirect;
use Socialize;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class AccountController extends Controller {

// To redirect github
  public function github_redirect() {
    return Socialize::with('github')->redirect();
  }
  // to get authenticate user data
  public function github() {
    $user = Socialize::with('github')->user();
    // Do your stuff with user data.
    echo '<pre>';
    print_r($user);die;
  }
  
  // To redirect github
  public function google_redirect() {
    return Socialize::with('google')->redirect();
  }
  // to get authenticate user data
  public function google() {
    $user = Socialize::with('google')->user();
    // Do your stuff with user data.
    echo '<pre>';
    print_r($user);die;
  }

}
