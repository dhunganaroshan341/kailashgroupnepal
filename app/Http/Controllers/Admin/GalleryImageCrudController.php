<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\GalleryImageRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Schema;

/**
 * Class GalleryImageCrudController
 *
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class GalleryImageCrudController extends CrudController
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
        CRUD::setModel(\App\Models\GalleryImage::class);
        CRUD::setRoute(config('backpack.base.route_prefix').'/gallery-image');
        CRUD::setEntityNameStrings('gallery image', 'gallery images');
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
        CRUD::setFromDb(); // Set columns from DB columns.

        CRUD::column('gallery_id')->type('select')
            ->entity('gallery') // Ensure this matches the relationship method in GalleryImage model
            ->attribute('title') // Ensure 'title' is the correct field in Gallery model
            ->label('Gallery'); // Label for the column
        // CRUD::field('gallery_id')
        //     ->type('select')
        //     ->entity('gallery')
        //     ->model('App\Models\Gallery')
        //     ->attribute('id')->label('Galleries');
        CRUD::column('image_path')->type('image')->label('Images');
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
        CRUD::setValidation(GalleryImageRequest::class);

        // Verify column existence
        if (! Schema::hasColumn('gallery_images', 'gallery_id')) {
            abort(500, 'Column gallery_id does not exist in gallery_images table.');
        }

        CRUD::field('gallery_id')->type('select')
            ->label('Gallery')
            ->entity('gallery') // Relationship method on the model
            ->model(\App\Models\Gallery::class) // Model used for the relationship
            ->attribute('title'); // Field to display in the dropdown
        // Enable search within the dropdown

        CRUD::field('name')->type('text')->label('Name');

        CRUD::field('image_path')
            ->type('upload_multiple')
            ->label('Upload Images')
            ->upload() // Specify that it should handle file uploads
            ->withFiles([
                'disk' => 'public', // The disk where the file will be stored
                'path' => 'gallery', // The path inside the disk where the file will be stored
            ]);

        CRUD::field('description')->type('textarea')->label('Description');
    }

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
    }
}
