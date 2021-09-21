<!doctype html>
<html lang="en">

{{-- Head --}}
<x-head />



<body>
    {{-- Menu --}}
    <x-menu />
    {{-- Header --}}
    <section class="main-class">
        <x-header name="{{ $producer[0]->name }}" email="{{ $producer[0]->email }}"  />
        <main>
            <div class=" bg-none">
                <div class="div-header">
                    <h2 >Últimos Agregados</h2>
                    <a href="/">Agregar un Curso Nuevo</a>
                </div>
                <div class="card-container">
                    <Card/>
                </div>
            </div>
            <div class=" bg-none" style="margin-top:40px;">
    
                <div class="div-header">
                    <div class="radios">
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1"/>
                        <label class="form-check-label" for="inlineRadio1">Activos</label>
                        </div>
                        <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2"/>
                        <label class="form-check-label" for="inlineRadio2">Inactivos</label>
                        </div>
                    </div>
                    <div class="search">
                        <i class="bi bi-search"></i>
                        <input class="form-control form-control-lg" type="text" placeholder="Busca tu Curso" aria-label=".form-control-lg example"/>
                    </div>
                </div>
                <div class="card-container">
                    <Card/>
                    <Card/>
                </div>
            </div>
        </main>
                            <input class="form-check-input" type="radio" name="courses" id="courses-all" value="all" checked/>
                            <label class="form-check-label" for="courses-all">Todos</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="courses" id="courses-active" value="active"/>
                            <label class="form-check-label" for="courses-active">Activos</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="courses" id="courses-inactive" value="inactive"/>
                            <label class="form-check-label" for="courses-inactive">Inactivos</label>
                        </div>
                    </div>
                    <form class="search">
                        <i class="bi bi-search"></i>
                        <input class="form-control form-control-lg" type="text" name="search" placeholder="Busca tu Curso" aria-label=".form-control-lg example"/>  
                        <input type="submit" value="Buscar" class="search-button">
                    </form>

                </div>
                
                <div class="card-container" id="all">
                    @foreach($coursesAll as $course)
                        <x-card title="{{$course->title}}" description="{{$course->description}}" price="{{$course->price}}"/>
                    @endforeach
                </div>

                <div class="card-container" id="inactive" style="display: none;">
                    @foreach($coursesAll as $course)
                        @if($course->status == 0)
                            <x-card title="{{$course->title}}" description="{{$course->description}}" price="{{$course->price}}"/>
                        @endif
                    @endforeach
                </div>
                <div class="card-container" id="active" style="display: none;">
                    @foreach($coursesAll as $course)
                        @if($course->status == 1)
                            <x-card title="{{$course->title}}" description="{{$course->description}}" price="{{$course->price}}"/>
                        @endif
                    @endforeach
                </div>
                
            </div>
    
        </main>

        <script>
            
            document.querySelectorAll('input[name="courses"]').forEach((elem) => {
                elem.addEventListener("change", function(event) {

                    let estado = event.target.value;
                    
                    let all = document.getElementById('all');
                    let inactive = document.getElementById('inactive');
                    let active = document.getElementById('active');
                    
                    if(estado == "active"){
                        
                        active.style.cssText = 'display: grid;';
                        inactive.style.cssText = 'display: none;';
                        all.style.cssText = 'display: none;';

                    }else if(estado == "inactive"){
                        active.style.cssText = 'display: none;';
                        inactive.style.cssText = 'display: grid;';
                        all.style.cssText = 'display: none;';

                    }else{
                        active.style.cssText = 'display: none;';
                        inactive.style.cssText = 'display: none;';
                        all.style.cssText = 'display: grid;';

                    }
                    
                });
            });

        </script>
    </section>


    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous">
    </script>


</body>

</html>
