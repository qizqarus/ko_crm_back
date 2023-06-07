<?php

namespace App\Http\Controllers;

use App\Http\Resources\MediaFileResource;
use App\Services\MediaFileService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class MediaFileController extends Controller
{
    public function store()
    {
        $mediaFile = MediaFileService::create($request->validated());

        return $this->sendResponse(MediaFileResource::make($mediaFile), '',Response::HTTP_CREATED);
    }
}
