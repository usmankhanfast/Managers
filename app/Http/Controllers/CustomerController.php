<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Customer;
use View;

class CustomerController extends Controller
{
   public function __invoke(){

   }
   public function index(){
      
       $customers=Customer::all(); 
       return View::make('customer.customer-view')->with('customers',$customers);
   }
   public function  create(){
          return View::make('customer.customer-create');
   }
   public function edit($Id){

   }

}
