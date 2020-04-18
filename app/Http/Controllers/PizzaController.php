<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;

class PizzaController extends Controller
{
    //public function __construct(){
    //    $this->middleware('auth');
    //}

    public function index(){
        
        $pizzas = Pizza::all();
        //$pizzas = Pizza::orderBy('price')->get();

        return view('pizzas.index', ['pizzas' => $pizzas]);
    }

    public function show($id){

        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }

    public function store(){
        #error_log(request('name'));
        #error_log(request('type'));
        #error_log(request('base'));

        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        //error_log($pizza);

        $pizza->save();

        return redirect('/')->with('mssg', 'Your order was placed. Thank you :)');
    }

    public function destroy($id){
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}
