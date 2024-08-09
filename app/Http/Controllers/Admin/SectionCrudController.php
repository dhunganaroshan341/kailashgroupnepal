<?php

namespace App\Http\Controllers\Admin;

use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Class SectionCrudController
 *
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class SectionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

    public function setup()
    {
        CRUD::setModel(\App\Models\Section::class);
        CRUD::setRoute(config('backpack.base.route_prefix').'/section');
        CRUD::setEntityNameStrings('section', 'sections');
    }

    protected function setupListOperation()
    {
        CRUD::setFromDb();
        CRUD::column('page_id')->type('select')
            ->entity('page') //relationship
            ->attribute('title') // Attribute to show in the column
            ->label('Page Name')->model('App\Models\Page'); // Label for the column
    }

    protected function setupCreateOperation()
    {
        CRUD::setValidation(\App\Http\Requests\SectionRequest::class);

        CRUD::field('title')->label('Title')->type('text');
        CRUD::field('page_id')
            ->type('select')
            ->entity('page')
            ->model('App\Models\Page')
            ->attribute('title')
            ->label('Page');
        CRUD::field('content')->label('Content')->type('textarea');
        CRUD::field('order')->label('Order')->type('number')->attributes(['min' => 0]);
        // CRUD::field('image_path')->label('Featured Image')->type('upload')->upload();
        CRUD::field('image_path')->label('Featured Image')->type('upload')->withFiles([
            'disk' => 'public', // the disk where file will be stored
            'path' => 'sections', // the path inside the disk where file will be stored
        ]);
        CRUD::field('writer')->label('Writer')->type('text');
        CRUD::field('role')->label('Role')->type('text');
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

    /**
     * Handle the file upload during store or update operations.
     */
    protected function handleFileUpload(Request $request)
    {
        if ($request->hasFile('image_path')) {
            $file = $request->file('image_path');
            $uniqueFileName = Str::random(20).'.'.$file->getClientOriginalExtension();
            $filePath = $file->storeAs('public/images', $uniqueFileName);

            return 'images/'.$uniqueFileName;
        }

        return null;
    }
}
