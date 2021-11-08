<?php

namespace App\Http\Controllers;

use App\Http\Requests\Clients\StoreClientRequest;
use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return void
     * @throws AuthorizationException
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);

        return view('panel.index', [
            'users' => User::select('name', 'company_name', 'phone', 'address', 'email')->where('role_id', 2)->where('belongToClient', auth()->user()->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreClientRequest $request
     * @return void
     */
    public function store(StoreClientRequest $request)
    {
        User::create([
            'role_id' => 2,
            'belongToClient' => auth()->user()->id,
            'name' => $request->name,
            'company_name' => $request->company_name,
            'phone' => $request->phone,
            'address' => $request->address,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        toast('Customer created successfully','success')->autoClose(1500);
        return redirect()->back();
    }
}
