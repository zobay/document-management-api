<?php

namespace App\Services;

use App\Models\DocumentModule;

class DocumentStoreService
{
    public function moveFile()
    {

    }

    public function getDocumentModule($name)
    {
        $module = DocumentModule::firstWhere('name', strtolower($name));

        if ($module) {
            return $module->id;
        }

      $module = new DocumentModule();
      $module->name = strtolower($name);

      if($module->save())  {
        return $module->id;
      }

      throw new \Exception('There is an error to create document module');
    }
}
