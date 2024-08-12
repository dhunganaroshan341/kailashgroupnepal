<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ImageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ImageCrudController
 *
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ImageCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Image::class);
        CRUD::setRoute(config('backpack.base.route_prefix').'/image');
        CRUD::setEntityNameStrings('image', 'images');
        $this->crud->addColumn([
            'name' => 'folder_id', // This is the foreign key
            'label' => 'Folder', // This is the label for the column
            'type' => 'text', // The column type is text
            'value' => function ($entry) {
                return $entry->folder ? $entry->folder->name : 'N/A'; // Display folder name or 'N/A'
            },
        ]);
        $this->crud->addColumn([
            'name' => 'image', // The column name in the database
            'label' => 'Image', // The label displayed in the CRUD
            'type' => 'image', // The type of the column
            'width' => '150', // Width of the image
            'height' => '160', // Height of the image
            // 'prefix' => 'storage/images', // Storage prefix if you're using public disk
        ]);

    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     *
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::setFromDb(); // set columns from db columns.
        CRUD::column('image')->type('image')->label('Image')->width('120px'); // Set the width of the image in the list view ->height('130px'); // Set the height of the image in the list view

        /**
         * Columns can be defined using the fluent syntax:
         * - CRUD::column('price')->type('number');
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     *
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ImageRequest::class);
        CRUD::setFromDb(); // set fields from db columns.
        CRUD::field('image')
            ->type('upload')
            ->label('Upload Images')
            ->upload() // Specify that it should handle file uploads
            ->withFiles([
                'disk' => 'public', // The disk where the file will be stored
                'path' => 'storage/images', // The path inside the disk where the file will be stored
            ]);

        CRUD::addField([
            'name' => 'folder_id',
            'label' => 'Folder',
            'type' => 'select',
            'entity' => 'folder',
            'model' => "App\Models\ImageFolder",
            'attribute' => 'name',
        ]);
        /**
         * Fields can be defined using the fluent syntax:
         * - CRUD::field('price')->type('number');
         */
    }

    // public function setupShowOperation()
    // {
    //     CRUD::setFromDb(); // set fields from db columns.
    //     CRUD::addField([
    //         'label' => 'folder',
    //         'name' => 'folder_id',
    //         'attribute' => ('name'),

    //     ]);
    //     CRUD::addField([
    //         'label' => 'Image',
    //         'name' => 'image',
    //         'type' => ('view'),
    //         'view' => 'partials/image',

    //     ]);
    // }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     *
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
        CRUD::column('image')->type('image')->label('Images');
    }
}
