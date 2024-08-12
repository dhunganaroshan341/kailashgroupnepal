<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ArticleRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

class ArticleCrudController extends CrudController
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
        CRUD::setModel(\App\Models\Article::class);
        CRUD::setRoute(config('backpack.base.route_prefix').'/article');
        CRUD::setEntityNameStrings('article', 'articles');
        $this->crud->addColumn([
            'name' => 'featured_image', // The column name in the database
            'label' => 'Featured Image', // The label displayed in the CRUD
            'type' => 'image', // The type of the column
            'width' => '150px', // Width of the image
            'height' => '160px', // Height of the image
            // 'prefix' => 'articles', // Storage prefix if you're using public disk
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

        // Optionally define columns if needed:
        $this->crud->addColumn([
            'name' => 'featured_image', // The column name in the database
            'label' => 'Featured Image', // The label displayed in the CRUD
            'type' => 'image', // The type of the column
            'width' => '50', // Width of the image
            'height' => '50', // Height of the image
            // 'prefix' => 'articles', // Storage prefix if you're using public disk
        ]);
        CRUD::column('title');
        CRUD::column('slug');
        CRUD::column('content');

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
        CRUD::setValidation(ArticleRequest::class);

        CRUD::field('title');
        CRUD::field('slug');
        CRUD::field('content')->type('summernote')->attributes(['class' => 'summernote']); // Add Summernote here
        CRUD::field('featured_image')->label('Featured Image')->type('upload')->withFiles([
            'disk' => 'public', // the disk where file will be stored
            'path' => 'images', // the path inside the disk where file will be stored
        ]);
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
