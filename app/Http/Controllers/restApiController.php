<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class restApiController extends Controller
{
public function index(){
    $pizza = Pizza::all();
 	return ($pizza);
}
public function create()
    {
        $this->validate($request, ['type'=>'required','base'=>'required', 'name'=>'required']);
        $pizza = new Pizza();
        $pizza->type=$request->type;
        $pizza->base=$request->base;
        $pizza->name=$request->name;
        $pizza->adress=$request->adress;
        $pizza->toppings=$request->toppings;
        $pizza->save();
        return redirect('/home');
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'type'=>'required|string|max:100',
            'base'=>'required|string|max:150',
            'name'=>'string|max:500',
            'adress'=>'required'

        ]);

        if($validator->fails())
        return response()->json($validator->errors());

        $pizza=Pizza::create([

        'type'=>$request->type,
        'base'=>$request->base,
        'name'=>$request->name,
        'adress'=>$request->adress,
        'toppings'=>$request->toppings
        
        ]);
        return response()->json(['Pizza added successfully']);
    }
    public function show(Pizza $pizza)
    {
        return ($pizza);
    }
    public function update(Request $request, Pizza $pizza)
    {

        $validator = Validator::make($request->all(),[


            'type'=>'required|string|max:100',
            'base'=>'required|string|max:150',
            'name'=>'string|max:500',
            'adress'=>'required'

        ]);

        if($validator->fails()){           
            return response()->json($validator->errors);
        }else{
            //$this->validate($request, ['title'=>'required','author'=>'required']);

        $pizza->type=$request->type;
        $pizza->base=$request->base;
        $pizza->name=$request->name;
        $pizza->adress=$request->adress;
        $pizza->toppings=$request->toppings;
           
            $book->save();
            return response()->json(['status'=>'Pizza has been updated']);
        }
    }
    public function destroy($id)
    {
        $pizza = Pizza::find($id);
        if($pizza->delete()){
        //return ['status'=>'Pizza has been deleted'];
        return response()->json(['status'=>'Pizza has been deleted']);
        }
    }
}
