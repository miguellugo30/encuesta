import './bootstrap';

$(document).ready(function() {
    /**
     * Evento para poder mostrar las demas preguntas si acepta contestar
     * la encuestas
     */
    $(document).on('change', 'input[name=pregunta1]', function(event) {
        ( this.value == 1 ) ? $("#seccion2").css('display','block') : $("#seccion2").css('display','none')
    });
    /**
     * Evento cuando elige si habra o no reparto de utilidades
     */
    $(document).on('change', 'input[name=pregunta4]', function(event) {
        if (this.value == 1) {
            $("#utilidadesSi").css('display','block');
            $("#utilidadesNo").css('display','none');
        } else {
            $("#utilidadesNo").css('display','block');
            $("#utilidadesSi").css('display','none');

        }
    });
    /**
     * Evento cuando elige el monto de reparto de utilidades
     */
    $(document).on('change', 'input[name=pregunta5]', function(event) {
        console.log("cambia reparto");
        if (this.value == 1) {
            $("#utilidadMayor").css('display','block');
            $("#utilidadMenor").css('display','none');
            $("#utilidadIgual").css('display','none');
        } else if(this.value == 2) {
            $("#utilidadMayor").css('display','none');
            $("#utilidadMenor").css('display','none');
            $("#utilidadIgual").css('display','block');
        } else if(this.value == 3) {
            $("#utilidadMayor").css('display','none');
            $("#utilidadMenor").css('display','block');
            $("#utilidadIgual").css('display','none');
        }
    });
});
