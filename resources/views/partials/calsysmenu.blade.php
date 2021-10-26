                @can('calsys_access')
                    <li class="nav-item has-treeview {{ request()->is("admin/calibrated-bies*") ? "menu-open" : "" }} {{ request()->is("admin/calemployees*") ? "menu-open" : "" }} {{ request()->is("admin/cal-types*") ? "menu-open" : "" }} {{ request()->is("admin/cal-locations*") ? "menu-open" : "" }} {{ request()->is("admin/cal-owners*") ? "menu-open" : "" }} {{ request()->is("admin/cal-periods*") ? "menu-open" : "" }} {{ request()->is("admin/cal-sources*") ? "menu-open" : "" }} {{ request()->is("admin/cal-statuses*") ? "menu-open" : "" }} {{ request()->is("admin/cal-devices*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <p>
                                CalSys
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route("admin.calibrated-bies.index") }}" class="nav-link {{ request()->is("admin/calibrated-bies") || request()->is("admin/calibrated-bies/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Calibrated By
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.calemployees.index") }}" class="nav-link {{ request()->is("admin/calemployees") || request()->is("admin/calemployees/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Employee
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-types.index") }}" class="nav-link {{ request()->is("admin/cal-types") || request()->is("admin/cal-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Type
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-locations.index") }}" class="nav-link {{ request()->is("admin/cal-locations") || request()->is("admin/cal-locations/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Location
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-owners.index") }}" class="nav-link {{ request()->is("admin/cal-owners") || request()->is("admin/cal-owners/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Owner
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-periods.index") }}" class="nav-link {{ request()->is("admin/cal-periods") || request()->is("admin/cal-periods/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Period
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-sources.index") }}" class="nav-link {{ request()->is("admin/cal-sources") || request()->is("admin/cal-sources/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Source
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-statuses.index") }}" class="nav-link {{ request()->is("admin/cal-statuses") || request()->is("admin/cal-statuses/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Status
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ route("admin.cal-devices.index") }}" class="nav-link {{ request()->is("admin/cal-devices") || request()->is("admin/cal-devices/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Device
                                        </p>
                                    </a>
                                </li>
                        </ul>
                    </li>
                @endcan