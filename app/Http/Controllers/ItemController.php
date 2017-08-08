<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Item;
use Input;
use Session;

class ItemController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //get all the items
        $items = Item::all();        
        // load the view and pass the items
        return view('items.index', ['items'=> $items]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
          // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'title'       => 'required',
            'video_code' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('items/create')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $item = new Item;
            $item->title       = Input::get('title');
            $item->content      = Input::get('content');
            $item->id_category      = Input::get('category');
            $item->video_code = Input::get('video_code');
            $item->source =Input::get('source');
            $item->created_at =null;
            $item->updated_at =null;
            $item->save();

            // redirect
            Session::flash('message', 'Successfully created item!');
            return Redirect::to('items');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        // get the nerd
        $item = Item::find($id);

        // show the view and pass the nerd to it
        // return View::make('items.show')
        //     ->with('item', $item);
             return view('items.show',['item'=> $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        //
           $item = Item::find($id);
           return view('items.edit',['item'=> $item]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        // validate
        // read more on validation at http://laravel.com/docs/validation
         $rules = array(
            'title'       => 'required',
            'video_code' => 'required'
        );
        $validator = Validator::make(Input::all(), $rules);

        // process the login
        if ($validator->fails()) {
            return Redirect::to('items/' . $id . '/edit')
                ->withErrors($validator)
                ->withInput(Input::except('password'));
        } else {
            // store
            $item = Item::find($id);

            $item->title       = Input::get('title');
            $item->video_code = Input::get('video_code');
            $item->save();

            // redirect
            Session::flash('message', 'Successfully updated item!');
            return Redirect::to('items');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
          $item = Item::find($id);
        $item->delete();

        // redirect
        Session::flash('message', 'Successfully deleted the item!');
        return Redirect::to('items');
    }
}
