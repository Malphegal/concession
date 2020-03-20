$("document").ready(function(){

    // Lorsqu'on change la valeur de la cbo de Marque du header, on utilise AJAX pour remplir la cbo Modèle
    $("header #marqueselect").on("change", function(){
        $.get('index.php?action=fillModele',
        {
            marque_cbo: $(this).val()
        },
            function(data){
                // Chaque marque est dans une case du tableau
                data = data.split(",");
                
                // On vide les anciennes valeurs
                let cbo = $("#modeleselect");
                cbo.empty();
                let label = $(cbo).siblings("label");
                
                // Si on a aucune donnée, on rend transparent le label Modèle et la cbo
                if (data[0] == "")
                {
                    cbo.prop("disabled", "disabled");
                    label.addClass("disabledlabel");
                    label.text("Modèle : 0");
                }
                // Sinon on rempli la cbo, et on affiche le label Modèle complètement
                else
                {
                    label.removeClass("disabledlabel");
                    label.text("Modèle : " + data.length);
                    let res = "<option disabled selected value></option>";
                    for (i = 0; i < data.length; i++)
                        res += "<option value=\"" + data[i] + "\">" + data[i] + "</option>";
                    cbo.append(res);
                    cbo.prop("disabled", "");
                }
            }
        );
    }); // Fin Ajax marque

    $("header #modeleselect").on("change", function(){
        window.location.replace("index.php?action=vehiculesPerModele&id=" + $(this).val());
    });
})
