<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Backup;
use App\Jobs\BackupProcess;
use Illuminate\Support\Facades\Storage;
class Backups extends Controller
{
    //
    public function index(){
        $backups=Backup::all();

        return view ('content.pages.backups',['backups'=>$backups]);
    }
    public function create(){
        BackupProcess::dispatch();

        return redirect ()->route('pages-backups');
    }
    public function delete($id){
        $backup =Backup::find($id);
        Storage::delete('public/backups/'.$backup->name);
        
        $backup->delete();
        return redirect ()->route('pages-backups');
    } 
    public function download($fileName)
    {
        $filePath = storage_path('app/public/backups/' . $fileName);

        if (file_exists($filePath)) {
            return response()->download($filePath, $fileName);
        } else {
            // Manejar el error si el archivo no existe
            return redirect()->back()->with('error', 'El archivo de backup no se encuentra disponible.');
        }
    }
}