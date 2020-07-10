@extends('template')

@section('seccion')
   
{{-- <section class="full-width container-notifications">
    <div class="full-width container-notifications-bg btn-Notification"></div>
    <section class="NotificationArea">
        <div class="full-width text-center NotificationArea-title tittles">Notifications <i class="zmdi zmdi-close btn-Notification"></i></div>
        <a href="#" class="Notification" id="notifation-unread-1">
            <div class="Notification-icon"><i class="zmdi zmdi-accounts-alt bg-info"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle"></i>
                    <strong>New User Registration</strong> 
                    <br>
                    <small>Just Now</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-1">Notification as UnRead</div> 
        </a>
        <a href="#" class="Notification" id="notifation-read-1">
            <div class="Notification-icon"><i class="zmdi zmdi-cloud-download bg-primary"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle-o"></i>
                    <strong>New Updates</strong> 
                    <br>
                    <small>30 Mins Ago</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-1">Notification as Read</div>
        </a>
        <a href="#" class="Notification" id="notifation-unread-2">
            <div class="Notification-icon"><i class="zmdi zmdi-upload bg-success"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle"></i>
                    <strong>Archive uploaded</strong> 
                    <br>
                    <small>31 Mins Ago</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-unread-2">Notification as UnRead</div>
        </a> 
        <a href="#" class="Notification" id="notifation-read-2">
            <div class="Notification-icon"><i class="zmdi zmdi-mail-send bg-danger"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle-o"></i>
                    <strong>New Mail</strong> 
                    <br>
                    <small>37 Mins Ago</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-2">Notification as Read</div>
        </a>
        <a href="#" class="Notification" id="notifation-read-3">
            <div class="Notification-icon"><i class="zmdi zmdi-folder bg-primary"></i></div>
            <div class="Notification-text">
                <p>
                    <i class="zmdi zmdi-circle-o"></i>
                    <strong>Folder delete</strong> 
                    <br>
                    <small>1 hours Ago</small>
                </p>
            </div>
            <div class="mdl-tooltip mdl-tooltip--left" for="notifation-read-3">Notification as Read</div>
        </a>  
    </section>
</section> --}}
    <template-component />

