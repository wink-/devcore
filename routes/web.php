<?php

Route::redirect('/', '/login');
Route::view('/playground', 'playground');
Route::view('/datatables', 'datatables');
Route::view('/powergridtable', 'powergridtable');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);

//Calsys
Route::group(['prefix' => 'calsys', 'as' => 'calsys.', 'namespace' => 'Calsys', 'middleware' => ['auth']], function () {

    // Calibrated By
    Route::delete('calibrated-bies/destroy', 'CalibratedByController@massDestroy')->name('calibrated-bies.massDestroy');
    Route::resource('calibrated-bies', 'CalibratedByController');

    // Employee
    Route::delete('employees/destroy', 'EmployeeController@massDestroy')->name('employees.massDestroy');
    Route::resource('employees', 'EmployeeController');

    // Type
    Route::delete('types/destroy', 'TypeController@massDestroy')->name('types.massDestroy');
    Route::resource('types', 'TypeController');

    // Location
    Route::delete('locations/destroy', 'LocationController@massDestroy')->name('locations.massDestroy');
    Route::resource('locations', 'LocationController');

    // Owner
    Route::delete('owners/destroy', 'OwnerController@massDestroy')->name('owners.massDestroy');
    Route::resource('owners', 'OwnerController');

    // Period
    Route::delete('periods/destroy', 'PeriodController@massDestroy')->name('periods.massDestroy');
    Route::resource('periods', 'PeriodController');

    // Source
    Route::delete('sources/destroy', 'SourceController@massDestroy')->name('sources.massDestroy');
    Route::resource('sources', 'SourceController');

    // Status
    Route::delete('statuses/destroy', 'StatusController@massDestroy')->name('statuses.massDestroy');
    Route::resource('statuses', 'StatusController');

    // Device
    Route::delete('devices/destroy', 'DeviceController@massDestroy')->name('devices.massDestroy');
    Route::resource('devices', 'DeviceController');
    
});

//Pacsys
Route::group(['prefix' => 'pacsys', 'as' => 'pacsys.', 'namespace' => 'Pacsys', 'middleware' => ['auth']], function () {

    // Actions
    Route::delete('actions/destroy', 'ActionsController@massDestroy')->name('actions.massDestroy');
    Route::resource('actions', 'ActionsController');

    // Actions Temp
    Route::delete('actions-temps/destroy', 'ActionsTempController@massDestroy')->name('actions-temps.massDestroy');
    Route::resource('actions-temps', 'ActionsTempController');

    // Analysis
    Route::delete('analysis/destroy', 'AnalysisController@massDestroy')->name('analysis.massDestroy');
    Route::resource('analysis', 'AnalysisController');

    // Analysis New
    Route::delete('analysis-news/destroy', 'AnalysisNewController@massDestroy')->name('analysis-news.massDestroy');
    Route::resource('analysis-news', 'AnalysisNewController');

    // Calc Value
    Route::delete('calc-values/destroy', 'CalcValueController@massDestroy')->name('calc-values.massDestroy');
    Route::resource('calc-values', 'CalcValueController');

    // Employee
    Route::delete('employees/destroy', 'EmployeeController@massDestroy')->name('employees.massDestroy');
    Route::resource('employees', 'EmployeeController');

    // Form
    Route::delete('forms/destroy', 'FormController@massDestroy')->name('forms.massDestroy');
    Route::resource('forms', 'FormController');

    // Form Type
    Route::delete('form-types/destroy', 'FormTypeController@massDestroy')->name('form-types.massDestroy');
    Route::resource('form-types', 'FormTypeController');

    // Form Value Action
    Route::delete('form-value-actions/destroy', 'FormValueActionController@massDestroy')->name('form-value-actions.massDestroy');
    Route::resource('form-value-actions', 'FormValueActionController');

    // Form Value Name
    Route::delete('form-value-names/destroy', 'FormValueNameController@massDestroy')->name('form-value-names.massDestroy');
    Route::resource('form-value-names', 'FormValueNameController');

    // Form Value Period
    Route::delete('form-value-periods/destroy', 'FormValuePeriodController@massDestroy')->name('form-value-periods.massDestroy');
    Route::resource('form-value-periods', 'FormValuePeriodController');

    // Form Value Range
    Route::delete('form-value-ranges/destroy', 'FormValueRangeController@massDestroy')->name('form-value-ranges.massDestroy');
    Route::resource('form-value-ranges', 'FormValueRangeController');

    // Form Value Type
    Route::delete('form-value-types/destroy', 'FormValueTypeController@massDestroy')->name('form-value-types.massDestroy');
    Route::resource('form-value-types', 'FormValueTypeController');

    // Form Value Unit
    Route::delete('form-value-units/destroy', 'FormValueUnitController@massDestroy')->name('form-value-units.massDestroy');
    Route::resource('form-value-units', 'FormValueUnitController');

    // Form Value Visible
    Route::delete('form-value-visibles/destroy', 'FormValueVisibleController@massDestroy')->name('form-value-visibles.massDestroy');
    Route::resource('form-value-visibles', 'FormValueVisibleController');

    // Months
    Route::delete('months/destroy', 'MonthsController@massDestroy')->name('months.massDestroy');
    Route::resource('months', 'MonthsController');

    // Period
    Route::delete('periods/destroy', 'PeriodController@massDestroy')->name('periods.massDestroy');
    Route::resource('periods', 'PeriodController');

    // Record
    Route::delete('records/destroy', 'RecordController@massDestroy')->name('records.massDestroy');
    Route::resource('records', 'RecordController');

    // Scope
    Route::delete('scopes/destroy', 'ScopeController@massDestroy')->name('scopes.massDestroy');
    Route::resource('scopes', 'ScopeController');

    // Security
    Route::delete('securities/destroy', 'SecurityController@massDestroy')->name('securities.massDestroy');
    Route::resource('securities', 'SecurityController');

    // Unit
    Route::delete('units/destroy', 'UnitController@massDestroy')->name('units.massDestroy');
    Route::resource('units', 'UnitController');

    // Validation
    Route::delete('validations/destroy', 'ValidationController@massDestroy')->name('validations.massDestroy');
    Route::resource('validations', 'ValidationController');    

    // Years
    Route::delete('years/destroy', 'YearsController@massDestroy')->name('years.massDestroy');
    Route::resource('years', 'YearsController');    
});

