<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Bootstrap 4 Livewire Tables</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <livewire:styles />

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>
<body>

    <div class="px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <img class="d-block mx-auto mb-4" src="https://getbootstrap.com/docs/4.6/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <p class="lead">Bootstrap 4 Implementation - <a href="https://gist.github.com/rappasoft/948adf542307b8f620d53c7c7e735d3c" target="_blank">Gist</a></p>
    </div>

    <div class="container">
        <livewire:workorder-table />
    </div>

    <div class="container">
		<!-- <livewire:datatable 
    model="App\Models\Wipsys\Part"
    exclude="session_id, archive, revision, surface_area_unit_code, weight_unit_code, dimension_unit_code, material_thickness_unit_code, material, material_condition, material_thickness, quantity_price_break, minimum_line_charge, minimum_lot_charge, price_break, unit_code, quality_check_1, quality_check_2, quality_check_3, quality_check_4, quality_check_5, quality_check_6, note, special_requirement, thickness_unit_code, length, width, height"
    hide="baking_time_pre,
        baking_temp_pre,
        baking_time_post,
        baking_temp_post,
        surface_area,
        procedure_code,
        revision_code,
        weight,
        operator_note,
        image_count,
        certify,
        created_at,
        updated_at,
        id,
        specification,
        thickness_minimum,
        thickness_maximum"
    searchable="number, customer_code, customer_name, process_code"
    hideable="select"


/> -->
    </div>    



    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <livewire:scripts />
{{--    <script src="https://cdn.jsdelivr.net/gh/livewire/sortable@v0.x.x/dist/livewire-sortable.js"></script>--}}
    <script src="https://unpkg.com/@nextapps-be/livewire-sortablejs@0.1.1/dist/livewire-sortable.js"></script>
</body>
</html>