<?php

namespace App\Http\Controllers;

use App\Models\Customer_table;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function HomeIndex()
    {
        return view('Home');
    }
    function DataInsert(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $message = $request->input('message');

        $isInsertSuccess = Customer_table::insert(['name' => $name, 'email' => $email, 'phone' => $phone, 'message' => $message]);

        if ($isInsertSuccess) echo '<h1>Insert Success!</h1>';
        else echo '<h1>Insert Failed!</h1>';
    }
    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.orders.shipped');
    }
}
