<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 917px;">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <span class="brand-text font-weight-light">{{ trans('panel.site_title') }}</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li>
                    <select class="searchable-field form-control">

                    </select>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route("admin.home") }}">
                        <i class="fas fa-fw fa-tachometer-alt nav-icon">
                        </i>
                        <p>
                            {{ trans('global.dashboard') }}
                        </p>
                    </a>
                </li>
                @can('quote_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.quotes.index") }}" class="nav-link {{ request()->is("admin/quotes") || request()->is("admin/quotes/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.quote.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('workorder_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.workorders.index") }}" class="nav-link {{ request()->is("admin/workorders") || request()->is("admin/workorders/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.workorder.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('part_access')
                    <li class="nav-item">
                        <a href="{{ route("admin.parts.index") }}" class="nav-link {{ request()->is("admin/parts") || request()->is("admin/parts/*") ? "active" : "" }}">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.part.title') }}
                            </p>
                        </a>
                    </li>
                @endcan
                @can('customer_resource_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/customers*") ? "menu-open" : "" }} {{ request()->is("admin/contacts*") ? "menu-open" : "" }} {{ request()->is("admin/carriers*") ? "menu-open" : "" }} {{ request()->is("admin/destinations*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-address-book">

                            </i>
                            <p>
                                {{ trans('cruds.customerResourceManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('customer_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.customers.index") }}" class="nav-link {{ request()->is("admin/customers") || request()->is("admin/customers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.customer.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('contact_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.contacts.index") }}" class="nav-link {{ request()->is("admin/contacts") || request()->is("admin/contacts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-address-book">

                                        </i>
                                        <p>
                                            {{ trans('cruds.contact.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('carrier_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.carriers.index") }}" class="nav-link {{ request()->is("admin/carriers") || request()->is("admin/carriers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.carrier.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('destination_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.destinations.index") }}" class="nav-link {{ request()->is("admin/destinations") || request()->is("admin/destinations/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.destination.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('wip_sys_administration_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/employees*") ? "menu-open" : "" }} {{ request()->is("admin/materials*") ? "menu-open" : "" }} {{ request()->is("admin/methods*") ? "menu-open" : "" }} {{ request()->is("admin/procedures*") ? "menu-open" : "" }} {{ request()->is("admin/processes*") ? "menu-open" : "" }} {{ request()->is("admin/workorderhistories*") ? "menu-open" : "" }} {{ request()->is("admin/equipment*") ? "menu-open" : "" }} {{ request()->is("admin/priorities*") ? "menu-open" : "" }} {{ request()->is("admin/qualitychecks*") ? "menu-open" : "" }} {{ request()->is("admin/steps*") ? "menu-open" : "" }} {{ request()->is("admin/freights*") ? "menu-open" : "" }} {{ request()->is("admin/invoices*") ? "menu-open" : "" }} {{ request()->is("admin/labor-cards*") ? "menu-open" : "" }} {{ request()->is("admin/logs*") ? "menu-open" : "" }} {{ request()->is("admin/packing-lists*") ? "menu-open" : "" }} {{ request()->is("admin/packing-lists-details*") ? "menu-open" : "" }} {{ request()->is("admin/parts-backups*") ? "menu-open" : "" }} {{ request()->is("admin/partshistories*") ? "menu-open" : "" }} {{ request()->is("admin/price-codes*") ? "menu-open" : "" }} {{ request()->is("admin/tags*") ? "menu-open" : "" }} {{ request()->is("admin/sftusers*") ? "menu-open" : "" }} {{ request()->is("admin/workgroups*") ? "menu-open" : "" }} {{ request()->is("admin/ups*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.wipSysAdministration.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('employee_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.employees.index") }}" class="nav-link {{ request()->is("admin/employees") || request()->is("admin/employees/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.employee.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('material_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.materials.index") }}" class="nav-link {{ request()->is("admin/materials") || request()->is("admin/materials/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.material.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('method_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.methods.index") }}" class="nav-link {{ request()->is("admin/methods") || request()->is("admin/methods/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.method.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('procedure_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.procedures.index") }}" class="nav-link {{ request()->is("admin/procedures") || request()->is("admin/procedures/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.procedure.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('process_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.processes.index") }}" class="nav-link {{ request()->is("admin/processes") || request()->is("admin/processes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.process.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('workorderhistory_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.workorderhistories.index") }}" class="nav-link {{ request()->is("admin/workorderhistories") || request()->is("admin/workorderhistories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.workorderhistory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('equipment_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.equipment.index") }}" class="nav-link {{ request()->is("admin/equipment") || request()->is("admin/equipment/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.equipment.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('priority_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.priorities.index") }}" class="nav-link {{ request()->is("admin/priorities") || request()->is("admin/priorities/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.priority.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('qualitycheck_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.qualitychecks.index") }}" class="nav-link {{ request()->is("admin/qualitychecks") || request()->is("admin/qualitychecks/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.qualitycheck.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('step_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.steps.index") }}" class="nav-link {{ request()->is("admin/steps") || request()->is("admin/steps/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.step.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('freight_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.freights.index") }}" class="nav-link {{ request()->is("admin/freights") || request()->is("admin/freights/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.freight.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('invoice_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.invoices.index") }}" class="nav-link {{ request()->is("admin/invoices") || request()->is("admin/invoices/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.invoice.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('labor_card_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.labor-cards.index") }}" class="nav-link {{ request()->is("admin/labor-cards") || request()->is("admin/labor-cards/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.laborCard.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.logs.index") }}" class="nav-link {{ request()->is("admin/logs") || request()->is("admin/logs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.log.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('packing_list_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.packing-lists.index") }}" class="nav-link {{ request()->is("admin/packing-lists") || request()->is("admin/packing-lists/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.packingList.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('packing_lists_detail_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.packing-lists-details.index") }}" class="nav-link {{ request()->is("admin/packing-lists-details") || request()->is("admin/packing-lists-details/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.packingListsDetail.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('parts_backup_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.parts-backups.index") }}" class="nav-link {{ request()->is("admin/parts-backups") || request()->is("admin/parts-backups/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.partsBackup.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('partshistory_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.partshistories.index") }}" class="nav-link {{ request()->is("admin/partshistories") || request()->is("admin/partshistories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.partshistory.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('price_code_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.price-codes.index") }}" class="nav-link {{ request()->is("admin/price-codes") || request()->is("admin/price-codes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.priceCode.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('tag_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.tags.index") }}" class="nav-link {{ request()->is("admin/tags") || request()->is("admin/tags/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.tag.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('sftuser_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sftusers.index") }}" class="nav-link {{ request()->is("admin/sftusers") || request()->is("admin/sftusers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.sftuser.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('workgroup_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.workgroups.index") }}" class="nav-link {{ request()->is("admin/workgroups") || request()->is("admin/workgroups/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.workgroup.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('up_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.ups.index") }}" class="nav-link {{ request()->is("admin/ups") || request()->is("admin/ups/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.up.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('cal_sy_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/calibrated-bies*") ? "menu-open" : "" }} {{ request()->is("admin/calemployees*") ? "menu-open" : "" }} {{ request()->is("admin/cal-types*") ? "menu-open" : "" }} {{ request()->is("admin/cal-locations*") ? "menu-open" : "" }} {{ request()->is("admin/cal-owners*") ? "menu-open" : "" }} {{ request()->is("admin/cal-periods*") ? "menu-open" : "" }} {{ request()->is("admin/cal-sources*") ? "menu-open" : "" }} {{ request()->is("admin/cal-statuses*") ? "menu-open" : "" }} {{ request()->is("admin/cal-devices*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.calSy.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('calibrated_by_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.calibrated-bies.index") }}" class="nav-link {{ request()->is("admin/calibrated-bies") || request()->is("admin/calibrated-bies/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.calibratedBy.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('calemployee_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.calemployees.index") }}" class="nav-link {{ request()->is("admin/calemployees") || request()->is("admin/calemployees/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.calemployee.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('cal_type_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-types.index") }}" class="nav-link {{ request()->is("admin/cal-types") || request()->is("admin/cal-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.calType.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('cal_location_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-locations.index") }}" class="nav-link {{ request()->is("admin/cal-locations") || request()->is("admin/cal-locations/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.calLocation.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('cal_owner_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-owners.index") }}" class="nav-link {{ request()->is("admin/cal-owners") || request()->is("admin/cal-owners/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.calOwner.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('cal_period_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-periods.index") }}" class="nav-link {{ request()->is("admin/cal-periods") || request()->is("admin/cal-periods/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.calPeriod.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('cal_source_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-sources.index") }}" class="nav-link {{ request()->is("admin/cal-sources") || request()->is("admin/cal-sources/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.calSource.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('cal_status_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-statuses.index") }}" class="nav-link {{ request()->is("admin/cal-statuses") || request()->is("admin/cal-statuses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.calStatus.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('cal_device_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-devices.index") }}" class="nav-link {{ request()->is("admin/cal-devices") || request()->is("admin/cal-devices/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.calDevice.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('user_management_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/permissions*") ? "menu-open" : "" }} {{ request()->is("admin/roles*") ? "menu-open" : "" }} {{ request()->is("admin/users*") ? "menu-open" : "" }} {{ request()->is("admin/audit-logs*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-users">

                            </i>
                            <p>
                                {{ trans('cruds.userManagement.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('permission_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.permissions.index") }}" class="nav-link {{ request()->is("admin/permissions") || request()->is("admin/permissions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-unlock-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.permission.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('role_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.roles.index") }}" class="nav-link {{ request()->is("admin/roles") || request()->is("admin/roles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-briefcase">

                                        </i>
                                        <p>
                                            {{ trans('cruds.role.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('user_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.users.index") }}" class="nav-link {{ request()->is("admin/users") || request()->is("admin/users/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-user">

                                        </i>
                                        <p>
                                            {{ trans('cruds.user.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('audit_log_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.audit-logs.index") }}" class="nav-link {{ request()->is("admin/audit-logs") || request()->is("admin/audit-logs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-file-alt">

                                        </i>
                                        <p>
                                            {{ trans('cruds.auditLog.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('administration_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/sessions*") ? "menu-open" : "" }} {{ request()->is("admin/states*") ? "menu-open" : "" }} {{ request()->is("admin/printers*") ? "menu-open" : "" }} {{ request()->is("admin/units*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.administration.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('session_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.sessions.index") }}" class="nav-link {{ request()->is("admin/sessions") || request()->is("admin/sessions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.session.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('state_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.states.index") }}" class="nav-link {{ request()->is("admin/states") || request()->is("admin/states/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.state.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('printer_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.printers.index") }}" class="nav-link {{ request()->is("admin/printers") || request()->is("admin/printers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.printer.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('unit_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.units.index") }}" class="nav-link {{ request()->is("admin/units") || request()->is("admin/units/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.unit.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('pac_sy_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/actions*") ? "menu-open" : "" }} {{ request()->is("admin/actions-temps*") ? "menu-open" : "" }} {{ request()->is("admin/analysis*") ? "menu-open" : "" }} {{ request()->is("admin/analysis-news*") ? "menu-open" : "" }} {{ request()->is("admin/calc-values*") ? "menu-open" : "" }} {{ request()->is("admin/p-employees*") ? "menu-open" : "" }} {{ request()->is("admin/forms*") ? "menu-open" : "" }} {{ request()->is("admin/form-types*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-actions*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-names*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-periods*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-ranges*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-types*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-units*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-visibles*") ? "menu-open" : "" }} {{ request()->is("admin/months*") ? "menu-open" : "" }} {{ request()->is("admin/periods*") ? "menu-open" : "" }} {{ request()->is("admin/records*") ? "menu-open" : "" }} {{ request()->is("admin/scopes*") ? "menu-open" : "" }} {{ request()->is("admin/securities*") ? "menu-open" : "" }} {{ request()->is("admin/p-units*") ? "menu-open" : "" }} {{ request()->is("admin/years*") ? "menu-open" : "" }} {{ request()->is("admin/validations*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.pacSy.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('action_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.actions.index") }}" class="nav-link {{ request()->is("admin/actions") || request()->is("admin/actions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.action.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('actions_temp_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.actions-temps.index") }}" class="nav-link {{ request()->is("admin/actions-temps") || request()->is("admin/actions-temps/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.actionsTemp.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('analysi_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.analysis.index") }}" class="nav-link {{ request()->is("admin/analysis") || request()->is("admin/analysis/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.analysi.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('analysis_new_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.analysis-news.index") }}" class="nav-link {{ request()->is("admin/analysis-news") || request()->is("admin/analysis-news/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.analysisNew.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('calc_value_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.calc-values.index") }}" class="nav-link {{ request()->is("admin/calc-values") || request()->is("admin/calc-values/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.calcValue.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('p_employee_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.p-employees.index") }}" class="nav-link {{ request()->is("admin/p-employees") || request()->is("admin/p-employees/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.pEmployee.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('form_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.forms.index") }}" class="nav-link {{ request()->is("admin/forms") || request()->is("admin/forms/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.form.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('form_type_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.form-types.index") }}" class="nav-link {{ request()->is("admin/form-types") || request()->is("admin/form-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.formType.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('form_value_action_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-actions.index") }}" class="nav-link {{ request()->is("admin/form-value-actions") || request()->is("admin/form-value-actions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.formValueAction.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('form_value_name_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-names.index") }}" class="nav-link {{ request()->is("admin/form-value-names") || request()->is("admin/form-value-names/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.formValueName.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('form_value_period_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-periods.index") }}" class="nav-link {{ request()->is("admin/form-value-periods") || request()->is("admin/form-value-periods/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.formValuePeriod.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('form_value_range_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-ranges.index") }}" class="nav-link {{ request()->is("admin/form-value-ranges") || request()->is("admin/form-value-ranges/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.formValueRange.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('form_value_type_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-types.index") }}" class="nav-link {{ request()->is("admin/form-value-types") || request()->is("admin/form-value-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.formValueType.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('form_value_unit_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-units.index") }}" class="nav-link {{ request()->is("admin/form-value-units") || request()->is("admin/form-value-units/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.formValueUnit.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('form_value_visible_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-visibles.index") }}" class="nav-link {{ request()->is("admin/form-value-visibles") || request()->is("admin/form-value-visibles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.formValueVisible.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('month_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.months.index") }}" class="nav-link {{ request()->is("admin/months") || request()->is("admin/months/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.month.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('period_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.periods.index") }}" class="nav-link {{ request()->is("admin/periods") || request()->is("admin/periods/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.period.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('record_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.records.index") }}" class="nav-link {{ request()->is("admin/records") || request()->is("admin/records/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.record.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('scope_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.scopes.index") }}" class="nav-link {{ request()->is("admin/scopes") || request()->is("admin/scopes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.scope.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('security_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.securities.index") }}" class="nav-link {{ request()->is("admin/securities") || request()->is("admin/securities/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.security.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('p_unit_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.p-units.index") }}" class="nav-link {{ request()->is("admin/p-units") || request()->is("admin/p-units/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.pUnit.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('year_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.years.index") }}" class="nav-link {{ request()->is("admin/years") || request()->is("admin/years/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.year.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('validation_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.validations.index") }}" class="nav-link {{ request()->is("admin/validations") || request()->is("admin/validations/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.validation.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @can('process_data_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/amps*") ? "menu-open" : "" }} {{ request()->is("admin/record-types*") ? "menu-open" : "" }} {{ request()->is("admin/logger-types*") ? "menu-open" : "" }} {{ request()->is("admin/pd-units*") ? "menu-open" : "" }} {{ request()->is("admin/pd-records*") ? "menu-open" : "" }} {{ request()->is("admin/loggers*") ? "menu-open" : "" }} {{ request()->is("admin/temperatures*") ? "menu-open" : "" }} {{ request()->is("admin/volts*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <i class="fa-fw nav-icon fas fa-cogs">

                            </i>
                            <p>
                                {{ trans('cruds.processData.title') }}
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can('amp_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.amps.index") }}" class="nav-link {{ request()->is("admin/amps") || request()->is("admin/amps/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.amp.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('record_type_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.record-types.index") }}" class="nav-link {{ request()->is("admin/record-types") || request()->is("admin/record-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.recordType.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('logger_type_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.logger-types.index") }}" class="nav-link {{ request()->is("admin/logger-types") || request()->is("admin/logger-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.loggerType.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('pd_unit_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.pd-units.index") }}" class="nav-link {{ request()->is("admin/pd-units") || request()->is("admin/pd-units/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.pdUnit.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('pd_record_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.pd-records.index") }}" class="nav-link {{ request()->is("admin/pd-records") || request()->is("admin/pd-records/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.pdRecord.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('logger_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.loggers.index") }}" class="nav-link {{ request()->is("admin/loggers") || request()->is("admin/loggers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.logger.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('temperature_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.temperatures.index") }}" class="nav-link {{ request()->is("admin/temperatures") || request()->is("admin/temperatures/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.temperature.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                            @can('volt_access')
                                <li class="nav-item">
                                    <a href="{{ route("admin.volts.index") }}" class="nav-link {{ request()->is("admin/volts") || request()->is("admin/volts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            {{ trans('cruds.volt.title') }}
                                        </p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcan
                @if(file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php')))
                    @can('profile_password_edit')
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('profile/password') || request()->is('profile/password/*') ? 'active' : '' }}" href="{{ route('profile.password.edit') }}">
                                <i class="fa-fw fas fa-key nav-icon">
                                </i>
                                <p>
                                    {{ trans('global.change_password') }}
                                </p>
                            </a>
                        </li>
                    @endcan
                @endif
                <li class="nav-item">
                    <a href="#" class="nav-link" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                        <p>
                            <i class="fas fa-fw fa-sign-out-alt nav-icon">

                            </i>
                            <p>{{ trans('global.logout') }}</p>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>