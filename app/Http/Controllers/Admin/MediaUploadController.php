<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Media;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MediaUploadController extends Controller
{
    public function index()
    {
        $media = Media::orderBy('created_at', 'desc')->paginate(20);
        return view('admin.pages.media-upload.index', compact('media'));
    }

    public function store(Request $request)
    {
        try {
            // Simple validation first
            $request->validate([
                'file' => 'required|file|max:10240', // 10MB max
            ]);

            $file = $request->file('file');
            $originalName = $file->getClientOriginalName();
            $fileName = time() . '_' . uniqid() . '_' . $originalName;

            // Create media directory if it doesn't exist
            $mediaPath = public_path('media');
            if (!file_exists($mediaPath)) {
                mkdir($mediaPath, 0755, true);
            }

            // Store file using the custom public_uploads disk
            try {
                $storedPath = $file->storeAs('', $fileName, 'public_uploads');
                $path = 'media/' . $fileName; // Always use this format for database
                \Log::info('File stored with path: ' . $storedPath . ', DB path: ' . $path);
            } catch (\Exception $e) {
                \Log::error('File storage error: ' . $e->getMessage());
                return redirect()->back()->with('error', 'File storage failed: ' . $e->getMessage());
            }

            // Verify file exists
            $fullPath = public_path('media/' . $fileName);
            \Log::info('Checking file path: ' . $fullPath);
            if (!file_exists($fullPath)) {
                \Log::error('File not found at: ' . $fullPath);
                return redirect()->back()->with('error', 'File upload failed - file not saved properly');
            }

            // Save to database
            $media = Media::create([
                'name' => $originalName,
                'file_name' => $fileName,
                'mime_type' => $file->getMimeType(),
                'path' => $path,
                'disk' => 'public',
                'file_size' => $file->getSize(),
            ]);

            return redirect()->back()->with('success', 'File uploaded successfully!');

        } catch (\Exception $e) {
            \Log::error('Media upload error', [
                'error' => $e->getMessage(),
                'file' => $request->hasFile('file') ? 'File present' : 'No file',
                'trace' => $e->getTraceAsString()
            ]);
            return redirect()->back()->with('error', 'Upload failed: ' . $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $media = Media::findOrFail($id);

        // Delete file from public folder
        $filePath = public_path($media->path);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        $media->delete();

        return redirect()->back()->with('success', 'File deleted successfully!');
    }
}
