<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class restApiController extends Controller
{
    //returns all pizza orders
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
        $pizza->address=$request->address;
        $pizza->toppings=$request->toppings;
        $pizza->save();
        return redirect('/home');
    }
    //creates a new order
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(),[

            'type'=>'required|string|max:100',
            'base'=>'required|string|max:150',
            'name'=>'string|max:500',
            'address'=>'required',
            'toppings'=>'required'


        ]);

        if($validator->fails())
        return response()->json($validator->errors());

        $pizza=Pizza::create([

        'type'=>$request->type,
        'base'=>$request->base,
        'name'=>$request->name,
        'address'=>$request->address,
        'toppings'=>$request->toppings
        
        ]);
        return response()->json(['Pizza added successfully']);
    }
    
    //returns a specific pizza orde
    public function show($pizza_id)
{
    
    $pizza=Pizza::find($pizza_id);
   
   if(is_null($pizza))
        return response()->json('Data not found', 404);
    return response()->json($pizza);
}
    //updates the current order
    public function update(Request $request, Pizza $pizza)
    {

        $validator = Validator::make($request->all(),[


            'type'=>'required|string|max:100',
            'base'=>'required|string|max:150',
            'name'=>'string|max:500',
            'address'=>'required',
            'toppings'=>'required'

        ]);

        if($validator->fails()){           
            return response()->json($validator->errors);
        }else{
            
        $pizza->type=$request->type;
        $pizza->base=$request->base;
        $pizza->name=$request->name;
        $pizza->address=$request->address;
        $pizza->toppings=$request->toppings;
           
            $pizza->save();
            return response()->json(['status'=>'Pizza has been updated']);
        }
    }
    //deletes the current order
    public function destroy($id)
    {
        $pizza = Pizza::find($id);
        if($pizza->delete()){
        //return ['status'=>'Pizza has been deleted'];
        return response()->json(['status'=>'Pizza has been deleted']);
        }
    }
}
