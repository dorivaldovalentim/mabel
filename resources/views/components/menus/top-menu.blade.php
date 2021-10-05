<header class="mdc-top-app-bar">
    <div class="mdc-top-app-bar__row">
        <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-start">
            <button class="material-icons mdc-top-app-bar__navigation-icon mdc-icon-button sidebar-toggler">menu</button>
            <span class="mdc-top-app-bar__title">Olá {{ auth()->user()->first_name }}!</span>
            <div
                class="mdc-text-field mdc-text-field--outlined mdc-text-field--with-leading-icon search-text-field d-none d-md-flex">
                <i class="material-icons mdc-text-field__icon">search</i>
                <input class="mdc-text-field__input" id="text-field-hero-input">
                <div class="mdc-notched-outline">
                    <div class="mdc-notched-outline__leading"></div>
                    <div class="mdc-notched-outline__notch">
                        <label for="text-field-hero-input" class="mdc-floating-label">Pesquisar...</label>
                    </div>
                    <div class="mdc-notched-outline__trailing"></div>
                </div>
            </div>
        </div>

        <div class="mdc-top-app-bar__section mdc-top-app-bar__section--align-end mdc-top-app-bar__section-right">
            <div class="menu-button-container menu-profile d-none d-md-block">
                <button class="mdc-button mdc-menu-button">
                    <span class="d-flex align-items-center">
                        <span class="figure"></span>
                        <span class="user-name">{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}</span>
                    </span>
                </button>
                <div class="mdc-menu mdc-menu-surface" tabindex="-1">
                    <ul class="mdc-list" role="menu" aria-hidden="true" aria-orientation="vertical">
                        <a href="{{ route('user.edit', auth()->user()->id) }}" class="mdc-list-item" role="menuitem">
                            <div class="item-thumbnail item-thumbnail-icon-only">
                                <i class="mdi mdi-account-edit-outline text-primary"></i>
                            </div>
                            
                            <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                <h6 class="item-subject font-weight-normal">Actualizar perfil</h6>
                            </div>
                        </a>

                        <a href="#" onclick="document.querySelector('#logout').submit()" class="mdc-list-item" role="menuitem">
                            <div class="item-thumbnail item-thumbnail-icon-only">
                                <i class="mdi mdi-settings-outline text-primary"></i>
                            </div>

                            <div class="item-content d-flex align-items-start flex-column justify-content-center">
                                <span class="item-subject font-weight-normal">Logout</span>
                                <form action="{{ route('logout') }}" method="POST" id="logout">@csrf</form>
                            </div>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
