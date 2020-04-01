<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EventregistrierungController extends Controller
{
    public function formular()
    {
        return view('registrierungevent');
    }

    public function edit($id)
    {

		$saveditem=(object) array(
				'id'  => $id,
				'property' => 'Property for a saved id'
			);
		/* DB Usage:
		$saveditem=Item::where('id',$id)->first();
		*/

        return View('edit',compact('saveditem'));
    }

	public function store(Request $request)
    {
			//dd($request);
            $this->validate($request, [
                   'property'       => 'required|numeric']);


			if ($request->id > 0) { //edit
				/*
					Missing: Test if the user is allowed to edit this Value
				*/
				dd("edit item ID:". $request->id. " property:". $request->property);
			} else { //create
				dd("would create item property:". $request->property);
				/* DB Usage:
				$item = Item::create([
					'item' => $request->property
				 ]);
				 */
			}
		return redirect('home');

    }

}
