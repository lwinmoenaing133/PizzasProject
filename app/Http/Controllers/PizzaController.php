<?php

namespace App\Http\Controllers;
use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    function index()
    {
        return view("index");
    }

    function pizza()
    {
        //array format
        // $pizzas=[
        //     ["id"=>1, "username"=>"Aung Aung","pizza_name"=>"chicken","types"=>"salad","sauce"=>"tomato","price"=>99.99],
        //     ["id"=>2, "username"=>"Mg Mg","pizza_name"=>"Pork","types"=>"chessy","sauce"=>"tomato","price"=>85],
        //     ["id"=>3, "username"=>"Kyaw Kyaw","pizza_name"=>"vegetable","types"=>"salad","sauce"=>"tomato","price"=>70],
        //     ["id"=>4, "username"=>"Khin Khin","pizza_name"=>"Seafood","types"=>"salad","sauce"=>"tomato","price"=>105.9]
        // ];
        //object format//collection
        $pizzas=Pizza::all();
        // send data to blade file
        return view('pizzas',["pizzas"=>$pizzas]);
    }

    function insert(Request $req)
    {
        // return $req->toArray();
        // validation
        $validation=$req->validate
        ([
            "username"=>"required",
            "pizza_name"=>"required",
            "types"=>"required",
            "sauce"=>"required",
            "price"=>"required"
        ]);
        if($validation)
        {
            $pizza=new Pizza();
            $pizza->username=$req->username;
            $pizza->pizza_name=$req->pizza_name;
            $pizza->types=$req->types;
            $pizza->sauce=$req->sauce;
            $pizza->price=$req->price;
            $pizza->save();
            //return $pizza;
            return back()->with("success","Thank You For Your Order");
        }else
        {
            return back()->withErrors($validation);
        }
    }
    // delete data
    function delete($id)
    {
        // return $id;
        //find data
        $delete_pizza_data=Pizza::find($id);
        //return $delete_pizza_data;
        //delete that data
        $delete_pizza_data->delete();
        return back()->with("delete","$delete_pizza_data->username's order is deleted");
    }

    //edit data method
    function edit($id)
    {
        //return $id;
        $pizza=Pizza::find($id);
        return view("edit",["pizza"=>$pizza]);
    }

    function update($id,Request $req)
    {
        //return $id;
        $pizza=Pizza::find($id);
        //return $pizza;
        $pizza->username=$req->username;
        $pizza->pizza_name=$req->pizza_name;
        $pizza->types=$req->types;
        $pizza->sauce=$req->sauce;
        $pizza->price=$req->price;
        $pizza->update();
        return redirect()->route("pizzas");
    }
}
