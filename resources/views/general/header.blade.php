<header>
        
    <button class="points">
        <i class="bi bi-star-fill"></i>
        <span> <b>130</b> Puntos</span>
    </button>

    <a href="/" class="faq">
        <i class="bi bi-question-circle"></i>
    </a>

    <button type="button" class="position-relative notifications">
        <i class="bi bi-bell-fill"></i>
        <span class="position-absolute top-10 start-75 translate-middle badge rounded-pill bg-danger">
            4
        </span>
    </button>

    <div class="dropdown user">
        <button class="d-flex align-items-center link-dark text-decoration-none button-user" id="dropdownUser" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="https://github.com/mdo.png" alt="" width="40" height="40" class="rounded-circle me-2"/>
            <i class="bi bi-chevron-down"></i>
        </button>
        <ul class="dropdown-menu text-small shadow user-menu" aria-labelledby="dropdownUser">
            <li class="user-information">
                <picture>
                    <img src="https://github.com/mdo.png" alt="" width="45" height="45" class="rounded-circle" />
                </picture>
                <div>
                    <h3>{{$name}}</h3>
                    <p>{{$email}}</p>
                </div>
            </li>
            <li>
                <a class="dropdown-item" href="/">
                    <i class="bi bi-person-square"></i>
                    <span>Perfil</span> 
                </a>
            </li>
            <li><a class="dropdown-item" href="/"><i class="bi bi-cash"></i><span>Suscripción</span></a></li>
            <li><hr class="dropdown-divider"/></li>
            <li><a class="dropdown-item end-session" href="/"><i class="bi bi-box-arrow-left"></i><span>Cerrar Sesión</span></a></li>
        </ul>
    </div>
    
</header>