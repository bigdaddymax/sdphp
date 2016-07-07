<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doc;
use App\Models\Fund;
use App\Models\Client;
use App\Models\Type;
use App\Services\UploadHandler;

class DocumentsController extends Controller {

    protected $manager;

    public function __construct()
    {
        
    }

    /**
     * Show page of files / subfolders
     */
    public function index(Request $request)
    {
        $documents = Doc::with('clients', 'funds', 'types')->get();
        $funds = Fund::all();
        $clients = Client::all();
        $types = Type::all();
        return view(
                        'documents.list', [
                    'documents' => $documents,
                    'funds' => $funds,
                    'clients' => $clients,
                    'types' => $types
                        ]
        );
    }

    public function upload(Request $request)
    {
        $uploader = new UploadHandler();
        if ($request->isMethod('post')) {
            header("Content-Type: text/plain");
            // Call handleUpload() with the name of the folder, relative to PHP's getcwd()
            $result = $uploader->handleUpload(config('uploads.documents.path'));
            // To return a name used for uploaded file you can use the following line.
            $result["uploadName"] = $uploader->getUploadName();
            echo json_encode($result);
        } else {
            header("HTTP/1.0 405 Method Not Allowed");
        }
    }

    public function create(Request $request) {
        $this->validate($request, [
            'types' => 'required|exists:document_types,id',
            'funds' => 'required|exists:funds,portfolio_id',
            'clients' => 'required|exists:clients,organization_id',
            'document_date' => 'required|date',
            'date_received' => 'required|date',
            'name' => 'required|alpha_num',
        ]);
        
        $document = Doc::create($request->all());
        $document->clients()->sync((array)$request->input('clients'));
        $document->funds()->sync((array)$request->input('funds'));
        $document->types()->sync((array)$request->input('types'));
    }
}
