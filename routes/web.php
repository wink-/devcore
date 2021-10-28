<?php

Route::redirect('/', '/login');
Route::view('/playground', 'playground');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
Route::group(['prefix' => 'pacsys', 'as' => 'pacsys.', 'namespace' => 'Pacsys', 'middleware' => ['auth']], function () {
    // Actions
    Route::delete('actions/destroy', 'ActionsController@massDestroy')->name('actions.massDestroy');
    Route::resource('actions', 'ActionsController');    
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

    // Calibrated By
    Route::delete('calibrated-bies/destroy', 'CalibratedByController@massDestroy')->name('calibrated-bies.massDestroy');
    Route::resource('calibrated-bies', 'CalibratedByController');

    // Calemployee
    Route::delete('calemployees/destroy', 'CalemployeeController@massDestroy')->name('calemployees.massDestroy');
    Route::resource('calemployees', 'CalemployeeController');

    // Cal Type
    Route::delete('cal-types/destroy', 'CalTypeController@massDestroy')->name('cal-types.massDestroy');
    Route::resource('cal-types', 'CalTypeController');

    // Cal Location
    Route::delete('cal-locations/destroy', 'CalLocationController@massDestroy')->name('cal-locations.massDestroy');
    Route::resource('cal-locations', 'CalLocationController');

    // Cal Owner
    Route::delete('cal-owners/destroy', 'CalOwnerController@massDestroy')->name('cal-owners.massDestroy');
    Route::resource('cal-owners', 'CalOwnerController');

    // Cal Period
    Route::delete('cal-periods/destroy', 'CalPeriodController@massDestroy')->name('cal-periods.massDestroy');
    Route::resource('cal-periods', 'CalPeriodController');

    // Cal Source
    Route::delete('cal-sources/destroy', 'CalSourceController@massDestroy')->name('cal-sources.massDestroy');
    Route::resource('cal-sources', 'CalSourceController');

    // Cal Status
    Route::delete('cal-statuses/destroy', 'CalStatusController@massDestroy')->name('cal-statuses.massDestroy');
    Route::resource('cal-statuses', 'CalStatusController');

    // Cal Device
    Route::delete('cal-devices/destroy', 'CalDeviceController@massDestroy')->name('cal-devices.massDestroy');
    Route::resource('cal-devices', 'CalDeviceController');

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

    // P Employee
    Route::delete('p-employees/destroy', 'PEmployeeController@massDestroy')->name('p-employees.massDestroy');
    Route::resource('p-employees', 'PEmployeeController');

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

    // P Unit
    Route::delete('p-units/destroy', 'PUnitController@massDestroy')->name('p-units.massDestroy');
    Route::resource('p-units', 'PUnitController');

    // Years
    Route::delete('years/destroy', 'YearsController@massDestroy')->name('years.massDestroy');
    Route::resource('years', 'YearsController');

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
    Route::delete('pd-units/destroy', 'PdUnitsController@massDestroy')->name('pd-units.massDestroy');
    Route::resource('pd-units', 'PdUnitsController');

    // Pd Records
    Route::delete('pd-records/destroy', 'PdRecordsController@massDestroy')->name('pd-records.massDestroy');
    Route::resource('pd-records', 'PdRecordsController');

    // Loggers
    Route::delete('loggers/destroy', 'LoggersController@massDestroy')->name('loggers.massDestroy');
    Route::resource('loggers', 'LoggersController');

    // Temperature
    Route::delete('temperatures/destroy', 'TemperatureController@massDestroy')->name('temperatures.massDestroy');
    Route::resource('temperatures', 'TemperatureController');

    // Volt
    Route::delete('volts/destroy', 'VoltController@massDestroy')->name('volts.massDestroy');
    Route::resource('volts', 'VoltController');

    // Validation
    Route::delete('validations/destroy', 'ValidationController@massDestroy')->name('validations.massDestroy');
    Route::resource('validations', 'ValidationController');

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
