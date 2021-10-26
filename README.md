## Files for each CRUD
[New Model]
    app/Models/Transaction.php

[New Controller]
    app/Http/Controllers/Admin/TransactionsController.php
    app/Http/Controllers/Api/V1/Admin/TransactionsApiController.php

[New Form Requests]
    app/Http/Requests/MassDestroyTransactionRequest.php
    app/Http/Requests/StoreTransactionRequest.php
    app/Http/Requests/UpdateTransactionRequest.php
[New Resource]
    app/Http/Resources/Admin/TransactionResource.php
[New database migration]
    database/migrations/2019_12_02_000005_create_transactions_table.php

[New Blade views]
    resources/views/admin/transactions/create.blade.php
    resources/views/admin/transactions/edit.blade.php
    resources/views/admin/transactions/index.blade.php
    resources/views/admin/transactions/show.blade.php
    resources/views/partials/menu.blade.php

 [Changed Translation Files for new CRUD]
    resources/lang/en/cruds.php

## Refactor Models
    Set the connection  ->  protected $connection = 'pacsys';
    Set the table       ->  public $table = 'actions';
    Set the primary key ->  protected $primaryKey = 'ID';

Check if you are using created_at and updated_at and if not disable timestamps ->     public $timestamps = FALSE;

Check attributes to make sure they are using the correct table name.


Map the weird column names to the conventional names ->
    protected $maps = [
        'dbCol1' => 'coolName1',
        'dbCol2' => 'coolName2'
    ];

Add the new keys to the model ->
    protected $append = ['coolName1', 'coolName2'];

And then add a public mapper method for your properiest ->
    public function getCoolName1Attribute()
    {
        return $this->attributes['dbCol1'];
    }
    public function getCoolName2Attribute()
    {
        return $this->attributes['dbCol2'];
    }
## Refactor Views
Replace references to ID in views with getKey()

## Permission Structure
    domain_access
    domain_create
    domain_edit
    domain_delete