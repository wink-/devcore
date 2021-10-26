               @can('pacsys_access')
                    <li class="nav-item has-treeview {{ request()->is("pacsys/actions*") ? "menu-open" : "" }} {{ request()->is("admin/actions-temps*") ? "menu-open" : "" }} {{ request()->is("admin/analysis*") ? "menu-open" : "" }} {{ request()->is("admin/analysis-news*") ? "menu-open" : "" }} {{ request()->is("admin/calc-values*") ? "menu-open" : "" }} {{ request()->is("admin/p-employees*") ? "menu-open" : "" }} {{ request()->is("admin/forms*") ? "menu-open" : "" }} {{ request()->is("admin/form-types*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-actions*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-names*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-periods*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-ranges*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-types*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-units*") ? "menu-open" : "" }} {{ request()->is("admin/form-value-visibles*") ? "menu-open" : "" }} {{ request()->is("admin/months*") ? "menu-open" : "" }} {{ request()->is("admin/periods*") ? "menu-open" : "" }} {{ request()->is("admin/records*") ? "menu-open" : "" }} {{ request()->is("admin/scopes*") ? "menu-open" : "" }} {{ request()->is("admin/securities*") ? "menu-open" : "" }} {{ request()->is("admin/p-units*") ? "menu-open" : "" }} {{ request()->is("admin/years*") ? "menu-open" : "" }} {{ request()->is("admin/validations*") ? "menu-open" : "" }}">
                        <a class="nav-link nav-dropdown-toggle" href="#">
                            <p>
                                PacSys
                                <i class="right fa fa-fw fa-angle-left nav-icon"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="{{ route("pacsys.actions.index") }}" class="nav-link {{ request()->is("pacsys/actions") || request()->is("pacsys/actions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Actions
                                        </p>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route("admin.actions-temps.index") }}" class="nav-link {{ request()->is("admin/actions-temps") || request()->is("admin/actions-temps/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Temp Actions
                                        </p>
                                    </a>
                                </li>


                                <li class="nav-item">
                                    <a href="{{ route("admin.analysis.index") }}" class="nav-link {{ request()->is("admin/analysis") || request()->is("admin/analysis/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Analysis
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.analysis-news.index") }}" class="nav-link {{ request()->is("admin/analysis-news") || request()->is("admin/analysis-news/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Analysis New
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.calc-values.index") }}" class="nav-link {{ request()->is("admin/calc-values") || request()->is("admin/calc-values/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Calc Values
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.p-employees.index") }}" class="nav-link {{ request()->is("admin/p-employees") || request()->is("admin/p-employees/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Employees
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.forms.index") }}" class="nav-link {{ request()->is("admin/forms") || request()->is("admin/forms/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Forms
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.form-types.index") }}" class="nav-link {{ request()->is("admin/form-types") || request()->is("admin/form-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Form Types
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-actions.index") }}" class="nav-link {{ request()->is("admin/form-value-actions") || request()->is("admin/form-value-actions/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Form Value Actions
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-names.index") }}" class="nav-link {{ request()->is("admin/form-value-names") || request()->is("admin/form-value-names/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Form Value Names
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-periods.index") }}" class="nav-link {{ request()->is("admin/form-value-periods") || request()->is("admin/form-value-periods/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Form Value Periods
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-ranges.index") }}" class="nav-link {{ request()->is("admin/form-value-ranges") || request()->is("admin/form-value-ranges/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Form Value Ranges
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-types.index") }}" class="nav-link {{ request()->is("admin/form-value-types") || request()->is("admin/form-value-types/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Form Value Types
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-units.index") }}" class="nav-link {{ request()->is("admin/form-value-units") || request()->is("admin/form-value-units/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Form Value Units
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.form-value-visibles.index") }}" class="nav-link {{ request()->is("admin/form-value-visibles") || request()->is("admin/form-value-visibles/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Form Value Visibility
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.months.index") }}" class="nav-link {{ request()->is("admin/months") || request()->is("admin/months/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Months
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.periods.index") }}" class="nav-link {{ request()->is("admin/periods") || request()->is("admin/periods/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Periods
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.records.index") }}" class="nav-link {{ request()->is("admin/records") || request()->is("admin/records/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Records
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.scopes.index") }}" class="nav-link {{ request()->is("admin/scopes") || request()->is("admin/scopes/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Scopes
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.securities.index") }}" class="nav-link {{ request()->is("admin/securities") || request()->is("admin/securities/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Security
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.p-units.index") }}" class="nav-link {{ request()->is("admin/p-units") || request()->is("admin/p-units/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Units
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.years.index") }}" class="nav-link {{ request()->is("admin/years") || request()->is("admin/years/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Years
                                        </p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ route("admin.validations.index") }}" class="nav-link {{ request()->is("admin/validations") || request()->is("admin/validations/*") ? "active" : "" }}">
                                        <i class="fa-fw nav-icon fas fa-cogs">

                                        </i>
                                        <p>
                                            Validation
                                        </p>
                                    </a>
                                </li>

                        </ul>
                    </li>
                @endcan