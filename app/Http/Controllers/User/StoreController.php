<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;


class StoreController extends Controller
{

    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        $name = $data['name'];
        $surname = $data['surname'];
        $password = Str::random(8);
        $username = $name.$surname.rand(1,999999);
        $user = User::create([
            'organization_id' => 6,
            'name' => $data['name'],
            'surname' => $data['surname'],
            'username' => $username,
            'password' => bcrypt($password)
        ]);
        return $data;
    }
}
