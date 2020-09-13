<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ContactRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class ContactCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ContactCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Contact::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/contact');
        CRUD::setEntityNameStrings('contact', 'contacts');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::addColumn([
            'name'      => 'id',
            'label'     => 'ID',
            'searchLogic' => function ($query, $column, $searchTerm) {
                $query->orWhere('id', 'like', '%'.$searchTerm.'%');
            }
        ]);
        CRUD::addColumn([
            'name'      => 'FullName',
            'label'     => 'Name',
            'searchLogic' => function ($query, $column, $searchTerm) {
                $query->orWhere('first_name', 'like', '%'.$searchTerm.'%')
                ->orWhere('last_name', 'like', '%'.$searchTerm.'%');
            }
        ]);
        CRUD::addColumn([
            'name'      => 'ContactPhone',
            'label'     => 'Mobile Phone',
            'searchLogic' => function ($query, $column, $searchTerm) {
                $query->orWhere('phone', 'like', '%'.$searchTerm.'%');
            }
        ]);
        CRUD::addColumn([
            'name'      => 'occupation',
            'label'     => 'Occupation',
        ]);
        CRUD::addColumn([
            'name'      => 'type',
            'label'     => 'Contact Type'
        ]);
        CRUD::addColumn([
            'name'      => 'account_id',
            'label'     => 'Account',
            'type'      => "select",
            'entity'    => 'account',
            'attribute' => "name",
        ]);
        CRUD::addColumn([
            'name'      => 'identity_card',
            'label'     => 'Identify Card'
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(ContactRequest::class);

        $colMd6 = [ 'class' => 'form-group col-md-6']; 
        $colMd12 = [ 'class' => 'form-group col-md-12']; 

        CRUD::addField([
            'name' => 'custom_html_contact_information',
            'type' => 'custom_html',
            'label' => 'Contact Information',
            'value' => $this->mainTitle('Contact Information'),
        ]);
        CRUD::addField([
            'name'      => 'first_name', 
            'label'     => 'First name',
            'type'      => 'text',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'last_name', 
            'label'     => 'Last name',
            'type'      => 'text',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'salutation', 
            'label'     => 'Salutation',
            'type'      => 'select2_from_array',
            'allows_null' => true,
            'options'   => ['Mr.' => 'Mr.', 'Ms.' => 'Ms.', 'Mrs.' => 'Mrs.', 'Okhanha' => 'Okhanha', 'H.E' => 'H.E', 'Dr.' => 'Dr.', 'Neak Oknha' => 'Neak Oknha', 'Oknha' => 'Oknha'],
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'type', 
            'label'     => 'Contact Type',
            'type'      => 'select2_from_array',
            'options'   => ['owner' => 'Owner', 'agent' => 'Agent', 'brokery' => 'Brokery', 'Buyer' => 'Buyer'],
            'allows_null' => true,
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'phone', 
            'label'     => 'Mobile Phone',
            'type'      => 'flexi.phone',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'phone_2', 
            'label'     => 'Business Phone',
            'type'      => 'flexi.phone',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'email', 
            'label'     => 'Email',
            'type'      => 'flexi.phone',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'account_id', 
            'label'     => 'Account Name',
            'type'      => 'select2_from_array',
            'allows_null' => true,
            'options'   => ['1' => 'Zillennium', '2' => 'VTrust', '3' => 'Century 21'],
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'title', 
            'label'     => 'Title',
            'type'      => 'text',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'fax', 
            'label'     => 'Fax',
            'type'      => 'text',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'department', 
            'label'     => 'Department',
            'type'      => 'text',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'assistant_name', 
            'label'     => 'Assistant Name',
            'type'      => 'text',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'assistant_phone', 
            'label'     => 'Assistant Phone',
            'type'      => 'flexi.phone',
            'wrapper'   => $colMd12
        ]);
        $this->crud->addField([
            'name'      => 'is_vip',
            'type'      => 'flexi.checkbox_button',
            'label'     => 'VIP Contact',
            'wrapper'   => 'form-group col-md-6 col-6',
            'default'   => request()->segment(2) === 'contact' ? 0 : 1
        ]);
        CRUD::addField([
            'name'      => 'custom_html_personal_information',
            'type'      => 'custom_html',
            'label'     => 'Personal Information',
            'value'     => $this->mainTitle('Personal Information'),
        ]);
        CRUD::addField([
            'name'      => 'working_field',
            'type'      => 'select2_from_array',
            'allows_null' => true,
            'label'     => 'Working Field',
            'options'   => ['advertising' => 'Advertising and Media/Entertainment', 'agriculture' => 'Agriculture and Fishery', 'airline' => 'Airline'],
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'occupation',
            'type'      => 'select2_from_array',
            'allows_null' => true,
            'label'     => 'Position/Occupation',
            'options'   => [],
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'relationships',
            'type'      => 'select2_from_array',
            'allows_null' => true,
            'label'     => 'Relationships',
            'options'   => ['friend' => 'Friend', 'relative' => 'Relative'],
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'identity_card',
            'label'     => 'Identity Card Number',
            'type'      => 'text',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'date_of_birth',
            'type'      => 'date_picker',
            'label'     => 'Date of Birth',
            'date_picker_options' =>['clearBtn' => true],
            'wrapper' => $colMd6
        ]);
        CRUD::addField([
            'name'      => 'remark',
            'type'      => 'text',
            'label'     => 'Remark',
            'wrapper'   => $colMd6
        ]);
        CRUD::addField([
            'name' => "identity_card_photos",
            'type' => 'flexi.multiple_upload_preview',
            'upload' => true,
            'label' => ['Identity card photos', '(Each photo is limited within 2MB.)'],
        ]);
        CRUD::addField([
            'name' => 'custom_html_address',
            'type' => 'custom_html',
            'value' => $this->mainTitle('Address') 
        ]);
        CRUD::addField([
            'name' => 'address',
            'label' => trans('flexi.address'),
            'type' => 'flexi.address',
            'wrapper' => $colMd6
        ]);
    }


    private function mainTitle($title){
        return '<h4 class="mb-0 mt-4">'.$title.'</h4>';
    }

    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
