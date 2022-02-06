<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use App\Services\DocumentStoreService;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    public function store(StoreDocumentRequest $request, DocumentStoreService $service)
    {
        $validated = $request->validated();
        $service->getDocumentModule($validated['module']);
        dd(44);


    }
}
