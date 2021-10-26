
                @can('wipsys_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/customers*") ? "menu-open" : "" }} {{ request()->is("admin/contacts*") ? "menu-open" : "" }} {{ request()->is("admin/carriers*") ? "menu-open" : "" }} {{ request()->is("admin/destinations*") ? "menu-open" : "" }} {{ request()->is("admin/employees*") ? "menu-open" : "" }} {{ request()->is("admin/materials*") ? "menu-open" : "" }} {{ request()->is("admin/methods*") ? "menu-open" : "" }} {{ request()->is("admin/procedures*") ? "menu-open" : "" }} {{ request()->is("admin/processes*") ? "menu-open" : "" }} {{ request()->is("admin/workorderhistories*") ? "menu-open" : "" }} {{ request()->is("admin/equipment*") ? "menu-open" : "" }} {{ request()->is("admin/priorities*") ? "menu-open" : "" }} {{ request()->is("admin/qualitychecks*") ? "menu-open" : "" }} {{ request()->is("admin/steps*") ? "menu-open" : "" }} {{ request()->is("admin/freights*") ? "menu-open" : "" }} {{ request()->is("admin/invoices*") ? "menu-open" : "" }} {{ request()->is("admin/labor-cards*") ? "menu-open" : "" }} {{ request()->is("admin/logs*") ? "menu-open" : "" }} {{ request()->is("admin/packing-lists*") ? "menu-open" : "" }} {{ request()->is("admin/packing-lists-details*") ? "menu-open" : "" }} {{ request()->is("admin/parts-backups*") ? "menu-open" : "" }} {{ request()->is("admin/partshistories*") ? "menu-open" : "" }} {{ request()->is("admin/price-codes*") ? "menu-open" : "" }} {{ request()->is("admin/tags*") ? "menu-open" : "" }} {{ request()->is("admin/sftusers*") ? "menu-open" : "" }} {{ request()->is("admin/workgroups*") ? "menu-open" : "" }} {{ request()->is("admin/ups*") ? "menu-open" : "" }} {{ request()->is("admin/sessions*") ? "menu-open" : "" }} {{ request()->is("admin/states*") ? "menu-open" : "" }} {{ request()->is("admin/printers*") ? "menu-open" : "" }} {{ request()->is("admin/units*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <p>
                                WipSys
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route("admin.customers.index") }}" class="nav-link {{ request()->is("admin/customers") || request()->is("admin/customers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Customers
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.contacts.index") }}" class="nav-link {{ request()->is("admin/contacts") || request()->is("admin/contacts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon far fa-address-book">

                                        </i>
                                        <p>
                                            Contacts
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.carriers.index") }}" class="nav-link {{ request()->is("admin/carriers") || request()->is("admin/carriers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Carriers
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.destinations.index") }}" class="nav-link {{ request()->is("admin/destinations") || request()->is("admin/destinations/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Destinations
                                        </p>
                                    </a>
                                </li>                            
                                <li class="nav-item">
                                    <a href="{{ route("admin.employees.index") }}" class="nav-link {{ request()->is("admin/employees") || request()->is("admin/employees/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Employees
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.materials.index") }}" class="nav-link {{ request()->is("admin/materials") || request()->is("admin/materials/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Materials
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.methods.index") }}" class="nav-link {{ request()->is("admin/methods") || request()->is("admin/methods/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Methods
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.procedures.index") }}" class="nav-link {{ request()->is("admin/procedures") || request()->is("admin/procedures/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Procedures
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.processes.index") }}" class="nav-link {{ request()->is("admin/processes") || request()->is("admin/processes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Processes
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.workorderhistories.index") }}" class="nav-link {{ request()->is("admin/workorderhistories") || request()->is("admin/workorderhistories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Workorder History
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.equipment.index") }}" class="nav-link {{ request()->is("admin/equipment") || request()->is("admin/equipment/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Equipment
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.priorities.index") }}" class="nav-link {{ request()->is("admin/priorities") || request()->is("admin/priorities/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Priorities
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.qualitychecks.index") }}" class="nav-link {{ request()->is("admin/qualitychecks") || request()->is("admin/qualitychecks/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Quality Checks
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.steps.index") }}" class="nav-link {{ request()->is("admin/steps") || request()->is("admin/steps/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Steps
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.freights.index") }}" class="nav-link {{ request()->is("admin/freights") || request()->is("admin/freights/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Freight
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.invoices.index") }}" class="nav-link {{ request()->is("admin/invoices") || request()->is("admin/invoices/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Invoices
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.labor-cards.index") }}" class="nav-link {{ request()->is("admin/labor-cards") || request()->is("admin/labor-cards/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Labor Cards
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.logs.index") }}" class="nav-link {{ request()->is("admin/logs") || request()->is("admin/logs/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Logs
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.packing-lists.index") }}" class="nav-link {{ request()->is("admin/packing-lists") || request()->is("admin/packing-lists/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Packing Lists
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.packing-lists-details.index") }}" class="nav-link {{ request()->is("admin/packing-lists-details") || request()->is("admin/packing-lists-details/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Packing List Details
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.parts-backups.index") }}" class="nav-link {{ request()->is("admin/parts-backups") || request()->is("admin/parts-backups/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Parts Backup
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.partshistories.index") }}" class="nav-link {{ request()->is("admin/partshistories") || request()->is("admin/partshistories/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Parts History
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.price-codes.index") }}" class="nav-link {{ request()->is("admin/price-codes") || request()->is("admin/price-codes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Price Codes
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.tags.index") }}" class="nav-link {{ request()->is("admin/tags") || request()->is("admin/tags/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Tags
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.sftusers.index") }}" class="nav-link {{ request()->is("admin/sftusers") || request()->is("admin/sftusers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            SFT Users
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.workgroups.index") }}" class="nav-link {{ request()->is("admin/workgroups") || request()->is("admin/workgroups/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Workgroups
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.ups.index") }}" class="nav-link {{ request()->is("admin/ups") || request()->is("admin/ups/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            UPS
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.sessions.index") }}" class="nav-link {{ request()->is("admin/sessions") || request()->is("admin/sessions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Sessions
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.states.index") }}" class="nav-link {{ request()->is("admin/states") || request()->is("admin/states/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            States
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.printers.index") }}" class="nav-link {{ request()->is("admin/printers") || request()->is("admin/printers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Printers
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.units.index") }}" class="nav-link {{ request()->is("admin/units") || request()->is("admin/units/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Units
                                        </p>
                                    </a>
                                </li>                                
                        </ul>
                    </li>
                @endcan