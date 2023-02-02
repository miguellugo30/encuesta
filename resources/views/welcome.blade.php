<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
    <title>Encuesta IT Talente</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="content">
        <div class="row">
            <div class="col">
                <nav class="navbar bg-body-tertiary">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="#">
                        <!--img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="30" height="24" class="d-inline-block align-text-top"-->
                        Encuesta IT Talent
                        </a>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6">
                <form method="post" action="guardar">
                    <div class="mb-3">
                        <label for="pregunta1" class="form-label">1. Contestaré esta encuesta respectoa la experiencia de la empresa que represeonto</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1-1" value="1" checked>
                            <label class="form-check-label" for="pregunta1-1">
                                Acepto
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pregunta1" id="pregunta1-2" value="0">
                            <label class="form-check-label" for="pregunta1-2">
                                No acepto
                            </label>
                        </div>
                    </div>

                    <div id="seccion2">

                        <div class="mb-3">
                        <label for="pregunta2" class="form-label">2. ¿A qué sector se dedica la empresa?</label>
                            <select class="form-select @error('pregunta2') is-invalid @enderror" id="pregunta2" name="pregunta2"  >
                                <option value="" selected>Selecciona una opción</option>
                                <option value="1">Agricultura, cría y explotación de animales, aprovechamiento forestal, pesca y caza</option>
                                <option value="2">Generación, transmisión, distribución y comercialización de energía eléctrica, suministro de agua y de gas natural por ductos al consumidor final</option>
                                <option value="3">Industrias manufactureras</option>
                                <option value="4">Comercio al por mayor</option>
                                <option value="5">Comercio al por menor</option>
                                <option value="6">Transportes, correos y almacenamiento</option>
                                <option value="7">Información en medios masivos</option>
                                <option value="8">Servicios financieros y de seguros</option>
                                <option value="9">Servicios inmobiliarios y de alquiler de bienes muebles e intangibles</option>
                                <option value="10">Servicios profesionales, científicos y técnicos</option>
                                <option value="11">Corporativos</option>
                                <option value="12">Servicios de apoyo a los negocios y manejo de residuos, y servicios de remediación</option>
                                <option value="13">Servicios educativos</option>
                                <option value="14">Servicios de salud y de asistencia social</option>
                                <option value="15">Servicios de esparcimiento culturales y deportivos, y otros servicios recreativos</option>
                                <option value="16">Servicios de alojamiento temporal y de preparación de alimentos y bebidas</option>
                                <option value="17">Otros servicios excepto actividades gubernamentales</option>
                            </select>
                            @error('pregunta2')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pregunta3" class="form-label">3. Número de empleados:</label>
                            <select class="form-select @error('pregunta3') is-invalid @enderror" id="pregunta3" name="pregunta3">
                                <option value="" selected>Selecciona una opción</option>
                                <option value="1">1 a 10</option>
                                <option value="2">11 a 50</option>
                                <option value="3">51 a 250</option>
                                <option value="4">251 o más</option>
                            </select>
                            @error('pregunta3')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="pregunta4" class="form-label">4. ¿Este año habrá entre de reparto de utilidades?:</label>
                            <div class="form-check">
                                <input class="form-check-input  @error('pregunta4') is-invalid @enderror" type="radio" name="pregunta4" id="pregunta4-1" value="1" {{ old('pregunta4') == '1' ? 'checked' : '' }}>
                                <label class="form-check-label" for="pregunta4-1">
                                    Si
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input  @error('pregunta4') is-invalid @enderror" type="radio" name="pregunta4" id="pregunta4-2" value="0" {{ old('pregunta4') == '0' ? 'checked' : '' }}>
                                <label class="form-check-label" for="pregunta4-2">
                                    No
                                </label>
                            </div>
                            @error('pregunta4')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div id="utilidadesSi"  style="display: {{ old('pregunta4') == '1' ? 'block' :  'none'}}" >

                            <div class="mb-3">
                                <label for="pregunta5" class="form-label">5. En comparación con el año anterior ¿Cómo será el monto repartido de PTU?:</label>
                                <div class="form-check">
                                    <input class="form-check-input  @error('pregunta5') is-invalid @enderror" type="radio" name="pregunta5" id="pregunta5-1" value="1" {{ old('pregunta5') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pregunta5-1">
                                        Mayor
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input  @error('pregunta5') is-invalid @enderror" type="radio" name="pregunta5" id="pregunta5-2" value="2" {{ old('pregunta5') == '2' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pregunta5-2">
                                        Igual
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input  @error('pregunta5') is-invalid @enderror" type="radio" name="pregunta5" id="pregunta5-3" value="3" {{ old('pregunta5') == '3' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pregunta5-3">
                                        Menor
                                    </label>
                                </div>
                                @error('pregunta5')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3" id="utilidadMayor" style="display: {{ old('pregunta5') == '1' ? 'block' :  'none'}}">
                                <label for="pregunta51" class="form-label">5.1 ¿Cuáles fueron las razones por las que el monto de reparto de utilidades fue mayor?:</label>
                                <select class="form-select @error('pregunta5-1') is-invalid @enderror" id="pregunta51" name="pregunta51">
                                    <option value="" selected>Selecciona una opción</option>
                                    <option value="1">Aumento en la productividad de las y los colaboradore</option>
                                    <option value="2">Aumento de vetnas</option>
                                    <option value="3">Entorno económico favorable</option>
                                    <option value="4">Nuevas oportunidad de negocio</option>
                                </select>
                                @error('pregunta51')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3" id="utilidadMenor" style="display: {{ old('pregunta5') == '3' ? 'block' :  'none'}}">
                                <label for="pregunta52" class="form-label">5.2 ¿Cuáles fueron las razones por las que habrá menor reparto de utilidades?:</label>
                                <select class="form-select @error('pregunta52') is-invalid @enderror" id="pregunta52" name="pregunta52">
                                    <option value="" selected>Selecciona una opción</option>
                                    <option value="1">Disminución en la productividad de las y los colaboradores</option>
                                    <option value="2">Afectaciones por inseguridad</option>
                                    <option value="3">Afectaciones por el entorno político y económico</option>
                                    <option value="4">Continuación de la pandemia COVID-19</option>
                                    <option value="5">Problemas para mejorar la innovación y los procesos al interior de la empresa</option>
                                    <option value="6">Complicaciones por la inflación</option>
                                </select>
                                @error('pregunta52')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3" id="utilidadIgual" style="display: {{ old('pregunta5') == '2' ? 'block' :  'none'}}" >
                                <label for="pregunta6" class="form-label">6. Días de salario estimando a pagar por PTU ejercicio 2021</label>
                                <input type="text" class="form-control @error('pregunta6') is-invalid @enderror" id="pregunta6" name="pregunta6" placeholder="0.00">
                                @error('pregunta6')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>

                        </div><!--div#utilidadesSi-->

                        <div id="utilidadesNo" style="display: {{ old('pregunta4') == '0' ? 'block' :  'none'}}">

                            <div class="mb-3">
                                <label for="pregunta7" class="form-label">7. ¿Cuáles fueron las razones por las que bo hubo reparto de utilidades?:</label>
                                <select class="form-select @error('pregunta7') is-invalid @enderror" id="pregunta7" name="pregunta7">
                                    <option value="" selected>Selecciona una opción</option>
                                    <option value="1">Disminución en la productividad de las y los colaboradores</option>
                                    <option value="2">Afectaciones por inseguridad</option>
                                    <option value="3">Afectaciones por el entorno político y económico</option>
                                    <option value="4">Continuación de la pandemia COVID-19</option>
                                    <option value="5">Problemas para mejorar la innovación y los procesos al interior de la empresa</option>
                                    <option value="6">Complicaciones por la inflación</option>
                                </select>
                                @error('pregunta7')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="pregunta8" class="form-label">8. El año anterior ¿hubo reparto de PTU?:</label>
                                <div class="form-check">
                                    <input class="form-check-input @error('pregunta8') is-invalid @enderror" type="radio" name="pregunta8" id="pregunta8-1" value="1" {{old('pregunta8') == '1' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pregunta8-1">
                                        Si
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input @error('pregunta8') is-invalid @enderror" type="radio" name="pregunta8" id="pregunta8-2" value="0" {{ old('pregunta8') == '0' ? 'checked' : '' }}>
                                    <label class="form-check-label" for="pregunta8-2">
                                        No
                                    </label>
                                </div>
                                @error('pregunta8')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div><!--div#utilidadesNo-->

                    </div><!--div#seccion2-->
                    @csrf

                    <button type="submit" class="btn btn-primary">Enviar</button>

                </form>
            </div>
        </div>
    </div>
</body>
</html>