//ProcessData
Route::group(['prefix' => 'processdata', 'as' => 'processdata.', 'namespace' => 'ProcessData', 'middleware' => ['auth']], function () {

    // Amp
    Route::delete('amps/destroy', 'AmpController@massDestroy')->name('amps.massDestroy');
    Route::resource('amps', 'AmpController');

    // Record Types
    Route::delete('record-types/destroy', 'RecordTypesController@massDestroy')->name('record-types.massDestroy');
    Route::resource('record-types', 'RecordTypesController');

    // Logger Types
    Route::delete('logger-types/destroy', 'LoggerTypesController@massDestroy')->name('logger-types.massDestroy');
    Route::resource('logger-types', 'LoggerTypesController');

    // Pd Units
    Route::delete('units/destroy', 'UnitsController@massDestroy')->name('units.massDestroy');
    Route::resource('units', 'UnitsController');

    // Pd Records
    Route::delete('records/destroy', 'RecordsController@massDestroy')->name('records.massDestroy');
    Route::resource('records', 'RecordsController');

    // Loggers
    Route::delete('loggers/destroy', 'LoggersController@massDestroy')->name('loggers.massDestroy');
    Route::resource('loggers', 'LoggersController');

    // Temperature
    Route::delete('temperatures/destroy', 'TemperatureController@massDestroy')->name('temperatures.massDestroy');
    Route::resource('temperatures', 'TemperatureController');

    // Volt
    Route::delete('volts/destroy', 'VoltController@massDestroy')->name('volts.massDestroy');
    Route::resource('volts', 'VoltController');

});

