$("#mallaEnfermdedad").on("change", function () {
    // if ($("#tpdocumento").val() == 'Artritis') {
        $("#tituloEnfermedad").text('Enfermedad de Alto Costo '+ $("#mallaEnfermdedad").val() );
        
        switch ($("#mallaEnfermdedad").val()) {
            case 'Artritis':
                $("#resulucionText").text('Resolucion 1393 de 2015 '+ $("#mallaEnfermdedad").val() +'. ');
                $("#instructivoText").text('Instructivo '+ $("#mallaEnfermdedad").val() +' 2021. ');
                agregarAHref();
                $("#linkResolucion").attr('href', "../Documentos/ARTRITIS/Resolucion-1393-de-2015-ARTRITIS.pdf");
                $("#linkInstructivo").attr('href', "../Documentos/ARTRITIS/210723%20Instructivo%20Artritis%20Reumatoide%202021%20V2.pdf");
                break;
            case 'Cancer':
                $("#resulucionText").text('Resolución 000247 de 2014 '+ $("#mallaEnfermdedad").val() +'. ');
                $("#instructivoText").text('Instructivo '+ $("#mallaEnfermdedad").val() +' 2022. ');
                agregarAHref();
                $("#linkResolucion").attr('href', "../Documentos/CANCER/resolucion_000247_de_2014_Cancer.pdf");
                $("#linkInstructivo").attr('href', "../Documentos/CANCER/220221_Versión%202_Instructivo%20cáncer%202022_Publicar.pdf");
                break;
            case 'ERC':
                $("#resulucionText").text('Resolucion 02463 de 2014 '+ $("#mallaEnfermdedad").val() +'. ');
                $("#instructivoText").text('Instructivo'+ $("#mallaEnfermdedad").val() +'. ');
                agregarAHref();
                $("#linkResolucion").attr('href', "../Documentos/ERC/Resolucion-02463-de-2014-ERC.pdf");
                $("#linkInstructivo").attr('href', "../Documentos/ERC/210713_ERC_Instructivo_V2.pdf");
                break;
            case 'Hemofilia':
                $("#resulucionText").text('Resolucion 0123 de 2015 '+ $("#mallaEnfermdedad").val() +'. ');
                $("#instructivoText").text('Instructivo'+ $("#mallaEnfermdedad").val() +' 2022. ');
                agregarAHref();
                $("#linkResolucion").attr('href', "../Documentos/HEMOFILIA/Resolucion-0123-de-2015-HEMOFILIA.pdf");
                $("#linkInstructivo").attr('href', "../Documentos/HEMOFILIA/220221_Instructivo_Hemofilia_2022_V2_Publicar.pdf");
                break;
            case 'VIH':
                $("#resulucionText").text('Resolucion 273 de 2019 '+ $("#mallaEnfermdedad").val() +'. ');
                $("#instructivoText").text('Instructivo '+ $("#mallaEnfermdedad").val() +' 2021. ');
                agregarAHref();
                $("#linkResolucion").attr('href', "../Documentos/VIH/Resolucion_273_2019_VIH.pdf");
                $("#linkInstructivo").attr('href', "../Documentos/VIH/220221_%20Instructivo%20Reporte%20VIH%202022%20V21.pdf");
                break;
        
            default:
                break;
        }
        // $("#linkResolucion").attr('href', if"https://saludmadreymujer.com/archivos/pdf/resolucion_000247_de_2014_Cancer.pdf");
    // }
    
});

function agregarAHref() {
    $("#resulucionText").append($('<a id="linkResolucion"target="_blank">Ver archivo </a>'));

    $("#instructivoText").append($('<a id="linkInstructivo"target="_blank">Ver archivo </a>'));
}

$('#archivo').on('change', function(){
    
    });