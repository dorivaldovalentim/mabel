<aside class="mdc-drawer mdc-drawer--dismissible mdc-drawer--open">
    <div class="mdc-drawer__header">
        <a href="{{ route('admin') }}" class="brand-logo">
            <img src="{{ asset('admin/images/logo_red_white_without_legend.png') }}" width="100%" alt="logo">
        </a>
    </div>
    <div class="mdc-drawer__content">
        <div class="user-info">
            <p class="name">{{ auth()->user()->name }}</p>
            <p class="email">{{ auth()->user()->email }}</p>
        </div>
        <div class="mdc-list-group">
            <nav class="mdc-list mdc-drawer-menu">
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-drawer-link" href="{{ route('admin') }}">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon"
                            aria-hidden="true">home</i>
                        Início
                    </a>
                </div>
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="portfolios-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">dashboard</i>
                        Portfólios
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>

                    <div class="mdc-expansion-panel" id="portfolios-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a href="{{ route('portifolio.index') }}" class="mdc-drawer-link">
                                    Ver
                                </a>
                            </div>

                            <div class="mdc-list-item mdc-drawer-item">
                                <a href="{{ route('portifolio.create') }}" class="mdc-drawer-link">
                                    Cadastrar
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>

                
                <div class="mdc-list-item mdc-drawer-item">
                    <a class="mdc-expansion-panel-link" href="#" data-toggle="expansionPanel" data-target="users-sub-menu">
                        <i class="material-icons mdc-list-item__start-detail mdc-drawer-item-icon" aria-hidden="true">people</i>
                        Usuários
                        <i class="mdc-drawer-arrow material-icons">chevron_right</i>
                    </a>

                    <div class="mdc-expansion-panel" id="users-sub-menu">
                        <nav class="mdc-list mdc-drawer-submenu">
                            <div class="mdc-list-item mdc-drawer-item">
                                <a href="{{ route('register') }}" class="mdc-drawer-link">
                                    Ver
                                </a>
                            </div>

                            <div class="mdc-list-item mdc-drawer-item">
                                <a href="{{ route('register') }}" class="mdc-drawer-link">
                                    Cadastrar
                                </a>
                            </div>
                        </nav>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</aside>
