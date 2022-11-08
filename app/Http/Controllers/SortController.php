<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\sort;

class SortController extends Controller
{
    public function show(Request $request){

        #show menu
        $list_send = [];
        $type_dif = sort::select('type')->distinct()->get();
        foreach($type_dif as $each){
            $send = sort::where('type', '=', $each->type)->limit(5)->orderby('order')->get();
            array_push($list_send, $send);
        }

        if ($request->input('go') != ""){
            $type_name = $request->input('go');

            $type_list = sort::where('type', '=', $type_name)-> orderby('order')-> get();

            return view('full', ['type_list' => $type_list]);
            
        }


        #go to admin
        if ($request->input('admin') != ''){
            redirect('/admin');
        }

        #find food
        if ($request->input('nameSearchB') != ''){
            $inputFood = $request->input('nameSearch');
            $food = sort::where('name', 'like', "%{$inputFood}%")-> orderBy('name')-> get();
            return view('exactFood', ['food' => $food]);
        }

        return view('show', ['list_send' => $list_send]);
    }


    public function change(){
        #show table
        $full_table = sort::select('id', 'name', 'order', 'type')-> get();

    
        return view('admin', ['table' => $full_table]);
    }

    public function vax(Request $request){
        #delete function
        if ($request->input('delete') != ''){
            $delete = $request->input('delete');
            sort::where('id', '=', $delete)->delete();
            
        }

        #name change function
        if ($request->input('nameB') != ''){
            $id = $request->input('nameB');
            $name = $request->input('name');
            sort::where('id', '=', $id)->update(['name' => $name]);
        }

        #order change function
        if ($request->input('orderB') != ''){
            $id = $request->input('orderB');
            $order = $request->input('order');
            sort::where('id', '=', $id)->update(['order' => $order]);
        }

        #type change function
        if ($request->input('typeB') != ''){
            $id = $request->input('typeB');
            $type = $request->input('type');
            sort::where('id', '=', $id)->update(['type' => $type]);
            
        }

        #add new food function
        if ($request->input('Change') != ''){
            sort::create([
                "name"=> $request->input('nameChange'),
                "type"=> $request->input('typeChange'),
                "order"=> $request->input('orderChange')
            ]);
        }

        return $this->change();
    }
}
