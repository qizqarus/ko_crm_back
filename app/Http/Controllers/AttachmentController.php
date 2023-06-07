<?php

namespace App\Http\Controllers;

use App\Models\Attachment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AttachmentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $project_id = $request->input('project_id');

        if ($request->hasFile('attachments')) {
            $attachments = [];

            foreach ($request->file('attachments') as $file) {
                $fileName = $file->getClientOriginalName();
                $filePath = $file->store('attachments', 'public');

                $attachment = Attachment::create([
                    'project_id' => $project_id,
                    'file_name' => $fileName,
                    'file_path' => $filePath,
                ]);

                $attachments[] = $attachment;
            }

            return response()->json(['attachments' => $attachments], 201);
        }

        return response()->json(['message' => 'Никаких вложений не предоставили.'], 400);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Attachment $id)
    {
        $attachment = Attachment::findOrFail($id);

        // Удаление файла из хранилища
        Storage::disk('public')->delete($attachment->file_path);

        $attachment->delete();

        return response()->json(null, 204);
    }

}
