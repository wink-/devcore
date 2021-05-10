<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Carriers
    Route::apiResource('carriers', 'CarriersApiController');

    // Customers
    Route::apiResource('customers', 'CustomersApiController', ['except' => ['destroy']]);

    // Destinations
    Route::apiResource('destinations', 'DestinationsApiController');

    // Contacts
    Route::apiResource('contacts', 'ContactsApiController');

    // Processes
    Route::apiResource('processes', 'ProcessesApiController');

    // Parts
    Route::apiResource('parts', 'PartsApiController', ['except' => ['destroy']]);

    // Sessions
    Route::apiResource('sessions', 'SessionsApiController');

    // Procedures
    Route::apiResource('procedures', 'ProceduresApiController');

    // Materials
    Route::apiResource('materials', 'MaterialsApiController');

    // Methods
    Route::apiResource('methods', 'MethodsApiController');

    // Quotes
    Route::apiResource('quotes', 'QuotesApiController');

    // Workorders
    Route::apiResource('workorders', 'WorkordersApiController');

    // Workorderhistory
    Route::apiResource('workorderhistories', 'WorkorderhistoryApiController', ['except' => ['destroy']]);

    // Employees
    Route::apiResource('employees', 'EmployeesApiController', ['except' => ['destroy']]);

    // Equipment
    Route::apiResource('equipment', 'EquipmentApiController', ['except' => ['destroy']]);

    // Calibrated By
    Route::apiResource('calibrated-bies', 'CalibratedByApiController');

    // Calemployee
    Route::apiResource('calemployees', 'CalemployeeApiController');

    // Cal Type
    Route::apiResource('cal-types', 'CalTypeApiController');

    // Cal Location
    Route::apiResource('cal-locations', 'CalLocationApiController');

    // Cal Owner
    Route::apiResource('cal-owners', 'CalOwnerApiController');

    // Cal Period
    Route::apiResource('cal-periods', 'CalPeriodApiController');

    // Cal Source
    Route::apiResource('cal-sources', 'CalSourceApiController');

    // Cal Status
    Route::apiResource('cal-statuses', 'CalStatusApiController');

    // Cal Device
    Route::apiResource('cal-devices', 'CalDeviceApiController');

    // Priorities
    Route::apiResource('priorities', 'PrioritiesApiController');

    // States
    Route::apiResource('states', 'StatesApiController');

    // Qualitychecks
    Route::apiResource('qualitychecks', 'QualitychecksApiController');

    // Steps
    Route::apiResource('steps', 'StepsApiController');

    // Freight
    Route::apiResource('freights', 'FreightApiController');

    // Invoices
    Route::apiResource('invoices', 'InvoicesApiController', ['except' => ['store', 'update', 'destroy']]);

    // Labor Cards
    Route::apiResource('labor-cards', 'LaborCardsApiController', ['except' => ['store', 'destroy']]);

    // Packing Lists
    Route::apiResource('packing-lists', 'PackingListsApiController', ['except' => ['destroy']]);

    // Packing Lists Detail
    Route::apiResource('packing-lists-details', 'PackingListsDetailApiController', ['except' => ['store', 'destroy']]);

    // Parts Backup
    Route::apiResource('parts-backups', 'PartsBackupApiController', ['except' => ['store', 'destroy']]);

    // Partshistory
    Route::apiResource('partshistories', 'PartshistoryApiController', ['except' => ['store', 'destroy']]);

    // Price Codes
    Route::apiResource('price-codes', 'PriceCodesApiController');

    // Printers
    Route::apiResource('printers', 'PrintersApiController', ['except' => ['destroy']]);

    // Tags
    Route::apiResource('tags', 'TagsApiController', ['except' => ['destroy']]);

    // Units
    Route::apiResource('units', 'UnitsApiController');

    // Sftusers
    Route::apiResource('sftusers', 'SftusersApiController');

    // Workgroups
    Route::apiResource('workgroups', 'WorkgroupsApiController');

    // Ups
    Route::apiResource('ups', 'UpsApiController', ['except' => ['store', 'update', 'destroy']]);

    // Actions
    Route::apiResource('actions', 'ActionsApiController');

    // Actions Temp
    Route::apiResource('actions-temps', 'ActionsTempApiController');

    // Analysis
    Route::apiResource('analysis', 'AnalysisApiController');

    // Analysis New
    Route::apiResource('analysis-news', 'AnalysisNewApiController');

    // Calc Value
    Route::apiResource('calc-values', 'CalcValueApiController');

    // P Employee
    Route::apiResource('p-employees', 'PEmployeeApiController');

    // Form
    Route::apiResource('forms', 'FormApiController');

    // Form Type
    Route::apiResource('form-types', 'FormTypeApiController');

    // Form Value Action
    Route::apiResource('form-value-actions', 'FormValueActionApiController');

    // Form Value Name
    Route::apiResource('form-value-names', 'FormValueNameApiController');

    // Form Value Period
    Route::apiResource('form-value-periods', 'FormValuePeriodApiController');

    // Form Value Range
    Route::apiResource('form-value-ranges', 'FormValueRangeApiController');

    // Form Value Type
    Route::apiResource('form-value-types', 'FormValueTypeApiController');

    // Form Value Unit
    Route::apiResource('form-value-units', 'FormValueUnitApiController');

    // Form Value Visible
    Route::apiResource('form-value-visibles', 'FormValueVisibleApiController');

    // Months
    Route::apiResource('months', 'MonthsApiController');

    // Period
    Route::apiResource('periods', 'PeriodApiController');

    // Record
    Route::apiResource('records', 'RecordApiController');

    // Scope
    Route::apiResource('scopes', 'ScopeApiController');

    // Security
    Route::apiResource('securities', 'SecurityApiController');

    // P Unit
    Route::apiResource('p-units', 'PUnitApiController');

    // Years
    Route::apiResource('years', 'YearsApiController');

    // Amp
    Route::apiResource('amps', 'AmpApiController');

    // Record Types
    Route::apiResource('record-types', 'RecordTypesApiController');

    // Logger Types
    Route::apiResource('logger-types', 'LoggerTypesApiController');

    // Pd Units
    Route::apiResource('pd-units', 'PdUnitsApiController');

    // Pd Records
    Route::apiResource('pd-records', 'PdRecordsApiController');

    // Loggers
    Route::apiResource('loggers', 'LoggersApiController');

    // Temperature
    Route::apiResource('temperatures', 'TemperatureApiController');

    // Volt
    Route::apiResource('volts', 'VoltApiController');

    // Validation
    Route::apiResource('validations', 'ValidationApiController');
});
