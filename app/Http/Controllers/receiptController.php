<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Receipts;

class receiptController extends Controller
{
	function index() {


		$receipts_data = Receipts::all()->toArray();

		return view('admin.all-receipts',compact('receipts_data'));
	}
  




  function store(Request $request )
  {

   $receipt = new Receipts();

   $receipt->receipt_title = $request->rtitle;
   $receipt->customername = $request->cname;
   $receipt->customerfathername = $request->cfathername;
   $receipt->customeraddress = $request->caddress;
   $receipt->customercontact = $request->ccontact;
   $receipt->plot_size = $request->psize;
   $receipt->plot_totalprice = $request->ptotalprice;
   $receipt->plot_tokenprice = $request->ptokenprice;
   $receipt->block_location = $request->blocation;
   $receipt->plot_description = $request->pdescription;
   $receipt->image = "1";


   $receipt->save();


   return view('admin.receipt');




  }



//deletefuction
  function delete($id) {


    $receipt = Receipts:: find($id);

    $receipt->delete();


    $receipts_data = Receipts::all()->toArray();

    return view('admin.all-receipts',compact('receipts_data'));
  


}

}