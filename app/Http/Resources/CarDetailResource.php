<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarDetailResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'merk' => $this->merk,
            'seri' => $this->seri,
            'silinder' => $this->silinder,
            'tipe' => $this->tipe,
            'sub_tipe' => $this->sub_tipe,
            'transmisi' => $this->transmisi,
            'tahun' => $this->tahun,
            'bahan_bakar' => $this->bahan_bakar,
            'penggerak' => $this->penggerak,
        ];
    }
}
