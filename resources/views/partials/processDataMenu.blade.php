                @can('process_data_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/amps*") ? "menu-open" : "" }} {{ request()->is("admin/record-types*") ? "menu-open" : "" }} {{ request()->is("admin/logger-types*") ? "menu-open" : "" }} {{ request()->is("admin/pd-units*") ? "menu-open" : "" }} {{ request()->is("admin/pd-records*") ? "menu-open" : "" }} {{ request()->is("admin/loggers*") ? "menu-open" : "" }} {{ request()->is("admin/temperatures*") ? "menu-open" : "" }} {{ request()->is("admin/volts*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <p>
                                Process Data
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route("admin.amps.index") }}" class="nav-link {{ request()->is("admin/amps") || request()->is("admin/amps/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Amps
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.record-types.index") }}" class="nav-link {{ request()->is("admin/record-types") || request()->is("admin/record-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Record Types
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.logger-types.index") }}" class="nav-link {{ request()->is("admin/logger-types") || request()->is("admin/logger-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Logger Types
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.pd-units.index") }}" class="nav-link {{ request()->is("admin/pd-units") || request()->is("admin/pd-units/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Units
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.pd-records.index") }}" class="nav-link {{ request()->is("admin/pd-records") || request()->is("admin/pd-records/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Records
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.loggers.index") }}" class="nav-link {{ request()->is("admin/loggers") || request()->is("admin/loggers/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Loggers
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.temperatures.index") }}" class="nav-link {{ request()->is("admin/temperatures") || request()->is("admin/temperatures/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Temperatures
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.volts.index") }}" class="nav-link {{ request()->is("admin/volts") || request()->is("admin/volts/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Volts
                                        </p>
                                    </a>
                                </li>
                        </ul>
                    </li>
                @endcan