<!-- pageContent -->
{{-- <section class="full-width pageContent" >
    <!-- navBar -->
    <div class="full-width navBar">
        <div class="full-width navBar-options">
            <i class="zmdi zmdi-swap btn-menu" id="btn-menu"></i>	
            <div class="mdl-tooltip" for="btn-menu">Hide / Show MENU</div>
            <nav class="navBar-options-list">
                <ul class="list-unstyle">
                    <li class="btn-Notification" id="notifications">
                        <i class="zmdi zmdi-notifications"></i>
                        <div class="mdl-tooltip" for="notifications">Notifications</div>
                    </li>
                    <li class="btn-exit" id="btn-exit">
                        <i class="zmdi zmdi-power"></i>
                        <div class="mdl-tooltip" for="btn-exit">LogOut</div>
                    </li>
                    <li class="text-condensedLight noLink" ><small>User Name</small></li>
                    <li class="noLink">
                        <figure>
                            <img src="{{ asset('img/avatar-male.png') }}" alt="Avatar" class="img-responsive">
                        </figure>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <section class="full-width header-well">
        <div class="full-width header-well-icon">
            <i class="zmdi zmdi-washing-machine"></i>
        </div>
        <div class="full-width header-well-text">
            <p class="text-condensedLight">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde aut nulla accusantium minus corporis accusamus fuga harum natus molestias necessitatibus.
            </p>
        </div>
    </section>
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect overflow-auto">
        <div class="mdl-tabs__tab-bar">
            <a href="#tabNewProduct" class="mdl-tabs__tab is-active">NEW</a>
            <a href="#tabListProducts" class="mdl-tabs__tab">LIST</a>
        </div>
        <div class="mdl-tabs__panel is-active" id="tabNewProduct">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--12-col">
                    <div class="full-width panel mdl-shadow--2dp">
                        <div class="full-width panel-tittle bg-primary text-center tittles">
                            New Product
                        </div>
                        <div class="full-width panel-content">
                            <form>
                                <div class="mdl-grid">
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; BASIC INFORMATION</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="number" pattern="-?[0-9- ]*(\.[0-9]+)?" id="BarCode">
                                            <label class="mdl-textfield__label" for="BarCode">Barcode</label>
                                            <span class="mdl-textfield__error">Invalid barcode</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[A-Za-z0-9áéíóúÁÉÍÓÚ ]*(\.[0-9]+)?" id="NameProduct">
                                            <label class="mdl-textfield__label" for="NameProduct">Name</label>
                                            <span class="mdl-textfield__error">Invalid name</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="StrockProduct">
                                            <label class="mdl-textfield__label" for="StrockProduct">Units</label>
                                            <span class="mdl-textfield__error">Invalid number</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" pattern="-?[0-9.]*(\.[0-9]+)?" id="PriceProduct">
                                            <label class="mdl-textfield__label" for="PriceProduct">Price</label>
                                            <span class="mdl-textfield__error">Invalid price</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="number" pattern="-?[0-9]*(\.[0-9]+)?" id="discountProduct">
                                            <label class="mdl-textfield__label" for="discountProduct">% Discount</label>
                                            <span class="mdl-textfield__error">Invalid discount</span>
                                        </div>	
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; CATEGORY</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Select category</option>
                                                <option value="">Category 1</option>
                                                <option value="">Category 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; SUPPLIER DATA AND MODEL</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Select provider</option>
                                                <option value="">Provider 1</option>
                                                <option value="">Provider 2</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text"  id="modelProduct">
                                            <label class="mdl-textfield__label" for="modelProduct">Model</label>
                                            <span class="mdl-textfield__error">Invalid model</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--6-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                            <input class="mdl-textfield__input" type="text" id="markProduct">
                                            <label class="mdl-textfield__label" for="markProduct">Mark</label>
                                            <span class="mdl-textfield__error">Invalid Mark</span>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--12-col">
                                        <legend class="text-condensedLight"><i class="zmdi zmdi-border-color"></i> &nbsp; OTHER DATA</legend><br>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input type="date" class="mdl-textfield__input">
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <select class="mdl-textfield__input">
                                                <option value="" disabled="" selected="">Select status</option>
                                                <option value="">Active</option>
                                                <option value="">deactivated</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mdl-cell mdl-cell--4-col mdl-cell--8-col-tablet">
                                        <div class="mdl-textfield mdl-js-textfield">
                                            <input type="file">
                                        </div>
                                    </div>
                                </div>
                                <p class="text-center">
                                    <button class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored bg-primary" id="btn-addProduct">
                                        <i class="zmdi zmdi-plus"></i>
                                    </button>
                                    <div class="mdl-tooltip" for="btn-addProduct">Add Product</div>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mdl-tabs__panel" id="tabListProducts">
            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-phone mdl-cell--8-col-tablet mdl-cell--12-col-desktop">
                    <form action="#">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--expandable">
                            <label class="mdl-button mdl-js-button mdl-button--icon" for="searchProduct">
                                <i class="zmdi zmdi-search"></i>
                            </label>
                            <div class="mdl-textfield__expandable-holder">
                                <input class="mdl-textfield__input" type="text" id="searchProduct">
                                <label class="mdl-textfield__label"></label>
                            </div>
                        </div>
                    </form>
                    <nav class="full-width menu-categories">
                        <ul class="list-unstyle text-center">
                            <li><a href="#!">Category 1</a></li>
                            <li><a href="#!">Category 2</a></li>
                            <li><a href="#!">Category 3</a></li>
                            <li><a href="#!">Category 4</a></li>
                        </ul>
                    </nav>
                    <div class="full-width text-center" style="padding: 30px 0;">
                        <div class="mdl-card mdl-shadow--2dp full-width product-card">
                            <div class="mdl-card__title">
                                <img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
                            </div>
                            <div class="mdl-card__supporting-text">
                                <small>Stock</small><br>
                                <small>Category</small>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                Product name
                                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="zmdi zmdi-more"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mdl-card mdl-shadow--2dp full-width product-card">
                            <div class="mdl-card__title">
                                <img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
                            </div>
                            <div class="mdl-card__supporting-text">
                                <small>Stock</small><br>
                                <small>Category</small>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                Product name
                                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="zmdi zmdi-more"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mdl-card mdl-shadow--2dp full-width product-card">
                            <div class="mdl-card__title">
                                <img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
                            </div>
                            <div class="mdl-card__supporting-text">
                                <small>Stock</small><br>
                                <small>Category</small>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                Product name
                                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="zmdi zmdi-more"></i>
                                </button>
                            </div>
                        </div>
                        <div class="mdl-card mdl-shadow--2dp full-width product-card">
                            <div class="mdl-card__title">
                                <img src="assets/img/fontLogin.jpg" alt="product" class="img-responsive">
                            </div>
                            <div class="mdl-card__supporting-text">
                                <small>Stock</small><br>
                                <small>Category</small>
                            </div>
                            <div class="mdl-card__actions mdl-card--border">
                                Product name
                                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                                    <i class="zmdi zmdi-more"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection('seccion')