//Wipsys
Route::group(['prefix' => 'wipsys', 'as' => 'wipsys.', 'namespace' => 'Wipsys', 'middleware' => ['auth']], function () {

    // Carriers
    Route::delete('carriers/destroy', 'CarriersController@massDestroy')->name('carriers.massDestroy');
    Route::resource('carriers', 'CarriersController');

    // Customers
    Route::resource('customers', 'CustomersController', ['except' => ['destroy']]);

    // Destinations
    Route::delete('destinations/destroy', 'DestinationsController@massDestroy')->name('destinations.massDestroy');
    Route::resource('destinations', 'DestinationsController');

    // Contacts
    Route::delete('contacts/destroy', 'ContactsController@massDestroy')->name('contacts.massDestroy');
    Route::resource('contacts', 'ContactsController');

    // Processes
    Route::delete('processes/destroy', 'ProcessesController@massDestroy')->name('processes.massDestroy');
    Route::resource('processes', 'ProcessesController');

    // Parts
    Route::resource('parts', 'PartsController', ['except' => ['destroy']]);

    // Sessions
    Route::delete('sessions/destroy', 'SessionsController@massDestroy')->name('sessions.massDestroy');
    Route::resource('sessions', 'SessionsController');

    // Procedures
    Route::delete('procedures/destroy', 'ProceduresController@massDestroy')->name('procedures.massDestroy');
    Route::resource('procedures', 'ProceduresController');

    // Materials
    Route::delete('materials/destroy', 'MaterialsController@massDestroy')->name('materials.massDestroy');
    Route::resource('materials', 'MaterialsController');

    // Methods
    Route::delete('methods/destroy', 'MethodsController@massDestroy')->name('methods.massDestroy');
    Route::resource('methods', 'MethodsController');

    // Quotes
    Route::delete('quotes/destroy', 'QuotesController@massDestroy')->name('quotes.massDestroy');
    Route::resource('quotes', 'QuotesController');

    // Workorders
    Route::delete('workorders/destroy', 'WorkordersController@massDestroy')->name('workorders.massDestroy');
    Route::resource('workorders', 'WorkordersController');

    // Workorderhistory
    Route::resource('workorderhistories', 'WorkorderhistoryController', ['except' => ['destroy']]);

    // Employees
    Route::resource('employees', 'EmployeesController', ['except' => ['destroy']]);

    // Equipment
    Route::resource('equipment', 'EquipmentController', ['except' => ['destroy']]);

    // Priorities
    Route::delete('priorities/destroy', 'PrioritiesController@massDestroy')->name('priorities.massDestroy');
    Route::resource('priorities', 'PrioritiesController');

    // States
    Route::delete('states/destroy', 'StatesController@massDestroy')->name('states.massDestroy');
    Route::resource('states', 'StatesController');

    // Qualitychecks
    Route::delete('qualitychecks/destroy', 'QualitychecksController@massDestroy')->name('qualitychecks.massDestroy');
    Route::resource('qualitychecks', 'QualitychecksController');

    // Steps
    Route::delete('steps/destroy', 'StepsController@massDestroy')->name('steps.massDestroy');
    Route::resource('steps', 'StepsController');

    // Freight
    Route::delete('freights/destroy', 'FreightController@massDestroy')->name('freights.massDestroy');
    Route::resource('freights', 'FreightController');

    // Invoices
    Route::resource('invoices', 'InvoicesController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Labor Cards
    Route::resource('labor-cards', 'LaborCardsController', ['except' => ['create', 'store', 'destroy']]);

    // Logs
    Route::resource('logs', 'LogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Packing Lists
    Route::resource('packing-lists', 'PackingListsController', ['except' => ['destroy']]);

    // Packing Lists Detail
    Route::resource('packing-lists-details', 'PackingListsDetailController', ['except' => ['create', 'store', 'destroy']]);

    // Parts Backup
    Route::resource('parts-backups', 'PartsBackupController', ['except' => ['create', 'store', 'destroy']]);

    // Partshistory
    Route::resource('partshistories', 'PartshistoryController', ['except' => ['create', 'store', 'destroy']]);

    // Price Codes
    Route::delete('price-codes/destroy', 'PriceCodesController@massDestroy')->name('price-codes.massDestroy');
    Route::resource('price-codes', 'PriceCodesController');

    // Printers
    Route::resource('printers', 'PrintersController', ['except' => ['destroy']]);

    // Tags
    Route::resource('tags', 'TagsController', ['except' => ['destroy']]);

    // Units
    Route::delete('units/destroy', 'UnitsController@massDestroy')->name('units.massDestroy');
    Route::resource('units', 'UnitsController');

    // Sftusers
    Route::delete('sftusers/destroy', 'SftusersController@massDestroy')->name('sftusers.massDestroy');
    Route::resource('sftusers', 'SftusersController');

    // Workgroups
    Route::delete('workgroups/destroy', 'WorkgroupsController@massDestroy')->name('workgroups.massDestroy');
    Route::resource('workgroups', 'WorkgroupsController');

    // Ups
    Route::resource('ups', 'UpsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);    
    
});

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
