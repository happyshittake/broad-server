<?php

namespace Broad\Http\Controllers\Api\v1;


use Broad\Http\Controllers\Controller;
use Broad\Http\Transformers\JalanTransformer;
use Broad\Jalan;
use Dingo\Api\Exception\StoreResourceFailedException;
use Illuminate\Http\Request;

class JalanController extends Controller
{
    public function getPaginated()
    {
        $roads = Jalan::orderBy('id', 'desc')->paginate(10);

        return $this->response()->paginator($roads, new JalanTransformer());
    }

    public function getSingle(Jalan $jalan)
    {
        return $this->response()->item($jalan, new JalanTransformer());
    }

    public function postCreate(Request $request)
    {
        $jalan = new Jalan();

        $jalan->alamat = $request->get('alamat');
        $jalan->kota = $request->get('kota');
        $jalan->latitude = $request->get('lat');
        $jalan->longitude = $request->get('lon');

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('public/jalan');
            $jalan->image = $path;
        }

        if ($jalan->save()) {
            return $this->response()->item($jalan, new JalanTransformer());
        }

        throw new StoreResourceFailedException();
    }
}