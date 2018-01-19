<?php

namespace App\Http\Controllers\Web;

use App\Http\Requests\StorePersonOrPicture;
use App\Http\Requests\StorePicture;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;


class PictureController extends Controller
{
    private $HelperFunctionsContext=''; //initial value of variable

    public function __construct()
    {
        $this->HelperFunctionsContext = app('App\Http\Controllers\Web\HelperFunctionsController');
    }

    public function index_disks()
    {
        return view ('pages.pictures_disks');
    }


    /**
     * Display a listing of files in $disk.
     */
    public function index($disk, Request $request)
    {
        //current base ulr (i.e. http://192.168.1.4:81 , https://csunipi-author.gr)
        $base_url = URL::to('/');

        //define empty collection
        $files = collect();

        //get files from disk
        $filenames = Storage::disk($disk)->files();

        //push every filename, size, timestamp from disk to collection
        for ($i=0; $i<sizeof($filenames); $i++) {

            $sizes[$i] = Storage::disk($disk)->size($filenames[$i]); //format : bytes
            $timestamps[$i] = Storage::disk($disk)->lastModified($filenames[$i]); //format: unix timestamp

            $files->push([
                'id' => $i+1 ,
                'filename' => $filenames[$i] ,
                'size' => $sizes[$i]/1000,
                'url' => $base_url.'/images/'.$disk.'/'.$filenames[$i] ,
                'updated_at' => date('Y-m-d H:i:s', $timestamps[$i])
            ]);
        }

        $disk_name = $this->HelperFunctionsContext->normalizeDiskName($disk);
        return view ('pages.pictures',compact('files','disk','disk_name'));
    }


    /**
     * Show the form for creating a new file in $disk.
     */
    public function create($disk)
    {
        $disk_name = $this->HelperFunctionsContext->normalizeDiskName($disk);
        return view('pages.pictures_create',compact('disk','disk_name'));
    }


    /**
     * Store a newly created file in $disk.
     */
    public function store(StorePicture $request , $disk)
    {
        //input file
        $file_content = $request->file('file');
        $file_content = file_get_contents($file_content);
        //input filename
        $original_filename = $request->file('file')->getClientOriginalName();

        //if filename input is empty, use original file's name as new filename instead of input
        if($request->filename == '') {
            //input file's filename
            $new_filename= $original_filename;
        }
        else{
            //filename input
            $new_filename = $request->filename;
            //add original filename's extension if input doesnt have one
            $new_filename = $this->handleExtension($new_filename , $original_filename);
        }

        $new_filename = $this->handleDuplicateFilename($new_filename , $disk);

        //upload to people disk (filesystem config : public/images/people) the new file with the new filename
        Storage::disk($disk)->put($new_filename, $file_content);


        $disk_name = $this->HelperFunctionsContext->normalizeDiskName($disk);
        session()->flash('flash_message','Το αρχείο "'.$new_filename.'" καταχωρήθηκε επιτυχώς στον φάκελο "'.$disk_name.'"');
        return redirect('/pictures/'.$disk);
    }


    public function show($disk , $file_name )
    {
        $disk_name = $this->HelperFunctionsContext->normalizeDiskName($disk);

        return view('pages.pictures_show', compact('file_name','disk','disk_name'));
    }

    public function destroy($disk , $file_name )
    {
        Storage::disk($disk)->delete($file_name);

        $disk_name = $this->HelperFunctionsContext->normalizeDiskName($disk);
        session()->flash('flash_message','Το άτομο "'.$file_name.'" διαγράφηκε επιτυχώς από τον φάκελο "'.$disk_name.'"' );

        return back();
    }




    /**
     *1)slugify to prevent other encoding (languages) problems and
    *2)add incremental number at the end of the file (before extension) if filename already exists
     */
    public function handleDuplicateFilename($new_filename_with_extension , $disk)
    {
        $i=2; //if filename exists we want to add 2 or higher at the end of the filename (before extension!!!)

        //subtract extension from new filename string
        $extension = File::extension($new_filename_with_extension);
        $extension_plus_dot_length = strlen($extension) + 1;
        $new_filename_without_extension = substr($new_filename_with_extension, 0, -$extension_plus_dot_length);
        $new_filename_without_extension = Str::slug($new_filename_without_extension); // 1) slugify filename (without extension)

        //boolean to check if new slugified file name already exists in disk people
        $exists = Storage::disk($disk)->exists($new_filename_without_extension.'.'.$extension);

        while ($exists) { //2)
            if($i>2)//if its not initial time, remove -i (i's length amount of characters from new filename string)
            {
                $i_length = strlen($i);
                $new_filename_without_extension = substr($new_filename_without_extension, 0, -$i_length);
            }
//            $new_filename_without_extension = $new_filename_without_extension.$i; //append $i
            $new_filename_without_extension = Str::slug($new_filename_without_extension.'-'.$i);
            $new_filename_with_extension = $new_filename_without_extension.'.'.$extension; //append .extension
            $exists = Storage::disk($disk)->exists($new_filename_with_extension); //update boolean on which while loop depends
            $i++;
        }

        if($i=2){ //if filename never made it into while ($i value never changed), it must be returned with its extension
            $new_filename_with_extension = $new_filename_without_extension.'.'.$extension;
            return $new_filename_with_extension;
        }
        else {
            return $new_filename_with_extension;
        }

    }

    private function handleExtension($new_filename , $original_filename)
    {
        $original_extension = File::extension($original_filename);
        $new_extension = File::extension($new_filename);

        //if extensions are different, remove new extension (if exists) and add the old one's. otherwise just return same $new_filename
        if ($new_extension != $original_extension ) {
            //if there is no new extension, just append original extension to filename
            if ($new_extension == ''){
                $new_filename = $new_filename.'.'.$original_extension;
            }
            //if there is a new extension , replace it with the old one
            else{
                $extension_plus_dot_length = strlen($new_extension) + 1;
                $new_filename_without_extension = substr($new_filename, 0, -$extension_plus_dot_length);
                $new_filename = $new_filename_without_extension.'.'.$original_extension;
            }
        }

        return $new_filename;
    }

}
