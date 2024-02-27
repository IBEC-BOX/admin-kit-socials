<?php

namespace AdminKit\SocialMedias\UI\API\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SocialMediaResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'link' => $this->link,
            'icon' => $this->getFirstMediaUrl(),
        ];
    }
}
