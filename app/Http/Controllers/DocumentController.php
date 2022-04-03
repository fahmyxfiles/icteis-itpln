<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

/**
 * Class DocumentController
 * @package App\Http\Controllers
 */
class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::paginate();

        return view('document.index', compact('documents'))
            ->with('i', (request()->input('page', 1) - 1) * $documents->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $document = new Document();
        return view('document.create', compact('document'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Document::$createRules);

        $file = $request->file('file_path');
        $filename = $request->file('file_path')->getClientOriginalName();
        $upload_path = "uploads/document";
        Storage::disk('public')->makeDirectory(dirname($upload_path));
        $filepath = $file->storeAs($upload_path, $filename, 'public');
        $data = $request->all();
        unset($data['file_path']);
        $data['file_path'] = $filepath;
        $document = Document::create($data);

        return redirect()->route('documents.index')
            ->with('success', 'Document created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $document = Document::find($id);

        return view('document.show', compact('document'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $document = Document::find($id);

        return view('document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Document $document
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Document $document)
    {
        request()->validate(Document::$updateRules);

        $data = $request->all();
        if(request()->has('file_path')){
            $file = $request->file('file_path');
            $filename = $request->file('file_path')->getClientOriginalName();
            $upload_path = "uploads/document";
            Storage::disk('public')->makeDirectory(dirname($upload_path));
            
            unlink(Storage::disk('public')->path($document->file_path));

            $filepath = $file->storeAs($upload_path, $filename, 'public');
            $data = $request->all();
            unset($data['file_path']);
            $data['file_path'] = $filepath;
        }

        $document->update($data);

        return redirect()->route('documents.index')
            ->with('success', 'Document updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $document = Document::find($id);
        unlink(Storage::disk('public')->path($document->file_path));
        $document->delete();

        return redirect()->route('documents.index')
            ->with('success', 'Document deleted successfully');
    }
}
