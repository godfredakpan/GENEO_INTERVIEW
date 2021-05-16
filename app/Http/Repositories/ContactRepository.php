<?php

namespace App\Http\Repositories;

use DB;
use App\Models\Contact;


class ContactRepository
{

    public function store($request)
    {

        try {

            DB::beginTransaction();

            $file = $this->uploadFile($request->document);

            $contact = new Contact();

            $contact->name  = $request->name;

            $contact->document_link  = $file;

            $contact->email = $request->email;

            $contact->message = $request->message;

            return $contact;

            // If you need to save to database please uncomment the above code // return $contact;
            $contact->save();

            if ($contact) {

                DB::commit();

                return $contact;

            } else {

                DB::rollback();

                return null;
            }
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function uploadFile($file)
    {

        if ($file) {

            $date_time =  date('Y-m-d H:i:s');

            $dateTime_str =  str_replace(" ", "", str_replace(":", "", $date_time));

            $fileName = preg_replace('/\s+/', '', $file->getClientOriginalName());

            //Save image in local folder
            $url = '/uploads' . '/' . $dateTime_str . $fileName;

            $file_name = $url;

            $name = $dateTime_str . $fileName;

            $file->move("uploads/" . "/", $file_name);

            $document_link  = '/uploads/' . $name;

            return $document_link;
        }

        return null;
    }
}

?>
