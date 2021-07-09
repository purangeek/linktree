<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Links;
use Auth;
use Validator;

class UserViewController extends Controller
{
    public function index()
    {
        $user_id = Auth::user()->id;
        //$links = Links::orderby('id', 'ASC')->where('user_id', $user_id)->get();
        $user_data = DB::table('users')->where('id', $user_id)->select('name', 'profile_description')->first();

        $links = DB::table('links')->where('user_id', $user_id)->get();
        $social_links = DB::table('sociallinks')->where('user_id', $user_id)->get();
        $themes = DB::table('themes')->where('user_id', $user_id)->get();
        // ->join('sociallinks', 'users.id', '=', 'sociallinks.user_id')
        // ->join('themes', 'users.id', '=', 'themes.user_id')
        // ->select('users.*', 'links.*')
        // ->get();
        //return $user_data;
        // $data = [
        //     'links'  => $links,
        //     'user_data'   => $user_data,
        //     'social_links' => $social_links,
        //     'themes' => $themes
        // ];
        //dd($user_data);
        return view('new.admin', compact('links', 'user_data'));
        // return view('new.admin', compact(array('links', 'user_data')));
    }


    public function themes()
    {
        $user_id = Auth::user()->id;
        return view('themes');
    }

    public function viewuser($username)
    {
        $row = User::where('username', $username)->get()->first();
        if (empty($row)) {
            return abort(404);
        } else {
            $links = Links::where('user_id', $row->id)->get();
            return view('viewuser')->with('links', $links);
        }
    }

    public function add_links(Request $request)
    {
        $new = new Links;
        $new->user_id = Auth::user()->id;
        $new->link_type = '';
        $new->link_title = '';
        $new->link_url = '';
        $new->link_active = 0;
        $new->save();
        return response()->json($new);
    }

    public function edit_links(Request $request)
    {
        $rules = array(
            'link_title'    =>  'required',
            'link_url'     =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if ($error->fails()) {
            return response()->json(['errors' => $error->errors()->all()]);
        }
        $form_data = array(
            'link_title'       =>   $request->link_title,
            'link_url'        =>   $request->link_url,
        );
        Links::whereId($request->id)->update($form_data);
    }

    public function delete_links(Request $request)
    {
        $id = $request->id;
        $row = Links::find($id);
        $row->delete();
    }

    public function settings()
    {
        return view('new.settings');
    }
}
