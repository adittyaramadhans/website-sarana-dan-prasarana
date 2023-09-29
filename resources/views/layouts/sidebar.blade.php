<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 "
    id="sidenav-main">
    <div class="sidenav-header">
        <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none"
            aria-hidden="true" id="iconSidenav"></i>
        <a class="navbar-brand m-0" href="#" target="_blank">
            {{-- <img src="#" class="navbar-brand-img h-100" alt="main_logo"> --}}
            <span class="ms-1 font-weight-bold">Sarana dan Prasarana </span>
        </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto h-auto" id="sidenav-collapse-main">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a data-bs-toggle="collapse" href="#dashboardsExamples" class="nav-link active"
                    aria-controls="dashboardsExamples" role="button" aria-expanded="false">
                    <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                        <i class="ni ni-shop text-primary text-sm opacity-10"></i>
                    </div>
                    <span class="nav-link-text ms-1"> Dashboards</span>
                </a>
                <div class="collapse  show " id="dashboardsExamples">
                    <ul class="nav ms-4">
                        <li class="nav-item ">
                            <a class="nav-link " href="/home">
                                <span class="sidenav-mini-icon"> H </span>
                                <span class="sidenav-normal">Home</span>
                            </a>
                        </li>
            </li>
        </ul>
    </div>
    </li>
    <li class="nav-item mt-3">
        <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">PAGES</h6>
    </li>
    {{-- sarana --}}
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#pagesExamples" class="nav-link " aria-controls="pagesExamples"
            role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                <i class="ni ni-ungroup text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Table Sarana</span>
        </a>
        <div class="collapse " id="pagesExamples">
            <ul class="nav ms-4">
                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('sarana.index') }}">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal"> Sarana </span>
                    </a>
                </li>
            </ul>
        </div>
        {{-- prasarana --}}
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#applicationsExamples" class="nav-link " aria-controls="pagesExamples"
            role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                <i class="ni ni-ungroup text-success text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"> Table Prasarana</span>
        </a>
        <div class="collapse " id="applicationsExamples">
            <ul class="nav ms-4">
                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('prasarana.index') }}">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Prasarana </span>
                    </a>
                </li>
            </ul>
        </div>
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#pagesCollapseError" class="nav-link " aria-controls="pagesExamples"
            role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                <i class="ni ni-ungroup text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"> Table Category</span>
        </a>
        <div class="collapse " id="pagesCollapseError">
            <ul class="nav ms-4">
                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('category.index') }}">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal"> Category </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('bangunan.index') }}">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal"> Bangunan </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <hr class="horizontal dark" />
        <h6 class="ps-4  ms-2 text-uppercase text-xs font-weight-bolder opacity-6">DOCS</h6>
    </li>
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#basicexamples" class="nav-link " aria-controls="basicExamples"
            role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                <i class="ni ni-ungroup text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1"> Table Pengadaan</span>
        </a>
        <div class="collapse " id="basicexamples">
            <ul class="nav ms-4">
                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('pengadaan.index') }}">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Pengadaan </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link " href="{{ route('bangunan.index') }}">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal"> Bangunan </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a data-bs-toggle="collapse" href="#componentsExamples" class="nav-link " aria-controls="componentsExamples"
            role="button" aria-expanded="false">
            <div class="icon icon-shape icon-sm text-center d-flex align-items-center justify-content-center">
                <i class="ni ni-app text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Components</span>
        </a>
        <div class="collapse " id="componentsExamples">
            <ul class="nav ms-4">
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/alerts/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> A </span>
                        <span class="sidenav-normal"> Alerts </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/badge/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal"> Badge </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/buttons/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> B </span>
                        <span class="sidenav-normal"> Buttons </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/cards/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal"> Card </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/carousel/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal"> Carousel </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/collapse/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> C </span>
                        <span class="sidenav-normal"> Collapse </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/dropdowns/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> D </span>
                        <span class="sidenav-normal"> Dropdowns </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/forms/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> F </span>
                        <span class="sidenav-normal"> Forms </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/modal/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> M </span>
                        <span class="sidenav-normal"> Modal </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/navs/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> N </span>
                        <span class="sidenav-normal"> Navs </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/navbar/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> N </span>
                        <span class="sidenav-normal"> Navbar </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/pagination/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Pagination </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/popovers/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Popovers </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/progress/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> P </span>
                        <span class="sidenav-normal"> Progress </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/spinners/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> S </span>
                        <span class="sidenav-normal"> Spinners </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/tables/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> T </span>
                        <span class="sidenav-normal"> Tables </span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link "
                        href="https://www.creative-tim.com/learning-lab/bootstrap/tooltips/argon-dashboard"
                        target="_blank">
                        <span class="sidenav-mini-icon"> T </span>
                        <span class="sidenav-normal"> Tooltips </span>
                    </a>
                </li>
            </ul>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link"
            href="https://github.com/creativetimofficial/ct-argon-dashboard-pro/blob/main/CHANGELOG.md"
            target="_blank">
            <div class="icon icon-shape icon-sm text-center  me-2 d-flex align-items-center justify-content-center">
                <i class="ni ni-align-left-2 text-dark text-sm"></i>
            </div>
            <span class="nav-link-text ms-1">Changelog</span>
        </a>
    </li>
    </div>
    <div class="sidenav-footer mx-3 my-3">
        <div class="card card-plain shadow-none" id="sidenavCard">
            <img class="w-60 mx-auto"
                src="https://demos.creative-tim.com/argon-dashboard-pro/assets/img/illustrations/icon-documentation.svg"
                alt="sidebar_illustration">
            <div class="card-body text-center p-3 w-100 pt-0">
                <div class="docs-info">
                    <h6 class="mb-0">Need help?</h6>
                    <p class="text-xs font-weight-bold mb-0">Please check our docs</p>
                </div>
            </div>
        </div>
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/overview/argon-dashboard" target="_blank"
            class="btn btn-dark btn-sm w-100 mb-3">Documentation</a>
    </div>
</aside>
