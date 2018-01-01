<?php

use Illuminate\Http\Request;
use App\Contact;

Route::group(['middleware' => 'api'], function(){
  Route::get('contacts', function(){
    return Contact::latest()->orderBy('created_at', 'desc')->get();
  });

  Route::get('contact/{id}', function($id){
    return Contact::findOrFail($id);
  });

  Route::post('contact/store', function(Request $request){
    return Contact::create(['name' => $request->input(['name']), 'email' => $request->input(['email']),'phone' => $request->input(['phone'])]);
  });

  Route::patch('contact/{id}', function(Request $request, $id){
    Contact::findOrFail($id)->update(['name' => $request->input(['name']), 'email' => $request->input(['email']),'phone' => $request->input(['phone'])]);
  });

  Route::delete('contact/{id}' function(){
    return Contact::destroy($id);
  });
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
