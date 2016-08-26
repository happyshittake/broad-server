<?php

namespace Broad\Http\Transformers;


use Broad\Jalan;
use League\Fractal\TransformerAbstract;

class JalanTransformer extends TransformerAbstract
{
    public function transform(Jalan $jalan)
    {
        return [
            'id' => $jalan->id,
            'alamat' => $jalan->alamat,
            'kota' => $jalan->kota,
            'latitude' => $jalan->latitude,
            'longitude' => $jalan->longitude,
            'image' => \Storage::disk('local')->url($jalan->image)
        ];
    }
}